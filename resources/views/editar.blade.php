<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <div class="container">
        
            <h1>Atualize as informações do Livro!</h1>
            <br>
            <form action="/update" method="post">
            {{ csrf_field() }}

        <input type="hidden" name="id" value="{{$dados->id}}">

        <div class="form-group">
        <label for="nome">Descrição do Livro</label>
        <input class="form-control" value="{{ $dados->descricao }}" type="text" id="nome" name="descricao">
        </div>
       
     
        <button class="btn btn-primary">Atualizar</button>
    </form>
        
         
    </div>

    
</body>
</html>