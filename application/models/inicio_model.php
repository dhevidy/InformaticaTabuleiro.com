<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class inicio_model extends CI_Model {
        public function getquestao(){
            $this->db->select("id, pergunta, errada1, resposta");
            $this->db->from("pergunta_evolucao");
            $this->db->order_by('id', 'RANDOM');
            $query = $this->db->get();

            return $query->result();

            $num_data_returned = $query->num_rows;

        if ($num_data_returned < 1 ) {
            echo "Conexão feita com sucesso";
            exit();
        }   $id = 0;
    }
         
}
