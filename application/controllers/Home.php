<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

        public function index()
        {
                $this->db->cache_on();
                $data['profil'] = $this->db->get('profil')->result_array();
                $data['lokasi'] = $this->db->get('lokasi')->result_array();
                $this->load->view('home/index', $data);
                // $this->load->view('home/indexx');
        }

        public function profile()
        {
                $this->db->cache_on();
                $data['profil'] = $this->db->get('profil')->result_array();
                $data['lokasi'] = $this->db->get('lokasi')->result_array();
                $this->load->view('home/profile', $data);
        }
        public function lokasi()
        {
                $this->db->cache_on();
                $data['profil'] = $this->db->get('profil')->result_array();
                $data['lokasi'] = $this->db->get('lokasi')->result_array();
                $this->load->view('home/lokasi', $data);
        }
        public function hubungi()
        {
                $this->db->cache_on();
                $data['profil'] = $this->db->get('profil')->result_array();
                $data['lokasi'] = $this->db->get('lokasi')->result_array();
                $this->load->view('home/hubungi', $data);
        }


        public function kritiksaran()
        {
                // insert saran dari user
                $data = [
                        'nama'  => $this->input->post('namauser'),
                        'isi'   => $this->input->post('kritiksaran'),
                        'email' => $this->input->post('emailuser')
                ];
                $this->db->insert("saran", $data);
                redirect(base_url('home/hubungi'));
        }
        public function data()
        {
                return json_encode($this->db->get('profil')->result_array());
        }
        public function detail($id)
        {
                echo json_encode($this->db->get_where('profil', ['id_profil' => $id])->result_array());
        }

        public function detail_panti($id)
        {
                $this->db->cache_on();
                $data['panti'] = $this->db->get_where("profil", ['id_profil' => $id])->result_array();
                $this->load->view('home/detail_panti', $data);
        }
}
