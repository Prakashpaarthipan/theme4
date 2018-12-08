//auto complete function
   	$(document).ready(function() {
       // $(".chosn").customselect();

	$('#txt_emp_name').autocomplete({
		source: function( request, response ) {
		    $.ajax({
				url : 'ajax/ajax_alt_user.php',
				dataType: "json",
				data: {
				   name_startsWith: request.term,
				   	type: 'employee'
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
		autoFocus: true,
		minLength: 0
		});
    });
	

	
	//auto complete function
   	$(document).ready(function() {

    $('#txt_alt_name').autocomplete({
        source: function( request, response ) {
       var empcode = $("#txt_emp_name").val();
       var empcode1 = empcode.split('-');
       var emp_code2 = empcode1[0].trim();
			$.ajax({
				url : 'ajax/ajax_alt_user.php',
				dataType: "json",
				data: {
				   name_startsWith: request.term,
                   emp_code:emp_code2,
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
		autoFocus: true,
		minLength: 0
		});
    });
	
	//SUBMIT PROCESS
	function nsubmit(){
		
			var vurl = "ajax/ajax_alt_user.php";
			//ALERT PRINT TO EMPTY FIELD
          var comments = document.getElementById("txt_emp_name");
          if (comments.value == "") {
			                 alert('FAILED TO SUBMIT');
            
             	return false;
		  }
             var comments = document.getElementById("txt_alt_name");
          if (comments.value == "") {
			                 alert('FAILED TO SUBMIT');
            
             	return false;
		  }
       
			$.ajax({
            type: "POST",
            url: vurl,
			
			data:{
				txt_emp_name:$("#txt_emp_name").val(),
				txt_alt_name:$("#txt_alt_name").val(),
				
                action:'sbmt_insert'
			},
				
			dataType:'html',
            success: function(data1) {
                console.log(data1);
				alert('submitted successfully');
				window.location.reload();

            },
			error: function(response, status, error)
			{		alert(error);
					//alert(response);
					//alert(status);
			}
			});
	}

//edit

	
function nedit(emp,alt){
        $('#txt_emp_name').val(emp);
        $('#txt_alt_name').val(alt);
		$('#form').css('display','block');
        $('#table').css('display','none');
        $('#addbtn').css('display','none');
        $('#sbmt_submit').hide();
        $('#reset').hide();
	
		}

//update

	
function nupdate(){
			
			
			var vurl = "ajax/ajax_alt_user.php";
             $.ajax({
             type: "POST",
             url: vurl,
 			data:{

 				txt_emp_name:$("#txt_emp_name").val(),
				txt_alt_name:$("#txt_alt_name").val(),
				action:'sbmt_update1'
			
 			},
 			dataType:'html',
             success: function(data1) {
				   console.log(data1);

              alert("updated successfully");
			  window.location.reload();
},
 			error: function(response, status, error)
 			{		alert(error);
					//alert(response);
 					//alert(status);
 			}
 			});

 	}
	
//delete
	function ndelete(emp_code){
			var vurl = "ajax/ajax_alt_user.php";

	
 		$.ajax({
             type: "POST",
             url: vurl,
 			data:{
                emp_code1:emp_code,
                action:'deleted'
			
 			},
 			dataType:'html',
             success: function(data) {
                       console.log(data);  

			         alert("deleted successfully");
			          window.location.reload();
               
                    
                
},
 			error: function(response, status, error)
 			{		alert(error);
					//alert(response);
 					//alert(status);
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

