<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $subject }}</title>
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
            color: #ee724b;
        }

        p {
            margin-bottom: 15px;
        }

        a {
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Parola Sıfırlama</h2>
        <p>Merhaba,</p>
        <p>Parolanızı sıfırlamak için aşağıdaki bağlantıya tıklayın:</p>
        <p><a href="{{ route('admin_reset_password',$token) }}">Parolayı Sıfırla</a></p>
        <p>Parola sıfırlama talebinde bulunmadıysanız, bu e-postayı dikkate almayabilirsiniz.</p>
        <p>İyi günler!</p>
    </div>
</body>

</html>
