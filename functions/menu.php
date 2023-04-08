<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="index.php">Short URL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/short1/home.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/short1/functions/links.php">All List</a>
      </li>


    </ul>
    <font color="white"> Hi, <?php echo $_SESSION['login_user']; ?></font> &nbsp; &nbsp;
    <a href = "http://localhost/short1/logout.php">  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>

  </div>
</nav>
<br>
