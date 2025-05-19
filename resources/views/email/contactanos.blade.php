<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Correo electrónico</h1>
    <p>Mi correo desde Laravel</p>

    <p>{{ $contacto['name'] }}</p>
    <p>{{ $contacto['correo'] }}</p>
    <p>{{ $contacto['mensaje'] }}</p>

</body>

</html>
