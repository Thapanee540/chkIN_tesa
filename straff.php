<?php
session_start();
$team = $_SESSION['teamStraff'];
?>
<html>
<head>
    <title>TESA2019</title>
	<link rel="icon" type="image/png" href="assets/img/icon_esa.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-straff.css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One|Roboto|Oxygen|Open+Sans+Condensed:300|Cantarell|Ubuntu' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=K2D|Kanit|Prompt" rel="stylesheet">

</head>
<body>

<div class="header">
<?php
echo "<div> พี่เลี้ยงประจำทีม : " ."<h1 style=\"color:#ffcc00;\">" .$team."</h1></div>";
?>
</div>
<div class="slideshow-container">

<div class="main-back mySlides fade">
  <div class="numbertext">1 / 2</div>

    <div class="main-center">
        <img class="img-straff" src="assets/img/icons/001-human.png" >
            <br><br>
            ชื่อเล่น : รัดดา <br>
            เบอร์โทร : 0812345678
            <br>
            <div class="QR-res">
                        <img src="assets/img/exQR-fb.png" class="qrCode">
                        <img src="assets/img/exQR-line.jpg" class="qrCode">

            </div>

        <?php
// echo
// "<table class='table-center'>".
//         "<tr>".
//             "<td class='td-right'>ชื่อเล่น </td>
//             <td class='td-center'>:</td>
//             <td class='td-left'>แปง</td>
//         </tr>".

//         "<tr>".
//             "<td class='td-right'>เบอร์โทร </td>
//             <td class='td-center'>:</td>
//             <td class='td-left'> 0812345678</td>
//         </tr>"
// ."</table>";
?>
    </div>
</div>

<div class="main-back mySlides fade">
  <div class="numbertext">2 / 2</div>
    <div class="main-center">
        <img class="img-straff" src="assets/img/icons/002-human-1.png">
        <br><br>
            ชื่อเล่น : ปอม <br>
            เบอร์โทร : 0812345688<br>
            <div class="QR-res">
                        <img src="assets/img/exQR-fb.png" class="qrCode">
                        <img src="assets/img/exQR-line.jpg" class="qrCode">

            </div>
    </div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="twodot">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>

<?php
include_once 'footer.php';
?>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
