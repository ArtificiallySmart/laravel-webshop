@extends('layouts.adminLayout')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Zipcode</th>
                    <th scope="col">City</th>
                    <th scope="col">Phone number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allUsers as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="/admin/users/{{$user->id}}"> {{ $user->first_name }} {{ $user->last_name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address->street ?? '' }} {{ $user->address->house_number ?? '' }}</td>
                    <td>{{ $user->address->zipcode ?? ''}}</td>
                    <td>{{ $user->address->city ?? ''}}</td>
                    <td>{{ $user->phoneNumber->phone_number ?? ''}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $allUsers->links() }}
    </div>
</main>
@endsection