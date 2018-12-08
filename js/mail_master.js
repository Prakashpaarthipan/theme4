	//auto complete function
   	$(document).ready(function() {
       // $(".chosn").customselect();

	$('#txt_code_name').autocomplete({
		source: function( request, response ) {
		var brncode=document.getElementById('txt_branch').value;

			$.ajax({
				url : 'ajax/ajax_email_details.php',
				dataType: "json",
				data: {
				   name_startsWith: request.term,
                    id:brncode,
				   	type: 'employees'
				},
				success: function( data ) {
					if(data == 'No User Available in this Top core and Sub Core') {
						var ALERT_TITLE = "Message";
						var ALERTMSG = "No User Available in this Top core. Kindly Change this!!";
						createCustomAlert(ALERTMSG, ALERT_TITLE);
					} else {
						response( $.map( data, function( item ) {
							return {
								label: item,
								value: item
							}
						}));
					
					}
				}
			});
		},
		
              change: function(event,ui)
              { if (ui.item == null) 
              {
              $(this).val('');
              $(this).focus(); 
              } 
              },
		autoFocus: true,
		minLength: 0
		});
    });
	



	



	
	
//SECTION,DESIGNATION FROM EMPCODE AND EMPNAME
function insert(id){

		$("#txt_branch").attr("disabled", "true");

      var res = id.split(" - ");
		var brncode=document.getElementById('txt_branch').value;


     $.ajax({
		url: "ajax/ajax_email_details.php?type=designation&empcode="+res[0]+"&id="+brncode,
		dataType: "json"
		
	}).done(function( data )
	{
	   
	   document.getElementById("txt_sec_des").value = data[0];
		return false;
		});
	}
	
	
	
	
	//INSERT PROCESS

function nsubmit(){
		
			var vurl = "ajax/ajax_email_details.php";
			var flag=0;
			//ALERT PRINT TO EMPTY FIELD
          var comments = document.getElementById("txt_branch");
          if (comments.value == "") {
          $.alert({
                    title: '<span style="color:red">Alert!</span>',
                    content: 'Please fill all this field',
                });
          flag=1;
		  }
		 
             var comments = document.getElementById("txt_code_name");
		  
          if (comments.value == "") {
			  $.alert({
                    title: '<span style="color:red">Alert!</span>',
                    content: 'Please fill all this field',
                });
		  
			   flag=1;              
		  }
		   
        var comments = document.getElementById("txt_sec_des");
          if (comments.value == "") {
			                 $.alert({
                    title: '<span style="color:red">Alert!</span>',
                    content: 'Please fill all this field',
                });
			                  flag=1;
		  
		  }
		  
        var comments = document.getElementById("txt_email");
          if (comments.value == "") {
			                 $.alert({
                    title: '<span style="color:red">Alert!</span>',
                    content: 'Please fill all this field',
                });
			                  flag=1;
		  
		  }
		
		   

		  if(flag==0){
		$.confirm({
                        title: 'Confirmation',
                        content: 'Are you sure want to submit?',
                        buttons: {
                            YES: function () {
                               //location.reload();
            

			$.ajax({
            type: "POST",
            url: vurl,
			
			data:{
				txt_branch:$("#txt_branch").val(),
				txt_code_name:$("#txt_code_name").val(),
				txt_sec_des:$("#txt_sec_des").val(),
                txt_email: $('#txt_email').val(),
                action:'sbmt_update'
				
			},
				
			dataType:'html',
            success: function(data1) {
                console.log(data1);
				if(data1==2)
				{
               
                  $.confirm({
                        title: 'Warning',
                        content: 'Already exist!',
                        buttons: {
                            Ok: function () {
                               //location.reload();
                            }
                        }
                    });
                    
	}
				else{

                  $.confirm({
                        title: 'Confirmed',
                        content: 'Submitted successfully',
                        buttons: {
                            Ok: function () {
                             //location.reload();
                            }
                        }
						
                    });
					 //location.reload();
                    }

            },
			error: function(response, status, error)
			{		alert(error);
					//alert(response);
					//alert(status);
			}
			});
		},
						NO: function () {
						//location.reload();

				}
                        }
                    });	
				//window.location.reload();
}
else{
	return false;
}
		}
		


//reload(confirm to cancel)
   function reload() {
    location.reload();
	alert('Confirm to reset');

}

//reset
function resetbtn(){
  document.getElementById('txt_branch').disabled = '';


}


//edit

	
function nedit(branch,empcodename,secdes,email){
        $('#txt_branch').val(branch);
        $('#txt_code_name').val(empcodename);
		$('#txt_sec_des').val(secdes);
		$('#txt_email').val(email);
        $('#form').css('display','block');
        $('#table').css('display','none');
        $('#addbtn').css('display','none');
        $('#sbmt_submit').hide();
        $('#reset').hide();
	}

//update

	
function nupdate(){
		//var vurl = "mail_master.php?sbmt_update1=update";
			var vurl = "ajax/ajax_email_details.php";
			var flag=0;
			
			
			if(flag==0){

			$.confirm({
                        title: 'Confirmation',
                        content: 'Are you sure want to update?',
                        buttons: {
                            YES: function () {
              

 		$.ajax({
             type: "POST",
             url: vurl,
 			data:{

 				txt_branch:$("#txt_branch").val(),
				txt_code_name:$("#txt_code_name").val(),
				txt_sec_des:$("#txt_sec_des").val(),
                txt_email: $('#txt_email').val(),
                action:'sbmt_update1'
			
 			},
 			dataType:'html',
             success: function(data1) {
				   console.log(data1);

               $.confirm({
                    title: '<span style="color:red">Alert</span>',
                    content: 'Updated successfully...',
					buttons: {
                            Ok: function () {
								//location.reload();
              
					}
					}
					
                });


},
 			error: function(response, status, error)
 			{		alert(error);
					//alert(response);
 					//alert(status);
 			}
 			});

						},

						NO: function () {
							 //location.reload();

				}
            
                        }

                    });	
			}

 		else{
			return false;
		}
		  
 	}
	
	//delete
	function ndelete(emp_code){
			var vurl = "ajax/ajax_email_details.php";	
			$.confirm({
                        title: 'Confirmation',
                        content: 'Are you sure want to delete?',
                        buttons: {
                            YES: function () {
                            $.ajax({
             type: "POST",
             url: vurl,
 			data:{
                emp_code:emp_code,
                action:'deleted'
			},
 			dataType:'html',
             success: function(data) {
                if (data=="delete") {
			          $.alert({
                   title: '<span style="color:red">Confirmed</span>',

                    content: 'Deleted successfully...',
                });
			     $('#delete_'+emp_code).prop('disabled',true);     
                }else{
                $.alert({
                    title: '<span style="color:red">Confirmed</span>',
                    content: 'Failed to delete...',
                });  
				
				}
								 location.reload();

},
 			error: function(response, status, error)
 			{		alert(error);
					//alert(response);
 					//alert(status);
 			}
 			}); 
			
			}, 
			NO: function () {
							// location.reload();

				}
                        }
                    });	
 		
			                           

 		}
		

 
 //DISPLAY FUNCTION
function add(){
		       $('#form').css('display','block');
         		$('#table').css('display','none');
		       $('#addbtn').css('display','none');
                $('#txt_update').hide();
			}


			//email valid or invalid process
function email()
{
	var x = $('#txt_email').val();

		  var atpos = x.indexOf("@");
		  var dotpos = x.lastIndexOf(".");
		  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		    //alert("Not a valid e-mail address");
			$.alert({
                    title: '<span style="color:red">Confirmed</span>',
                    content: 'Not a valid email address...',
                });  
				
		    $('#txt_email').css('border','1px solid red');
		    
		    return false;
		  }
		  else{
		  	$('#txt_email').css('border','1px solid #ccc');
		  }

}
     