@extends("layouts.main")
@push('title')
    <title>Customer Trash List</title>
@endpush

@section("main-section")
    <a href="{{route("customer.view")}}"><button class="btn btn-info">Customers List</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($customers as $customer)
                <tr>
                    <td scope="row">{{ $customer->name }}</td>
                    <td>{{ $customer->mobile }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        @if($customer->status==1)
                            <a href="#"><span class='badge badge-success'>Active</span></a>
                        @else
                            <a href="#"><span class='badge badge-danger'>Inactive</span></a>
                        @endif    
                    </td>
                    <td>
                        <a href="{{ route('customer.delete', ['id' => $customer->id ]) }}"><button class="btn btn-danger">Delete</button></a>
                        <a href="{{ route('customer.restore', ['id' => $customer->id ]) }}"><button class="btn btn-info">Restore</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
