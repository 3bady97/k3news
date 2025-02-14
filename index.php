<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$json = file_get_contents('https://newsapi.org/v2/top-headlines?country=eg&apiKey=f844837158254b36b4936978f5a694c9');
if ($json === false) {
    die("لا يمكن استرجاع بيانات الأخبار.");
}

$data = json_decode($json, true);
$articles = $data['articles'] ?? [];
?>
<!doctype html>
<html dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>- K 3</title>
  </head>
  <body>
    <br/>
    <div class="container bg">
      <br/><br/><br/>
      <div class="row d-flex justify-content-center text-center">
        <h1 class="display-4 text1">اخر الاخبار</h1>
      </div>
      <br/><br/><br/><br/>
    </div>

    <div class="container text-center bg">
      <div class="row d-flex justify-content-around">
        <?php foreach ($articles as $article): ?>
          <?php if (!empty($article['urlToImage'])): ?>
            <div class="card" style="width: 18rem; margin-top: 1%;">
              <img src="<?= htmlspecialchars($article['urlToImage']) ?>" class="card-img-top" width="300" height="250" alt="صورة الخبر">
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($article['title']) ?></h5>
                <p class="card-text">
                  <span class="badge badge-secondary"><?= htmlspecialchars($article['publishedAt']) ?></span>
                </p>
                <a href="<?= htmlspecialchars($article['url']) ?>" class="btn btn-primary" target="_blank">قراءة الخبر</a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>

    <br/><br/>
    <!-- Optional JavaScript -->
    <script src="js/wow.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
