<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
		public function atividade($fase = 1){
		$this->load->model('inicio_model');	
		$_SESSION['registros'] = $this->inicio_model->getquestao();
 	
 		$this->getResultado($fase);
        Redirect('/Login/getResultado/1');
	}
    public function getResultado($fase){
        $array = ['registros' => $_SESSION['registros'][$fase-1], 
        'fase' => $fase
            ];

             if($fase > 0 && $fase <= count($_SESSION['registros'])){
             	$this->load->view('partida_um_jogador', ['dados'=>$array]);
             }else{
             	Redirect('/Login/premio');
		} 
	}
	public function premio()
	{
		$this->load->view('premio');
	}
	public function cadastro()
	{
		$this->load->view('cadastrar_usuario');
	}
	public function escolha()
	{
		$this->load->view('jogadores');
	}
	public function conteudo()
	{
		$this->load->view('conteudo');
	}
}
