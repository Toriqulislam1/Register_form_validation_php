
<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register form</title>
  </head>
  <body>
    

  <div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card mb-5">
            <div class="card-header text-center bg-primary text-white">
                <h4>Register form</h4>
            </div>
            <div class="card-body">

<form action="registerPost.php" method="POST" >
<div class="mb-3">
<input type="text" name="name" class="form-control" 
value="<?= (isset( $_SESSION['nam_val']))? $_SESSION['nam_val']:''?>" >
<?php
  if(isset($_SESSION['nam_err'])){ ?>
     <strong class="text-danger"> <?= $_SESSION['nam_err']?></strong>
 <?php }?>
  

</div>

  <div class="mb-3">
  <input type="email" class="form-control" name="email" value="<?= (isset($_SESSION['eml_val']))?$_SESSION['eml_val']:''?>">
  <?php
  if(isset($_SESSION['eml_err'])){ ?>
    <strong class="text-danger"> <?=$_SESSION['eml_err']?></strong>
  <?php } ?>
 
  </div>

  <div class="mb-3">
  <input type="password" class="form-control" name="password">
  <?php
  if(isset($_SESSION['pass_err'])){ ?>

    <strong class="text-danger"> <?= $_SESSION['pass_err']?></strong>
 <?php } ?>

  </div>
  <div class="mb-3">
  <input class="bg-info text-white" type="submit"  value=" register">
  </div>



                </form>

            </div>
        </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php




  unset($_SESSION['nam_err']);
  unset($_SESSION['email_err']);
  unset($_SESSION['pass_err']);




?>