<?php
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}

	public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaAwal*40)/100;
		}
		return $hargaBekas;
	}

}


$Suzuki = new kendaraan ();
echo $Suzuki -> jenismerk="Suzuki";
echo "<br>";
echo $Suzuki -> tahunpembuatan=2007;
echo "<br>";
echo $Suzuki -> bahanbakar="Premium";
echo "<br>";
echo $Suzuki -> harga="4000"; echo " $";
echo "<br>";
echo $Suzuki -> hargaSecond(); echo " $";
echo "<br>";


echo "Mendapat Subsidi ?";
echo $Suzuki -> dapatSubsidi();


?>