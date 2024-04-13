<?php
function loadContacts()
{
    return json_decode(file_get_contents('dev/contacts.json'), true);
}

function saveContacts($contacts)
{
    if (is_array($contacts)) file_put_contents('dev/contacts.json', json_encode($contacts, JSON_PRETTY_PRINT));
    else exit("Save error!");
}

function existingContacts($contacts, $phone)
{
    foreach ($contacts as $contact) {
        if ($contact['phone'] == $phone) {
            exit('этот телефон номер уже существует');
        }
        return true;
    }
}

