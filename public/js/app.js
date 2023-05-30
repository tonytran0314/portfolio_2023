$(document).ready(function(){

    let dropdownStatus = false;
    $('#nav_icon').click(function(){
        if(dropdownStatus) {
            $('#dropdown_menu').show();
            dropdownStatus = false;
        } else {
            $('#dropdown_menu').hide();
            dropdownStatus = true;
        }
    });
  
  });