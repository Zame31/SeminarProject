
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#kode_lokasi").change(function(){ //if theres a change in the kode_lokasi textbox

    var kode_lokasi = $("#kode_lokasi").val();//Get the value in the kode_lokasi textbox
    if(kode_lokasi.length > 5){//if the lenght greater than 3 characters
      $("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "module_admin/validasi/ajax_check_lokasi.php",  //file name
        data: "kode_lokasi="+ kode_lokasi,  //data
        success: function(server_response){

          $("#availability_status").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_kode_lokasi.php return value "0"
	            $("#availability_status").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status").html('<div class="valid-false"> Username Sudah Digunakan </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status").html('<div class="valid-false"> Username Minimal 6 Karakter  </div>');
  //if in case the kode_lokasi is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
