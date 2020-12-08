<?php
//fungsi format_tgl1 : display tanggal 12 Agustus 2015, dari format tanggal 2015-08-12
function format_tgl1($parameter){ //membuat fungsi format_tgl yang akan memproses nilai yg ditaruh diparameter (diharapkan nilainya adalah tgl yyyy-mm-dd)
		$tanggal=substr($parameter,8,2); //mengambil 2 digit dari index ke-8 (urutan 9)
		$bln_angka=substr($parameter,5,2); //mengambil 2 dari index ke-5 (urutan 6)
		switch($bln_angka){ //mengkonversi bulan yg formatnya angka tadi ke dalam bentuk string
				case 1:
					$bulan = "Januari";
					break;
				case 2:
					$bulan = "Februari";
					break;
				case 3:
					$bulan = "Maret";
					break;
				case 4:
					$bulan = "April";
					break;
				case 5:
					$bulan = "Mei";
					break;
				case 6:
					$bulan = "Juni";
					break;
				case 7:
					$bulan = "Juli";
					break;
				case 8:
					$bulan = "Agustus";
					break;
				case 9:
					$bulan = "September";
					break;
				case 10:
					$bulan = "Oktober";
					break;
				case 11:
					$bulan = "November";
					break;
				case 12:
					$bulan = "Desmber";
					break;
		} //tutup switch case
		$tahun=substr($parameter,0,4); //mengambil 4 angka di awal
		return $tanggal.' '.$bulan.' '.$tahun; //return berfungsi untuk mengubah nilai parameter menjadi nilai yang sudah diproses
} //tutup function

//fungsi format_tgl2 : display tanggal 12/08/2015, dari format tanggal 2015-08-12
function format_tgl2($parameter){ //membuat fungsi format_tgl yang akan memproses nilai yg ditaruh diparameter (diharapkan nilainya adalah tgl yyyy-mm-dd)
		$tanggal=substr($parameter,8,2); //mengambil 2 digit dari index ke-8 (urutan 9)
		$bulan=substr($parameter,5,2); //mengambil 2 dari index ke-5 (urutan 6)
		$tahun=substr($parameter,0,4); //mengambil 4 angka di awal
		return $tanggal.' '.$bulan.' '.$tahun; //return berfungsi untuk mengubah nilai parameter menjadi nilai yang sudah diproses
} //tutup function
?>