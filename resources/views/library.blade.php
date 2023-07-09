@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                <form action="#" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search books..." name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->genre }}</td>
                                <td>{{ $book->description }}</td>
                                <td><img src="{{ $book->image }}" alt="Book Image" style="width: 100px;"></td>

                                <td>
                                    @if ($book->available)
                                    <p>Available</p>
                                    @else
                                    <p>Not Available</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($book->available)
                                    <form action="{{ route('borrow', $book->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Borrow</button>
                                    </form>
                                    @else
                                    <button class="btn btn-secondary" disabled>Borrow</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
