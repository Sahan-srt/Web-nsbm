<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:loginhome.php");
}else{


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
}elseif($_GET['page']=='plymouth'){
  include("home/plymouth.html");
}elseif($_GET['page']=='mis'){
  include("home/mis.html");
}elseif($_GET['page']=='dublin'){
  include("home/dublin.html");
}elseif($_GET['page']=='y1'){
  include("home/y1.html");
}elseif($_GET['page']=='y2'){
  include("home/y2.html");
}elseif($_GET['page']=='y3'){
  include("home/y3.html");
}

else{

  include("home/home.html");
}
include("home/footer.html");

}

?>

