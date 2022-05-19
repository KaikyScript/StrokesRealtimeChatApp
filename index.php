<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Strokes Realtime</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Primeiro Nome</label>
            <input type="text" name="fname" placeholder="Primeiro nome" required>
          </div>
          <div class="field input">
            <label>Último Nome</label>
            <input type="text" name="lname" placeholder="Último nome" required>
          </div>
        </div>
        <div class="field input">
          <label>Endereço E-mail</label>
          <input type="text" name="email" placeholder="Coloque o seu e-mail" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Escolha a sua senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecionar Imagem de perfil</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuar para o StrokesChat">
        </div>
      </form>
      <div class="link">Já é cadastrado? <a href="login.php">Entre na sua conta</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
