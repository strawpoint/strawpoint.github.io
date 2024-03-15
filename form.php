<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['text'];

$grabar = fopen("com.html","a");
fwrite ($grabar.""<p>$comentario</p>);
fclose($grabar);

include("blog.html");





?>