<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $category;
    protected $product;
    protected $productDetail;

    public function __construct(Product $product, Category $category, ProductDetail $productDetail)
    {
        $this->product = $product;
        $this->category = $category;
        $this->productDetail = $productDetail;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->product::latest('id')->paginate(5);

        return view('Admin.products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category->select('id', 'name')->get();

        return view('Admin.products.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        $dataCreate = $request->all();
       

        $product = Product::create($dataCreate);
        $dataCreate['image'] = $this->product->saveImage($request);

        $product->images()->create(['url' => $dataCreate['image']]);
        $product->categories()->attach($dataCreate['category_ids']);
        
        return to_route('products.index')->with(['message'=> 'Created Product Success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = $this->product->with(['details','categories'])->findOrFail($id);
        return view('Admin.products.show',['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = $this->product->with(['details','categories'])->findOrFail($id);
        $categories = $this->category->select('id', 'name')->get();

        return view('Admin.products.edit',['categories' => $categories,'product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,  $id)
    {
        $product = $this->product->findOrFail($id);
        $dataUpdate = $request->all();

        $currentImage = $product->images ? $product->images->first()->url : ''; 
        $dataUpdate['image'] = $this->product->updateImage($request, $currentImage);
        $product->update($dataUpdate);
       
        $product->update($dataUpdate);
        $product->images()->delete();
        $product->images()->create(['url' => $dataUpdate['image']]);
        $product->assignCategory($dataUpdate['category_ids']);
        
        return to_route('products.index')->with(['message'=> 'Update Product Success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->product->with(['details','categories'])->findOrFail($id);
        $product->delete();
        $imageName = $product->images->count() > 0 ? $product->images->first()->url : ''; 
        $this->product->deleteImage($imageName);
        return to_route('products.index')->with(['message'=> 'Deleted Product Success']);
    }
}
