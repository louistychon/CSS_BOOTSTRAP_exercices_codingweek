<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/icon" href="../favicon.ico">
  <script src="../js/quizz.js"></script>
</head>

<body class="container">
  <?php include 'header.php' ?>
  <main>
    <p class="text-center">Je t'ai bien eu ! ce n'est pas une page "à propos" (boring) mais bien un quizz sur les papillons. Commence donc le jeu ci-dessous 😈</p>
    <section class="jeu d-flex align-items-center">
      <div class="col">
        <div class="container w-50 opacity-75 bg-light rounded">
          <h1 class="text-black">LE GRAND JEU DU PAPILLON</h1>
          <button class="btn-jeu btn-primary mb-2 bg-info" onClick="quizz()">JOUER AU JEU</button>
        </div>
      </div>
    </section>
  </main>
  <?php include 'footer.php' ?>
  <script src="https://kit.fontawesome.com/3a4f104350.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>