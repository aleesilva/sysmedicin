<div id="page-wrapper">
		
		 <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                          <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>  Alterar Consultas 
                        </h3>
                        
                    </div>
                </div>
    <div class="container-fluid">
	
<div class="col-lg-4">
	<form action="altera-consulta" method ="POST">
      	<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Alterar Consulta </h4>
                        </div>

                <div class="panel-body">
      	<div class="form-group">
      	<label for="txtpaciente">Paciente:</label>
        <!-- <select name="paciente" id="" class="form-control">
         <option value="null">---</option>
       			<?php foreach ($nomes as $nome): ?>
       				<option value="<?=$nome['nome']?>"><?=$nome['nome']; ?></option>
       			<?php endforeach ?>
        	
        </select> -->
        <input type="hidden" name="id" value="<?=$paciente['id'] ?>">
        <input type="text" class="form-control" value="<?=$paciente['nome']; ?>">

         <!-- <label for="">Status:</label>
         <select name="status" id="">
         	<option value=""></option>
         	<option value="Chegada"></option>
         	<option value="consulta realizada">consulta realizada</option>
         	<option value=""></option>
         </select> -->
              
           <label for="txtdata">Data:</label>
           <input class="form-control" type="date" value="<?=$paciente['data'] ?>" name="dataconsulta" id="txtdata">
        
           
           <label for="txthorario"> Horário:</label>
           <input type="time" value="<?=$paciente['horario'] ?>" class="form-control" name="horario" id="txthorario">
       

        
            <label for="txtmotivo">Motivo:</label>
            <input  class ="form-control" value="<?=$paciente['motivo'] ?>" type ="text" name="motivo" id="txtmotivo">

        

        	<label for="txtobs">Observações:</label>
        	<textarea class="form-control" rows="11" cols ="" maxlength="" name ="observacao" id="txtobs"><?=$paciente['observacoes'] ?></textarea>
        
        <hr>
       
      
      <input class="btn btn-primary form-control" type="submit" name ="cadastrar" value="Cadastrar">
      </div>
      </div>
      </div>
      </div>
</form>


<div class="col-lg-8">
		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Agenda Do Dia </h4>
                        </div>

                <div class="panel-body">
		<table id="tabela" class="table table-striped table-hover table-bordered table-condensed"  >
		<caption><h3>Agenda Do Dia</h3></caption>
			<thead>
			       
				<tr>
					<th>Status</th>
					<th>Nome</th>
					<th>Horário</th>
					<th>Data</th>
				

				</tr>
			</thead>
			
			<tbody>
				
				<?php foreach($Agenda as $Agendamentos):   ?>
				<tr> 
					 <?php if($Agendamentos['status']=='consulta realizada'){?>
                    <?php echo '<td id="status"><img src="static/img/carinhafeliz.jpg" height="30" width="30"></td>' ?>
					<?php } ?>
					<?php if($Agendamentos['status']=='chegada') {?>
					<?php echo '<td id="status"><img src="static/img/carinhatriste.jpg" height="30" width="30"></td>' ?> 
					<?php } ?>
				    <?php  if($Agendamentos['status']=='confirmar consulta'){ ?>
				    <?php echo'<td id="status"><img src="static/img/atraso.jpg" height="30" width="30"></td>'?>
				    <?php } ?>
				    <?php if($Agendamentos['status']==''){ ?>
				    <?php echo '<td id="status"><img src="static/img/normal.jpg" height="30" width="30status"></td> ' ?>
				    <?php } ?> 
				    
				    <td><?php  echo $Agendamentos ['nome'];?></td>
					<td><?php  echo $Agendamentos ['horario'];?></td>
					<td><?php  echo date("d/m/Y", strtotime($Agendamentos ['data']));?></td>
					
				</tr>
				   <?php  endforeach ?>
				  </tbody>
	</table>


</div>
</div>
</div>

























	</div>
</div>