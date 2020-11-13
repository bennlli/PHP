<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="http://localhost:8081/VSCODE_git/PHP/MVC/got/actores.php"><h2>Listado de actores</h2></a>
<a href="http://localhost:8081/VSCODE_git/PHP/MVC/got/actoresTemp.php"><h2>Listado de actores por temporada</h2></a>
<hr>
<form action="actoresForm.php" method="POST">
    <label for="EP">Elige el episodio deseado<br><br></label>
        <select name="EP" id="EP">
            <option value="1">Episodio 1</option>
            <option value="2">Episodio 2</option>
            <option value="3">Episodio 3</option>
            <option value="4">Episodio 4</option>
            <option value="5">Episodio 5</option>
            <option value="6">Episodio 6</option>
            <option value="7">Episodio 7</option>
            <option value="8">Episodio 8</option>
            <option value="9">Episodio 9</option>
            <option value="10">Episodio 10</option>
        </select>
        <input type="submit" value="Enviar">
</form>


</body>
</html>