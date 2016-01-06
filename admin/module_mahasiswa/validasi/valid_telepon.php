
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#telepon").change(function(){ //if theres a change in the telepon textbox

    var telepon = $("#telepon").val();//Get the value in the telepon textbox
    if(telepon.length > 5){//if the lenght greater than 3 characters
      $("#availability_status2").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "module_mahasiswa/validasi/ajax_check_telepon.php",  //file name
        data: "telepon="+ telepon,  //data
        success: function(server_response){

          $("#availability_status2").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_telepon.php return value "0"
	            $("#availability_status2").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status2").html('<div class="valid-false"> Telepon Sudah digunakan </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status2").html('<div class="valid-false"> telepon minimal 6 angka  </div>');
  //if in case the telepon is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
