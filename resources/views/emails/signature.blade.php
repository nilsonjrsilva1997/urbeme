<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assinar Documento</title>
</head>
<body>
    <p>
        {{ ($data['data']['list']['message']) }}
    </p>
     <a href="{{ ($data['data']['list']['url']) }}">{{ ($data['data']['list']['url']) }}</a>
</body>
</html>