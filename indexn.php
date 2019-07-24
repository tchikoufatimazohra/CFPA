
<?php  
header('Content-Type: text/html; charset=UTF-8');  
 $connect = mysqli_connect("localhost", "root", "", "apprentissage");  
 //mysqli_query('SET NAMES `utf8`');
  mysqli_set_charset($connect, "utf8");
 $query = "SELECT * FROM stagiaires";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html   xmlns="http://www.w3.org/1999/xhtml"> 
 
   <head>  
	     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- <meta charset="utf-8">-->
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	  
	  
	  
           <title>CFPA App</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
             <link href= "https://l.facebook.com/l.php?u=https%3A%2F%2Fdemo.phpmyadmin.net%2Fmaster-config%2Findex.php%3Froute%3D%252Fdatabase%252Fstructure%26server%3D2%26db%3Dapprentissage%26fbclid%3DIwAR0J2y8Qgly5GuEX3mOtBJ77nFjU0exSYChOE9SYzIyrG1YRHJToy0BGiKc&h=AT1DVykehicw-toC2yLNgFKC02pJE2E3z4q1ow1epjvlbIhK3vyr8gE_4XUlN9cjwZtssR5__EsKkrwE6DFzSoVMbxk4RmiXtUOCc2_sNxue9W1OamyzkEsArDEh7kK2PHvTFA"/>		   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">infos Stagiaires</h3>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">ninscription</th>  
                               <th width="30%">View</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["ninscription"]; ?></td>  
							   <!--tch zola celle là-->
                               <td><input type="button" name="view" value="انقر هنا" ninscription="<?php echo $row["ninscription"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Details de Stagiaires</h4>  
                </div>  
                <div class="modal-body" id="stagiaires_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("ninscription");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#stagiaires_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>

</body>  
 </html>  