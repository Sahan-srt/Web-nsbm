<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:loginhome.php");
}


include("home/topbar.html");
include("home/nav.html");
if($_GET['page']=='computing'){

  include("home/computing.html");

}elseif($_GET['page']=='management'){
  include("home/management.html");
}elseif($_GET['page']=='engineering'){
  include("home/engineering.html");
}elseif($_GET['page']=='contactus'){
  include("home/contactus.html");
}elseif($_GET['page']=='foss'){
  include("home/foss.html");
}else{

  include("home/home.html");
}
include("home/footer.html");

?>

