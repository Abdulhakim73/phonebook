<?php
include "dev/functions.php";

// Получение данных из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Загрузка текущих контактов из файла JSON
$contacts = loadContacts();
existingContacts($contacts, $phone);

// validation
if (!empty($name) && preg_match("/^[\p{L} ]+$/u", $name)) {
} else {
    exit("Неверный формат имени. Пожалуйста, введите верное имя.");
}
if (!empty($phone) && preg_match("/^\+[0-9]{1,}$/", $phone)) {
} else {
    exit ("Неверный формат номера телефона. Пожалуйста, введите номер телефона, начинающийся со знака плюс (+).");
}


$contacts[] = array('name' => $name, 'phone' => $phone);

// Сохранение обновленных контактов в файл JSON
saveContacts($contacts);

// Перенаправление на главную страницу
header('Location: index.php');
exit();

