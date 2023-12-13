<!DOCTYPE html>
<html>
<title>Vinod Diagnostics</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php 
if (isset($_POST['submit'])) {
      include('db.php');
    $mobile= $conn -> real_escape_string($_POST['mobile']);
?>
<div class="w3-container">
 <table class="w3-table-all" id="dataTable" width="100%" cellspacing="0">
                  
                  
                                              
                                            <tr>
                                               <th>ID</th>
                                                <th>Report Name</th>
                                                <th>Mobile</th>
                                               
                                                <th>Timestamp</th>
                                               
                                                 <th>File</th>
                                            </tr>
                                        
                                       
                                      
                                             <?php
                                             include('db.php');
                                             $fetch1 = $conn->query("SELECT * from reports WHERE mobile='$mobile' ORDER BY id DESC");
if ($fetch1->num_rows > 0) {
  // output data of each row
  while($row = $fetch1->fetch_assoc()) {
?>
 
                                            <tr>
                                                <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['mobile'];?></td>
                                                <td><?php echo $row['regdate'];?></td>
                                                
                                                <td><a target="_blank" class="w3-btn w3-red" href="dashboard/uploads/<?php echo $row['file'];?>">Download Report</a></td>
                                                
                                             
                                              
                                            </tr>

<?php


}
}else{
    echo "<tr><td>You Have No Reports !</td></tr>";
}
$conn->close();
}
?>
                                            
                                           
                                        
                                    </table>
                                    
</div>
</body>
</html> 
