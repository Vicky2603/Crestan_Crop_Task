<?php
    class ajax_model extends CI_Model
    {
        public function createData($data)
        {
            $this->load->database();
            $query = $this->db->insert('formdata', $data);
            return $query;
        }
        public function fetchall($data, $tablename, $where)
        {
            $query = $this->db->select($data)
                                ->from($tablename)
                                ->where($where)
                                ->get();

            return $query->result_array();
        }

    }

?>