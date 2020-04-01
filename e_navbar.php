<?php
  include("connect.php");

  /*include ("../time_out_session.php");
  if (!isset($_SESSION['user_id'])) {s
    header("Location: ../login.php");
  }
  */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">It company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="e_dashbord.php">Dashbord</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Training
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ask_train.php">Ask for training</a>
          <a class="dropdown-item" href="complete_train.php">Complete training</a>
        </div>
      </li>
    </ul>
      <li class="nav-item" style="text-align: right;">
        <a href="account_man.php" class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><?php echo $_SESSION['user_name'];?></a>     
        <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">logout</a>
      </li>

  </div>

</nav>