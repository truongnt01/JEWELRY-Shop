<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        //
        $categories = $this->category::latest('id')->paginate(7);
        return view('Admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentCategories = $this->category->getParents();
       
        return view('Admin.categories.create', ['data' => $parentCategories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $dataCreate = $request->all();

        $category = $this->category->create($dataCreate);

        return to_route('categories.index')->with(['message' => 'Create Category'.$category->name .'Success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = $this->category->with('children')->findOrFail($id);
        $parentCategories = $this->category->getParents();
        return view('Admin.categories.edit', ['data' => $category, 'parentCategories' => $parentCategories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dataUpdate = $request->all();

        $category = $this->category->findOrFail($id);

        $category->update($dataUpdate);

        return to_route('categories.index')->with(['message' => 'Update Category '.$category->name .' Success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = $this->category->findOrFail($id);

        $category->delete();

        return to_route('categories.index')->with(['message' => 'Delete Category'.$category->name .'Success']);
    }
}
