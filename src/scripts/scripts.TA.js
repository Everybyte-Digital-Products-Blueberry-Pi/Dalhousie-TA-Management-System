/* this function is used to hide and show element when and option is chosen
"box" is the element to hide/showing
use attribute "value" to name the option that decide whether the element should be shown or not
taken from https://www.tutorialrepublic.com/faq/show-hide-divs-based-on-dropdown-selection-in-jquery.php
*/
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

/*this function is used to validate whether or not the input hours are correct
by comparing the sum of all sub-hours to total hours
*/

function checkTotalHours(){
  var arr = document.getElementsByName('hour');
  var total = 0;
  var checkTotal = 0
  var e = document.getElementById("HourSub");

  for (var i = 0; i < arr.length; i++){
    if (parseInt(arr[i].value))
      total += parseInt(arr[i].value);
  }

  if (e.options[e.selectedIndex].value == 0){
    checkTotal = document.getElementById('totalHours').value;

    if (checkTotal == total){
      alert('Correct');
    }
  }

  if (e.options[e.selectedIndex].value != 0){

    if (e.options[e.selectedIndex].value == total){
      alert('Correct');
    }
  }


}
