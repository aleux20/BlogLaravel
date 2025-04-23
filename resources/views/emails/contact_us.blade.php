<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1 {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>Email</h1>
    <p>This is the first email we sent through Laravel.</p>

    <p><strong>Name: </strong>{{ $data['name'] }}</p>
    <p><strong>Email: </strong>{{ $data['email'] }}</p>
    <p><strong>Message: </strong>{{ $data['message'] }}</p>
</body>

</html>
