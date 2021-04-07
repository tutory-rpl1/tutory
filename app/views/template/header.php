<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="<?= BASEURL ?>/css/bootstrap.css" >
    <link rel="stylesheet"  href="<?= BASEURL ?>/css/style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title><?= $data['judul'] ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/fontawesome.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= BASEURL ?>/js/bootstrap.js" ></script>
    <script src="<?= BASEURL ?>/js/main.js" ></script>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>">
      <img src="<?= BASEURL ?>/img/logotutory.png" alt="" width="100"class="d-inline-block align-text-top" >
    </a>
    <div class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <div class="box"></div>
    </div>
    <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarTogglerDemo02">
  
      <form class="d-flex mt-3 flex-lg-row">
        <button class="btn btn-outline-primary mt-2 sign-in" type="submit">Sign in</button>
        <button class="btn btn-primary ms-lg-2 mt-2" type="submit">Sign up</button>
      </form>
    </div>
  </div>
</nav>