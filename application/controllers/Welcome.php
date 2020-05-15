<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tesAPI()
	{
		// Global Positif 
		$readAPIGlobalPos = file_get_contents('https://api.kawalcorona.com/positif'); // menggunakan file_get_content yang berguna mengambil data dari url karena api kawal ini menggunakan data json 
		$data['globalPos'] = json_decode($readAPIGlobalPos, true); // pada variabel ini kita melakukan decode data dari variabel $data['globalPos'] agar datanya bisa menjadi array dan mengambil nilainya dengan ['globalPos']

		// Global Sembuh
		$readAPIGlobalSem = file_get_contents('https://api.kawalcorona.com/sembuh'); // menggunakan file_get_content yang berguna mengambil data dari url karena api kawal ini menggunakan data json 
		$data['globalSem'] = json_decode($readAPIGlobalSem, true); // pada variabel ini kita melakukan decode data dari variabel $data['globalSem'] agar datanya bisa menjadi array dan mengambil nilainya dengan ['globalSem']

		// Global Meninggal
		$readAPIGlobalMeni = file_get_contents('https://api.kawalcorona.com/sembuh'); // menggunakan file_get_content yang berguna mengambil data dari url karena api kawal ini menggunakan data json 
		$data['globalMeni'] = json_decode($readAPIGlobalMeni, true); // pada variabel ini kita melakukan decode data dari variabel $data['globalMeni'] agar datanya bisa menjadi array dan mengambil nilainya dengan ['globalMeni']

		// Global Meninggal
		$readAPIGlobal = file_get_contents('https://api.kawalcorona.com'); // menggunakan file_get_content yang berguna mengambil data dari url karena api kawal ini menggunakan data json 
		$data['global'] = json_decode($readAPIGlobal, true); // pada variabel ini kita melakukan decode data dari variabel $data['global'] agar datanya bisa menjadi array dan mengambil nilainya dengan ['global']

		// Indonesia
		$readAPIIndo = file_get_contents('https://api.kawalcorona.com/indonesia'); // menggunakan file_get_content yang berguna mengambil data dari url karena api kawal ini menggunakan data json 
		$data['indonesia'] = json_decode($readAPIIndo, true); // pada variabel ini kita melakukan decode data dari variabel $data['indonesia'] agar datanya bisa menjadi array dan mengambil nilainya dengan ['indonesia']

		// Provinsi
		$readAPIProv = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'); // pada variabel ini kita melakukan decode data dari variabel $readAPIProv agar datanya bisa menjadi array
		$data['provinsi'] = json_decode($readAPIProv, true); // pada variabel ini kita melakukan decode data dari variabel $data['provinsi'] agar datanya bisa menjadi array dan mengambil nilainya dengan ['provinsi']

		$this->load->view('covid/index', $data); // kita lempar datanya ke view
		// echo "<pre>";
		// print_r($data); // selanjutnya kita menampilkan isinya dengan print_r
	}
}
