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
</head>

<body class="container">
  <?php include 'header.php' ?>
  <main>
    <section>
      <div class="row">
        <div class="col">
          <h1>Formulaire de contact</h1>
          <p>Vous souhaitez contacter le créateur de ce site ? pour un bug peut-être ? N'hésitez pas à le faire via le formulaire ci-dessous.</p>
        </div>
      </div>
      <form>
        <div class="row champs">
          <div class="col mb-3">
            <label for="name" class="form-label">Nom :</label>
            <input type="text" placeholder="Votre nom" class="form-control" id="name" required>
            <label for="exampleInputEmail1" class="form-label">Adresse e-mail :</label>
            <input type="email" class="form-control" placeholder="N'oubliez pas le @" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <label for="telephone" class="form-label">Numéro de téléphone :</label>
            <input type="tel" class="form-control" id="telephone">
            <label for="liste" class="form-label">Où avez-vous trouvé ce site ?</label>
            <select class="form-select" aria-label="Default select example" id="liste">
              <option value="1">Réseaux sociaux</option>
              <option value="2">Moteurs de recherche</option>
              <option value="3">Molengeek</option>
            </select>
            <label for="nation" class="form-label">Nationalité :</label>
            <input type="text" class="form-control" id="nation" placeholder="Par exemple: belge">
            <label for="pass" class="form-label">Mot de passe (pas besoin pour les demandes de contact)</label>
            <input type="password" class="form-control" id="pass" disabled>
            <label for="liste" class="form-label">Comment vous sentez-vous ?</label>
            <select class="form-select" aria-label="Default select example" id="liste">
              <option value="1">Déprimé</option>
              <option value="2">ça va</option>
              <option value="3">Bien</option>
              <option value="4">Très bien</option>
              <option value="5">Je pète la forme</option>
            </select>
            <label class="form-label">Notez ce site sur 5 (5 étant la meilleure note) :</label>
            <div class="form-check form-check-inline" id="radio">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" disabled>
              <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" disabled>
              <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
              <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" disabled>
              <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
              <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="cp" class="form-label">Code postal :</label>
              <input type="number" placeholder="Votre code postal" class="form-control" id="cp">
              <p>Voici l'adresse de l'entreprise papillon.com (pour info) :</p>
              <iframe class="d-block m-auto" width="450" height="450" style="border:0" loading="lazy" allowfullscreen src="[enter link to your map here (api)]"></iframe>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Inscrivez-moi à la newsletter</label>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="bouton d-flex justify-content-center">
        <button type="submit" class="btn btn-primary text-center bg-info" title="Ce bouton ne marchera pas">Soumettre</button>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3a4f104350.js" crossorigin="anonymous"></script>
</body>

</html>
