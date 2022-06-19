<?php 
include_once("Connections/connection.php");
$con = connection();

print_r($_POST);
echo $_POST['ID'];

if(isset($_POST['delete'])){

    $id = $_POST['ID'];
    $sql = "DELETE FROM stakeholders  WHERE id = '$id'";
    if ($con->query($sql) or die ($con->error)) {
        echo "<script type='text/javascript'>alert('Delete Appointment successfully!')
        window.location.href='logout_entry.php';
        
        </script>"; 
      }
      else
      {
        echo "<script type='text/javascript'>alert('Delete Appointment  failed!')</script>";
      }

}
