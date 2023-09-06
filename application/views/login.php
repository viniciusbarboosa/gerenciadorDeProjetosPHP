<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>TELA DE LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?= base_url() ?>public/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
  </head>

  <body>
    <div class="container">

    <form class="form-signin" action="<?= base_url() ?>login/logar" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">Project Go</h1>
        <p>Bem Vindo ao Sistema de Gerenciamentos de Projeto caso não tenha um usuario entre em contato <a href="mailto:vindzn88@gmail.com?subject=Assunto%20do%20E-mail&body=Conteúdo%20do%20e-mail">Conosco</a></p></p>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Nome Usuário" required autofocus>
        <label for="inputName">Nome Usuário</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
        <label for="inputPassword">Senha</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; ProjectGo</p>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

    <?php
  // Verifica se a flashdata "falhaLogin" está definida e não está vazia
  if ($this->session->flashdata('login_error')) { ?>
    <script>
      // Emitindo o SweetAlert para informar que as credenciais de login são inválidas
      Swal.fire({
        icon: "error",
        title: "Credenciais inválidas",
        text: " <?= $this->session->flashdata('login_error') ?>"
      });
    </script>;
    
    <?php
  }
  ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
