<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/uploadFile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="fileToUpload">
    <input type="submit">
</form>
@if($image)
    <img src="{{ $image }}" alt="">
@endif
</body>
</html>
