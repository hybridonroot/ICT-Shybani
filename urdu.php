<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/nafees-nastaleeq" type="text/css"/>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<style>
  table thead { display:block; }
  table tbody { height:300px; overflow-y:scroll; display:block; }
  </style>
  <title>Mawdudid's Century</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v5.1.0
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body style="direction : rtl;  font-family: 'NafeesRegular';font-weight: normal; font-style: normal;  
">  
<!-- Header Menu -->
<?php include 'connect.php';

$id=$_GET['id'];
$content=$_POST['content']; //stores content of the chapter that has been clicked in the table of content
$title=$_POST['title']; 
if (isset($_POST['_id'])) {
  
    $id=$_POST['_id'];
}

//stores $id of the book which is selected

$content=$_POST['content']; //stores content of the chapter that has been clicked in the table of content
$title=$_POST['title'];     //stores title value for each chapter
$sql = "SELECT title,content FROM chapters WHERE book_id=".$id; //following snippet extracts name of chapters from the books
$result = $conn->query($sql);  
$sql1 = "SELECT name,title_image,description FROM books WHERE _id=".$id; //extracting details of book (title Image,name and description etc)
$result1 = $conn->query($sql1);  
$row1 = $result1->fetch_assoc()
?>

<header id="header" class="d-flex align-items-center">
<div class="container d-flex align-items-center justify-content-between">
<a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php" style="font-family : urdu;">مودودی کی صدی</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>
</header>
<section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
        <div class="row">
            <div class="col-md-auto">
            <?php echo "<img src='./assets/img/portfolio/".$row1["title_image"].".jpg' width='200' hieght='210'>";?>
          </div>
<div class="col-md-6">
            <h2 class="about-title">
        
            <h3 class="section-title"><?php echo $row1["name"];?></h3></h2>
            <div class="section-title-divider"></div>
            <p class="section-description"><?php echo $row1["description"];?></p>
            </div>
        

          <div class="col-md-4" >
            <h2 class="about-title">
            
                <table style="direction:rtl;">
                <thead></thead>
                <tbody>
              <?php if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
{
 //id of the book, and content each chapter storted in a hidden input of a form that is submitted to the same page when clicked on any chapter
 echo "<tr>
            <td>
                <form action='urdu.php' method='post'> 
                <input type='hidden' id='_id' name='_id' value='".$id."'>
                <input type='hidden' id='title' name='title' value='".$row["title"]."'>"; 
                echo "<input type='submit' value='".$row["title"]."'>
            </</tr>
        </td>";
 echo "</form>";
}
}?></tbody></table>
            </h2>
            
          </div>
        </div>
        <div class="row" style=" direction : rtl;  font-family: 'NafeesRegular';font-weight: normal; font-style: normal;  
">
            <div class="col-md-auto">
                <h2 class="about-title" align="center"><?php   echo $title;?></h2>
                <p class="about-text" style="line-height: 2.8;">
                 <?php   echo $content;?>
                    </p>
                </div>
            </div>
            
    </section><!-- End About Section -->
</pre>

<?php/* include 'connect.php';

$id=$_GET['id'];
$content=$_POST['content']; //stores content of the chapter that has been clicked in the table of content
$title=$_POST['title']; 
if (isset($_POST['_id'])) {
  
    $id=$_POST['_id'];
}
//stores $id of the book which is selected
$content=$_POST['content']; //stores content of the chapter that has been clicked in the table of content
$title=$_POST['title'];     //stores title value for each chapter
$sql = "SELECT title,content FROM chapters WHERE book_id=".$id; //following snippet extracts name of chapters from the books
$result = $conn->query($sql);  
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
{
 //id of the book, and content each chapter storted in a hidden input of a form that is submitted to the same page when clicked on any chapter
 echo "<form action='urdu.php' method='post'> <input type='hidden' id='_id' name='_id' value='".$id."'>
        <input type='hidden' id='content' name='content' value='".$row["content"]."<input type='hidden' id='title' name='title' value='".$row["title"]."'>"; 
 echo "<h6><input type='submit' value='".$row["title"]."'></h6>";
 echo "</form>";
}
}
$sql = "SELECT name,title_image,description FROM books WHERE _id=".$id; //extracting details of book (title Image,name and description etc)
$result = $conn->query($sql);  
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
{
    
    echo "<img src='./assets/img/portfolio/".$row["title_image"].".jpg'></td><td>"; //displaying title image
    echo "<h1>".$row["name"]."</h1><br>".$row["description"]."</td></tr></table>";  //displaying description
    
}
}
echo "<p>".$content."</p>";  //if no chapter is clicked, $contnet is empty and if clicked, it contains content of the chapter.
*/?>
</body>
</html>
