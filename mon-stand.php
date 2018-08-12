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
        <span class="pastille-green">1</span>
      </li>
      <li rel="tab3">vos documents
        <span class="pastille-green">1</span>
      </li>
      <li rel="tab4">vos elements techniques
        <span class="pastille-green">1</span>
      </li>
    </ul>
    <div class="tab_container">

      <h3 class="d_active tab_drawer_heading" rel="tab1">votre formule</h3>
      <section id="tab1" class="tab_content">
        <?php include 'mon-stand--tab1.php'; ?>
      </section>
      <!-- #tab1 -->


      <h3 class="tab_drawer_heading" rel="tab2">votre enseigne</h3>
      <section id="tab2" class="tab_content">
      <?php include 'mon-stand--tab2.php'; ?>
      </section>
      <!-- #tab2 -->


      <h3 class="tab_drawer_heading" rel="tab3">vos documents</h3>
      <section id="tab3" class="tab_content">
      <?php include 'mon-stand--tab3.php'; ?>
      </section>
      <!-- #tab3 -->

     <h3 class="tab_drawer_heading" rel="tab4">vos éléments techniques</h3>
      <section id="tab4" class="tab_content">
      <?php include 'mon-stand--tab4.php'; ?>
      </section>



    </div>
    <!-- .tab_container -->
  </div>



  <!-- The Modal -->
  <div id="modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor lacinia quam, et viverra arcu. Donec et
        dolor vehicula, tristique diam sed, porta turpis. Phasellus fermentum elit eu malesuada scelerisque. Integer ut pretium
        metus, id rhoncus massa. Fusce lacinia neque quis enim dignissim, sed fringilla turpis sollicitudin. Suspendisse
        potenti. Morbi et blandit tellus, sed laoreet felis. Integer turpis nisl, placerat at porttitor a, ultrices eget
        magna. Vivamus nec odio laoreet, commodo mauris ut, feugiat velit. Curabitur tincidunt lacinia tortor, vitae elementum
        ligula tempus et. Vivamus lacinia mollis massa eu posuere. Vestibulum imperdiet enim sed eros laoreet viverra. Sed
        et elit eu ante gravida molestie tempor sed lacus.</p>

      <p>Proin est dui, tempor vel pellentesque vitae, tristique eu libero. Proin facilisis sed odio sit amet suscipit. Integer
        facilisis mauris ipsum, at eleifend justo iaculis vitae. In efficitur gravida hendrerit. Pellentesque volutpat, urna
        eu lacinia iaculis, est arcu faucibus ante, id congue sem erat sit amet urna. Sed et urna nec eros faucibus rhoncus
        convallis ac nisi. Suspendisse finibus mollis purus vel malesuada. Nunc nec condimentum neque. Pellentesque habitant
        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id euismod massa. Etiam condimentum
        risus et magna maximus, sit amet mollis nunc eleifend. Duis mi justo, pretium id maximus et, rhoncus eget lacus.
        Fusce vitae nunc at mauris maximus mattis.</p>

      <p>Vivamus laoreet eros et lacus sodales auctor. Quisque odio risus, imperdiet sit amet enim iaculis, semper consectetur
        nibh. Cras sagittis est felis, vitae venenatis est suscipit eget. Vestibulum molestie tincidunt faucibus. Ut blandit
        id dui fermentum consequat. Suspendisse in placerat massa. Ut eleifend dolor eu est vestibulum fermentum. Sed commodo
        a augue a dictum.</p>

      <p>Donec tincidunt neque ante, sit amet pulvinar neque pellentesque in. Fusce cursus lacus eget diam vehicula rhoncus.
        Etiam eget porttitor enim, in faucibus nibh. Donec interdum diam ante, ac consectetur neque cursus eu. Phasellus
        ornare, enim et molestie viverra, metus massa bibendum ligula, eget ultricies quam nibh nec justo. In efficitur sit
        amet ex sed pretium. Nullam tincidunt, enim eu finibus commodo, arcu ante elementum velit, vitae cursus sem lacus
        vitae odio. Donec eu nisi accumsan, convallis libero a, convallis dolor. Etiam eget ultrices erat, a iaculis lacus.
        Aliquam nunc tellus, suscipit eu nisi lacinia, dictum tincidunt eros.</p>

      <p>In mi magna, lobortis a sollicitudin eget, luctus sagittis lectus. Morbi tincidunt, erat sit amet vestibulum posuere,
        eros mi laoreet urna, non malesuada nunc nisi et felis. Fusce nec rutrum quam. Nulla facilisi. Quisque egestas est
        vestibulum, auctor mi vestibulum, pellentesque erat. Donec pretium mattis mi nec lacinia. Quisque luctus rhoncus
        odio, ac imperdiet orci maximus et.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor lacinia quam, et viverra arcu. Donec et
        dolor vehicula, tristique diam sed, porta turpis. Phasellus fermentum elit eu malesuada scelerisque. Integer ut pretium
        metus, id rhoncus massa. Fusce lacinia neque quis enim dignissim, sed fringilla turpis sollicitudin. Suspendisse
        potenti. Morbi et blandit tellus, sed laoreet felis. Integer turpis nisl, placerat at porttitor a, ultrices eget
        magna. Vivamus nec odio laoreet, commodo mauris ut, feugiat velit. Curabitur tincidunt lacinia tortor, vitae elementum
        ligula tempus et. Vivamus lacinia mollis massa eu posuere. Vestibulum imperdiet enim sed eros laoreet viverra. Sed
        et elit eu ante gravida molestie tempor sed lacus.</p>

      <p>Proin est dui, tempor vel pellentesque vitae, tristique eu libero. Proin facilisis sed odio sit amet suscipit. Integer
        facilisis mauris ipsum, at eleifend justo iaculis vitae. In efficitur gravida hendrerit. Pellentesque volutpat, urna
        eu lacinia iaculis, est arcu faucibus ante, id congue sem erat sit amet urna. Sed et urna nec eros faucibus rhoncus
        convallis ac nisi. Suspendisse finibus mollis purus vel malesuada. Nunc nec condimentum neque. Pellentesque habitant
        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id euismod massa. Etiam condimentum
        risus et magna maximus, sit amet mollis nunc eleifend. Duis mi justo, pretium id maximus et, rhoncus eget lacus.
        Fusce vitae nunc at mauris maximus mattis.</p>

      <p>Vivamus laoreet eros et lacus sodales auctor. Quisque odio risus, imperdiet sit amet enim iaculis, semper consectetur
        nibh. Cras sagittis est felis, vitae venenatis est suscipit eget. Vestibulum molestie tincidunt faucibus. Ut blandit
        id dui fermentum consequat. Suspendisse in placerat massa. Ut eleifend dolor eu est vestibulum fermentum. Sed commodo
        a augue a dictum.</p>

      <p>Donec tincidunt neque ante, sit amet pulvinar neque pellentesque in. Fusce cursus lacus eget diam vehicula rhoncus.
        Etiam eget porttitor enim, in faucibus nibh. Donec interdum diam ante, ac consectetur neque cursus eu. Phasellus
        ornare, enim et molestie viverra, metus massa bibendum ligula, eget ultricies quam nibh nec justo. In efficitur sit
        amet ex sed pretium. Nullam tincidunt, enim eu finibus commodo, arcu ante elementum velit, vitae cursus sem lacus
        vitae odio. Donec eu nisi accumsan, convallis libero a, convallis dolor. Etiam eget ultrices erat, a iaculis lacus.
        Aliquam nunc tellus, suscipit eu nisi lacinia, dictum tincidunt eros.</p>

      <p>In mi magna, lobortis a sollicitudin eget, luctus sagittis lectus. Morbi tincidunt, erat sit amet vestibulum posuere,
        eros mi laoreet urna, non malesuada nunc nisi et felis. Fusce nec rutrum quam. Nulla facilisi. Quisque egestas est
        vestibulum, auctor mi vestibulum, pellentesque erat. Donec pretium mattis mi nec lacinia. Quisque luctus rhoncus
        odio, ac imperdiet orci maximus et.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor lacinia quam, et viverra arcu. Donec et
        dolor vehicula, tristique diam sed, porta turpis. Phasellus fermentum elit eu malesuada scelerisque. Integer ut pretium
        metus, id rhoncus massa. Fusce lacinia neque quis enim dignissim, sed fringilla turpis sollicitudin. Suspendisse
        potenti. Morbi et blandit tellus, sed laoreet felis. Integer turpis nisl, placerat at porttitor a, ultrices eget
        magna. Vivamus nec odio laoreet, commodo mauris ut, feugiat velit. Curabitur tincidunt lacinia tortor, vitae elementum
        ligula tempus et. Vivamus lacinia mollis massa eu posuere. Vestibulum imperdiet enim sed eros laoreet viverra. Sed
        et elit eu ante gravida molestie tempor sed lacus.</p>

      <p>Proin est dui, tempor vel pellentesque vitae, tristique eu libero. Proin facilisis sed odio sit amet suscipit. Integer
        facilisis mauris ipsum, at eleifend justo iaculis vitae. In efficitur gravida hendrerit. Pellentesque volutpat, urna
        eu lacinia iaculis, est arcu faucibus ante, id congue sem erat sit amet urna. Sed et urna nec eros faucibus rhoncus
        convallis ac nisi. Suspendisse finibus mollis purus vel malesuada. Nunc nec condimentum neque. Pellentesque habitant
        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id euismod massa. Etiam condimentum
        risus et magna maximus, sit amet mollis nunc eleifend. Duis mi justo, pretium id maximus et, rhoncus eget lacus.
        Fusce vitae nunc at mauris maximus mattis.</p>

      <p>Vivamus laoreet eros et lacus sodales auctor. Quisque odio risus, imperdiet sit amet enim iaculis, semper consectetur
        nibh. Cras sagittis est felis, vitae venenatis est suscipit eget. Vestibulum molestie tincidunt faucibus. Ut blandit
        id dui fermentum consequat. Suspendisse in placerat massa. Ut eleifend dolor eu est vestibulum fermentum. Sed commodo
        a augue a dictum.</p>

      <p>Donec tincidunt neque ante, sit amet pulvinar neque pellentesque in. Fusce cursus lacus eget diam vehicula rhoncus.
        Etiam eget porttitor enim, in faucibus nibh. Donec interdum diam ante, ac consectetur neque cursus eu. Phasellus
        ornare, enim et molestie viverra, metus massa bibendum ligula, eget ultricies quam nibh nec justo. In efficitur sit
        amet ex sed pretium. Nullam tincidunt, enim eu finibus commodo, arcu ante elementum velit, vitae cursus sem lacus
        vitae odio. Donec eu nisi accumsan, convallis libero a, convallis dolor. Etiam eget ultrices erat, a iaculis lacus.
        Aliquam nunc tellus, suscipit eu nisi lacinia, dictum tincidunt eros.</p>

      <p>In mi magna, lobortis a sollicitudin eget, luctus sagittis lectus. Morbi tincidunt, erat sit amet vestibulum posuere,
        eros mi laoreet urna, non malesuada nunc nisi et felis. Fusce nec rutrum quam. Nulla facilisi. Quisque egestas est
        vestibulum, auctor mi vestibulum, pellentesque erat. Donec pretium mattis mi nec lacinia. Quisque luctus rhoncus
        odio, ac imperdiet orci maximus et.</p>

    </div>

  </div>
  <script src="js/jquery.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/tabs.js"></script>
  <script src="js/modals.js"></script>
  <?php include 'footer.php'; ?>
  </body>

  </html>