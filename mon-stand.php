<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div id="globalWrapper" class="globalWrapper">
  <div class="contentWrapper">
    <div class="title-page">
      <h1>Votre stand n°G56</h1>
      Formule NUE - 30m² / L. 3,50m x l. 2,25m x H. 2,40m
      <br /> Votre décorateur : nom société - civilité + prénom + nom
    </div>

    <ul class="tabs">
      <li class="active" rel="tab1">votre formule
        <span class="pastille-red">1</span>
      </li>
      <li rel="tab2">votre enseigne
      <span class="pastille-green"><i class="material-icons md-dark">check</i></span>
      </li>
      <li rel="tab3">vos documents
        <span class="pastille-green">1</span>
      </li>
      <li rel="tab4">vos elements techniques
      <span class="pastille-red">4</span>
      </li>
    </ul>
    <div class="tab_container">
        <h3 class="tab_drawer_heading" rel="tab1">
            <span>votre formule</span>
            <i class="material-icons md-dark">arrow_right</i>
          </h3>
          <section id="tab1" class="tab_content first-hide-mobile">
            <?php include 'includes/mon-stand--tab1.php'; ?>
          </section>
          <!-- #tab1 -->
    
    
          <h3 class="tab_drawer_heading" rel="tab2">
            <span>votre enseigne</span>
            <i class="material-icons md-dark">arrow_right</i>
          </h3>
          <section id="tab2" class="tab_content">
            <?php include 'includes/mon-stand--tab2.php'; ?>
          </section>
          <!-- #tab2 -->
    
    
          <h3 class="tab_drawer_heading" rel="tab3">
              <span>vos documents</span>
              <i class="material-icons md-dark">arrow_right</i>
          </h3>
          <section id="tab3" class="tab_content">
            <?php include 'includes/mon-stand--tab3.php'; ?>
          </section>
          <!-- #tab3 -->
    
          <h3 class="tab_drawer_heading" rel="tab4">
              <span>vos éléments techniques</span>
              <i class="material-icons md-dark">arrow_right</i>
          </h3>
          <section id="tab4" class="tab_content">
            <?php include 'includes/mon-stand--tab4.php'; ?>
          </section>


 
    </div>
    <?php include 'footer.php'; ?>
    <!-- .tab_container -->
  </div>

  </div>
  <script src="js/jquery.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/tabs.js"></script>
  <script src="js/modals.js"></script>

  </body>

  </html>