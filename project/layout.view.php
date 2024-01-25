
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1, shrink-to-">

    <title>PHP Funda: <?= $viewBag['title']; ?></title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>

    <nav class="navbar navbar-expend-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="nav-brand" href="#">PHp Funda: <?= $viewBag['title']; ?></a>
      </div>
    </nav>
    <!-- content here -->
    <?php require("view/$name.view.php");  ?>
  </body>
  </html>
