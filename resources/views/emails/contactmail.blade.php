<!DOCTYPE html>
<html>
<head>
    <title>New Mail From Costumer</title>
</head>
<body>
    <h2>Here is Information.</h2>
    <p>Fullname: {{ $news['fullname'] }}</p>
    <p>Email: {{ $news['email'] }}</p>
    <p>Phone Number: {{ $news['phoneNumber'] }}</p>
    <p>Message: {{$news['message']}}</p>
</body>
</html>
