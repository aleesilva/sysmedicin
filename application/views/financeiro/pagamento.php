<body>
  

<div id="page-wrapper">
	  <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                          <i class="fa fa-money fa-2x" aria-hidden="true"></i>  Controle
                        </h3>
                        
                    </div>
                </div>
 <div class="container-fluid">
					

	<div class="col-lg-8">
	   		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Dados Paciente</h4>
                        </div>

                <div class="panel-body">







    <form action="adiciona-pagamento" method="POST">
        <div class="form-group">
        <label for="txtnome">Paciente</label>
         <!-- <select class="form-control" name="paciente" id="" class="input-xxlarge">
                    <option value=""></option>
                    <?php foreach ($nomes as $nome): ?>
                      <option value="<?=$nome['nome'].' '.'-'.' '.$nome['cpf'];?>"><?=$nome['nome'].' '.'-'.' '.$nome['cpf']; ?></option>
                    <?php endforeach ?>
                </select> -->
                <input type="text" class="j_autocomplete input form-control" id="search" name="paciente">
                    <label for="txtpagante">Nome Do Pagante</label>
                    <input class="input form-control" type="text" name="nomepagante" id="txtpagante">
                
                
                    <label for="txtcpfpagante">CPF Do Pagante</label>
                    <input class="input form-control"  type="text" onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);" id="txtcpf" name="cpf">
                
              
              <label for="txtdata">Data Da Consulta</label>
              <input class="form-control input" type="date" name ="data"></td>
              
              
                <label for="txtvalor">Valor da Consulta</label>
                <!-- <span class="input-group-addon">$</span>
                 <input value = ",00" class="form-control" name="pagamento" type="text" >-->
                <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input value = ",00"  type="text" class="form-control" name="pagamento">
                               
                            </div>
              
              
                <label for="txttipo">Tipo Pagamento</label>
                <select class="input form-control" name="tipopagamento" id="txtipo">
                    <option value="Cheque">Cheque</option>
                    <option value="Dinheiro">Dinheiro</option>
                </select>
              
                    <hr>
                    
                     <input type="submit" class="btn form-control btn-primary" value="Adicionar Pagamento"></td>
                     <!-- ><a href="recibo.php" class="btn btn-warning">Gerar Recibo</a></td> -->
                    
                    

        </div>
     </form>
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
  </body>









</div>
</div>
</div>
</div>