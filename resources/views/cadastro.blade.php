<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Página de cadastro</title>
</head>
<body>
<div class="container">
        <h1>Cadastro de Livros</h1>
        <br>
        <form action="/save" method="post">
        {{ csrf_field() }}
       
       <div class="form-group">
        <label for="nome">Nome do Livro</label>
        <input class="form-control" type="text" id="nome" name="nome">
       </div>
       
       <div class="form-group">
    
        <label for="autor">Autor(a)</label>
        <input class="form-control" type="text" id="autor" name="autor">
        </div>
    
        <div class="form-group">
            <label for="editora">Editora</label>
            <input class="form-control" type="text" id="editora" name="editora">
        </div>
        
        <div class="form-group">
    
        <label for="descricao">Descrição</label>
        <input class="form-control" type="text" id="descricao" name="descricao">
        </div>

        <button class="btn btn-primary">Enviar</button>

        <a href='/' class="btn btn-primary" >Lista</a>
    </form>
</div>

<br>

<div class="container">

    @if(session('message') == '')

    @else 
        <p class="alert alert-success">{{session('message')}}</p>
    @endif
</div>
    
</body>
</html>