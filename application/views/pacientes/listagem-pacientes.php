<div id="page-wrapper">
	  <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                           <i class="fa fa-list fa-2x"></i> Lista de Pacientes
                        </h3>
                        
                    </div>
                </div>
 <div class="container-fluid">
 <div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Lista De Pacientes</h4>
                        </div>

                <div class="panel-body">
                <form action="" method="GET" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                Busca
                                <input style="text-transform: uppercase" type="text" name="busca" value ="<?php echo  $busca?>" class="form-control" />

                            </label>
                            <input type="submit" name="btn" class="btn btn-success"  value="Buscar"/>
                        </div>
                        <div class="form-group">

                        </div>

                    </div>
                </div>
            </form>

	 	<table id="tabela" class="table table-bordered table-striped">
	 		<caption>
	 			<center><h3 id="filtros">Lista De Pacientes</h3></center>
	 		</caption>
	 		<thead>
	 			<tr>
	 			 <th>Nome</th>
	 			 <th>CPF</th>
	 			 <th>Sexo</th>
	 			 <th>Idade</th>
	 			 <th>Telefone1</th>
	 			 <th>Telefone2</th>
	 			 <th>Telefone3</th>
	 			 <th>Endereco</th>
	 			 <th>Alterar</th>
	 			 <th>Imprimir</th>
	 			 <th>Imprimir</th>
	 			 <!-- <th>Ação</th> -->
	 			</tr>
	 		</thead>
	 		<tbody>
	 			
	 			<?php foreach ($Lista as $Listagem): ?>
	 			<tr>
	 				<td><?=$Listagem['nome']; ?></td>
	 				<td><?=$Listagem['cpf'];?></td>
	 				<td><?=$Listagem['sexo'];?></td>
	 				<td><?=$Listagem['idade'];?></td>
	 				<td><?=$Listagem['telefone1'];?></td>
	 				<td><?=$Listagem['telefone2'];?></td>
	 				<td><?=$Listagem['telefone3'];?></td>
	 				<td><?=$Listagem['rua'];?></td>

	 			<div class="col-lg-2">
	 				
	 			
				<!-- <form action="ficha-paciente" method="POST">
	 				<td id="links"> 
	 				<input type="hidden" name="id" value="<?=$Listagem['id']?>">
	 				  <a id="links" href="Exclui-Cliente.php?id=<?=$Listagem['id']?>" class="text-error btn btn-danger">Excluir</a>
	 				  <input type="submit" value="Ficha Paciente" class="btn btn-info"></td>
	 			</form> -->
	 			</div>	
	 				  <div class="col-lg-2">
					    <form action="editar-paciente" method="POST">
					    <td><input type="hidden" name="id" value="<?=$Listagem['id']?>">
							
					    		<input type="submit" class="btn btn-success" value="Alterar">
						</td>
					     </form>
						
						<form action="imprimir-prontuario" method="POST">
					    <td><input type="hidden" name="id" value="<?=$Listagem['id']?>">
							
					    		<input type="submit" class="btn btn-warning" value="Prontuário">
						</td>
					     </form>
					     <form action="imprimir-envelope" method="POST">
					    <td><input type="hidden" name="id" value="<?=$Listagem['id']?>">
							
					    		<input type="submit" class="btn btn-primary" value="Envelope">
						</td>
					     </form>
	 				
	 				
	 				

	 			</tr>
	 		<?php endforeach?>
	 		</tbody>
	 	</table>

	 	<div class="container">
				<!-- <input onclick="print()" type="image" id=""  src="img/btn_imprimir.png"> -->
				<center><?php echo $paginacao; ?></center>
		</div>

	 </div>
	 </div>