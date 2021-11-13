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
                <a class="nav-link" href="index.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="regsister.php">Register</a>
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
                                <form class="form-horizontal" method="post" action="#">
                                    <div class="mb-3">
										  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
									</div>
                                    <div class="mb-3">
										  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Your Password">
									</div>
									 <div class="col-auto">
										    <button type="submit" class="btn btn-primary mb-3">Login</button>
										  </div>
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