@extends("layouts.main")
@push('title')
    <title>Customers List</title>
@endpush

@section("main-section")
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>@lang("lang.customer")</h2>
            </div>
            <div class="col-md-6">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" value="{{ $search }}" name="search" id="" class="form-control" placeholder="Search Text Here" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class='btn btn-info'>Search</button>
                            <a href="{{url('customer/view')}}"><button type="button" class='btn btn-danger'>Reset</button></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <a href="{{route("customer.trash")}}"><button class="btn btn-info">Trash List</button></a>
            </div>
        </div>
    </div>
    
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
    <div class="row">
        <div class="col-md-12">
            {{ $customers->links() }}
        </div>
    </div>
@endsection
