 $(document).ready(function ($) {
        	
        $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover'
})    
   $('.multiselect').dropdown({
  // options here
});


   var ordercount=$("#ordcount").val();
   for(var i=1;i<=ordercount;i++){
    $("#count"+i).attr('data-original-title', $("#counts"+i).html())
          .tooltip('fixTitle');



   }




    $(".reqdays").keydown(function (e) {
   //alert(e);
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
          
            $('#txt_empcode').autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url : 'ajax/ajax_employee_details.php',
                        type: 'post',
                        dataType: "json",
                        data: {
                           name_startsWith: request.term,
                           type: 'employee'
                        },
                        success: function( data ) {
                            if(data == '0') {
                                $('#txt_empcode').val('');
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
            $("#load_page").fadeOut("slow");

            // Search the Box
            $('#txt_search').keyup(function(){
                $.each($('#id_monitor_board').find('div'), function(){
                    //alert('ga');
                    if($(this).text().toLowerCase().indexOf($('#txt_search').val()) == -1){
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            });
          
        $('.ui-sortable').sortable({
            items: '> :not(.nodragorsort)'
        });

        // $('#datepicker-alterdate').Zebra_DatePicker({
        //     format: 'd-m-Y',
        //     direction: true
        // });
 });
 
 

       
        function showHistory(supcode,poryear,pornumb,pordate,id) {

          $('#orderhistory'+id).toggle();
         
        }

        
    function hover_box(){
  
       $('.hover-box').mouseover(function (){
       
        $(this).css('box-shadow','0 0 7px black');
       });
       $('.hover-box').mouseout(function (){
        $(this).css('box-shadow','none');
       });
       $('.hover-box-def').mouseover(function (){
        $(this).css('box-shadow','0 0 10px black');
       });
       $('.hover-box-def').mouseout(function (){
        $(this).css('box-shadow','0 0 7px black');
       });
     }
     hover_box();
   
   function selectedfile(e,id){
alert('hi');     
 var input = document.getElementById('upload'+id);
alert(input);
  
    for(var i=0;i<input.files.length;i++){
      var count=i+1;
    console.log(input.files[i].name);
    $('#files'+id).append('<p style="margin-bottom:0;font-size:10px">'+count+'.' +input.files[i].name+'</p>');
  }  
}
function setremarks(val,id){

    $('#remarks'+id).val(val);
  
  
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
 
 function selectorder(val){
          //alert(val);

          $.ajax({
                  
                url:"ajax/ajax_load_purchase_order.php",
                type: "POST",
                data: {selectval:val,
                      action:'order_search'},
                
                dataType:"html",
                success:function(data){
                 console.log(data);
                 $('#selection_board').html(data);
                 $('#load_page').hide();
        // blink();
                 hover_box();
                   // location.reload();
                   //window.location.reload();
                    var ordercount=$("#ordcount").val();
                   for(var i=1;i<=ordercount;i++){
                    $("#count"+i).attr('data-original-title', $("#counts"+i).html())
                          .tooltip('fixTitle');



                   }
                }

            });



         }

         function blinkFont(id)
 {
   document.getElementById(id).style.display="none"
   setTimeout("setblinkFont(id)",1000)
 }

 function setblinkFont(id)
 {
   document.getElementById(id).style.display="block"
   setTimeout("blinkFont()",1000)
 }


    // To find and fix the height dynamically for Footer scroll bar 
    var window_hght = (window.innerHeight);
    //alert("height:"+window_hght);
    $('.content-frame-body1').height(window_hght); // This is the class to fix the window height
    // To find and fix the height dynamically for Footer scroll bar 
 
function selecttoggle(v){
  
  if($('#dropsec'+v).css('display')=='none')
  {
    $('#dropdown'+v).css('background-color','#cc3300');
    $('#dropdown'+v).html('-');
//$('#orderhistory'+v).css('display','none');

  }else{
    $('#dropdown'+v).css('background-color','#29a329');
    $('#dropdown'+v).html('+');
  }
    
  $('#dropsec'+v).toggle();
  
  
}
function showboard(val){
  //alert(val);
console.log(val);
  $('#load_page').show();
  $.ajax({
                url:"ajax/ajax_load_purchase_order.php",
                type: "POST",
                data: {selectval:val,
                  action:'section_load'},
                
                dataType:"html",
                success:function(data){
                 console.log(data);
                 $('#selection_board').html(data);
                 $('#load_page').hide();
                 // blink(); 
                  hover_box();
                   var ordercount=$("#ordcount").val();
                   for(var i=1;i<=ordercount;i++){
                    $("#count"+i).attr('data-original-title', $("#counts"+i).html())
                          .tooltip('fixTitle');



                   }

                   //location.reload();
                   //window.location.reload();
                }
            });
  
}

function submitform(frm_name,id,sta,znepcde){
  //alert(id);
  
  var val=$('#znedays'+id).val();
  
  //alert(val);
  if(val.trim('')!=""){
  $('#load_page').show();
   var form_data = new FormData(document.getElementById(frm_name));
  form_data.append('action','finish');
  form_data.append('znepcde',znepcde);
  form_data.append('id', id);
  form_data.append('sta', sta);

            $.ajax({
                url:"ajax/ajax_purchase_order.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,
                dataType:"html",
                success:function(data){
                location.reload();
            
//$('#load_page').hide();
                   console.log(data);
                   
                   //window.location.reload();
                }
                
            });
}
else{
  alert("Please Enter Required Days");
  return false;
}
}
function submitform1(frm_name,id,sta,znepcde){
  //alert(id);
  console.log(id);
  console.log($('#orderstatus'+id+1).val());
  //$('#load_page').show();
  var flag=0; var count=0;
  var length=$('#count'+id).val();
if(sta!=1){
 for(var i=1;i<sta;i++){
  var value=$('#orderstatus'+id+i).val();
  console.log(value);
     if(value=='N' || value=='T'){
      count=count+1;
      
     }

}
 
}


console.log(count);
if(count==0){  
  $('#load_page').show();
   var form_data = new FormData(document.getElementById(frm_name));
  form_data.append('action','finish');
  form_data.append('znepcde',znepcde);
  form_data.append('id', id);
form_data.append('sta', sta);
            $.ajax({
                url:"ajax/ajax_purchase_order.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,
                dataType:"html",
                success:function(data){                
            
                  //$('#load_page').hide();
                  // window.location.href('purchase_order_track.php');
                   // console.log(data);
                    location.reload();
                   //window.location.reload();
                }
                
            });

        }else{
          alert("please complete the previous stages first!");
          return false;
        }
}
// $(document).ajaxStop(function(){
//     window.location.reload();
// });
function updateform(frm_name,act,id,sta,znepcde){
  $('#load_page').show();
var form_data = new FormData(document.getElementById(frm_name));
form_data.append('action', act);
form_data.append('znepcde', znepcde);
form_data.append('id', id);
form_data.append('sta', sta);
console.log(form_data);
            $.ajax({
                url:"ajax/ajax_purchase_order.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,
                dataType:"html",
                success:function(data){
                
                    console.log("entered");
//                  $('#load_page').hide();
                    console.log(data);
                   location.reload();
                   //window.location.reload();
                }
            });
}



//reload div

function reload_page(id,znecode,znepcde,poryear,pornumb,pordate,supcode){

 $.ajax({
                url:"ajax/ajax_purchase_order_process.php",
                type: "POST",
                data: {id:id,
                  action:'reloadprocess',
                  znecode:znecode,
                  znepcde:znepcde,
                  poryear:poryear,
                  pordate:pordate,
                  pornumb:pornumb,
                  supcode:supcode
                  },
                
                dataType:"html",
                success:function(data){
                $('#task_item'+id).html(data);
        //blink1();
                $('#load_page').hide();
          
                     console.log(data);
                 
                  
                   
                   //location.reload();
                   //window.location.reload();
                }
            });

}


function reload_gradepage(id,znecode,znepcde,poryear,pornumb,pordate,supcode){

 $.ajax({
                url:"ajax/ajax_purchase_order_process.php",
                type: "POST",
                data: {id:id,
                  action:'reload_gradeprocess',
                  znecode:znecode,
                  znepcde:znepcde,
                  poryear:poryear,
                  pordate:pordate,
                  pornumb:pornumb,
                  supcode:supcode
                  },
                
                dataType:"html",
                success:function(data){
                $('#task_item'+id).html(data);
        //blink1();
                $('#load_page').hide();
          
                     console.log(data);
                 
                  
                   
                   //location.reload();
                   //window.location.reload();
                }
            });

}



function openprocess(id,znecode,znepcde,poryear,pornumb,pordate,supcode,porqty,porval,prostat,empsrno,status,supname,ctyname){
$('#load_page').show();
  var flag=1;
//  var isChecked1 = $('#process1'+id).prop('checked');
//  var isChecked2 = $('#process2'+id).prop('checked');
//  var isChecked3 = $('#process3'+id).prop('checked');
// if(status==1){
//  if(isChecked1){
//  var proval=$('#process1'+id).val();
//  flag=1;
//  //alert(proval);
//  }
//  else if(isChecked2){
//  var proval=$('#process2'+id).val();
//  flag=1;
//  //alert(proval);
//  }
//  else if(isChecked3){
//  var proval=$('#process3'+id).val();
//  flag=1;
//  //alert(proval);
//  }
// }else{
//   flag=1;
// }
  if(flag==1){
  $.ajax({
                url:"ajax/ajax_purchase_order_process.php",
                type: "POST",
                data: {id:id,
                  action:'showprocess',
                  znecode:znecode,
                  znepcde:znepcde,
                  poryear:poryear,
                  pordate:pordate,
                  pornumb:pornumb,
                  supcode:supcode,
                  porqty:porqty,
                  porval:porval,
                  prostat:prostat,
                  empsrno:empsrno,
                  supname:supname,
                  ctyname:ctyname},
                
                dataType:"html",
                success:function(data){
                  //alert("hai");
                   $('#load_page').hide();
                 console.log(data);
                  $('#modal-bodyshowProcess').html(data);
                  $('#modal-bodyshowProcess').modal();
                
                  //  $('[data-toggle="tooltip"]').tooltip({
                  //     trigger : 'hover'
                  // });    
                   //location.reload();
                   //window.location.reload();
                }
            });
  }
}

function prev_prop(e){
 e.stopPropagation();
  
}

function sel_supgrade(e,id,znecode,znepcde,poryear,pornumb,pordate,supcode,porqty,porval,prostat,empsrno,val){
// e.stopPropagation();
 //alert("entered");
  e.stopPropagation();
$('#load_page').show();
  var flag=1;var proval='';

 
 console.log(proval);
  if(flag==1){
  $.ajax({
                url:"ajax/ajax_purchase_order.php",
                type: "POST",
                data: {
                  id:id,
                  action:'updategrade',
                  znecode:znecode,
                  znepcde:znepcde,
                  poryear:poryear,
                  pordate:pordate,
                  pornumb:pornumb,
                  supcode:supcode,
                  porqty:porqty,
                  porval:porval,                 
                  empsrno:empsrno,
                  value:val
                },
                
                  dataType:"html",
                  success:function(data){
                  //$('#load_page').hide();
                   console.log(data);
                   reload_gradepage(id,znecode,znepcde,poryear,pornumb,pordate,supcode);
                 
                 //  blink();
                   hover_box();
                     
                   // location.reload();
                     //window.location.reload();
                  }
              });
  }

}

function updateprocess(e,process,id,znecode,znepcde,poryear,pornumb,pordate,supcode,porqty,porval,prostat,empsrno,status){
 // alert('hi');
  e.stopPropagation();
$('#load_page').show();
  var flag=1;var proval='';

  proval=$('#'+process).val();
 console.log(proval);
  if(flag==1){
  $.ajax({
                url:"ajax/ajax_purchase_order.php",
                type: "POST",
                data: {id:id,
                  action:'updateprocess',
                  znecode:znecode,
                  znepcde:znepcde,
                  poryear:poryear,
                  pordate:pordate,
                  pornumb:pornumb,
                  supcode:supcode,
                  porqty:porqty,
                  porval:porval,
                  prostat:proval,
                  empsrno:empsrno},
                
                  dataType:"html",
                  success:function(data){
                  //$('#load_page').hide();
                   console.log(data);
                   reload_page(id,znecode,znepcde,poryear,pornumb,pordate,supcode);
                 
                 //  blink();
                   hover_box();
                     
                   // location.reload();
                     //window.location.reload();
                  }
              });
  }
}
function getemployee(event,id,znecode,znepcde,poryear,pornumb,pordate,supcode,porqty,porval,prostat,empsrno,supname,ctyname){
  $(".chosn").customselect();
event.stopPropagation();
$.ajax({
                url:"ajax/ajax_purchase_order_process.php",
                type: "POST",
                data: {
                  action:'showemployee',
                   branch:'888',
                   id:id,                  
                    znecode:znecode,
                    znepcde:znepcde,
                    poryear:poryear,
                    pordate:pordate,
                    pornumb:pornumb,
                    supcode:supcode,
                    porqty:porqty,
                    porval:porval,
                    prostat:prostat,
                    empsrno:empsrno,
                    supname:supname,
                    ctyname:ctyname   },
                
                dataType:"html",
                success:function(data){
                 // $('#load_page').hide();
                  $.getScript("js/jquery-customselect.js");

                 console.log(data);

                  $('#myModal_showEmployee').html(data);
                  $('#myModal_showEmployee').modal();
                 
                  $('#modal-bodyshowProcess').hide();
                    $("#expslist").removeClass("custom-select");
                   $("#expslist").removeClass("chosn");
                 $('.multiselect').dropdown({
  // options here
});
                  
                   
                   //location.reload();
                   //window.location.reload();
                }
            });


}
function sendmail(frm_name){

var form_data = new FormData(document.getElementById(frm_name));
//alert(form_data);
form_data.append('action','sendmail');
$.ajax({
                url:"ajax/ajax_purchase_order.php",
                type: "POST",
                data: form_data,  
                processData: false,
                contentType: false,
                async:true,              
                dataType:"html",
                success:function(data){

                 console.log(data);
                 alert('Notification Sent Successfully');
                 //$('#load_page').hide();
                   
                  // location.reload();
                   //window.location.reload();
                }
            });


}