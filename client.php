<?php

$options = array("location" =>  "http://localhost/pro/webservices/service.php",
"uri" => "http://localhost");





$client = new SoapClient(null, $options);

$data = $client->get_service(); 


if(isset($_POST['btn']))

{

$id = $_POST['id'];

foreach ($data as $a) {
if($id == $a['id']){	
$arrayName = $a['fundname'];
}

}


// foreach ($data as $ball) 
// {	
// if($ == $bal)	{
// $ball = $bal['bal'];
// }

// }


// if (!is_array($arrayName)) {
// 	$s = $arrayName;
// }
// else
// {}

}


// if(isset($_POST['id'])){
//   $id = $_POST['id'];

// }
// echo '<pre>';
// print_r($data);










?>



<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<div class="con-main">
<h2 style="text-align: center; color: #3C9646;">HBL Asset Management Limited</h2>
<div class="container cont2">
  <form class="frm" action="client.php" method="post">

 <div class="col-md-6" style="background-color:#fff;">

    <div class="form-group">

     <label class="lb_flo" for="email">Folio No:</label>

    <select name="id" class="form-control" id="folio">
    <?php foreach ($data as $data) {
	 ?>
    <option value="<?php echo $data['id'] ;?>" class="o1"><?php echo $data['id'] ;?></option>
	
	<?php }?>

  	</select>

    </div>


        <div class="form-group">

     <label class="lb_flo" for="email">User Name:</label>

	
    	<input name="user_name" class="form-control"> 

	



    </div>



     <div class="form-group">
      <label for="email">Fund Name:</label>
    <select class="form-control" id="folio">

 <?php foreach ($arrayName as $a) {
	 ?>
    <option value="<?php echo $a;?>" class="o1"><?php echo $a;?></option>
<?php }?>
  </select>
    </div>


    <div class="form-group">
      <label for="pwd">Amount:</label>	

      <input value="" type="number" class="form-control" id="amnt" placeholder=""  name="amnt">

    </div>

    <div class="form-group">
      <label for="pwd">Select Bank:</label>
      <input type="text" class="form-control" id="bnk" placeholder="Habib Bank Ltd" name="bnk">
    </div>

    <div class="form-group">
      <label for="pwd">Account Number:</label>
      <input type="number" class="form-control" id="ac_no" placeholder="36748-67299-16836-87" name="ac_no">
    </div>

</div>

<div class="col-md-6" style="min-height: 470px;background-color: #90fbce70;">

   <div class="form-group">
      <label class="lb_blnce" for="pwd">Balance:</label>
     
      <input type="number" class="form-control" id="blnc" placeholder="" name="<?php echo $ball;?>" value="<?php echo $bal;?>">

    </div>

    <div class="form-group">
      <label for="pwd">IBFT Limit:</label>
      <input type="number" class="form-control" id="ibft" placeholder="" name="ibft">
    </div>

    <div class="form-group">
      <label for="pwd">Remaining Balance:</label>
      <input type="number" class="form-control" id="remain_bl" placeholder="" name="remain_bl">
    </div>

    <button name="btncancel" style="" type="submit" class="btn btn-default">Cancel</button> 
   <button name="btn" type="submit" class="btn btn-success">Submit</button>

</div>	
   

 
</form>
</div>


</div>

 



</body>
</html>



<script type="text/javascript">

$('#folio').change(function(){

	let id = this.value;
	//console.log(id);

  $.get('http://localhost/pro/webservices/api.php?id='+id,function(data){
    var obj = JSON.parse(data);
    console.log(obj);





  });
});



</script>>
