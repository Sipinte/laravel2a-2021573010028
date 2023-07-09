@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">History</div>
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
                                <th>Title</th>
                                <th>Author</th>
                                <th>Borrow Date</th>
                                <th>Return Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrowings as $borrowing)
                            <tr>
                                <td>{{ $borrowing->book->title }}</td>
                                <td>{{ $borrowing->book->author }}</td>
                                <td>{{ $borrowing->borrowed_at }}</td>
                                <td>{{ $borrowing->returned_at }}</td>
                                <td>
                                    @if ($borrowing->returned_at === null)
                                    <form action="{{ route('books.return', $borrowing->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Kembalikan Buku</button>
                                    </form>
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