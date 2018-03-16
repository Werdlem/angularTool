<div ng-controller="editTool">
	<?php 
require_once '../DAL/DBConn.php'; 

$toolDal = new tooling();
$id = '{{search.id}}';

$search = $toolDal->getToolById($id);
 ?>

 <div ng-include="_toolEdit.php"></div>




