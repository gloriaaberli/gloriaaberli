<!DOCTYPE html>
<html>
<head>
    <title>Scegli Categoria - InspireDaily</title>
</head>
<body>
    <h2>Scegli la Categoria di Frasi</h2>
    <form action="mostra_frase.php" method="get">
        Categoria:
        <select name="categoria" required>
            <option value="lavoro">Lavoro</option>
            <option value="vita">Vita</option>
            <option value="amore">Amore</option>
            <option value="sport">Sport</option>
            <option value="famiglia">Famiglia</option>
        </select>
        <br>
        <input type="submit" value="Mostra Frase">
    </form>
</body>
</html>
