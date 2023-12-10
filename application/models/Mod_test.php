<?php 
defined('BASEPATH') || exit('No direct script access allowed');

class Mod_test extends CI_Model {

    function get_all_kpi(){
        $this->db->select('*');
        $this->db->from('kpi_marketing');
        return $this->db->get();
    }

    function get_kpi_aktual(){
        $this->db->select('SUM(CASE WHEN kpi_marketing.kpi = "Sales" THEN 1 ELSE 0 END) AS total_sales, 
                            SUM(CASE WHEN kpi_marketing.kpi = "Report" THEN 1 ELSE 0 END) AS total_report,
                            kpi_marketing.*,
                            bobot_kpi.*');
        $this->db->from('kpi_marketing');
        $this->db->join('bobot_kpi', 'bobot_kpi.kpi = kpi_marketing.kpi');
        $this->db->where('aktual <= deadline');
        $this->db->group_by('karyawan');
        return $this->db->get();
    }

    function grafik_kpi_aktual(){
        $this->db->select('(SUM(CASE WHEN aktual < deadline AND kpi_marketing.kpi = "Sales" THEN 1 ELSE 0 END)) * bobot_kpi.bobot /2 AS persentase1,
                            (SUM(CASE WHEN aktual < deadline AND kpi_marketing.kpi = "Report" THEN 1 ELSE 0 END)) * bobot_kpi.bobot / 2 AS persentase2,
                            kpi_marketing.*
                        ');
        $this->db->from('kpi_marketing');
        $this->db->join('bobot_kpi', 'bobot_kpi.kpi = kpi_marketing.kpi');
        $this->db->group_by('kpi_marketing.karyawan');
        return $this->db->get();
    }
}