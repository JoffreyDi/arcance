<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div id="globalWrapper" class="globalWrapper">
  <div class="contentWrapper">
    <div class="title-page">
      <h1>Vos commandes pour le stand n°G56</h1>
      Formule NUE - 30m² / L. 3,50m x l. 2,25m x H. 2,40m
      <br /> Votre décorateur : nom société - civilité + prénom + nom
    </div>

    <ul class="tabs">
      <li class="active" rel="tab1">vos devis
        <span class="pastille-red">1</span>
      </li>
      <li rel="tab2">vos factures
      </li>
      <li rel="tab3">vos livraisons
        <span class="pastille-green">1</span>
      </li>
      <li rel="tab4">adresse de facturation
        <span class="pastille-green">1</span>
      </li>
    </ul>
    <div class="tab_container">

      <h3 class="d_active tab_drawer_heading" rel="tab1">
      <span>vos devis</span>
      <i class="material-icons md-dark">arrow_right</i>
      </h3>
      <section id="tab1" class="tab_content">
        <?php include 'includes/mes-commandes--tab1.php'; ?>
      </section>
      <!-- #tab1 -->


      <h3 class="tab_drawer_heading" rel="tab2">
      <span>vos facture</span>
      <i class="material-icons md-dark">arrow_right</i>
      </h3>
      <section id="tab2" class="tab_content">
      <?php include 'includes/mes-commandes--tab2.php'; ?>
      </section>
      <!-- #tab2 -->


      <h3 class="tab_drawer_heading" rel="tab3">
      <span>vos livraisons</span>
      <i class="material-icons md-dark">arrow_right</i>
      </h3>
      <section id="tab3" class="tab_content">
      <?php include 'includes/mes-commandes--tab3.php'; ?>
      </section>
      <!-- #tab3 -->

     <h3 class="tab_drawer_heading" rel="tab4">
     <span>adresse de facturation</span>
     <i class="material-icons md-dark">arrow_right</i>
     </h3>
      <section id="tab4" class="tab_content">
      <?php include 'includes/mes-commandes--tab4.php'; ?>
      </section>

    </div>
    <?php include 'footer.php'; ?>
    <!-- .tab_container -->
  </div>
  
  <script src="js/jquery.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/tabs.js"></script>
  <script src="js/modals.js"></script>
  </body>

  </html>