<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Photo Club ( PC)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="w3-pale-yellow w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/club.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PC</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
    <a href="#about PC" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT PC</a>
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a>
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 
    <a href="#collaborations" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COLLABORATIONS</a> 
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  <div class="w3-panel w3-large">
  <img src="photo/fb.jpg" style="width:10%;" class="w3-round">
 <img src="photo/ig.jpg" style="width:11%;" class="w3-round">
 <img src="photo/twitter.jpg" style="width:10%;" class="w3-round">
</div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Photo Club</b></h1>
    

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/club1.png" alt="Me" style="width:100%"></p>
    </div>

   

  <div id="about PC" class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Photo Club</b></h4>
    <p>Welcome to our Photo Club! We are a community of individuals who share a love for capturing moments through the lens. Whether you're a seasoned photographer or just starting, our club is a place to connect with fellow enthusiasts, exchange ideas, and explore the art of photography together. Join us for exciting photo shoots, informative workshops, and the chance to showcase your work in exhibitions. Let's capture memories, tell stories, and celebrate the beauty of visual storytelling. Join our Photo Club today and bring your creativity into focus!</p>
    <hr>
    
    <h4><b>Photo Club Committee</b></h4>
    <!-- Progress bars / Skills -->
    <!-- First Photo Grid-->
    <!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="committee">
<h2>PHOTO CLUB COMMITTEE</h2>
<p>Meet our committee</p>

 <div class="w3-row"><br>

<div id="committee" class="w3-quarter">
  <img src="photo/Yuju.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3> A'fifi Abdullah</h3>
  <p>President</p>
</div>

<div class="w3-quarter">
  <img src="photo/Jisung.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Muaz Azim</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photo/Mark.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Taufiq Mail</h3>
  <p>Treasurer</p>
</div>

<div class="w3-quarter">
  <img src="photo/Yerin.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Sarah Radzi</h3>
  <p>Secretary</p>
</div>

</div>
</div>
  
 


    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <p id="membership"align="center"><h3>Membership form for Photo Club 2024</h3></p>
   
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
           
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<hr>

 <div id="activity" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities form for Photo Club (PC)</h3></p>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
           
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

    </p>
    <hr>
    <p id="collaborations"align="center"><h3>Club form for Photo Club (PC)</h3></p>
    <a href="add_club.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM club";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

    
    <h4>Achievement of Photo Club (PC)</h4>
    <!-- Pricing Tables -->
    <!-- First Photo Grid-->
  <div id="achievement"class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/award1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Best Photo Series Award</b></p>
        <p>Recognizing a photography club that has presented a cohesive and compelling series of images with a common theme or narrative.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/award2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Creative Concept Award</b></p>
        <p>Awarding innovation and creativity, this accolade goes to the photography club that produced the most imaginative and visually striking images or projects.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/award3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Community Engagement Award</b></p>
        <p>Celebrating the photography club that actively engaged with the university or local community through impactful photographic projects or collaborations.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/award4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Best Portrait Photography Award</b></p>
        <p>Honoring the photography club that exhibited exceptional skill and artistry in capturing compelling and expressive portraits.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/award5.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Best Exhibition or Showcase Award</b></p>
        <p>Given to the photography club that organized and presented the most outstanding photography exhibition or showcase on campus.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/award6.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Student Choice Award</b></p>
        <p>Voted on by the university community, this award goes to the photography club whose work resonated the most with fellow students.</p>
      </div>
    </div>
  </div>

 <!-- Contact Section -->
  <header id="contact">
  <?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
 <h2><b><p class="w3-text-black">Contact Us for Photo Club (PC)</b></h2>
 <br>
<h5><p class="w3-text-black">Fill this form for your comment about our club website</h5></p>
   

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Email</th>
          <th scope="col">Comment</th>
         
        </tr>
      </thead>
      <tbody>
  
        <?php
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
 
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>