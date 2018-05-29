  <?php if(isset($_POST['submit'])){ 
 //create html table in variable (ie $data="<table>..")
 $data="<table><tr><td>Table with single row has single data.</td></tr></table>";

header("Content-type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename='exceltry.xls'"); 
 // Clean the output buffer so it won't mess up your excel export 
 ob_clean();

echo $data;//writing data to excel file.
}
else {
?>
<form method='POST'>
<input type='submit' name='submit' value='download report'/>
</form>
<?php
}
?>