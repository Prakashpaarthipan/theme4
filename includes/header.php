
  <nav class="navbar navbar-default navbar-fixed-top header_nav">
      <div class="container header_nav_con">
        <div class="navbar-header">
         
        </div>
         <ul class="nav navbar-nav pull-left header_nav_ul">

              <img src="img/logo.png" class="img-responsive" onclick="homepage()">
         
                      
          </ul>
        <?
           $result = select_query_json("select distinct(emp.EMPSRNO), emp.EMPCODE, emp.EMPNAME, emp.ESECODE, sec.ESENAME, emp.DATEOFJOIN, des.DESNAME 
                    from employee_office emp, empsection sec, designation des where emp.ESECODE = sec.ESECODE and emp.DESCODE = des.DESCODE and sec.deleted = 'N' and des.deleted = 'N' and emp.empsrno='".$_SESSION['tcs_empsrno']."'
                  union
                    select distinct(emp.EMPSRNO), emp.EMPCODE, emp.EMPNAME, emp.ESECODE, sec.ESENAME, emp.DATEOFJOIN, des.DESNAME 
                    from employee_office emp, new_empsection sec, designation des where emp.ESECODE = sec.ESECODE and emp.DESCODE = des.DESCODE and sec.deleted = 'N' and des.deleted = 'N' and emp.empsrno='".$_SESSION['tcs_empsrno']."'
                    ", "Centra", 'TCS');
//print_r($result);

        ?>
        <ul class="nav navbar-nav pull-right" style="display: inline-flex;">
              <li style="text-align:center"  class="" style="pointer-events: none;
   cursor: default;"><a href="#" id="open-popover-link1"  data-toggle="popover" class="tool "><span id="user_list" style="color:#FFF !important;margin-right:5px"> <?=$_SESSION['tcs_username']?></span><i class="fa fa-user fa-2x color_white"></i> </a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out fa-2x color_white"></i></a></li>
               <input type="hidden" name="hid_empsrno" value="<?=$_SESSION['tcs_empsrno']?>"/>       
          </ul>
         </div>

    </nav>
     <div class="my_popover_content" style="display: none" id="my_popover_content">
        <div class="my-popover">
                 <table style="width:100%"><tr><td class="popover_td1">
                  <a href="#"><img src="profile_img.php?profile_img=<?=$_SESSION['tcs_user']?>" class="media-object img-rounded popover_img" alt="Sample Image"></a>
                 </td>
                 <td class="popover_td2">
                  <div class="popover_div"><span><b><?=$_SESSION['tcs_username']?></b></span><br><span><?=$result[0]['ESENAME']?></span><br>
                    <span><?=$result[0]['DESNAME']?></span>
                  </div>
                 </td>
                 </table>
      </div>
      </div>
      <script type="text/javascript">
      function homepage(){
          window.location.href='home.php';
        }
      </script>  

      