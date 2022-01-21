<?php

// Стартуем сессию
if (session_id() == '') {
    session_start();
}


// Выбираем и подключаем нужный шаблон
$template = 'main';
include_once "./$template.html";

?>