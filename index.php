<?php
error_reporting(0);
?>
<!doctype html>
<html dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <title>- K 3</title>
	
  </head>
  <body>


<!-------------------------------------- Start corus -------------------------------------->


<br/>
<div class="container bg">
<br/>
<br/>
<br/>

<div class="row d-flex justify-content-center text-center">

<h1 class="display-4 text1">اخر الاخبار</h1>

</div>
<br/>
<br/>
<br/>
<br/>
</div>
<?php
$json = file_get_contents('https://newsapi.org/v2/top-headlines?country=eg&apiKey=f844837158254b36b4936978f5a694c9');
$data = json_decode($json, true);
$img0 = ($data['articles'][0]['urlToImage']);
$img1 = ($data['articles'][1]['urlToImage']);
$img2 = ($data['articles'][2]['urlToImage']);
$img3 = ($data['articles'][3]['urlToImage']);
$img4 = ($data['articles'][4]['urlToImage']);
$img5 = ($data['articles'][5]['urlToImage']);
$img6 = ($data['articles'][6]['urlToImage']);
$img7 = ($data['articles'][7]['urlToImage']);
$img8 = ($data['articles'][8]['urlToImage']);
$img9 = ($data['articles'][9]['urlToImage']);
$img10 = ($data['articles'][10]['urlToImage']);
$img11 = ($data['articles'][11]['urlToImage']);
$img12 = ($data['articles'][12]['urlToImage']);
$img13 = ($data['articles'][13]['urlToImage']);
$img14 = ($data['articles'][14]['urlToImage']);
$img15 = ($data['articles'][15]['urlToImage']);
$title0 = ($data['articles'][0]['title']);
$title1 = ($data['articles'][1]['title']);
$title2 = ($data['articles'][2]['title']);
$title3 = ($data['articles'][3]['title']);
$title4 = ($data['articles'][4]['title']);
$title5 = ($data['articles'][5]['title']);
$title6 = ($data['articles'][6]['title']);
$title7 = ($data['articles'][7]['title']);
$title8 = ($data['articles'][8]['title']);
$title9 = ($data['articles'][9]['title']);
$title10 = ($data['articles'][10]['title']);
$title11 = ($data['articles'][11]['title']);
$title12 = ($data['articles'][12]['title']);
$title13 = ($data['articles'][13]['title']);
$title14 = ($data['articles'][14]['title']);
$title15 = ($data['articles'][15]['title']);
$url0 = ($data['articles'][0]['url']);
$url1 = ($data['articles'][1]['url']);
$url2 = ($data['articles'][2]['url']);
$url3 = ($data['articles'][3]['url']);
$url4 = ($data['articles'][4]['url']);
$url5 = ($data['articles'][5]['url']);
$url6 = ($data['articles'][6]['url']);
$url7 = ($data['articles'][7]['url']);
$url8 = ($data['articles'][8]['url']);
$url9 = ($data['articles'][9]['url']);
$url10 = ($data['articles'][10]['url']);
$url11 = ($data['articles'][11]['url']);
$url12 = ($data['articles'][12]['url']);
$url13 = ($data['articles'][13]['url']);
$url14 = ($data['articles'][14]['url']);
$url15 = ($data['articles'][15]['url']);
$publishedAt0 = ($data['articles'][0]['publishedAt']);
$publishedAt1 = ($data['articles'][1]['publishedAt']);
$publishedAt2 = ($data['articles'][2]['publishedAt']);
$publishedAt3 = ($data['articles'][3]['publishedAt']);
$publishedAt4 = ($data['articles'][4]['publishedAt']);
$publishedAt5 = ($data['articles'][5]['publishedAt']);
$publishedAt6 = ($data['articles'][6]['publishedAt']);
$publishedAt7 = ($data['articles'][7]['publishedAt']);
$publishedAt8 = ($data['articles'][8]['publishedAt']);
$publishedAt9 = ($data['articles'][9]['publishedAt']);
$publishedAt10 = ($data['articles'][10]['publishedAt']);
$publishedAt11 = ($data['articles'][11]['publishedAt']);
$publishedAt12 = ($data['articles'][12]['publishedAt']);
$publishedAt13 = ($data['articles'][13]['publishedAt']);
$publishedAt14 = ($data['articles'][14]['publishedAt']);
$publishedAt15 = ($data['articles'][15]['publishedAt']);
echo '<div class="container text-center bg">
<div class="row d-flex justify-content-around">';
if (!empty($img0)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img0.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title0.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt0.'</p>
<a href="'.$url0.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img1)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img1.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title1.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt1.'</p>
<a href="'.$url1.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img2)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img2.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title2.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt2.'</p>
<a href="'.$url2.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img3)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img3.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title3.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt3.'</p>
<a href="'.$url3.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img4)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img4.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title4.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt4.'</p>
<a href="'.$url4.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img5)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img5.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title5.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt5.'</p>
<a href="'.$url5.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img6)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img6.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title6.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt6.'</p>
<a href="'.$url6.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img7)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img7.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title7.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt7.'</p>
<a href="'.$url7.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img8)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img8.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title8.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt8.'</p>
<a href="'.$url8.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img9)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img9.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title9.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt9.'</p>
<a href="'.$url9.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img10)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img10.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title10.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt10.'</p>
<a href="'.$url10.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img11)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img11.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title11.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt11.'</p>
<a href="'.$url11.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img12)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img12.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title12.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt12.'</p>
<a href="'.$url12.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img13)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img13.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title13.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt13.'</p>
<a href="'.$url13.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img14)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img14.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title14.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt14.'</p>
<a href="'.$url14.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div><br/><br/>';}
if (!empty($img15)) {
echo '<div class="card" style="width: 18rem; margin-top: 1%;">
<img src="'.$img15.'" class="card-img" width="300" height="250" >
<div class="card-body>
<h5 class="card-title"><br/>'.$title15.'</h5>
<p class="card-text"><br/><span class="badge badge-secondary">'.$publishedAt15.'</p>
<a href="'.$url15.'" class="btn btn-primary" target="_blank"> قراءة الخبر</a>
</div></div>';
}
echo '
</div></div></div>
<br/><br/>';

?>
 

 <br/>
<br/>
<br/>
    <!-- Optional JavaScript -->
	 <script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>