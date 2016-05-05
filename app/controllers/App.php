<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends APP_Controller {

	public function index( $section = 'home' )
	{

    if(!file_exists(APPPATH."views/section/{$section}.php"))
      $section = '404';
		// $this->lang->load('web');
		// $this->load->model('DataModel', 'Data');
    $this->data['section'] = $section;

		$this->load->view("section/{$section}", $this->data);
	}
	
	private function _mail()
	{
		if(!count($_POST)) return;
    $this->load->helper('email');
  	if(!$this->input->post('name') || !$this->input->post('mail') || !$this->input->post('comments'))
    	$this->data['error'] = 'Debes completar todos los campos';
    elseif(!valid_email($this->input->post('mail')) )
    	$this->data['error'] = 'La dirección de email es inválida';
    else
    {
      $this->load->library('PHPMailer');
      $mail = new PHPMailer();
      $mail->From = $this->config->item('client-mail', 'app');
      $mail->FromName = $this->config->item('client', 'app');
      #$mail->AddAddress($this->config->item('client-mail', 'app'));
      $mail->AddBCC('juanazareno@gmail.com');
      $mail->IsHTML(true);
      $mensaje = $this->load->view('section/contact-mail', array(), true);    
      $mail->Subject  = 'Contacto';
      $mail->Body  =  $mensaje;
      @$mail->Send();
      $this->data['formSOK'] = 1;  
		}
	}

}
