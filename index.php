<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>BooksBay</title>
  </head>
  <body class=container-fluid>
  
  <?php include'partials/header.php';?>
  <!--<h1>Hot Books!</h1>-->  
  <br>
  <div class="info" style="position:sticky";>
  <h1 class="text-center ">What is Books-Bay ?</h1>
  <div class="p-3">
  <div class="row p-2 bg-info text-white rounded">
    <div class="col-sm-8">
      <p class="mt-3 ml-2 float-right" style="font-family:Snell Roundhand, cursive;font-size:25px;line-height:40px">Book bay is an online platform that allows users to buy and sell used books.<br>
        It is a user-friendly application that enables users to post their used books along with a brief description, and other users can purchase them at an affordable price.<br>
        The platform is designed to provide a hassle-free experience to book lovers who want to buy or sell used books.</p>
    </div>
    <div class="col-sm-3 mt-2">
        <img src="img\Amaazon-books-01.png"  alt=".." width="400" height="250"></>
    </div>
    </div>
  </div>
</div>
<center><h1>Books uploaded this week</h1></center><br>
<div class="row offset-sm-2">
    <?php $i=0;
    include 'partials/dbconnect.php';
    #session_start();
    #$e_id = $_SESSION['uid'];
    $sql="SELECT * FROM `postbook` ORDER BY `postbook`.`dt_creation` DESC LIMIT 6";//
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {    $bok_n=$row['b_name'];
      $og_pr=$row['og_pr'];
      $ex_pr=$row['ex_pr'];
      $time=$row['dt_creation'];
      $pic=$row['pic1'];
      $p_id=$row['p_id'];
      echo '
      <div class="card offset-sm-5 d-block mb-3 mx-2" style="max-width:27%;">
      <div class="row">
        <div class="col-md-4">
          <img src="project_x_copy/'.$pic.'" class="card-img" alt="..." width="400" height="250">
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <h5 class="card-title"><a href="post.php?pid='.$p_id.'" class="text-dark">'.$bok_n.'</a></h5>
            <p class="card-text">Original Price: '.$og_pr .'</p>
            <p class="card-text">Expected Price: '.$ex_pr .'</p>
            <p class="card-text"><small class="text-muted">Last updated '.$time.'</small></p>
          </div>
        </div>
      </div>
    </div>';

}
?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>