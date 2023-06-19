@extends('layouts.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Library</div>
            <div class="card-body">
                <form action="#" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search books..." name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>The Great Gatsby</td>
                            <td>F. Scott Fitzgerald</td>
                            <td>Classic</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>To Kill a Mockingbird</td>
                            <td>Harper Lee</td>
                            <td>Novel</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1984</td>
                            <td>George Orwell</td>
                            <td>Dystopian</td>
                        </tr>
                        <!-- Tambahkan data buku secara dinamis menggunakan loop -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection