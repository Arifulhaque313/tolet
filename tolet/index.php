<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Let.Find Your Own House</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="loginRegister.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">LO-LET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
          <ul class="navbar-nav justify-content-center  ">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Login/Register</a>
              </li>
           
          </ul>
          
        </div>
      </nav>
      <section>
          <div class="loginSection container bg-light justify-content-center">
              <div class="btnContainer">
                <button id="loginButton" class="btn btn-primary btn-lg">Login</button><button id="RegistrationButton" class="btn btn-success btn-lg">Register</button>
              </div>
                <div class="login ">
                    <form id="login" method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Submit</button>
                      </form>

                      <?php
			                      	session_start();
				                      if(isset($_POST['login'])){
				                    	$connection = mysqli_connect("localhost","root","");
				                    	$db = mysqli_select_db($connection,"tolet");
				                    	$query = "select * from users where email = '$_POST[email]'";
				                    	$query_run = mysqli_query($connection,$query);
				                    
                              while($row = mysqli_fetch_assoc($query_run)){
					                    	if($row['email'] == $_POST['email']){
							                    if($row['password'] == $_POST['password']){
								                  $_SESSION['name'] = $row['name'];
							                  	$_SESSION['email'] = $row['email'];
							                  	$_SESSION['id'] = $row['id'];
							                  
                                  header("Location:home.php");
						                	}
							            else{
							      	?>
								                <center><span class="alert-danger">Wrong Password</span></center>
							      	<?php
						  	            }
					              	}
					               }
		              	  	}
			                ?>
                </div>

                
              
              
                <!--Registration form started from here -->
                
                <div class="login ">
                    <form action="register.php" method="post" id="register">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email Address</label>
                          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="abdulmottaleb945@gmail.com" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Full Name</label>
                         
                          <input type="Full Name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Md. Abdul Mottaleb" required>
                          
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect2">Contact Number</label>
                          <!-- <select multiple class="form-control" id="exampleFormControlSelect2"> -->
                          <input type="Contact Number" name="number" class="form-control" id="exampleFormControlInput1" placeholder="01795937303" required>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Password</label>
                          <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                          <input type="Password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="*********" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Select</label>
                          <select class="form-control" name="option" id="exampleFormControlSelect1" required>
                            <option>Owner</option>
                            <option>Renter</option>
                            <option>subletter</option>
                            
                          </select>
                        </div>
                  
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
          </div>
      </section>

      


      <!-- ?Bootstrap js  -->
      <script src="login.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"    crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>