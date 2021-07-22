<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            height: 100ch;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://cdn.pixabay.com/photo/2019/06/29/11/02/hot-4306006_1280.jpg);
        }
        form {
            height: 100px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            background-color: #bbb;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="celcius.php" method="POST">
        <h1>Digite a temperatura em Fahrenheit para descobrir em Celcius</h1>
        <input type="number" name="F">
        <button type="submit">Calcular</button>
    </form>
    
</body>
</html>