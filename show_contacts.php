<?php
include "dev/functions.php";
// Загрузка контактов из файла JSON
$contacts  = loadContacts();

// Отображение контактов
foreach ($contacts as $key => $contact) {
    echo "<div class='contact'>{$contact['name']} - {$contact['phone']} 
            <form action='delete_contact.php' method='post' style='display:inline;'>
                <input type='hidden' name='key' value='{$key}'>
                <button type='submit'>Удалить</button>
            </form>
          </div>";
}

