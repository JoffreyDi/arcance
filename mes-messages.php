<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div id="globalWrapper" class="globalWrapper">
  <div class="contentWrapper">
    <div class="title-page">
      <h1>Vos messages pour le stand n°G56</h1>
      Formule NUE - 30m² / L. 3,50m x l. 2,25m x H. 2,40m
      <br /> Votre décorateur : nom société - civilité + prénom + nom
    </div>

    <ul class="tabs">
      <li class="active" rel="tab1">messages reçus
        <span class="pastille-red">1</span>
      </li>
      <li rel="tab2">messages envoyés</li>
      <li rel="tab3">offres spéciales</li>
    </ul>
    <div class="tab_container">

      <h3 class="d_active tab_drawer_heading" rel="tab1">messages reçus</h3>
      <section id="tab1" class="tab_content">
        <?php include 'includes/mes-messages--tab1.php'; ?>
      </section>
      <!-- #tab1 -->


      <h3 class="tab_drawer_heading" rel="tab2">messages envoyés</h3>
      <section id="tab2" class="tab_content">
      <?php include 'includes/mes-messages--tab2.php'; ?>
      </section>
      <!-- #tab2 -->


      <h3 class="tab_drawer_heading" rel="tab3">offres spéciales</h3>
      <section id="tab3" class="tab_content">
      <?php include 'includes/mes-messages--tab3.php'; ?>
      </section>
      <!-- #tab3 -->

    </div>
    <?php include 'footer.php'; ?>
    <!-- .tab_container -->
  </div>
  
  <script src="js/jquery.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/tabs.js"></script>
  <script src="js/modals.js"></script>
  </body>

  </html>