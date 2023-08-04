@extends('Admin.Layout.index')
@section('title','Orders')
@section('content')
    <main>
        @if (session('message'))
        <div>
         <h1 class="text-primary"> {{ session('message') }}</h1>  
        </div>
    @endif
    <h1>Order list</h1>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Ship</th>
                    <th>Customer name</th>
                    <th>Customer email</th>
                    <th>Customer address</th>
                    <th>Note</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>

                    <td>
                        <select name="status" class="form-control select-status"
                            data-action="{{ route('admin.orders.update_status', $item->id) }}">
                                @foreach (config('order.status') as $status)
                                    <option value="{{ $status }}"
                                    {{ $status == $item->status ? 'selected' : ''}}>{{ $status }}
                                </option>
                             @endforeach   
                            
                        </select>
                      
                    </td>

                    <td>{{ $item->total }}</td>
                    <td>{{ $item->ship }}</td>
                    <td>{{ $item->customer_name }}</td>
                    <td>{{ $item->customer_email }}</td>
                    <td>{{ $item->customer_address }}</td>
                    <td>{{ $item->note }}</td>
                    <td>{{ $item->payment }}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    </main>
@endsection

@section('script')
    <script>
        $(function () {
    $(document).on("change", ".select-status", function (e) {
        e.preventDefault();
        let url = $(this).data("action");
        let data = {
            status: $(this).val(),
        };

        $.post(url, data, (res) => {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "success",
                showConfirmButton: false,
                timer: 1500,
            });
        });
    });
});

    </script>
@endsection