<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div id="globalWrapper" class="globalWrapper">
  <div class="contentWrapper">
    <div class="title-page">
      <h1>Vos informations de facturation</h1>
      <a href="panier.php">Panier »</a> Informations de facturation
    </div>

    <section class="row row-card flex-start">
      <div class="col-L8 col-M12 card">
        <h2 class="card-title">Informations de facturation</h2>
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


      <div class="col-L4 col-M12 card bloc-details">
        <h2 class="card-title">Récapitulatif</h2>
        <div class="card-content">

          <div class="row border spaceBetween">
            <span class="steel">Panier (2 articles)</span>
            <span class="strong">234,19€</span>
          </div>

          <div class="row border spaceBetween">
            <span class="steel">Panier (2 articles)</span>
            <span class="strong">234,19€</span>
          </div>

          <div class="row border spaceBetween">
            <span class="steel">Panier (2 articles)</span>
            <span class="strong">234,19€</span>
          </div>

          <div class="row spaceBetween">
            <span class="steel">Panier (2 articles)</span>
            <span class="strong">234,19€</span>
          </div>

          <div class="row border spaceBetween">
            <span class="black strong">PRIX TOTAL (TTC)</span>
            <span class="strong">234,19€</span>
          </div>
        </div>
      </div>
    </section>


    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

    </body>

    </html>