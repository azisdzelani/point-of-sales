<?php 

class transaksi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_barang','model_transaksi'));
		check_session();
	}

	function index()
	{
		if (isset($_POST['submit']))
		 {

			$this->model_transaksi->simpan_barang();
			redirect ('transaksi');
		}
		else
		{
			$data['barang'] = $this->model_barang->tampil_data();
			$data['detail'] = $this->model_transaksi->tampilkan_detail_transaksi();
			$this->template->load('template','transaksi/form_transaksi',$data);
		}
	}

	function hapusitem()
	{
		$id = $this->uri->segment(3);
		$this->model_transaksi->hapusitem($id);
		redirect('transaksi'); 
	}

	function selesai_belanja()
	{
		$date	= date('Y-m-d');
		$user	= $this->session->userdata('username');
		$id_op	= $this->db->get_where('operator',array('username'=>$user))->row_array();
		$data 	= array('operator_id'=>$id_op['operator_id'],'tanggal_transaksi'=>$date);
		$this->model_transaksi->selesai_belanja($data);
		redirect('transaksi');
	}

	function laporan()
	{
		if (isset($_POST['submit']))

		 {
		 	$tanggal_1 = $this->input->post('tanggal_1');
		 	$tanggal_2 = $this->input->post('tanggal_2');
			$data['record']=	$this->model_transaksi->laporan_periode($tanggal_1,$tanggal_2)->result();
			$this->template->load('template','transaksi/laporan',$data);
		}
		else
		{
			$data['record']=	$this->model_transaksi->laporan_default()->result();
			$this->template->load('template','transaksi/laporan',$data);	
		}
	}

	function excel()
	{	
		header("Content-type=appalication/vnd.ms-excel");
		header("conten-disposition:attachment;filename:laporantransaksi.xls");
		$data['record']=	$this->model_transaksi->laporan_default()->result();
		$this->load->view('transaksi/laporan_excel',$data);	
	}

	function pdf()
	{
		$this->load->library('cfpdf');
		$pdf = new FPDF('P','mm', 'A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B','L');
		$pdf->Cell(10,7,'No', 1,0);
		$pdf->cell(30,7,'Tanggal', 1,0);
		$pdf->cell(30,7,'Operator', 1,0);
		$pdf->cell(38,7,'Total', 1,1);

		// tampilkan dari database
		$pdf->SetFont('Arial','B','L');
		$data = $this->model_transaksi->laporan_default();
		$no=1;
		foreach ($data->result() as $d)
		$total=0;
		{
		$pdf->SetFont('Arial','B','L');
		$pdf->Cell(10,7,$no, 1,0);
		$pdf->cell(30,7,$d->tanggal_transaksi, 1,0);
		$pdf->cell(30,7,$d->nama_lengkap, 1,0);
		$pdf->cell(38,7,'', 1,1);
		}
		// end
		
		$pdf->cell(67,7,'total',1,0,'L');
		$pdf->cell(38,7,'',1,0);
		$pdf->Output();

	}
}