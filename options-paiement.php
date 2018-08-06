<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div id="globalWrapper" class="globalWrapper">
  <div class="contentWrapper">
    <div class="title-page">
      <h1>Options de paiement </h1>
      <a href="panier.php">Panier »</a>
      <a href="facturation.php">Informations de facturation » </a>Options de paiement
    </div>

    <section class="row row-card flex-start">
      <div class="col-L8 col-M12 card">
        <h2 class="card-title flex spaceBetween">
          <span>CHOISISSEZ VOTRE MOYEN DE PAIEMENT</span>
          <span>Votre commande ne sera traitée qu’après son paiement intégral confirmé.</span>
        </h2>
        <div class="card-content">

          <label class="line-radio">Par carte bancaire
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
          </label>
          <label class="line-radio">Par virement bancaire
            <br/>Les coordonnées bancaires pour votre paiement sont inscrites au pied de la facture. Veuillez préciser le n° de
            votre facture en référence de votre paiement
            <input type="radio" name="radio">
            <span class="checkmark"></span>
          </label>
          <label class="line-radio">Par chèque d’une banque en France
            <input type="radio" name="radio">
            <span class="checkmark"></span>
          </label>

          <div class="card-checkout">
            <div class="flex-end align-item-center">
              <label class="checkbox-line">J’accepte les conditions générales de vente
                <input type="checkbox" checked="checked">
                <span class="checkmarkbox"></span>
              </label>
            </div>
            <div class="flex-end">
              <button class="button-special">payer ma commande</button>
            </div>
          </div>
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