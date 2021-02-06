<?php 
    class database_page extends CI_Model
    {
        function user_data()
        {
            $this->load->database();

            $query = $this->db->query("SELECT * from formdata");
            // echo "<pre>";
            // print_r($query->result_array());
            // echo "</pre>";
            return $query->result_array();
        }
    }

?>