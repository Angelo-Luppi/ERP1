<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    <h1>Fornecedor</h1>
    <ul>
        @foreach($fonecedores as $fornecedor)
        <li>{{ $fornecedor->nome_fornecedores}}</li>
        <br>
        @endforeach
    </ul>
   
</body>
</html>
