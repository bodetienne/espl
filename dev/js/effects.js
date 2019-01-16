$(function(){

 // var i = 1;
 //
 // for(i=1; i<=5; i++){
 //   var bg_i = $(".btn-"+i).css('background');
 //   var border_i = $(".btn-"+i).css('border-color');
 //   var class_i = $(".btn-"+i).css('class');
 //   console.log(i +" : "+color_i);
 //   console.log(i +" : "+bg_i);
 //   console.log(i +" : "+border_i);
 //
 //   $(".btn-"+i).mouseover(function(){
 //     $(this).css('background', border_i);
 //     $(this).css('color', "white");
 //     $(this).css('border', "1px solid white" );
 //   });
 //   $(".btn-"+i).mouseout(function(){
 //    $(this).css('background', bg_i);
 //     $(this).css('color', color_i);
 //     $(this).css('border', '1px solid '+ border_i);
 //  });
 //
 // }


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



});
