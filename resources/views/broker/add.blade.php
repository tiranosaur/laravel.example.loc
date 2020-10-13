<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add broker</title>
</head>
<body>
<h1>Add broker page</h1>
<form action="/broker/store" method="post" id="store_broker">
    @csrf
    <p><label for="name">broker name</label> <input type="text" id="name" name="name"></p>
    <p><label for="link_name">broker link_name</label> <input type="text" id="link_name" name="link_name"></p>
    <br>
    <h2>text ru</h2>
    <hr>

    <hr>
    <br>
    <p><label for="is_agreed">broker is_agreed</label> <input type="text" id="is_agreed" name="is_agreed" value="1"></p>
    <p><label for="url_ru">broker url_ru</label><input type="text" id="url_ru" name="url_ru"></p>
    <p><label for="url_en">broker url_en</label><input type="text" id="url_en" name="url_en"></p>
    <p><label for="language_id">broker language_id</label><input type="text" id="language_id" name="language_id"
                                                                 value="2"></p>
    <p><label for="img">broker img</label><input type="file" id="img" name="img"></p>
    <br>
    <h2>text en</h2>
    <hr>

    <hr>
    <br>
    <p><label for="order_">broker order_</label><input type="text" id="order_" name="order_" value="0"></p>
    <p><label for="broker_type_str">broker broker_type_str</label><input type="text" id="broker_type_str" name="broker_type_str" value=""></p>
    <p><label for="vote_for">broker vote_for</label><input type="text" id="vote_for" name="vote_for" value="0"></p>
    <p><label for="vote_against">broker vote_against</label><input type="text" id="vote_against" name="vote_against" value="0"></p>
    <p><label for="vote_history">broker vote_history</label><input type="text" id="vote_history" name="vote_history" value="0"></p>
    <p><label for="point_about_history">broker point_about_history</label><input type="text" id="point_about_history" name="point_about_history" value="50"></p>
    <p><label for="comment_pre_moder">broker comment_pre_moder</label><input type="text" id="comment_pre_moder" name="comment_pre_moder" value="0"></p>
    <p><label for="active">broker active</label><input type="text" id="active" name="active" value="1"></p>
    <input type="submit">
</form>
</body>
</html>
