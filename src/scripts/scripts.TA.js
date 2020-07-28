// this function is use to hide and show element when and option is chosen
//"box" is the element to hide/showing
//use attribute "value" to name the option that decide whether the element should be shown or not
$(document).ready(function(){
  $("select").change(function(){
    $(this).find("option:selected").each(function(){
      var optionValue = $(this).attr("value");
      if(optionValue){
        $(".box").not("." + optionValue).hide();
        $("." + optionValue).show();
      } else{
        $(".box").hide();
      }
    });
  }).change();
});
