<div id="page-wrapper">
	<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                        <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>  Editar Prontuário
                        </h3>
                        
                    </div>
                </div>
    <div class="container-fluid">


		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Editar  Prontuário</h4>
                        </div>

                <div class="panel-body">

		<form name ="prontuario" action="alterar-prontuario" method="POST">
					<div class="form-group">
					<label class="prontuario" for="txtpaciente">Paciente:</label> <!-- <select name="paciente" id="" class="form-control">
            <option value="null">Selecione um Nome...</option>
                <?php foreach ($nomes as $nome): ?>
                    <option value="<?=$nome['nome']?>"><?=$nome['nome']; ?></option>
                <?php endforeach ?>
            
        </select> -->
        <input type="text" readonly class="form-control" name="paciente" value="<?=$prontuario['paciente'] ?>">
        <input type="hidden" name="id" value="<?=$prontuario['id_prontuario'] ?>">
        		 </select>
        			<label  for="txtsexo">Sexo:</label>
        			<!-- <select class="form-control" name="sexo" id="txtsexo">
        				<option value="">Selecione um Opção</option>
        				<option value="Masculino">Masculino</option>
        				<option value="Feminino">Femino</option>
        			</select> -->
        		  <input readonly  type="text" value="<?=$prontuario['sexo'] ?>" class="form-control" name="sexo">
        		
        			<label class="prontuario" for="txtalergias">Alergias:</label>
        			
        			<textarea class="form-control" name="alergias" id="txtalergias"  cols="100" rows="6"><?=$prontuario['alergias']?></textarea>
        			
        		
        		
        			<label class="prontuario" for="txtmolestia">História Pregressa Da Moléstia Atual:</label>
        			<textarea name="molestia" id="txtmolestia" cols="30" rows="10" class="form-control"><?=$prontuario['historico_doenca']?></textarea>
        		
        		
        			<label id ="antecedentes" for="txtantecedentes">Antecedentes:</label>
        			<label class="prontuario" for="txthabitos">Hábitos</label><textarea name="habitos"class="form-control" id="txthabitos" rows="8">
                        <?=$prontuario['antecedentes_habitos'] ?>         
                    </textarea>
        			<label for="txtmedicamentos">Medicações em Uso</label>
        			<textarea name="medicamentos" id="txtmedicamentos"  rows="8" class="form-control "><?=$prontuario['antecedentes_medicacao']?></textarea>
        				<hr>
           		
           		<button class="btn btn-primary form-control">Salvar Prontuario</button>
				
		</form>
		</div>
		</div>
</div>
	</div>
</div>