
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <a href=" {{ url('/home') }} "><li>HOME</li></a>
            <a href=" {{ url('/listar-pedidos') }} "><li>LISTAR PEDIDOS</li></a>
            <a href=" {{ url('/listar-produtos') }} "><li> LISTAR PRODUTOS</li></a>
</ul>
    </div>
    <h1>Minha Página Inicial - Listar Pedidos</h1>
    <h2>Lista de Produtos:</h2>
    <form action=" {{ url('store') }} " method="POST" enctype="multipart/form-data">
        <input type="text">
        <input type="submit" class="">
    </form>
    <ul>
        {{-- Esse aqui pe que é o Blade --}}
        <li> {{ $aluno1 }} </li>
        <li> {{ $aluno2 }} </li>
        <li> {{ $aluno3 }} </li>
        <li> {{ $aluno4 }} </li>
    </ul> 


</body>
</html>