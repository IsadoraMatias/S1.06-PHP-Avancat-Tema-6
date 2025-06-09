<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulari HTML</title>
</head>

<body>
    <form action="./php/form.php" method="GET">
        <ul>
            <li>
                <label for="name">Nombre</label>
                <input type="text" id="name" name="username" placeholder="Nombre de usuario">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
            </li>
            <li>
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Edad">
            </li>
        </ul>
        <button type="submit" name="send">Enviar</button>
    </form>
</body>

</html>