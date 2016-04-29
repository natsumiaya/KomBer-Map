<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application extends CI_Controller {

	 public function __construct(){
        parent::__construct();
        $this->load->model('application_model');
    }

	public function index()
	{
		$result = $this->application_model->getPosition($this->session->userdata['userid']);
		$i =0; $a=0; $b=0; $c=0; $d=0; $e=0; $f=0; $g=0; $h=0; $j=0; $k = 0;
        $pack = array();
        $makan = array();
        $rapat = array();
        $tidur = array();
        $mandi = array();
        $jalan = array();
        $berkendara = array();
        $romantic = array();
        $mendaki = array();
        $berselancar = array();
        $memancing = array();
        if(isset($result)){
            foreach ($result as $row) {
                $pack[$i]["latitude"] = $row->latitude;
                $pack[$i]["longitude"] = $row->longitude;
                $pack[$i]["accuracy"] = $row->accuracy;
                $pack[$i]["times"] = $row->times;
                $pack[$i]["activity"] = $row->activity;
                //mulai yeyek
                if ($row->activity == "Makan"){
                    (float)$makan[$a]["latitude"] = $row->latitude;
                    (float)$makan[$a]["longitude"] = $row->longitude;
                    (string)$makan[$a]["times"] = $row->times;
                    $a++;
                }
                if ($row->activity == "Rapat"){
                    (float)$rapat[$b]["latitude"] = $row->latitude;
                    (float)$rapat[$b]["longitude"] = $row->longitude;
                    (string)$rapat[$b]["times"] = $row->times;
                    $b++;
                }
                if ($row->activity == "Tidur"){
                    (float)$tidur[$c]["latitude"] = $row->latitude;
                    (float)$tidur[$c]["longitude"] = $row->longitude;
                    (string)$tidur[$c]["times"] = $row->times;
                    $c++;
                }
                if ($row->activity == "Mandi"){
                    (float)$mandi[$d]["latitude"] = $row->latitude;
                    (float)$mandi[$d]["longitude"] = $row->longitude;
                    (string)$mandi[$d]["times"] = $row->times;
                    $d++;
                }
                if ($row->activity == "Jalan"){
                    (float)$jalan[$e]["latitude"] = $row->latitude;
                    (float)$jalan[$e]["longitude"] = $row->longitude;
                    (string)$jalan[$e]["times"] = $row->times;
                    $e++;
                }
                if ($row->activity == "Berkendara"){
                    (float)$berkendara[$f]["latitude"] = $row->latitude;
                    (float)$berkendara[$f]["longitude"] = $row->longitude;
                    (string)$berkendara[$f]["times"] = $row->times;
                    $f++;
                }
                if ($row->activity == "Romantic Time"){
                    (float)$romantic[$g]["latitude"] = $row->latitude;
                    (float)$romantic[$g]["longitude"] = $row->longitude;
                    (string)$romantic[$g]["times"] = $row->times;
                    $g++;
                }
                if ($row->activity == "Mendaki"){
                   (float)$mendaki[$h]["latitude"] = $row->latitude;
                    (float)$mendaki[$h]["longitude"] = $row->longitude;
                    (string)$mendaki[$h]["times"] = $row->times;
                    $h++;
                }
                if ($row->activity == "Berselancar"){
                   (float)$berselancar[$j]["latitude"] = $row->latitude;
                    (float)$berselancar[$j]["longitude"] = $row->longitude;
                    (string)$berselancar[$j]["times"] = $row->times;
                    $j++;
                }
                if ($row->activity == "Memancing"){
                    (float)$memancing[$k]["latitude"] = $row->latitude;
                    (float)$memancing[$k]["longitude"] = $row->longitude;
                    (string)$memancing[$k]["times"] = $row->times;
                    $k++;
                }
                $i++;
            }
        }
        $data["pack"] = $pack;
        $data["count"] = $i;
        $data["makan"] = $makan;
        $data["rapat"] = $rapat;
        $data["tidur"] = $tidur;
        $data["mandi"] = $mandi;
        $data["jalan"] = $jalan;
        $data["berkendara"] = $berkendara;
        $data["romantic"] = $romantic;
        $data["mendaki"] = $mendaki;
        $data["memancing"] = $memancing;
        $data["berselancar"] = $berselancar;
		$this->load->view('index', $data);
	}


}
