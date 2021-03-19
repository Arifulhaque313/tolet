<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Let.Find Your Own House</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">TO-LET</a>
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
                Languages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">English</a>
                <a class="dropdown-item" href="#">Bangla</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Login/Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="owner.php">Post as a House Owner</a>
              </li>
           
          </ul>
          
        </div>
      </nav>

      <main>
          <section class=" searchSection container bg-light ">
                <form class="form-inline search-from my-2 my-lg-0 justify-content-center">
                    <select  class="custom-select custom-select-lg mb-3" searchable="Search  here..">
                        <option value="" disabled selected>Property</option>
                        <option value="1">Normal View</option>
                        <option value="2">Map View</option>
                      </select>
                    
                      <select  class="custom-select custom-select-lg mb-3" searchable="Search  here..">
                        <option value="" disabled selected>Location</option>
                        <option value="1">Dhaka</option>
                        <option value="2">Rajshahi</option>
                        <option value="3">Mymensingh</option>
                        <option value="3">Sylhet</option>
                        <option value="3">Chittagong</option>
                        <option value="3">Khulna</option>
                        <option value="3">Rangpur</option>
                        <option value="3">Barisal</option>
                      </select>

                      <select  class="custom-select custom-select-lg mb-3" searchable="Search  here..">
                        <option value="" disabled selected>Category</option>
                        <option value="1">Family House</option>
                        <option value="2">Bachelor</option>
                        <option value="3">Office</option>
                        <option value="3">Hostel</option>
                        <option value="3">Sublet</option>
                      </select>


                      <select  class="custom-select custom-select-lg mb-3" searchable="Search  here..">
                        <option value="" disabled selected>Price Range</option>
                        <option value="1">5000 - 8000</option>
                        <option value="2">8000 - 10,000</option>
                        <option value="3">10,000 - 15,000</option>
                        <option value="3">15,000 - 25,000</option>
                        <option value="3">More Than 25 Thousand</option>
                      </select>
                    
                    <button class="btn btn-primary btn-lg buttonSearch" type="submit">Search</button>
                </form>
          </section>

          <section class="cart-section">
              <div class="row">
                <div class="card-deck">
                    <div class="card">
                      <img src="images/image3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Location : Dhanmondi ,road 7 ,house 11</small></p>
                        <h5>House Rent per Month : 30,000</h5>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="images/image1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Location : Mirpur-2 ,road 1 ,house 16</small></p>
                        <h5>House Rent per Month : 30,000</h5>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="/images/image2 (2).jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <h5>House Rent per Month : 45,000</h5>
                        <p class="card-text"><small class="text-muted">Location : Mirpur 10 ,road 3 ,house 8</small></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>

              <div class="row">
                <div class="card-deck">
                    <div class="card">
                      <img src="images/image9.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Location : Uttara ,road 3 ,house 4</small></p>
                        <h5>House Rent per Month : 30,000</h5>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="/images/image8.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Location : Mirpur-1 ,road 1 ,house 26</small></p>
                        <h5>House Rent per Month : 24,500</h5>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="/images/image7.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <h5>House Rent per Month : 35,000</h5>
                        <p class="card-text"><small class="text-muted">Location :South Badda ,road 4 ,house 41</small></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
          </section>
      </main>


      <!-- ?Bootstrap js  -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"    crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>