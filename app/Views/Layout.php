<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="../public/bootstrap-4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<!--<link rel="apple-touch-icon" href="../public/bootstrap-4.5.3/dist/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="../public/bootstrap-4.5.3/dist/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="../public/bootstrap-4.5.3/dist/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="../public/bootstrap-4.5.3/dist/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="../public/bootstrap-4.5.3/dist/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="../public/bootstrap-4.5.3/dist/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="../public/bootstrap-4.5.3/dist/assets/img/favicons/browserconfig.xml">-->
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../public/bootstrap-4.5.3/dist/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    <?= $this->include('Navbar.php')  ?>

<main role="main" class="container">

 <?=$this->renderSection('content')?>

</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../public/JS/jquery.min.js"><\/script>')</script><script src="../public/JS/jquery.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>