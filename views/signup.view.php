<?php 
// Database
require_once  'config/config.php';


      
    
?>
<?php include "views/partials/header.php"; ?>
<?php include "views/partials/nav.php";?>
<main  class="banner">
<div class="container">
    <div class="row">
    <div class="col" id="signup" >
        <div class="card">
            <div class="card-body">
                <form method="POST" id="sign_up_form" class="row row-cols-lg-auto g-3 align-items-center validatedForm">
                    <div class="input-group">
                        <h1>Sign Up</h1>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3 "id="fname">
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="name@example.com">
                            <label for="floatingInput">First name</label>
                            <span class="error">s</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="name@example.com">
                            <label for="floatingInput">Last name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating  mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating  mb-3">
                            <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Password">
                            <label for="floatingPassword">Confirm password</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary " id="signUpBtn">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
       </div>
    </div>
    </div>
</div>
</main>



<script  type="text/javascript" src="../public/js/auth.js"></script>
<?php include "views/partials/footer.php"?>

