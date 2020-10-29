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
<xmp> (^[^a-zA-Z0-9]*)(\S*)([\s]*$)    =>         <li>$2</li></xmp>
<ul>
    <li>0 - общие брокеры</li>
    <li>1 - mt_brokers</li>
    <li>2 - cfd_gold_brokers</li>
    <li>3 - ecn_brokers</li>
    <li>4 - oil_brokers</li>
    <li>5 - institutional_brokers</li>
    <li>6 - swap_brokers</li>
</ul>
<form action="/broker/store" method="post" id="store_broker" enctype="multipart/form-data">
    @csrf
    <p><label for="name">broker name</label> <input type="text" id="name" name="name"></p>
    <p><label for="link_name">broker link_name</label> <input type="text" id="link_name" name="link_name"></p>
    <p><label for="is_agreed">broker is_agreed</label> <input type="text" id="is_agreed" name="is_agreed" value="1"></p>
    <p><label for="url_ru">broker url_ru</label><input type="text" id="url_ru" name="url_ru"></p>
    <p><label for="url_en">broker url_en</label><input type="text" id="url_en" name="url_en"></p>
    <p><label for="language_id">broker language_id</label><input type="text" id="language_id" name="language_id" value="2"></p>
    <p><label for="img">broker img</label><input type="file" id="img" name="img"></p>
    <p><label for="img_thumb">broker img_thumb</label><input type="file" id="img_thumb" name="img_thumb"></p>
    <p><label for="order_">broker order_</label><input type="text" id="order_" name="order_" value="0"></p>
    <p><label for="broker_type_str">broker broker_type_str</label><input type="text" id="broker_type_str" name="broker_type_str" value="0,1,2,3,4"></p>
    <p><label for="vote_for">broker vote_for</label><input type="text" id="vote_for" name="vote_for" value="0"></p>
    <p><label for="vote_against">broker vote_against</label><input type="text" id="vote_against" name="vote_against" value="0"></p>
    <p><label for="vote_history">broker vote_history</label><input type="text" id="vote_history" name="vote_history" value="0"></p>
    <p><label for="point_about_history">broker point_about_history</label><input type="text" id="point_about_history" name="point_about_history" value="50"></p>
    <p><label for="comment_pre_moder">broker comment_pre_moder</label><input type="text" id="comment_pre_moder" name="comment_pre_moder" value="0"></p>
    <p><label for="active">broker active</label><input type="text" id="active" name="active" value="1"></p>

    <br>
    <hr>
    <h2>text en</h2>
    <p><label for="json_en_start">json_en_start</label> <input type="text" id="json_en_start" name="json_en_start"></p>
    <p><label for="json_en_country">json_en_country</label> <input type="text" id="json_en_country" name="json_en_country"></p>
    <p><label for="json_en_manage">json_en_manage</label> <input type="text" id="json_en_manage" name="json_en_manage"></p>
    <p><label for="json_en_pay">json_en_pay</label> <input type="text" id="json_en_pay" name="json_en_pay"></p>
    <p><label for="json_en_min_account">json_en_min_account</label> <input type="text" id="json_en_min_account" name="json_en_min_account"></p>
    <p><label for="json_en_min_lot">json_en_min_lot</label> <input type="text" id="json_en_min_lot" name="json_en_min_lot"></p>
    <p><label for="json_en_leverage">json_en_leverage</label> <input type="text" id="json_en_leverage" name="json_en_leverage"></p>
    <p><label for="json_en_spreads">json_en_spreads</label> <input type="text" id="json_en_spreads" name="json_en_spreads"></p>
    <p><label for="json_en_text">json_en_text</label> <input type="text" id="json_en_text" name="json_en_text"></p>
    <br>
    <hr>
    <h2>text ru</h2>
    <p><label for="json_ru_start">json_ru_start</label> <input type="text" id="json_ru_start" name="json_ru_start"></p>
    <p><label for="json_ru_country">json_ru_country</label> <input type="text" id="json_ru_country" name="json_ru_country"></p>
    <p><label for="json_ru_manage">json_ru_manage</label> <input type="text" id="json_ru_manage" name="json_ru_manage"></p>
    <p><label for="json_ru_pay">json_ru_pay</label> <input type="text" id="json_ru_pay" name="json_ru_pay"></p>
    <p><label for="json_ru_min_account">json_ru_min_account</label> <input type="text" id="json_ru_min_account" name="json_ru_min_account"></p>
    <p><label for="json_ru_min_lot">json_ru_min_lot</label> <input type="text" id="json_ru_min_lot" name="json_ru_min_lot"></p>
    <p><label for="json_ru_leverage">json_ru_leverage</label> <input type="text" id="json_ru_leverage" name="json_ru_leverage"></p>
    <p><label for="json_ru_spreads">json_ru_spreads</label> <input type="text" id="json_ru_spreads" name="json_ru_spreads"></p>
    <p><label for="json_ru_text">json_ru_text</label> <input type="text" id="json_ru_text" name="json_ru_text"></p>
    <hr>
    <br>
    <input type="submit">
</form>
</body>
</html>
