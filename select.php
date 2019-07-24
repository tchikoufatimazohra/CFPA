 <!DOCTYPE html>  
 <html lang="ar"> 
 
   <head>  
	      
		 <meta charset="utf-8">
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
</html>
<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "apprentissage"); 
	    mysqli_set_charset($connect, "utf8");
       //	 mysqli_query('SET NAMES `utf8`');  
      $query = "SELECT * FROM stagiaires WHERE ninscription = '".$_POST["employee_id"]."'";  
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
                     <td width="70%">'.$row["datelieunss"].'</td>  
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