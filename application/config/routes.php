<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//rotas para as rotinas do sistema
$route['cadastrar-paciente'] = 'paciente/cadastrarPaciente';
$route['cadastrar-consulta'] = 'paciente/cadastrarConsulta';
$route['consulta-realizada'] = 'paciente/consultaRealizada';
$route['chegada'] = 'paciente/chegada';
$route['confirmar-consulta'] = 'paciente/confirmarConsulta';
$route['editar-consulta'] = 'paciente/editarConsulta';
$route['altera-consulta'] = 'paciente/alteraConsulta';
$route['cadastra-prontuario'] = 'paciente/cadastraProntuario';
$route['edita-prontuario'] = 'paciente/editaProntuario';
$route['alterar-prontuario'] = 'paciente/alterarProntuario';
$route['cadastro-exames'] = 'paciente/cadastroExames';
$route['editar-paciente'] = 'paciente/editarPaciente';
$route['alterar-paciente'] = 'paciente/alterarPaciente';
$route['ficha-paciente'] = 'paciente/fichaPaciente';
$route['pagamento'] = 'financeiro/index';
$route['adiciona-pagamento'] = 'financeiro/adicionaPagamento';
$route['movimento'] = 'financeiro/movimento';
$route['imprimir-recibo'] = 'financeiro/imprimirRecibo';
$route['imprimir-envelope'] = 'paciente/imprimiEnvelope';
$route['imprimir-prontuario'] = 'paciente/imprimiProntuario';
//fim rotas rotina
$route['prontuario'] = 'paciente/prontuario';
$route['listagem-de-exames'] = 'paciente/listaExames';
$route['listagem-de-prontuario'] = 'paciente/listaProntuario';
$route['cadastro-de-exames'] = 'paciente/exames';
$route['agenda'] = 'paciente/agenda';
$route['cadastro-de-consultas'] = 'paciente/cadastroConsultas';
$route['lista-pacientes'] = 'paciente/listaCadastro';
$route['cadastro-paciente'] = 'paciente/cadastro';
$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['home'] = 'welcome/home';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
