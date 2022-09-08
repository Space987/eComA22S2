
<<!DOCTYPE html>
<html>
	<head>
		<title> Some Title </title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<script type="text/javascript">
			
			$(document).ready(
				function(){
				$.getJSON("/Main/foodsJSON", 
					function( obj ){
						output ="";
							for (const item of obj){
								output = output + item.name + "Has the ID "+ item.id 
								+ "<br>";
							}
							$('#foods').html(output);
						}
					)
				}
			);
		</script>

	</head>

	<body>
		Here is the list of foods from our database: SIKE ;) 
		<div id="foods">
			
		</div>
	</body>
</html>