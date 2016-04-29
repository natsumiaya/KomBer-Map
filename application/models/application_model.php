<?php
class Application_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getPosition($userid){
        $sql = 'select * from koordinat where userid = \''.$userid.'\' order by times desc';
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false; // Not found
        }
    }
}