<?php
include "dev/functions.php";
// Получение ключа контакта для удаления
$key = $_POST['key'];

// Загрузка текущих контактов из файла JSON
$contacts = loadContacts();

// Удаление контакта по ключу
unset($contacts[$key]);

// Перенумерация ключей массива
$contacts = array_values($contacts);

// Сохранение обновленных контактов в файл JSON
saveContacts($contacts);

// Перенаправление на главную страницу
header('Location: index.php');
exit();
