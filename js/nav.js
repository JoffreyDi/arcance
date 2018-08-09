
$( ".close-panel" ).click(function() {
    $( ".user-panel" ).slideUp( "slow", function() {
      // Animation complete.
    });
  });
  
  $( ".myaccount-select" ).click(function() {
    $( ".user-panel" ).slideDown( "slow", function() {
      // Animation complete.
    });
  });
  
  
  
  function openNav() {
    document.getElementById("aside").classList.add("aside-open");
    document.getElementById("overlay").style.left = "0";
  }
  
  function closeNav() {
    document.getElementById("aside").classList.remove("aside-open");
    document.getElementById("overlay").style.left = "-100%";
  }
  
