<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <div id="main" class="d-flex">
        <div class="bgimg"><a href="index.php"><img src="assets/img/back.svg" alt=""></a></div>
        <div id="form-container" class="container-fluid">
            <form id="login" class="pb-md-5 mb-md-3" action="login.php" method="post">
                <div class="form-group">
                    <h2>Faça login para continuar</h2>

                    <label for="exampleInputEmail1">E-mail</label> 
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="who">
                  </div>
                  <div class="form-group" style="margin-bottom: 8px;">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="pass"> 
                  </div>
                  <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Manter logado</label>
                  </div>
                  <button type="submit" id="btn" class="btn btn-primary btn-lg btn-block" style="width: 380px;" name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>