<?php 
// Database
require_once  'config/config.php';

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
<!-- LANDING PAGE -->

<main  class="banner">
    
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/public/images/img.png" class="banner__img" alt="">
            </div>
        </div>
    </div>
</main>

<script  type="text/javascript" src="../public/js/form_toggle.js"></script>
<script  type="text/javascript" src="../public/js/auth.js"></script>
<?php include "views/partials/footer.php"?>




