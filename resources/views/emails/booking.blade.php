<!DOCTYPE html>
<html>
<head>
    <title>New Booking</title>
</head>
<body>
    <h2>New Booking. Here is Information.</h2>
    <p>First Name: {{ $details['firstname'] }}</p>
    <p>Last Name: {{ $details['lastname'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Phone Number: {{ $details['phoneNumber'] }}</p>
    <p>Address: {{ $details['address'] }}</p>
    <p>Date: {{ $details['date'] }}</p>
    <p>Category: {{$details['categorySelect']}}</p>
    <p>Message: {{$details['message']}}</p>

    @if(isset($details['otherCategory']) && !empty($details['otherCategory']))
    <p>Other Category: {{ $details['otherCategory'] }}</p>
    @endif
</body>
</html>
