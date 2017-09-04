<div id="page-wrapper">
	<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                         <i class="fa fa-list fa-2x"></i>  Lista Prontuario
                        </h3>
                        
                    </div>
                </div>
    <div class="container-fluid">


		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Lista Prontuario</h4>
                        </div>

                <div class="panel-body">

                 <form action="" method="GET" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                Busca
                                <input type="text" name="busca" value ="<?php echo  $busca?>" class="form-control" />

                            </label>
                            <input type="submit" name="btn" class="btn btn-success"  value="Buscar"/>
                        </div>
                        <div class="form-group">

                        </div>

                    </div>
                </div>
            </form>
          
                
                <table id = "tabela"class="table table-bordered table-striped table-hover">
            <caption>
                <center><h3>Lista de Prontuarios</h3></center>
            </caption>
            <thead>
                <tr>
                 <th>Nome</th>
                 <th>Sexo</th>
                 <th>Ação</th>
                
            </thead>
            <tbody>
                
                <?php foreach ($list as $Prontuario): ?>
                <tr>
                    <td><?php echo $Prontuario['paciente']; ?></td>
                    <td><?php echo $Prontuario['sexo'];?></td>
                    
                    <form action="edita-prontuario" method="POST">
                    
                    <td> 
                    <input type="hidden" name="id" value="<?=$Prontuario['id_prontuario']  ?>">
                    <input type="submit" class="btn btn-link" value="alterar">
                      <!-- <a href="Altera-Prontuario-Form.php?id=<?=$Prontuario['id_prontuario']?>" class="text-error btn btn-link">Editar</a> -->
                    </td>
                </form>
                </tr>
            <?php endforeach?>




        </table>
       <center> <?php echo $paginacao;?></center>









</div>
</div>
</div>
</div>
