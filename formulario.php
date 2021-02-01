<?php include("cabecalho.php");?>

    <form class ="box" action="processa.php" method="post">
      <div class="field">
        <label class="label">Digite o id ou nome (em inglês) do pokemon</label>
        <div class="control">
          <input class="input" style="width: 500px;" type="text" name="complemento" placeholder="ex. 1 ou bulbasaur">
        </div>
      </div>
      <button class="button is-primary">Pesquisar</button>
    </form> 

  </body>
</html>
