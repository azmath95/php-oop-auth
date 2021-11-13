<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php

require_once "core/init.php";

/* mengetes spl autoload
mengambil file di classses Database.php
$data = new Database(); */

// pengujian session logout
if($user->is_login()){
  Redirect::to('backend/index');
}

if(Session::exists('login')){
  echo Session::flash('login');
}

// untuk menampung error
$errors = array();

if( Input::get('submit') ){
  if( Token::check(Input::get('token'))){
// validasi :
// memanggil objek validasi
$validation = new Validation();

// metode check
$validation = $validation->check(array(
  'username' => array(
                'required' => true,
                'min'      => 3,
                'max'      => 50,
              ),
  'password' => array(
                'required' => true,
                'min'      => 3,
              )

));
if($validation->passed() ){
  // pengujian cek nama
  if($user->cek_nama(Input::get('username'))){
  if($user->login_user( Input::get('username'), Input::get('password') ) )
  {
    Session::set('username', Input::get('username'));
    Redirect::to('backend/index');
  }else{
    $errors[] = "Username or Password is not valid";
  }
}else{
  $errors[] = "Username or Password is not valid";
}

}else {
  // untuk mengisi errornya ke array
  $errors = $validation->errors() ;
    }
  }// end token
} // end submit

?>
<body>
   <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Health Watch</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>

    </div>
    </div>
</nav>
  <div class="container">
     <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="logo">
      <img src="images/logo.png" class="rounded mx-auto d-block" alt="..."></div>
      </div>
    <div class="col-4"></div>
  </div>
<div class="row justify-content-center">
 
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="login.php">
                                    <div class="mb-3">
                      <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Your Email">
                  </div>
                                    <div class="mb-3">
                      <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Your Password">
                  </div>
                   <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                   <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="submit" value="Login">Login</button>
                     <?php if(!empty($errors)){ ?>
    <div class="error">
      <?php foreach ($errors as $error) { ?>
        <!-- sweetalert -->
        <body onload='swal({title: "Login Unsucessfull !",
                                text: "<b><?php echo $error;?></b>",
                                timer: 3000,
                                type: "error",
                                html: true,
                                showConfirmButton: false });'>
    <?php  } ?>
    </div>
  <?php } ?>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>