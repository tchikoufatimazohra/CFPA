<?php  
 $connect = mysqli_connect("localhost", "root", "", "apprentissage");  
 if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_set_charset($connect, "utf8");
 $query = "SELECT * FROM stagiaires";  
 $result = mysqli_query($connect, $query);  
 
 ?> 
 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 	
<!--<meta charset="utf-8">-->
 
  
   <title>CFPA App</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		   
           <link href= "https://l.facebook.com/l.php?u=https%3A%2F%2Fdemo.phpmyadmin.net%2Fmaster-config%2Findex.php%3Froute%3D%252Fdatabase%252Fstructure%26server%3D2%26db%3Dapprentissage%26fbclid%3DIwAR0J2y8Qgly5GuEX3mOtBJ77nFjU0exSYChOE9SYzIyrG1YRHJToy0BGiKc&h=AT1DVykehicw-toC2yLNgFKC02pJE2E3z4q1ow1epjvlbIhK3vyr8gE_4XUlN9cjwZtssR5__EsKkrwE6DFzSoVMbxk4RmiXtUOCc2_sNxue9W1OamyzkEsArDEh7kK2PHvTFA"/>		   
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.cf:before, .cf:after{
    content:"";
    display:table;
}

.cf:after{
    clear:both;
}

.cf{
    zoom:1;
}  
/* Form wrapper styling */
.form-wrapper {
    width: 450px;
    padding: 15px;
    margin: 150px auto 50px auto;
    background: #444;
    background: rgba(0,0,0,.2);
    border-radius: 10px;
    box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
}

/* Form text input */

.form-wrapper input {
    width: 330px;
    height: 20px;
    padding: 10px 5px;
    float: left;    
    font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
    border: 0;
    background: #eee;
    border-radius: 3px 0 0 3px;      
}

.form-wrapper input:focus {
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
}

.form-wrapper input::-webkit-input-placeholder {
   color: #999;
   font-weight: normal;
   font-style: italic;
}

.form-wrapper input:-moz-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}

.form-wrapper input:-ms-input-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}    

/* Form submit button */
.form-wrapper button {
    overflow: visible;
    position: relative;
    float: right;
    border: 0;
    padding: 0;
    cursor: pointer;
    height: 40px;
    width: 110px;
    font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
    color: #fff;
    text-transform: uppercase;
    background: #d83c3c;
    border-radius: 0 3px 3px 0;      
    text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}   
  
.form-wrapper button:hover{		
    background: #e54040;
}	
  
.form-wrapper button:active,
.form-wrapper button:focus{   
    background: #c42f2f;
	outline: 0;   
}

.form-wrapper button:before { /* left arrow */
    content: '';
    position: absolute;
    border-width: 8px 8px 8px 0;
    border-style: solid solid solid none;
    border-color: transparent #d83c3c transparent;
    top: 12px;
    left: -6px;
}

.form-wrapper button:hover:before{
    border-right-color: #e54040;
}

.form-wrapper button:focus:before,
.form-wrapper button:active:before{
        border-right-color: #c42f2f;
}      

.form-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
    border: 0;
    padding: 0;
} 

 div.a {
  text-align: center;
}  
</style>
</head>
<body>
<?php 
  //cnx
   //include_once("cnx.php");
   
  
  ?>

<div class="a">
<h1>مركز التكوين المهني والتمهين</h1>
<h1>الشهيد محمد ضويفي بالمدية</h1>

<h1> مصلحة التمهين</h1>
<h1> نتائج الامتحانات السداسية جوان2019</h1>
<h1> للاطلاع على النتائج ما عليك الا ادخال رقم العقد في الخانة التي في الاسفل</h1>
<form class="form-wrapper cf">
            

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <!-- <input type="text" id="box3" placeholder="chercher par numéro d'inscription..." required>-->
       <!-- <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Chercher</button>-->
		<!-- Trigger the modal with a button -->
     
	   
	   <a href="indexn.php" class="btn btn-danger"  >اظغط هنا</a> 
    </form>  
<h1>تاريخ الامتحان الاستدراكي يوم 08-09-2019</h1>

</div>





<?php  
 $connect = mysqli_connect("localhost", "root", "", "apprentissage");  
 $query = "SELECT * FROM stagiaires";  
 $result = mysqli_query($connect, $query);  
 ?>  





    
     
  <!-- tch  debut de la section de letter modal of newsletter-->

   
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Details de Stagiaires</h4>  
                </div>  
                <div class="modal-body" id="stagiaires_detail">  
				
				<!--<script>
						$('#done').on('click', function(){
				  if($('#box3').val() == ''){
						var box3 = $('#box3').attr('placeholder');
					} else {
					   var box3 = $('#box3').val();
					}
			  $('#username').val(box3);
			});

			// Clicking the button doesn't capture the placeholder value if empty?
			</script>-->
			
			
			
			<form action="" method="POST">
				<!--ninscription<textarea id="output"></textarea>-->
				<!--ninscription<textarea id="output"></textarea>-->
				 ninscription<input type="text" name="username" id="username" class="inputfield" />
				<!--tch zola celle là-->
                              <!-- <td><input type="button" name="view" value="view" ninscription="<?php //echo $row["ninscription"]; ?>" class="btn btn-info btn-xs view_data" /></td>  -->
			<td><input type="button"  value="confirmer"  class="btn btn-info btn-xs view_data" data-toggle="modal" data-target="#myModal" /></td> 
		
                <br><br>
				
				 
				
				
				
                </div>  
				</form>
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 
<!--tch fin de section newsletter modal-->

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Infos</h4>
        </div>
        <div class="modal-body">
          <p>l'affichage here.</p>
		  <!--php code-->
		  <?php  
 if(isset($_POST["username"]))  
 {    //$nom= $_POST['username'];
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "apprentissage");  
      $query = "SELECT * FROM stagiaires WHERE ninscription = '".$_POST["username"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Numéro inscription</label></td>  
                     <td width="70%">'.$row["ninscription"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nom et Prenom</label></td>  
                     <td width="70%">'.$row["nomprenom"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Date et Lieu Naissance</label></td>  
                     <td width="70%">'.$row["ninscription"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Specialites</label></td>  
                     <td width="70%">'.$row["specialites"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Moyenne</label></td>  
                     <td width="70%">'.$row["moyenne"].' </td>  
                </tr>  
				
				<tr>  
                     <td width="30%"><label>Date Debut Formation</label></td>  
                     <td width="70%">'.$row["datedform"].' </td>  
                </tr>  
				<tr>  
                     <td width="30%"><label>Date Fin Formation</label></td>  
                     <td width="70%">'.$row["datefform"].' </td>  
                </tr>  
				<tr>  
                     <td width="30%"><label>Observation</label></td>  
                     <td width="70%">'.$row["observation"].' </td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
		  <!--end-->
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">fermer</button>
        </div>
      </div>
      
    </div>
  </div>


</body>
</html>
