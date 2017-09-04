<div id="page-wrapper">
	<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                         <i class="fa fa-plus-circle fa-2x"></i> Cadastro De Exames
                        </h3>
                        
                    </div>
                </div>
    <div class="container-fluid">


		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Cadastro De Exames</h4>
                        </div>

                <div class="panel-body">





                <form action="cadastro-exames" method="POST">
            <div class="form-group">
        <label for="txtpaciente">Paciente:</label>
         <!-- <select name="paciente" id="" class="form-control">
         <option value="null">Selecione um Nome...</option>
            <?php foreach ($nomes as $nome): ?>
              <option value="<?=$nome['nome']?>"><?=$nome['nome']; ?></option>
            <?php endforeach ?>
          
        </select> -->
        <input type="text" class="j_autocomplete input form-control" id="search" name="paciente">
        <!--<td><input class="input-xxlarge" type="text" name="paciente" id="txtpaciente"><br></td>-->
        

        
              
           <label for="txtdata">Data:</label>
           <input class="form-control" type="date" name="dataexame" id="txtdata"><br>
           
            <label for="txtenxames"> Enxames:</label>
           
            <textarea class ="form-control" name="exames" id="txtenxames" cols="30" rows="10"></textarea>
           
        

        
            <label for="txtlab">Laborátorio:</label>
            <select class="form-control" required="" name="laboratorio" id="txtlab">
              <option value=""></option>
              <option value="Fleury">Fleury</option>
              <option value="Lavosier">Lavoisier</option>
              <option value="Delboni">Delboni</option>
              <option value="CDB - Centro de Diagnósticos Brasil">CDB - Centro de Diagnósticos Brasil</option>
              <option value="Lambert">Lambert</option>
            </select>

        
            <label for="txtobs">Realização:</label>
            <textarea class="form-control" rows="11" cols ="700" maxlength="500" name ="realizacao" id="txtobs"></textarea>
        
        
        <hr>
        <input class="btn btn-primary form-control" type="submit" name ="cadastrar" value="Cadastrar">
    

     
</form>









</div>
</div>
</div>
</div>
</div>
