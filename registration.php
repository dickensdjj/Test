<?php
    require_once 'dbConnect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div style="position:relative; top:20%;" class="container mx-auto">
          <div class="row">
              <div class="col-sm-6 mx-auto" 
                style="border: 1px solid black;
                border-radius: 20px;
                box-shadow:2px 2px 2px 1px grey;
                padding: 50px;">
              <h2 class="text-center">Registration Form</h2>
                  <!-- Horizontal Form Standard -->
                  <!-- 
                      form
                        div, form-group row
                            label, col-sm-2 col-form-label
                            div, col-sm-10
                                input, form-control
                   -->
                  <form class="d-block mt-5" action=<?php echo $_SERVER['REQUEST_URI']?> method="POST">
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label" for="email">Email: </label>
                          <div class="col-sm-8">
                              <input class="form-control" name="email" type="email" class="" id="email" required="required">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label" for="password-initial">Password: </label>
                          <div class="col-sm-8">
                              <input class="form-control" name="password-initial" type="password" class="" id="password-initial" required="required">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label" for="password-confirmed">Password Again: </label>
                          <div class="col-sm-8">
                              <input class="form-control" name="password-confirmed" type="password" class="" id="password-confirmed" required="required">
                          </div>
                      </div>
                      <input type="submit" class="btn btn-outline-primary btn-lg btn-block" id="">
                  </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>



<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_username = $_POST["email"];
    $new_pwd = $_POST["password-confirmed"];

    $existed_username = false;

    $stmt = $db -> prepare('select user_email from users');
    $stmt -> execute();
    $result = $stmt -> fetchAll();

    

    foreach ($result as $row) {
        //echo $row['user_email'];
        if($row['user_email'] == $new_username){
            $exist_username = true;
            break;
        }
    }

    if($exist_username == false){
        $stmt = $db -> prepare("INSERT INTO users (user_email, pwd) VALUES (?, ?)"); 
        $stmt -> execute([$new_username,$new_pwd]);
        $db = null;
        echo  '<script>alert("Successfully Registered")</script>';
        Print '<script>window.location.assign("index.php");</script>'; // redirects to index.php
    }
    else{
        $db = null;
        echo '<script>alert("Unable to Register")</script>';
        Print '<script>window.location.assign("index.php");</script>'; // redirects to index.php
    }

}       
    
?>