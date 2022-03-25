<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="resources/estilos.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="resources/jquery-3.2.1.min.js"></script>
	<script src="resources/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
    $("#form_names").validate({
        rules: {'name': "required",'last_name': "required"},
        messages: {'name': "Por favor indica tu nombre",'last_name': "Por favor, indica tu apellido"},
        debug: true,errorElement: "label",
        submitHandler: function(form){
            $.ajax({
                type: "POST",
                url:"controller/insertar.php",
                data: "name="+escape($('#name').val())+"&last_name="+escape($('#last_name').val()),
				success: function(msg){
					$("#alert").show();
                    $("#alert").html(msg);
                    document.getElementById("name").value="";
                    document.getElementById("last_name").value="";
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 10000);

                }
            });
        }
    });
});
</script>

	<title>Formulario</title>
</head>
<body>

	<div class=" row">
		<div class="formulario" >
			<div class="container">
				<div class="card mx-auto mt-10 shadow-card  col-md-12 Content col-md-4 Cont p-3 mb-2 bg-light text-dark">
					<h3>FORMULARIO INSCRIPCION</h3>

					<form id="form_names" method="POST">
						<table class="table table-hover">
							<tr>
								<td>
									<div class="form-group">
									<label for="name">Nombres</label>
									<input type="text" class="form-control" placeholder="Introduce tus Nombres" name="name" id="name" >
								</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="last_name">Apellidos</label>
										<input type="text" class="form-control" placeholder="Introduce tus Apellidos" name="last_name" id="last_name" >
									</div>
									</td>
							</tr>
							<tr>
								<td>
									<div class="text-center">
										<button id="btnguardar" class="btn btn-primary">Guardar datos</button>
									</div>
								</td>
							</tr>
						</table>
						 <div class="alert alert-success" id="alert" style="display: none;">&nbsp;</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

