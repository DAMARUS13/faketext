function c(t){
  console.log(t);
}

$(function() {

    // Hauteur
    $("#nb").spinner({
      min:1,
      value:500,
      stop: function(event){
        generation();
        event.stopPropagation();
      }
    });

    function generation(){
      $.ajax({
        url:'faketext.php',
        type:'POST',
        data:'nb=' + $("#nb").spinner("value"),
        dataType:"text",
        success: function(texte, statut){
          $("#resultat").text(texte);
        },
        error: function(resultat, statut, erreur){
          c('Error : ' + statut + ' ' + erreur);
        }
    });
  }
});