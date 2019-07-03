<?php
	if (isset($_SESSION['is_login'])) {
		header('Location: ' . BASEURL . '/home');
		exit();
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="http://localhost/code/public/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<style>
body {
}
</style>
<body>
    <div class="container mt-4">
      <div class="jumbotron col-lg-6 mx-auto">
                  <div class="col-lg">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Page</h1>  
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo BASEURL; ?>/login/submit" method="post" role="form">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Your Username " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  name="password" placeholder="Your Password" />
                                        </div>
                                     <button class="btn btn-primary " type="submit">Login Now</button>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
    </div>
  </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
