<?php 

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
  
echo "

<nav class='navbar navbar-expand-lg navbar-dark bg py-4'>  <!--navbar-->
      <div class='container-fluid mx-6'>
        <a class='navbar-brand ' href='index.php'>Ebic gaym</a><!--navbar brand name-->
        <button class='navbar-toggler ' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse ms-7'  id='navbarSupportedContent'> <!-- navbar items-->
          <ul class='navbar-nav me-auto mb-2 mb-lg-0 '>
            <li class='nav-item me-3'>
              <a class='nav-link' aria-current='page' href='gameList.php'>Game List</a>
            </li>
            <li class='nav-item me-3'>
              <a class='nav-link' href='#'>Tag List</a>
            </li>
           
            <li class='nav-item me-3'>
              <a class='nav-link' href='#'>Felling Lucky</a>
            </li>
            <li class='nav-item me-3'>
              <a class='nav-link 'href='adminPage.php'>admin</a>
            </li>
          </ul>
          <li class=' navbar-nav nav-item d-flex'>";
          if(isset($_SESSION['id'])){
            echo "<a class='nav-link' href='logout.php'>Logout</a>";
          }
          else{
            
            echo "<a class='nav-link' href='login.php'>Login</a>";
          }
          echo "
          </li>
          
        </div>
      </div>
    </nav>

"


?>