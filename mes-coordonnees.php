<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div id="globalWrapper" class="globalWrapper">
  <div class="contentWrapper">
    <div class="title-page">
      <h1>Mes coordonnées</h1>
      Vérifiez ou modifiez vos données personnelles.
    </div>

    <section class="row row-card flex-start">
      <div class="col-L12 col-M12 card">
        <h2 class="card-title">mes coordonnées</h2>
        <div class="card-content form-card">

          <div class="line-form">
            <label>Civilié</label>
            <select id="civilite" name="civilite">
              <option value="Mr">Monsieur</option>
              <option value="Mme">Madame</option>
            </select>
          </div>

          <div class="line-form">
            <label>Société</label>
            <input type="text">
          </div>

          <div class="row">
            <div class="line-form">
              <label>Type de société</label>
              <input type="text">
            </div>
            <div class="line-form">
              <label>TVA</label>
              <input type="text">
            </div>
          </div>

          <div class="row">
            <div class="line-form">
              <label>Nom</label>
              <input type="text">
            </div>
            <div class="line-form">
              <label>Prénom</label>
              <input type="text">
            </div>
          </div>

          <div class="row">
            <div class="line-form">
              <label>Adresse</label>
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

          <div class="line-form">
            <label>Ma référence</label>
            <input type="text">
          </div>

          <button class="button-action">Valider le formulaire</button>
        </div>

      </div>


    </section>


    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

    </body>

    </html>