
<?php include'templet/header.php' ?>
<?php include'templet/topbar.php' ?>
<?php
if(!isset($_SESSION['username'])){
 echo "<script> document.location.href='../index.php' </script>";
}else{?>

  <div class="container-fluid">
   <div class="jumbotron">
    <h1 class="display-4">Hello, <?php echo $_SESSION['username'] ?>!</h1>
    <p class="lead">Ini Adalah Aplikasi Voting Osis</p>
    <hr class="my-4">
    <p>Jika Anda Ingin Voting Silakan Tekan Tombol Di bawah Ini.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="voting.php" role="button">Voting</a>
    </p>
  </div>
</div>

<?php include'templet/footer.php' ?>

<?php } ?>