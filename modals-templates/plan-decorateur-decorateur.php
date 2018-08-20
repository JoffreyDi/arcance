<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Titre de la page</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/theme.css">

</head>

<body>

  <button class="button-action" id="open-modal">Signer le document</button>


  <!-- The Modal -->
  <div id="modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content-mini ">
      <span class="close">
        <i class="material-icons md-dark">close</i>
      </span>
      <div class="modal-title">
        <h1>Déclarez votre mandat</h1>
      </div>
      <p>Merci de renseigner les champs ci-dessous pour déclarer votre mandat de gestion de projet de stand de votre client exposant ; dés réception des informations par nos services, vous recevrez des accès à la plateforme pour préparer la participation de votre client et gérer son projet de stand</p>
      <h2>VEUILLEZ REMPLIR LES CHAMPS CI DESSOUS</h2>

      <div class="card-content form-card">

      <div class="row">
            <div class="line-form">
              <label>Société *</label>
              <input type="text">
            </div>
            <div class="line-form">
              <label>Type de société *</label>
              <input type="text">
            </div>
          </div>

        <div class="line-form">
          <label>Civilité *</label>
          <select id="civilite" name="civilite" placeholder="Choisissez">
            <option value="Mr">Monsieur</option>
            <option value="Mme">Madame</option>
          </select>
        </div>

        <div class="row">
          <div class="line-form">
            <label>Nom *</label>
            <input type="text">
          </div>
          <div class="line-form">
            <label>Prénom *</label>
            <input type="text">
          </div>
        </div>


        <div class="line-form">
          <label>TVA Intracommunautaire</label>
          <input type="text">
        </div>


        <div class="row">
          <div class="line-form">
            <label>Adresse *</label>
            <input type="text">
          </div>
          <div class="line-form">
            <label>Complément d'adresse</label>
            <input type="text">
          </div>
        </div>

        <div class="row">
          <div class="line-form">
            <label>Code postal</label>
            <input type="text">
          </div>
          <div class="line-form">
            <label>Ville</label>
            <input type="text">
          </div>
        </div>

        <div class="line-form">
          <label>Pays</label>
          <select id="pays" name="pays">
            <option value="fr">France</option>
            <option value="es">Espagne</option>
          </select>
        </div>

        <div class="line-form">
          <label>TVA Intracommunautaire</label>
          <input type="text">
        </div>

        <div class="row">
          <div class="line-form">
            <label>Téléphone</label>
            <input type="text">
          </div>
          <div class="line-form">
            <label>Téléphone portable</label>
            <input type="text">
          </div>
        </div>

        <div class="line-form">
          <label>Adresse mail</label>
          <input type="text">
        </div>


        <button class="button-action">Envoyer et valider</button>
      </div>
      
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/modals.js"></script>
</body>

</html>