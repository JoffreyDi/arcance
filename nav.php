<div id="overlay" class="overlay" onclick="closeNav()"></div>
<div onclick="openNav()" class="burger-button">
  <i class="material-icons md-dark search-icon">menu</i>
</div>

<header class="align-item-center">
  <div class="header-content">
    <div class="row spaceBetween">

      <div class="search-section flex">
        <div class="search-bar align-item-center">
          <i class="material-icons md-dark search-icon">search</i>
          <input type="text" placeholder="Rechercher dans la boutique">
        </div>
        <div class="separator"></div>
        <div class="category-select align-item-center">
          Catégories
          <i class="material-icons md-dark">arrow_drop_down</i>
        </div>
        <div class="separator"></div>
      </div>
      <div class="infos-section align-item-center flex-end">
        <div class="header-contentlink">Réglement</div>
        <div class="header-contentlink">Informations</div>
        <div class="header-contentlink">Informations</div>
        <div id="link" class="header-link align-item-center langage-dropdown" onclick="languageDropdown()">
          FR
        </div>
          <div id="myDropdown" class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        <i class="header-link icon-search-mobile align-item-center material-icons md-dark">search</i>
        <i class="header-link icon-profil-mobile align-item-center material-icons md-dark">account_circle</i>
        <i class="header-link icon-shopping-card align-item-center material-icons md-dark">shopping_cart</i>
      </div>
    </div>
  </div>
</header>


<aside id="aside">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <section class="myaccount">
    <div class="myaccount-avatar">
      <span class="stand-number">G65</span>
    </div>
    <div class="myaccount-select">Mon compte
      <i class="material-icons md-dark">arrow_drop_down</i>
    </div>

    <div class="user-panel">
      <img src="assets/slideshow/image2.jpg" style="width:100%">
      <span class="user-panel-close">close ta race</span>

    </div>

  </section>

  <nav>
    <ul>
      <li class="main-link">
        <i class="material-icons md-dark">face</i>Boutique</li>
      <li class="main-link">
        <i class="material-icons md-dark">face</i>Mon stand</li>
      <li class="main-link">
        <i class="material-icons md-dark">face</i>Mes commandes</li>
      <li class="main-link">
        <i class="material-icons md-dark">face</i>Mes messages</li>
    </ul>
  </nav>

</aside>