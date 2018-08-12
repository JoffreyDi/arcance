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
    <div class="modal-content-mini">
      <span class="close">&times;</span>
      <div class="modal-title">
      <h1>Le BAT est-il valide ?</h1>
      <button class="button-classic">Télécharger le BAT</button>
</div>

      <label class="line-radio hide-textarea">Le BAT est valide
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="line-radio display-textarea">Le BAT n'est pas valide
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="line-radio display-textarea">Je souhaie annuler ce projet
        <input type="radio" name="radio">
        <span class="checkmark" ></span>
      </label>

      <div class="textarea-bloc">
        <textarea placeholder="Expliquez pourquoi le BAT n'est pas valide"></textarea>
        <button class="button-action">Valider</button>
      </div>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/modals.js"></script>
</body>

</html>