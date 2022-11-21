<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="alert alert-success alert-dismissible fade in" id="success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    
    <div id='textoSucesso'></div>
    
    You should 
    <a href="#" class="alert-link">read this message</a>
  </div>


  <div class="alert alert-danger alert-dismissible fade in" id="fail" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>


<form id="testForm">
    <input type="text" id="nome" name="nome" value="admin" /><br />
    <input type="text" id="mail" name="mail" value="123" /><br />
</form>

<button onclick="return getUser()">get</button>


<script>
function getUser() {
 	$.post('data.php',$("#testForm").serialize(),function(data){
 	
	 	var obj = JSON.parse(data)
	 	if (obj.name == "admin"){
			$('#textoSucesso').text('R$ '+obj.email);
			$('#success').fadeIn();
		    //alert("Success: " +obj.email);
	    } else {
	    	$('#fail').show();
	        //alert("fail: " +data);
	    }
		//mostrando o retorno do post
		//alert(data)
 	
 	})
}
</script>


  


</body>