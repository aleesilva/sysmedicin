<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller {
        // set the class variable.
      public $template  = array();
      public $data      = array();
 
  public function __construct()
  {
          parent::__construct();
 
  }
 
        /*Front Page Layout*/
    public function layout()
    {
            // making template and send data to view.
            $this->template['page'] = $this->load->view($this->page, $this->data, true);
            $this->load->view('layout', $this->template);
    }
        /*Front Page Layout*/
    public function layout_admin()
  {
            // making template and send data to view.
            $this->template['page'] = $this->load->view($this->page, $this->data, true);
            $this->load->view('layout', $this->template);
    }
        //remove acentos e caracteres especiais de uma string
    public  function remove_acentos($string = NULL)
    {
            $procurar   = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ');
            $substituir = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y');
            return str_replace($procurar, $substituir, $string);
    }
        //função que gera um slug com base no título
    public function slug($string = NULL)
    {
            $string = $this->remove_acentos($string);
            return url_title($string, '-', TRUE);//função do helper url | url_title(DA_ONDE_PEGA_OS_DADOS, O SEPARADOR ENTRE AS PALAVRAS, BOOLEAN TUDO MINUSCULO OU NÃO)
    }
 
}