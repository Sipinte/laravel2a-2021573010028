<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <style>
    body {
        background-color: #ffffcc;
    }

    .sidebar {
        background-color: #ffffcc;
        width: 200px;
        float: left;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li a {
        display: block;
        padding: 10px;
        color: #000000;
        text-decoration: none;
    }

    .sidebar li a:hover {
        background-color: #ffffff;
    }

    .content {
        margin-left: 220px;
        padding: 20px;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="#" style="background-color: #ffffff; color: #000000;">Profile</a></li>
            <li><a href="#" style="background-color: #ffffff; color: #000000;">Wish List</a></li>
            <li><a href="#" style="background-color: #ffffff; color: #000000;">Histori peminjaman</a></li>
            <li><a href="#" style="background-color: #ffffff; color: #000000;">Settings</a></li>
            <li><a href="{{ route('logout') }}" style="background-color: #ffffff; color: #000000;">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <h2>Welcome to the Home Page!</h2>
        <!-- Konten lainnya -->
    </div>
</body>

</html>
