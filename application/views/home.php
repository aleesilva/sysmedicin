 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             <i class="fa fa-desktop fa-1x" aria-hidden="true"></i>   Dashboard 
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa fa-user"></i>  <strong>Olá <?=strtoupper($session['usuario']) ?> </strong> Tenha Um Bom Trabalho <!-- <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link"></a>   -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$paciente_count ?></div>
                                        <div>Pacientes Cadastrados</div>
                                    </div>
                                </div>
                            </div>
                            <a href="lista-pacientes">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Todos</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$agenda_count ?></div>
                                        <div>Consultas Do Dia</div>
                                    </div>
                                </div>
                            </div>

                          
                            <a href="#" data-toggle="modal" data-target="#myModalAgenda" >
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Todos</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                          
                        </div>
                         
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$prontuario_count ?></div>
                                        <div>Prontuários</div>
                                    </div>
                                </div>
                            </div>
                            <a href="listagem-de-prontuario">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Todos</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bar-chart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Movimento</div>
                                    </div>
                                </div>
                            </div>
                            <a href="movimento">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

            


<!--                 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /.row -->
<!-- 
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                 <!--    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-calendar"></i> Agenda</h3>
                            </div>
                            <div class="panel-body">
                            <a href="#" id="open-more-info" data-target="right-side" class="light-btn text-intro opacity-0">
                                <img src="static/img/agenda.png" alt="agenda" width="80" height="80">
                            </a>
                            <button type="button" class="btn-link" data-toggle="modal" data-target="#myModal"><img src="static/img/agenda.png" alt="agenda" height="80" width="80"></button> -->

<!-- Modal -->
<div id="myModalAgenda" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"> <i class="fa fa-calendar fa-2x"></i>  Agenda</h4>
      </div>
      <div class="modal-body">
                
                <table id="tabela" class="table table-striped table-hover table-bordered table-condensed"  >
        <caption><h3> <i class="fa fa-calendar fa-2x"></i>  Agenda Do Dia</h3></caption>
            <thead>
                   
                <tr>
                    <th>Status</th>
                    <th>Nome</th>
                    <th>Horário</th>
                    <th>Data</th>
                    <th>Hora De Chegada</th>
                    <th>Hora De Saída</th>
                

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
                    <td><?php  echo $Agendamentos ['hora_chegada'];?></td>
                    <td><?php  echo $Agendamentos ['hora_saida'];?></td>
                    
                </tr>
                   <?php  endforeach ?>
                  </tbody>
    </table>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<div class="modal fade" id="myModalPacientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center> <h4 class="modal-title" id="myModalLabel">Sobre A&C Solutions</h4></center>
      </div>
      <div class="modal-body">
     
    
        <center> <label for="" style="">
            <i class="fa fa-university  fa-3x" aria-hidden="true"></i>
                <strong style=" font-size:25px;">
                    A&C Solutions IT
                </strong>
        
                    <br><br>
    
                <label for="" style="">
                    <i class="fa fa-phone fa-1x" aria-hidden="true"></i>
                    <strong style="font-size:16px;">
                      Aleson :(11) 99407-0243 <br>
                      <i class="fa fa-phone fa-1x" aria-hidden="true"></i> Carlos :(11) 995030134 <br>
                      
                      <i class="fa fa-envelope" aria-hidden="true"></i> aleesilva17@icloud.com
                      <br>
                      <i class="fa fa-envelope" aria-hidden="true"></i> profcarlosmorais@gmail.com
                  </strong>
                    <br><br><br>
              
                </center>                
                    
                     
      


          
      
      </div>
      <div class="modal-footer">
        <center>
           <strong style="font-weight: bold">Copyright ©</strong> <label for="" style=>2016 Todos os direitos reservados</label>
                <br><br>
                <!-- <img src="static/img/medicina.png" alt="" widht="120" height="120"> -->
        </center>
      </div>
    </div>
  </div>
</div>