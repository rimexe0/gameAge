<?php

function navbar()
{
  include("selecGames.php");
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  echo "

<nav class='navbar navbar-expand-lg navbar-dark bg move-nav-bg sticky-top' >  <!--navbar-->
      <div class='container-fluid '>
      <div class='container'>
      <li class=' nav-item login-btn navbar-dark navbar-nav nav-link pt-1 '>";
  if (isset($_SESSION['id'])) {
    echo "<a class='nav-link' href='logout.php'>Çıkış</a>";
  } else {

    echo "<a class='nav-link' href='login.php'>Giriş</a>";
  }
  echo "
      </li>
        <a class='navbar-brand pt-1 float-start' href='index.php' id='navbar'>Ebic gaym</a><!--navbar brand name-->
     
       <div class='container' id='navbarNav'>
          <ul class='mt-2 navbar-nav ' id='navitems'>
          <li class='nav-item '>
          <a class='nav-link' href='tagList.php' >Tür Listesi</a>
        </li>
          
           
            <li class='nav-item'>
              <a class='nav-link' href='selectedGame.php?gameId=" . get_random_game() . "' >Rastgele Oyun</a>
            </li>";
  if (isset($_SESSION['id'])) {
    echo "   <li class='nav-item'>
              <a class='nav-link 'href='adminPage.php'>Admin Paneli</a>
            </li>";
  }
  echo "  <li class='nav-item '>
              <a class='nav-link 'href='about.php'>Hakkımızda</a>
            </li>
           
          </ul>
          
          </div>
        </div>
        </div>
    </nav>

";
}
function navbarJs()
{
  echo "<script>
              $(window).scroll(function(){
               var scroll = $(window).scrollTop();
               if (scroll > 300) {
                 $( '#navitems' ).removeClass( 'navitems' );
                 $('.bg').css('height','40px');
               }
            
               else{
                 $( '#navitems' ).addClass( 'navitems' );
                 
                 $('.bg').css('height','100px');
               }
             })
            </script>";
}
