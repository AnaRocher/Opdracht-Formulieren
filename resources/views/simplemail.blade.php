<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Website contact</h1>

    <p>Er is een nieuwe formulier inzending.</p>

    <ul>
        <li>Naam: {{ $data['naam'] }}</li>
        <li>E-mailadres: {{ $data['email'] }}</li>
        <li>Score: {{ $data['score'] }}</li>
        <li>Bericht: {{ $data['bericht'] }}</li>
        <li>Voorwaarden: {{ $data['voorwaarden'] }}</li>
    </ul>
</body>

</html>
