<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Conrtact Us Any Time</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <input type="email" name="email" placeholder="Enter Your Email"><br>
        <textarea name="message" id="" rows="5"></textarea><br>
        <button type="submit">Send</button>
    </form>
</body>
</html>
