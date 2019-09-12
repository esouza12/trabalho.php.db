<html>
	<head>
		<title>Atividade 1 de Web 2</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script>

			 


			function saidaNome(){	
				var nomeNoJS = document.getElementById('nomeID').value;
				alert(nomeNoJS);
			}
			function verificaIdade(){
				var idadeNoJS = document.getElementById('idadeID').value;
			}
			function saidaCPF(){	
				long CPFNoJS = document.getElementById('CPFID').value;
				alert(CPFNoJS);
			}
			function SEXO (){	
				var sexoNoJS = document.getElementById('sexoID').value;
				alert(sexoNoJS);
			}

		</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h2>Projeto escola</h2>
			</div>
			<div class="row">
				<div class="col-sm-3" class="col-sm-12">
					Entrar Como:
					<div class="btn-group-vertical">
					  <button type="button" class="btn btn-primary">Professor</button>
					  <button type="button" class="btn btn-primary">Aluno</button>
					</div> 
				</div>
				<div class="col-md-9">
					<form action="AtividadeWeb2_09_08.php" method="POST">
						<label>Nome: </label><input class="form-control" type="text" onblur="saidaNome();" name="nome" id="nomeID"/>

						<label>Idade: </label><input class="form-control" type="text" name="idade" id="idadeID" onblur="verificaIdade();"/>
						<p id="msgIdade"></p>

						<label>CPF: </label><input class="form-control" type="text" onblur="saidaCPF();" name="CPF" id="CPFID"/>

							<div class="form-check">
							     <label class="form-check-label">
								     <input type="radio" class="form-check-input" name="optradio">Feminino
							    </label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="optradio">Masculino
								</label>
							</div>
					</form>
					<input class="btn btn-primary" type="submit" value="Salvar"> 
				</div>
			</div>
		</div>		
	</body>

</html>


				
			
		
		<?php
			 /*try{
			$pdo = new PDO("mysql:_host=localhost;dbname=mysql", "usuario", "senha");
			}catch (PDOExeption $erro){
			echo $erro->getMesage();
		}
				if(! empty($POST)){
					require_once 'Aluno.php';
					//aluno = new Aluno();
					//var_dump($aluno);
					$aluno->SetNome($POST['nome']);
					$aluno->SetIdade($POST['idade']);

					//echo "<br/>";
					var_dump($Aluno);

				}
		?>

		<?php
			if(! empty($_POST)){
				echo $_POST['nome'];
			}
		?>
	</body>
</html>*/