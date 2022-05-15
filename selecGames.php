<?php
function gameCount()
{
  include('config.php');
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
  $sql = 'SELECT COUNT(gameID) FROM games';
  $result = mysqli_query($conn, $sql);
  $count = mysqli_fetch_assoc($result)['COUNT(gameID)'];
  return $count - 1;
}

function get_games()
{
  include('config.php');
  $sql2 = 'SELECT * FROM games';
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      if ($gameId == 0) {
      } else {

        echo "<div class='col-xl-2 col-sm-5 col-lg-4 my-4' data-bs-toggle='modal' data-bs-target='#game_$gameId'>";
        echo " <div class='card' >";
        echo "   <a href='selectedGame.php?gameId=" . $gameId . "' value='$gameId' class='card-title'>";
        echo "<div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>";
        echo "<div class='carousel-inner-img'>";
        echo " <div class=' carousel-item active card-img '>";
        echo "  <img src='$gameImage' class='card-img'  alt='$gameName'>";
        echo "</div>";
        get_gameImages($gameId);
        echo "</div>";
        echo "</div>";
        echo "   <div class='card-body'>";
        echo "   <h5 class='card-title'> $gameName</h5>";
        get_tags($gameId);
        echo "<br>";
        echo "</a>";
        echo " </div>";
        echo "  </div>";
        echo "  </div>";
      }
    }
  }
}
function get_random_game()
{
  include('config.php');
  $sql2 = 'SELECT * FROM games';
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $gameId = $row['gameID'];

      if ($gameId == 0) {}
       else {
        $randomGameID = rand(1, gameCount());
        return $randomGameID;
      }
    }
  }
}
function get_games_filtered($tagID)
{

  include('config.php');

  $sql2 = "SELECT * FROM `games` inner join gametaglist on games.gameID = gametaglist.GameID where gametaglist.TagID=$tagID";
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameImage = $row['gameImage'];
      if ($gameId == 0) {
      } else {

        echo "<div class='col-xl-2 col-sm-5 col-lg-4 my-4' data-bs-toggle='modal' data-bs-target='#game_$gameId'>";
        echo " <div class='card' >";

        echo "   <a href='selectedGame.php?gameId=" . $gameId . "' value='$gameId' class='card-title'>";
        echo "<div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>";
        echo "<div class='carousel-inner-img'>";
        echo " <div class=' carousel-item active card-img '>";
        echo "  <img src='$gameImage' class='card-img'  alt='$gameName'>";
        echo "</div>";
        get_gameImages($gameId);
        echo "</div>";
        echo "</div>";

        echo "   <div class='card-body'>";
        echo "   <h5 class='card-title'> $gameName</h5>";
        get_tags($gameId);
        echo "<br>";
        echo "</a>";
        echo " </div>";
        echo "  </div>";


        echo "  </div>";
      }
    }
  }
  else {
    echo "<div class='col-xl-2 col-sm-5 col-lg-4 my-4' data-bs-toggle='modal' data-bs-target=''>";
        echo " <div class='card' >";

        echo "   <a href='' value='' class='card-title'>";
        echo "<div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>";
        echo "<div class='carousel-inner-img'>";
        echo " <div class=' carousel-item active card-img '>";
        echo "  <img src='https://rime.s-ul.eu/xt8bvX9H' class='card-img'  alt=''>";
        echo "</div>";
        
        echo "</div>";
        echo "</div>";

        echo "   <div class='card-body'>";
        echo "   <h5 class='card-title'> Oyun Bulunamadı.</h5>";
        
        echo "<br>";
        echo "</a>";
        echo " </div>";
        echo "  </div>";


        echo "  </div>";
  }
}

function get_gameImages($gameid)
{
  include('config.php');
  $sql = "SELECT * FROM gameImages where gameID=$gameid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo " <div class='carousel-item'>
        <img src='" . $row['Image'] . "' class='card-img' alt='...'>
      </div>";
    }
  }
}
function get_gameImagesBig($gameid)
{
  include('config.php');
  $sql = "SELECT * FROM gameImages where gameID=$gameid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo " <div class='carousel-item'>
        <img src='" . $row['Image'] . "' class='games-page-img' alt='...'>
      </div>";
    }
  }
}
function get_games_admin()
{

  include('config.php');

  $sql2 = 'SELECT * FROM games';
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      if ($gameId == 0) {
      } else {

        echo "<div class='col-xl-2 col-sm-5 col-lg-4 my-4' data-bs-toggle='modal' data-bs-target='#game_$gameId'>";
        echo " <div class='card' >";

        echo "   <a href='deleteGames.php?gameId=" . $gameId . "' value='$gameId' class='btn btn-del'><i class='bi bi-trash3'></i></a>";
        echo "   <a href='selectedGame.php?gameId=" . $gameId . "' value='$gameId' class='card-title'>";
        echo "<div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>";
        echo "<div class='carousel-inner-img'>";
        echo " <div class=' carousel-item active card-img '>";
        echo "  <img src='$gameImage' class='card-img' alt='$gameName'>";
        echo "</div>";
        get_gameImages($gameId);
        echo "</div>";
        echo "</div>";

        echo "   <div class='card-body'>";
        echo "   <h5 class='card-title'>$gameId | $gameName</h5>";
        get_tags_admin($gameId);
        echo "<br>";
        echo "</a>";
        echo "<form action='addTagsToGames.php' method='post'>";
        echo "<select name='taglist' class='button'> ";
        get_all_tags_admin_toggle();
        echo " </select>  ";
        echo "<input type='hidden' name='gameId' value='$gameId'>";
        echo "<input type='submit' class='button' name='Submit' value='tag ekle'>";
        echo "</form>";
        echo " </div>";
        echo "  </div>";

        echo "</div>";
      }
    }
  }
}
function get_tags($gameid)
{
  include('config.php');
  $sql = "SELECT tags.TagID as tagid,gametaglist.GameID,tags.TagNAME as tagname FROM gametaglist inner join tags on gametaglist.TagID = tags.TagID where gameID=$gameid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo "<span class='top-seller-tag' " . $row['tagid'] . "'>" . $row['tagname'] . "</span>";
    }
  } else {
    echo "<span class='top-seller-tag'>No Tags</span>";
  }
}
function get_tags_admin($gameid)
{
  include('config.php');
  $sql = "SELECT tags.TagID as tagid,gametaglist.GameID as gameid,tags.TagNAME as tagname FROM gametaglist inner join tags on gametaglist.TagID = tags.TagID where gameID=$gameid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $tagID = $row['tagid'];
      $GameID = $row['gameid'];
      echo "<a class='top-seller-tag mb-2' href='deleteTagList.php?tagID=" . $tagID . "&GameID=".$GameID."'>" . $row['tagname'] . "</a>";
    }
  } else {
    echo "<span class='top-seller-tag'>No Tags</span>";
  }
}
function get_all_images_admin()
{
  include('config.php');
  $sql = "SELECT * FROM gameImages ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $ImageID = $row['ImageID'];
      echo "<div class='col'><a href='deleteImages.php?ImageID=" . $ImageID . "'><img src='" . $row['Image'] . "' name=''" . $row['ImageID'] . " class='img-thumbnail' alt='" . $row['ImageID'] . "'> </a>
        <h6>gameID: " . $row['GameID'] . "</h6></div>";
    }
  }
}
function get_all_tags_admin()
{
  include('config.php');
  $sql = "SELECT * FROM tags ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $tagID = $row['tagID'];
      echo "<span class='top-seller-tag' " . $row['tagID'] . "'><a href='deleteTags.php?tagID=" . $tagID . "'>" . $row['tagNAME'] . "</a></span>";
    }
  }
}
function get_all_tags()
{
  include('config.php');
  $sql = "SELECT * FROM tags ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $tagID = $row['tagID'];
      echo "<span class='tag-list-tag' " . $row['tagID'] . "'><a href='selectedTagGames.php?tagID=" . $tagID . "'>" . $row['tagNAME'] . "</a></span>";
    }
  }
}
function get_all_tags_filter()
{
  include('config.php');
  $sql = "SELECT * FROM tags ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $tagID = $row['tagID'];
      echo "<span class='top-seller-tag' " . $row['tagID'] . "'><a onclick=get_games_filtered($GameID)>" . $row['tagNAME'] . "</a></span>";
    }
  }
}
function get_all_tags_admin_toggle()
{
  include('config.php');
  $sql = "SELECT * FROM tags ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo " <option value='" . $row['tagID'] . "'>" . $row['tagNAME'] . "</option>";
    }
  }
}
function selected_game_page()
{
  include('config.php');
  $sql = 'SELECT * FROM games';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      if ($gameId == 0) {
      } else {
        echo "<div class='modal fade' id='game_$gameId' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
           <div class='modal-dialog modal-fullscreen'>
             <div class='modal-content'>
               <div class='modal-header'>
                 <h5 class='modal-title' id='exampleModalLabel'>$gameName</h5>
                 <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
               </div>
               <div class='modal-body'>
               $gameDesc
               <img src='$gameImage' class='card-img ' alt='$gameName'>
               </div>
               <div class='modal-footer'>
                 <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                 <button type='button' class='btn btn-primary'>Save changes</button>
               </div>
             </div>
           </div>
         </div>";
      }
    }
  }
}


