<?php 
defined('BASEPATH') || exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mod_test');
    }

    function index() {
        $data['pageTitle'] = "TES SOAL";
        $data['data_kpi'] = $this->Mod_test->get_all_kpi()->result();
        $data['data_kpi_aktual'] = $this->Mod_test->get_kpi_aktual()->result();


        //GRAFIK 1
        $gr_nama = [];
        $gr_persen = [];

        foreach($this->Mod_test->grafik_kpi_aktual()->result() as $row){
            $gr_nama[] = $row->karyawan;
            $gr_persen[] = number_format($row->persentase, 2, ".", ".");
        }
        $data['gr_nama'] = json_encode($gr_nama);
        $data['gr_persen'] = json_encode($gr_persen);


        //GRAFIK 2
        $gr_ontime = 0; 
        $gr_latetime = 0; 
        $total_tasklist = 0; 
        $jumlah_ontime = 0;
        $jumlah_latetime = 0;
        foreach($this->Mod_test->get_all_kpi()->result() as $row){ 
            if($row->aktual <= $row->deadline){
                $jumlah_ontime += 1;
            }else{
                $jumlah_latetime += 1;
            }
            $total_tasklist += 1;
        }

        $data['gr_ontime'] = number_format(($jumlah_ontime / $total_tasklist) * 100);
        $data['gr_latetime'] = number_format(($jumlah_latetime / $total_tasklist) * 100);

        $this->load->view("test/test/body",$data);
    }
}