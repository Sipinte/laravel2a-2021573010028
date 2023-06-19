<!-- resources/views/forgot-password.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            background-color: #ffffcc;
        }
    </style>
</head>
<body>
    <h2>Forgot Password</h2>

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit" style="background-color: #ffffcc;">Send Code</button>
    </form>
</body>
</html>
