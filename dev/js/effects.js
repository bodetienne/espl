$(function(){




  $(".btn-choix").mouseover(function(){
    var id1 = $(this).attr('id');
    console.log(id1);
    var color1 = $(this).css('color');
    var bg1 = $(this).css('background');
    var border1 = $(this).css('border-color');
    var newcolor = bg1;
    var newbg = border1;

    $('#'+id1).click(function(){
      console.log(newcolor);
      console.log(newbg);
      $(this).css('color', "white");
      $(this).css('background', newbg);
    });

  });


  //Animation bouton help quand la souris passe dessus
  $('.block-footer .help.mds .bouton-help img').mouseover(function() {
    $(this).attr('src', './elements/help-button-hover.png');
  });
  
  //Réinitialisation bouton help quand la souris quitte l'image
  $('.block-footer .help.mds .bouton-help img').mouseout(function() {
    $(this).attr('src', './elements/help-button.png');
  });


});
