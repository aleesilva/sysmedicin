<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js" ></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://digitalbush.com/wp-content/uploads/2014/10/jquery.maskedinput.js"></script>
<div id="page-wrapper">
	  <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                         <i class="fa fa-plus-circle fa-2x"></i>   Cadastro De Pacientes 
                        </h3>
                        
                    </div>
                </div>
 <div class="container-fluid">
					

	<div class="col-lg-4">
	   <form name="form" action="cadastrar-paciente" method="POST" id="formcadastro">
	   		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Dados Paciente</h4>
                        </div>

                <div class="panel-body">

	   			<div class="form-group">
	   				<label for="txtnome">Nome</label>
		   			<input required type="text" id="txtnome" name="nome" class="input form-control">
		   			<label for="txtcpf">CPF</label>
		   			<input maxlength="14"  type="text" onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);" id="txtcpf" name="cpf" class="input form-control">
		   			<label for="txtrg">RG</label>
		   			<input maxlength="11"type="text" id="txtrg" name="rg" class="input form-control">
		   			
	   				<label for="txttipo">Tipo Sanguíneo</label>
	   				<select class="input form-control" name="tipsang" id="txttipo">	   				
		   				<option value=""></option>
		   				<option value="Tipo A">Tipo A</option>
		   				<option value="Tipo B">Tipo B</option>
		   				<option value="Tipo AB">Tipo AB</option>
		   				<option value="Tipo O">Tipo O</option>
					</select>
					<label for="txtestadocivil">Est.Civil</label>
	   				<select name="estcivil" id="txtestadocivil" class="input form-control">
		   				<option value=""></option>
		   				<option value="Solteiro(a)">Solteiro(a)</option>
		   				<option value="Casado(a)">Casado(a)</option>
		   				<option value="Divorciado(a)">Divorciado(a)</option>
		   				<option value="Viúvo(a)">Viúvo(a)</option>
		   				<option value="Separado(a)">Separado(a)</option>
		   				<option value="Companheiro(a)">Companheiro(a)</option>
	   				</select>
	   
	   			<label for="txtsexo">Sexo</label>
	   			<select name="sexo" id="txtsexo" class="input form-control">
	   				<option value=""></option>
	   				<option value="Masculino">Masculino</option>
	   				<option value="Feminino">Feminino</option>
	   			</select>
	   			<label for="txtnasc">Data Nascimento</label>
	   			<input onblur="calcular(this.value);" required="" class="input form-control" class="txt" id="txtnasc" type="date"  placeholder = "Data de Nascimento..." name="DataNasc">
				<label for="txtidade">Idade</label>
				<input   required="" class = "input form-control" class="txt" id="txtidade" type="number" placeholder="Idade..." name = "idade"/>
				</div>
				</div>
				</div>
			</div>
				
				<div class="col-lg-4">
				<div class="panel panel-default">
				<div class="panel-heading">
							<h4 class="panel-title">Endereço Do Paciente</h4>
				</div>
				<div class="panel-body">
	   			
	   			<!-- <legend class="scheduler-border">Endereço Do Paciente</legend> -->
	   			<div class="form-group">
	   			<label for="cep">Cep</label>
                	 <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" class="input form-control" />
               <label for="rua">Rua</label>
        			 <input name="rua" type="text" id="rua" size="60" class="input form-control" />
        	   <label for="bairro">Bairro</label>
        			 <input class="form-control" name="bairro" type="text" id="bairro" size="40" /></label>
        	   <label for="cidade">Cidade</label>
        			<input class="form-control" name="cidade" type="text" id="cidade" size="40" /></label>
        	   <label for="uf">Estado</label>
        			<input class="form-control" name="uf" type="text" id="uf" size="2" /></label>
        	   <label for="ibge">IBGE</label>
        			<input class="form-control" name="ibge" type="text" id="ibge" size="8" /></label>
				
				</div>
				</div>
				</div>
				</div>
				

				<div class="col-lg-4">
				<div class="panel panel-default">
				<div class="panel-heading">
							<h4 class="panel-title">Contatos</h4>
				</div>
				<div class="panel-body">
				<div class="form-group">
	   				<label for="txttelefone1">Telefone1</label>
	   				 <input type="text" id="txttelefone1" name="telefone1" class="telefone form-control">
	   				 	<label for="txttelefone2">Telefone2</label>
	   				 		<input type="text" id="txttelefone3" name="telefone2" class="telefone form-control">
	   				 			<label for="txttelefone3">Telefone3</label>
	   				 				<input type="text" id="txttelefone3" name="telefone3" class="telefone form-control">
	   				 					<label for="txttelefone4">Telefone4</label>
	   				 						<input type="text" id="txttelefone4" name="telefone4" class="telefone form-control">
	   				 						 <label for="txtemail">E-mail</label>
	   				 						  <input class=" telefone form-control" type="email" id="txtemail" name="email">

				</div>
				</div>
				</div>
				</div>


			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">
						<h4 class="panel-title">Dados Adicionais</h4>
			</div>
			<div class="panel-body">
			<div class="form-group">
	   	  	  <label for="txtobs">Observações</label>
	   	  	  	<textarea class="form-control" name="obs" id="txtobs" cols="30" rows="10"></textarea>
			  <label for="txtindicacao">Indicação</label>
			  	 <input class="form-control" type="text" name="indicacao" id="txtindicacao">
			  
			<hr>
			<input type="submit" class="btn btn-primary form-control" value="Cadastrar">
			</div>
			</div>
			</div>
			</div>
			</div>
	   </form>
		
	
	<script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...")
                        $("#bairro").val("...")
                        $("#cidade").val("...")
                        $("#uf").val("...")
                        $("#ibge").val("...")

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <!--SCRIPT PARA FORMATAÇÂO DE TELEFONE -->
<script>
    jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
 </script>
 <!-- SCRIPT PARA FORMATÂÇÂO DO CPF -->
<script>
  		
  function validarCPF( cpf ){
	var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
	
	if(!filtro.test(cpf))
	{
		window.alert("CPF inválido. Tente novamente.");
		return false;
	}
   
	cpf = remove(cpf, ".");
	cpf = remove(cpf, "-");
	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
		cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
		cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
		cpf == "88888888888" || cpf == "99999999999")
	{
		window.alert("CPF inválido. Tente novamente.");
		return false;
   }

	soma = 0;
	for(i = 0; i < 9; i++)
	{
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	if(resto != parseInt(cpf.charAt(9))){
		window.alert("CPF inválido. Tente novamente.");
		return false;
	}
	
	soma = 0;
	for(i = 0; i < 10; i ++)
	{
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	
	if(resto != parseInt(cpf.charAt(10))){
		window.alert("CPF inválido. Tente novamente.");
		return false;
	}
	
	return true;
 }
 
function remove(str, sub) {
	i = str.indexOf(sub);
	r = "";
	if (i == -1) return str;
	{
		r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
	}
	
	return r;
}

/**
   * MASCARA ( mascara(o,f) e execmascara() )
   */
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

function cpf_mask(v){
	v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dígitos
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dígitos
	v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
	return v
}
  </script>
  <script>

	function calculateAge(dobString) {
		var dob = new Date(dobString);
		var currentDate = new Date();
		var currentYear = currentDate.getFullYear();
		var birthdayThisYear = new Date(currentYear, dob.getMonth(), dob.getDate());
		var age = currentYear - dob.getFullYear();
			if(birthdayThisYear > currentDate) {
				age--;
			}
				return age;
									}
	function calcular(data) {
		var data = document.form.DataNasc.value;
		var partes = data.split("/");
		var junta = partes[2]+"-"+partes[1]+"-"+partes[0];
		document.form.idade.value = (calculateAge(junta));
}


  </script>
<!--Script Calcula Idade -->
 <!-- <script type="text/javascript" src="js/Idade.js"></script> -->

</body>
</html>


  			</div>
            <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->