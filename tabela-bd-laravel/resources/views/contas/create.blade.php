<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
    <style>

        h2 {
    color: blue;
    font-family: Arial, sans-serif;
    font-size: 24px;
    border: 2px solid black;
    padding: 10px;
    background-color: lightgray;
    text-shadow: 2px 2px 5px gray;
}

.container {
    text-align: center; /* Centraliza o conteúdo horizontalmente */
}

a {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    align-content: center;
    margin: auto;
}

a:hover {
    background-color: #45a049;
    align-content: center;
}

        body {
            background-color: #f0f0f0; /* Cinza claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #Listar{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        #Cadastrar{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;

        }

        
    </style>
</head>

<body>

    <form action="{{ route('conta.store')}}" method="POST">
        @csrf

        <div id="Listar">
        <a href="{{ route('conta.index')}}">Listar</a><br><br>
        </div>
        
        <h2>Cadastrar Conta</h2>

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome da conta" required><br><br>

        <label>Valor: </label>
        <input type="text" name="valor" id="valor" placeholder="Usar '.' separar real do centavo" required><br><br>

        <label>Vencimento: </label>
        <input type="date" name="vencimento" id="vencimento" required><br><br>

        <div id="Cadastrar">
        <button type="submit">Cadastrar</button>
        </div>

    </form>

</body>

</html>
