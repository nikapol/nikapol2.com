<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>Добавить новость</h1>
    <form method="post" action="/admin"> 
        <input type="date" name="data" placeholder="Дата"/><br>
        <input type="text" size="50"name="title" placeholder="Заголовок"/><br>        
        <textarea name="text" rows="10" cols="75"></textarea><br>
        <input type="submit" value="Добавить"/>
</body>
<html>