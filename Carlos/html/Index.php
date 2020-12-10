<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
</head>

<body>
    <form name = "list_contato" method="POST" action="./Adiciona-contato">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
        <h1>Lista de contatos</h1>
    
        <label for="exampleFormControlInput1">Digite os dados da pessoa a ser adicionada: </label>
    
        <div class="form-row">
              <div class="col">
                <input type="text" name = "firstName" class="form-control" placeholder="Nome">
              </div>
              <div class="col">
                <input type="text" name= "numberPhone" class="form-control" placeholder="Numero">
              </div>
              <div class="col">
                <input type="text" name= "nickName" class="form-control" placeholder="Apelido">
              </div>
        </div> 
    
        <br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email da pessoa a ser adicionada: </label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    
        <div class="form-group">
          <label  for="exampleFormControlTextarea1">Lista de contatos</label>
          <textarea class="form-control" name = "contactList" id="exampleFormControlTextarea1" rows="3">
            <?php ?>
          </textarea>
        </div>
        
        <button type="submit" class="btn btn-primary btn-lg">Adicionar contato</button>
        <button type="reset" class="btn btn-secondary btn-lg">Limpar</button>
      </form>
</body>
</html>
