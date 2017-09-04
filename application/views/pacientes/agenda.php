<div id="page-wrapper">
	  <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                         <i class="fa fa-calendar fa-2x"></i>  Agenda Do Dia
                        </h3>
                        
                    </div>
                </div>
 <div class="container-fluid">







	<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Agenda Do Dia </h4>
                        </div>

                <div class="panel-body">
                 <form action="" method="GET" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                Busca
                                <input type="date" name="busca" value ="<?php echo  $busca?>" class="form-control" />

                            </label>
                            <input type="submit" name="btn" class="btn btn-success"  value="Buscar"/>
                        </div>
                        <div class="form-group">

                        </div>

                    </div>
                </div>
            </form>
          
		<table id="tabela" class="table table-striped table-hover table-bordered table-condensed"  >
		<caption><h3>Agenda Do Dia</h3></caption>
			<thead>
			       
				<tr>
					<th id="status">Status</th>
					<th>Nome</th>
					<th>Horário</th>
					<th>Data</th>
					<th>Status</th>
					<th></th>
				

				</tr>
			</thead>
			
			<tbody>
				
				<?php foreach($Agenda as $Agendamentos):   ?>
				<tr> 
					<?php if($Agendamentos['status']=='consulta realizada'){?>
                    <?php echo '<td id="status"><img src="static/img/carinhafeliz.jpg" height="40" width="40"></td>' ?>
					<?php } ?>
					<?php if($Agendamentos['status']=='chegada') {?>
					<?php echo '<td id="status"><img src="static/img/carinhatriste.jpg" height="40" width="40"></td>' ?> 
					<?php } ?>
				    <?php  if($Agendamentos['status']=='confirmar consulta'){ ?>
				    <?php echo'<td id="status"><img src="static/img/atraso.jpg" height="40" width="40"></td>'?>
				    <?php } ?>
				    <?php if($Agendamentos['status']==''){ ?>
				    <?php echo '<td id="status"><img src="static/img/normal.jpg" height="40" width="40"></td> ' ?>
				    <?php } ?> 
				    
				    <td><?php  echo $Agendamentos ['nome'];?></td>
					<td><?php  echo $Agendamentos ['horario'];?></td>
					<td><?php  echo date("d/m/Y", strtotime($Agendamentos ['data']));?></td>
					<div class="col-lg-3">
						<form action="editar-consulta" method="POST">
				    		<td><input type="hidden" name="id" value="<?=$Agendamentos['id']?>">
				    		<input type="submit" class="btn btn-info" value="Alterar Consulta">
				    	</a>
					</form>
							
						
					</div>
					<div class="col-lg-2">
					    <form action="chegada" method="POST">
					    <input type="hidden" name="id" value="<?=$Agendamentos['id']?>">
							
					    		<input type="submit" class="btn btn-danger" value="Em Espera">
							
					     </form>
				     </div>
				     <div class="col-lg-3">
						<form action="confirmar-consulta" method="POST" >
							<input type="hidden" name="id" value="<?=$Agendamentos['id']?>">
							<input type="submit" class="btn btn-warning" value="Confirma Consulta">
						</form>
					</div>
					<div class="col-lg-3">
						<form action="consulta-realizada" method="POST">
							<input type="hidden" name="id" value="<?=$Agendamentos['id']?>">
						    	
								    <input type="submit" class="btn btn-success" value="Consulta Realizada">
								</td>
							</form>
					</div>
    				</td>
					
				</tr>
				   <?php  endforeach ?>
				  </tbody>


	</table>

	<center><?php echo $paginacao ?></center>




















</div>
 </div>