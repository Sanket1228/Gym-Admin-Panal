<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container">
<a class="navbar-brand" href="#">Global Gym Center</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Profile</a>
    </li>';
    if(isset($_SESSION['roll']) && $_SESSION['roll'] == 1){
        echo'<li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Members
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="partials/_showMembers.php">Show Members</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="partials/_addMember.php">Add New Member</a>
           </div>
         </li>';
    }

    echo'<li class="nav-item">
      <a class="nav-link " href="#">About</a>
    </li>
  </ul>
 
  <form class="form-inline my-2 my-lg-0">
    <a href="/adminGym/logout.php" class="btn btn-outline-success ml-2">Logout</a>
  </form>
  </div>
</div>
</nav>';

?>