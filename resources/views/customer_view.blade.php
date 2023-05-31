@extends("layouts.main")
@push('title')
    <title>Customer List</title>
@endpush

@section("main-section")
    <a href="{{route("customer.trash")}}"><button class="btn btn-info">Trash List</button></a>
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
                        <a href="{{ route('customer.delete', ['id' => $customer->id ]) }}"><button class="btn btn-danger">Trash</button></a>
                        <a href="{{ route('customer.edit', ['id' => $customer->id ]) }}"><button class="btn btn-info">Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
