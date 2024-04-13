<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефонный справочник</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .contact {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .contact button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Телефонный справочник</h1>

    <!-- Форма для добавления контакта -->
    <form action="add_contact.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit">Добавить</button>
    </form>

    <hr>

    <!-- Список контактов -->
    <h2>Список контактов</h2>
    <?php include 'show_contacts.php'; ?>
</div>
</body>
</html>
