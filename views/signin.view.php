<?php 
// Database
require_once 'config/config.php';

if (isset($_POST["first_name"])) {
    $response = [
        'status' => 200,
        'msg' => 'Post added successfully added'
    ];

    echo json_encode($response);
}

      
    
?>
<?php include "views/partials/header.php"; ?>
<?php include "views/partials/nav.php";?>
<main  class="banner">
<div class="container">
    <div class="row">
    <div class="col"  id="signin">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/contact"  class="row row-cols-lg-auto g-3 align-items-center">
                    <div class="input-group">
                        <h1>Sign In</h1>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
       </div>
    </div>
</div>
</main>



<script  type="text/javascript" src="../public/js/form_toggle.js"></script>
<script  type="text/javascript" src="../public/js/auth.js"></script>
<?php include "views/partials/footer.php"?>

