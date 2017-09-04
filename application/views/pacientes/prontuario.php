<div id="page-wrapper">
	<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                        <i class="fa fa-plus-circle fa-2x"></i>  Cadastro De Prontuário
                        </h3>
                        
                    </div>
                </div>
    <div class="container-fluid">


		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Cadastro De Prontuário</h4>
                        </div>

                <div class="panel-body">

		<form name ="prontuario" action="cadastra-prontuario" method="POST">
					<div class="form-group">
					<label class="prontuario" for="txtpaciente">Paciente:</label> 
                    <!-- <select name="paciente" id="" class="form-control">
            <option value="null">Selecione um Nome...</option>
                <?php foreach ($nomes as $nome): ?>
                    <option value="<?=$nome['nome']?>"><?=$nome['nome']; ?></option>
                <?php endforeach ?>
 -->         <div class="box bloco">
                <input type="text" class="j_autocomplete input form-control" id="search" name="paciente">
                <!-- <ul class="resultados">
                    <li>...</li> - <strong>...</strong>
                </ul> -->
            </div>
        <!-- </select> -->
        		</select>
        			<label  for="txtsexo">Sexo:</label>
        			<select class="form-control" name="sexo" id="txtsexo">
        				<option value="">Selecione um Opção</option>
        				<option value="Masculino">Masculino</option>
        				<option value="Feminino">Femino</option>
        			</select>
        		
        		
        			<label class="prontuario" for="txtalergias">Alergias:</label>
        			
        			<textarea class="form-control" name="alergias" id="txtalergias"  cols="100" rows="6"></textarea>
        			
        		
        		
        			<label class="prontuario" for="txtmolestia">História Pregressa Da Moléstia Atual:</label>
        			<textarea name="molestia" id="txtmolestia" cols="30" rows="10" class="form-control"></textarea>
        		
        		
        			<label id ="antecedentes" for="txtantecedentes">Antecedentes:</label>
        			<label class="prontuario" for="txthabitos">Hábitos</label><textarea name="habitos"class="form-control" id="txthabitos" rows="8"></textarea>
        			<label for="txtmedicamentos">Medicações em Uso</label>
        			<textarea name="medicamentos" id="txtmedicamentos"  rows="8" class="form-control "></textarea>
        				<hr>
           		
           		<button class="btn btn-primary form-control">Salvar Prontuario</button>
				
		</form>
		</div>
		</div>
</div>
	</div>
</div>


