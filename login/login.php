<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../toline/style.css">
</head>
<body>
    
<section class="vh-100">

  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="asset/4207.jpg"
          class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="cek_login.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                

                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="text" name="username" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Remember me
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>

             
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>