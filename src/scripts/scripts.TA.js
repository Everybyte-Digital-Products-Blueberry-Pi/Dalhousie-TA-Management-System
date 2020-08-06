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
  var hour1 = document.getElementById('inclassDuties').value;
  var hour2 = document.getElementById('officeDuties').value;
  var hour3 = document.getElementById('markingHours').value;
  var hour4 = document.getElementById('otherHours').value;
  var arr = [];
  arr.push(hour1);
  arr.push(hour2);
  arr.push(hour3);
  arr.push(hour4);
  //get the sub-hours from input and put in the array
  var total = 0;
  var checkTotal = 0
  var e = document.getElementById("HourSub");
  var x = document.getElementById('validate');
  var y = document.getElementById('hourSubmit')
  var z = document.getElementById('validated');
//loop through the array and calculate the sum of the sub-hours
  for (var i = 0; i < arr.length; i++){
    if (parseInt(arr[i]))
      total += parseInt(arr[i]);
  }
/*if the user choose other, set the value to 0 and compare the
new total hour the user put in to the sub-hours */
  if (e.options[e.selectedIndex].value == 0){
    checkTotal = document.getElementById('totalHours').value;
    if (checkTotal < 0 || checkTotal > 130)){
      alert('Hours should be between 0 and 130');
    } else{
        if (!(checkTotal == total)){
            alert('Total hours does not match, please check the value in the sub-hours section');
          } else{
            y.style.visibility = 'visible';
            x.style.display = 'none';
            z.style.display = 'block';
          }
      }
    }
/*if the user choose one of the givenn option, calculate the
sum of sub-hours to the total hours that the user choose*/
  if (e.options[e.selectedIndex].value != 0){

    if (e.options[e.selectedIndex].value != total){
      alert('Total hours does not match, please check the value in the sub-hours section');
    } else{
      y.style.visibility = 'visible';
      x.style.display = 'none';
      z.style.display = 'block';
    }
  }
}
