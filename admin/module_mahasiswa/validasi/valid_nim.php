
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#nim").change(function(){ //if theres a change in the nim textbox

    var nim = $("#nim").val();//Get the value in the nim textbox
    if(nim.length > 5){//if the lenght greater than 3 characters
      $("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "module_mahasiswa/validasi/ajax_check_nim.php",  //file name
        data: "nim="+ nim,  //data
        success: function(server_response){

          $("#availability_status").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_nim.php return value "0"
	            $("#availability_status").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status").html('<div class="valid-false"> NIM Sudah Ada </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status").html('<div class="valid-false"> NIM Minimal 6 Karakter  </div>');
  //if in case the nim is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
