@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 bg-yellow">
            <ul class="list-group">
                <li class="list-group-item">Dashboard</li>
                <li class="list-group-item">Books</li>
                <li class="list-group-item">Categories</li>
                <li class="list-group-item">Authors</li>
                <li class="list-group-item">Users</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="jumbotron jumbotron-fluid bg-light">
                <div class="container text-center">
                    <h1 class="display-4">Welcome to Library System</h1>
                    <p class="lead">Explore a vast collection of books and enhance your reading experience.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Authentication Log</div>
                <div class="card-body">
                    @if (!empty($users))
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">IP Address</th>
                                <th scope="col">Location</th>
                                <th scope="col">Login at</th>
                                <th scope="col">Login Successfully</th>
                                <th scope="col">Logout at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $item)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $item['ip_address'] }}</td>
                                <td>{{ $item->location['city'] }}</td>
                                <td>{{ Carbon\Carbon::parse($item['login_at'])->isoFormat('D MMMM YYYY h:mm A') }}</td>
                                <td>{{ $item['login_successful']  === true ? 'Yes' : 'No' }}</td>
                                <td>{{ $item['logout_at'] === NULL ? '-' : Carbon\Carbon::parse($item->logout_at)->isoFormat('D MMMM YYYY h:mm A') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>No authentication log found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-yellow {
    background-color: yellow;
}

.jumbotron {
    background-color: #f9f9f9;
}

.jumbotron h1 {
    color: brown;
}

.jumbotron .lead {
    color: #666;
}

.btn-primary {
    background-color: brown;
    border-color: brown;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}
</style>
@endsection