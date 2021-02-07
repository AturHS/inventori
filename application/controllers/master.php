<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller
{

	public function login()
	{

		$this->load->view('login');
	}

	public function index()
	{
		$data['isi'] = 'home';
		$data['class'] = 'home';
		$this->load->view('index', $data);
	}

	public function obat()
	{
		$data['isi'] = 'obat';
		$data['class'] = 'obat';
		$data['data'] = $this->db->query("SELECT * FROM tbl_obat ");
		$this->load->view('index', $data);
	}
	public function l_obat()
	{
		$data['data'] = $this->db->query("SELECT * FROM tbl_obat ");
		$this->load->view('l_obat', $data);
	}

	public function proses_input_obat()
	{

		$data = array(
			'kode_obat' => $this->input->post('kode_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'stok' => $this->input->post('stok'),
			'satuan' => $this->input->post('satuan')

		);
		$this->db->insert('tbl_obat', $data);
		redirect('master/obat');
	}

	public function tambah_obat()
	{
		$data['isi'] = 'tambah_obat';
		$data['class'] = 'tambah_obat';
		$this->load->view('index', $data);
	}

	public function hapus_obat($id_obat)
	{
		$this->db->query("DELETE FROM tbl_obat where id_obat='$id_obat'");
		redirect('master/obat');
	}

	/*----------------*/

	public function obat_masuk()
	{
		$data['isi'] = 'obat_masuk';
		$data['class'] = 'obat_masuk';
		$data['data'] = $this->db->query("SELECT * FROM tbl_obatmasuk ");
		$this->load->view('index', $data);
	}
	public function l_obat_masuk()
	{
		$data['data'] = $this->db->query("SELECT * FROM tbl_obatmasuk ");
		$this->load->view('l_obat_masuk', $data);
	}

	public function proses_input_obatmasuk()
	{

		$data = array(
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			'tanggal' => $this->input->post('tanggal'),
			'kode_obat' => $this->input->post('kode_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'jumlah_masuk' => $this->input->post('jumlah_masuk'),
			'satuan' => $this->input->post('satuan')

		);
		$this->db->insert('tbl_obatmasuk', $data);
		redirect('master/obat_masuk');
	}

	public function tambah_obat_masuk()
	{
		$data['isi'] = 'tambah_obat_masuk';
		$data['class'] = 'tambah_obat_masuk';
		$this->load->view('index', $data);
	}

	public function hapus_obat_masuk($id_obatmasuk)
	{
		$this->db->query("DELETE FROM tbl_obatmasuk where id_obatmasuk='$id_obatmasuk'");
		redirect('master/obat_masuk');
	}

	/*===========*/

	public function pengguna()
	{
		$data['isi'] = 'pengguna';
		$data['class'] = 'pengguna';
		$data['data'] = $this->db->query("SELECT * FROM tbl_admin ");
		$this->load->view('index', $data);
	}

	public function proses_input_pengguna()
	{

		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('tbl_admin', $data);
		redirect('master/pengguna');
	}

	public function tambah_pengguna()
	{
		$data['isi'] = 'tambah_pengguna';
		$data['class'] = 'tambah_pengguna';
		$this->load->view('index', $data);
	}

	public function hapus_pengguna($id_admin)
	{
		$this->db->query("DELETE FROM tbl_admin where id_admin='$id_admin'");
		redirect('master/pengguna');
	}


	public function edit($id_input)
	{
		$data['isi'] = 'edit';
		$data['class'] = 'form';
		$data['data'] = $this->db->query("SELECT * FROM input where id_input=$id_input ");
		$this->load->view('index', $data);
	}

	public function proses_edit()
	{
		$id_input =  $this->input->post('id_input');
		$nama =  $this->input->post('nama');
		$email =  $this->input->post('email');
		$no =  $this->input->post('no');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'no' => $no
		);

		$this->db->where('id_input', $id_input);
		$this->db->update('input', $data);
		redirect('master/tabel');
	}

	public function hapus($id_input)
	{
		$this->db->query("DELETE FROM input where id_input='$id_input'");
		redirect('master/tabel');
	}


	function proses_login()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$cek = $this->db->query("SELECT * FROM tbl_admin where username='$nama' and password='$email'")->num_rows();
		if ($cek > 0) {

			$this->session->set_userdata('username', $nama);
			redirect(base_url("master"));
		} else {
			echo "Username dan password salah !";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('master/login'));
	}
}
