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
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Página de cadastro</h1>

    <form action="/salva" method="post">
        {{ csrf_field() }}
       
       <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nome" name="nome">
       </div>
       
       <div class="form-group">
    
        <label for="idade">Idade</label>
        <input class="form-control" type="text" id="idade" name="idade">
        </div>
    
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" id="email" name="email">
        </div>
        
        <div class="form-group">
    
        <label for="nascimento">Data de nascimento</label>
        <input class="form-control" type="date" id="nascimento" name="nascimento">
        </div>

        <button class="btn btn-primary">Enviar</button>
    </form>
            
            </div>
        </div>
    </div>

    
</body>
</html>