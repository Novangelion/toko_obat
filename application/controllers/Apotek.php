<?php
defined('BASEPATH') OR exit('No direct script access allowed');
		class Apotek extends CI_Controller{
		
			public function __construct(){
				parent::__construct();
				$this->load->model('m_apotek');
			}
			
			public function index(){
				$tbl = $this->db->get('obat');
		
				$config['base_url'] = base_url().'index.php/Apotek/index/';

				$config['total_rows'] = $tbl->num_rows();
				$config['per_page'] = 5; #jumlah data dipanggil perhalaman
				$config['uri_segment'] = 3; #data selanjutnya di parse di urisegmen 3
				$choice = $config["total_rows"] / $config["per_page"];
				$config["num_links"] = floor($choice);
				/* Atur class bootstrap yang digunakan */
				$config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination">';
				$config['full_tag_close'] 	= '</ul></nav></div>';
				$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
				$config['num_tag_close'] 	= '</span></li>';
				$config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
				$config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
				$config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
				$config['next_tagl_close'] 	= '<span aria-hidden="true">&raquo;</span></span></li>';
				$config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
				$config['prev_tagl_close'] 	= '</span></li>';
				$config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
				$config['first_tagl_close'] = '</span></li>';
				$config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
				$config['last_tagl_close'] 	= '</span></li>';

				$this->pagination->initialize($config);

				$data['halaman'] = $this->pagination->create_links();
				/* Membuat variable halaman untuk dipanggil di view */
				$page = $this->uri->segment(3,0);

				$data['obat'] = $this->m_apotek->tampil_obat($config['per_page'], $page);
				$this->load->view('v_apotek',$data);
			}
			
			public function tambah_obat(){
				$this->load->view('v_tambah_obat');
			}
			
			public function tambah_obat_aksi(){
			
				$kode_obat = $this->input->post('kode_obat');
				$nama_obat = $this->input->post('nama_obat');
				$jenis_obat = $this->input->post('jenis_obat');
				$harga_obat = $this->input->post('harga_obat');
				$stok = $this->input->post('stok');
			
		 
				$data = array(
					'kode_obat' => $kode_obat,
					'nama_obat' => $nama_obat,
					'jenis_obat' => $jenis_obat,
					'harga_obat' => $harga_obat,
					'stok' => $stok
					);
				
				$where = $kode_obat;
				
				$this->m_apotek->input_obat($data,'obat');
				redirect('Apotek/index');
			}
			
			
			public function hapus($kode_obat){
				$where = array('kode_obat' => $kode_obat);
				$this->m_apotek->hapus_obat($where,'obat');
				redirect('Apotek/index');
			}
		 
			public function edit($kode_obat){
				$where = $kode_obat;
				$data['obat'] = $this->m_apotek->edit_obat($where,'obat')->result();
				$this->load->view('v_edit',$data);
			}
			
			public function update($kode_obat){
			if($this->input->post('perbarui')){
				$nama_obat = $this->input->post('nama_obat');
				$jenis_obat = $this->input->post('jenis_obat');
				$harga_obat = $this->input->post('harga_obat');
				$stok = $this->input->post('stok');
			
				$data = array(
					'nama_obat' => $nama_obat,
					'jenis_obat' => $jenis_obat,
					'harga_obat' => $harga_obat,
					'stok' => $stok
					);
				
				$where = $kode_obat;
				$this->m_apotek->update_obat($where,$data,'obat');
				redirect('Apotek/index');
			}
			else{
				redirect('Apotek/index');
				}
				
				
		}
			}

?>