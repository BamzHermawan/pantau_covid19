<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $urlAPI = 'https://api.kawalcorona.com/'; // mendefinisikan url API
	
	public function delcache($value = '')
	{
 		$this->output->delete_cache('home'); // membuat function untuk delete chace secara manual 
 		//ketikan alamat url http://localhost/pantau_covid19/index.php/home/delcache
 	}

	// list all your items
 	public function index( $offset = 0 )
 	{
		// $data['sembuh'] = $this->readAPI('sembuh'); // yang tadinya https://api.kawalcorona.com/sembuh jadi diambil sembuhnya doang
		// $data['positif'] = $this->readAPI('positif'); // ini juga sama

 		$this->output->cache(60);
 		$data['globalPos'] = $this->readAPI('positif');
 		$data['globalSem'] = $this->readAPI('sembuh');
 		$data['globalMeni'] = $this->readAPI('meninggal');
 		$data['global'] = $this->readAPI();

 		$indonesia = $this->readAPI('indonesia');
 		$indo = []; 
 		foreach ($indonesia as $value) {
 			$indo = [

 				'positif' => $value['positif'],
 				'sembuh' => $value['sembuh'],
 				'meninggal' => $value['meninggal'],

 			];
 		}

 		$data['indonesia'] = $indo;


 		$data['provinsi'] = $this->readAPI('provinsi');
 		$data['getSingleProvince'] = $this->getSingleProvince(16);

 		$this->load->view('covid/header');
		$this->load->view('covid/content_covid', $data); // kita lempar datanya ke view
		$this->load->view('covid/footer');
		// echo "<pre>";
		// print_r($this->getSingleProvince());

		// echo "<pre>";
		// print_r($data);
	}

	// menampilkan satu provinsi saja
	public function getSingleProvince($FID = "")
	{
		$data = $this->readAPI('provinsi'); // mengambil api data provinsi pada function readAPI

		$result = []; // array yang blm di set

		if (empty($FID)) {
			$FID = 16;
		} else {
			
			$FID = $FID;
		}

		foreach ($data as $value) {

			if ($value['attributes']['FID'] == $FID ) {
						// echo "<pre>";
						// print_r($value);

						// menjadikan datanya menjadi array kembali
				$result = [

					'provinsi' => $value['attributes']['Provinsi'],
					'positif' => $value['attributes']['Kasus_Posi'],
					'sembuh' => $value['attributes']['Kasus_Semb'],
					'meninggal' => $value['attributes']['Kasus_Meni'],
				];

				return $result;
			}	
		}
						// jika datanya tidak di temukan
		$result = [

			'provinsi' => 'N/A',
			'positif' => 'N/A',
			'sembuh' => 'N/A',
			'meninggal' => 'N/A',
		];

		return $result;
	}

// membuat reusable jadi reusable itu digunakan untuk kebutuhan yang berulang ulang jadi untuk menyederhanakan data yang kita get pada controller welcome dimana pada function readAPI kita banyak mengambil data jadi dengan reusable ini maka datanya akan di jadikan fungsi pemanggilan agar lebih sederhana dan megirim parameter $url = '' 
	public function readAPI($url = '')
	{

		$url = strtolower($url); // menconvert dari huruf besar misal INDONESIA menjadi indonesia sehiga API bisa membaca  $data['provinsi'] = $this->readAPI('INDONESIA');

		// membuat fungsi generate sebagai parameternya mau di arahkan kemana
		$maskUrl = [

			'indonesia' => '/indonesia',
			'provinsi' => '/indonesia/provinsi',
			'positif' => '/positif',
			'sembuh' => 'sembuh',
			'meninggal' => 'meninggal',

		];

		$generateUrl = strtr($url, $maskUrl); // menggunakan strtr untuk melakukan generate silahkan di cari tau strtr itu apa

		if (empty($url) OR !array_key_exists($url, $maskUrl)) { // jika tidak ada data maka kita arahkan kemana disini kita set datanya
			$readUrl = file_get_contents($this->urlAPI); // klw kosong akan masuk ke global data misal sebelumya kita set $this->urlAPI.'/indonesia'
		}else{
			$readUrl = file_get_contents($this->urlAPI.$generateUrl); // nah klw yg ini di dapat dari yg private tinggal di kasih ini sialisasi $this->yang dapat dari private urlAPI.$generateUrl yg di set sebelumnya di parameter
		}

		$data = json_decode($readUrl, true); // mendecode json dalam bentuk array

		return $data; // nilainya akan di kembalikan
	}
}
