$('#myCarousel').carousel({
    interval: 3000,
 })

 window.onload = function() {
    // Affiche le message d'alerte
    document.getElementById("cookie-banner").style.display = "block";
  
    // Lorsque l'utilisateur clique sur le bouton "Accepter",
    // le message d'alerte est masqué
    document.getElementById("cookie-accept").onclick = function() {
      document.getElementById("cookie-banner").style.display = "none";
    };
  };