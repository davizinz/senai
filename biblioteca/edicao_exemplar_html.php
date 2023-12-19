<?php

include_once("conexao.php");
include_once("cabecalho.php");
include_once("verifica_usuario_logado.php");
// vcs não chamaram o arquivo de validação 
include_once("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

body {
    font-family: Arial, sans-serif;
    background-color: #86ab71;
    
  }
  
  .container {
    width: 300px;
    margin: 0 auto;
    margin-top: 165px;
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 2px 40px rgba(0, 0, 0, 0.9);
  }
  
  h2 {
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  
  .form-group input {
    width: 94%;
    padding: 7px;
    border-radius: 3px;
    border: 1px solid #ccc;
  }
  
  .form-group button {
    width: 100%;
    padding: 7px;
    border-radius: 3px;
    border: none;
    background-color: #e1a900;
    color: white;
    cursor: pointer;
  }
  
  .form-group button:hover {
    background-color: #030303;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Edição Exemplar</h2><br>
    <form action="edicao_exemplar.php" method="POST">
      <div class="form-group">
      <label>Novo numero do Exemplar:</label>
      <input type="text" id="numero_exemplar" name="numero_exemplar" placeholder="Digite aqui o novo numero" required style="width: 260px;">
      <br><br>

      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Exemplar</label>
        <select name="idexemplar_livro" id="idexemplar_livro" class="form-select">
        <option>Selecione o exemplar</option>
          <?php
            $result_exemplar = "SELECT * FROM exemplar_livro";
            $resultado_exemplar = mysqli_query($conn, $result_exemplar);
            while($row_exemplar = mysqli_fetch_assoc($resultado_exemplar)){ ?>
              <option value="<?php echo $row_exemplar['idexemplar_livro']; ?>"><?php echo $row_exemplar['numero_exemplar']; ?>
              </option> 
              <?php
            }
          ?>
        <option>...</option>
        </select>
      </div>

      <div class="form-group">
        <button type="submit" name="submit" id="submit">Editar</button>
      </div>
      <hr>
      <a role="button" class="btn btn-danger" href="edicao.php"> ⇦ Voltar</a><br>
    </form>
  </div>
</body>
</html>