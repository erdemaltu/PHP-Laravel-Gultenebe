<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Parola Sıfırlama</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #3498db;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #ee724b;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d35400;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Parola Sıfırlama</h2>
        <form action="{{ route('admin_reset_password_post') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email">E-Posta Adresiniz:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Yeni Parolanız:</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Yeni Parolanızı Onaylayın:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Parolayı Sıfırla</button>
        </form>
    </div>
</body>

</html>
