<?php 
// sediakan kotak pembungkus yang akan di gunakan (sesuai dengan fitur)
class DataBahanBakar {
    private $HargaSSuper;
    private $HargaVPower;
    private $HargaVPowerDiesel;
    private $HargaVPowerNitro;
    // attr harga2 dibuat private karena sudah ada getter yang akan menampilkan data nya 
    public $jenisYangDipilih;
    public $totalLiter;
    // attr di atas di set public karena nilai nya akan di isi di luar 
    protected $totalPembayaran;
    // set protected karena hanya di gunakan oleh class dia dan turunan untuk proses data 

    public function setHarga($valSSuper, $valVPower, $valVPowerDiesel, $valVPowerNitro){
        // mengisi nilai ke attr, nilai nantinya diisi dari luar class melalui function
        // nilai dari luar diambil kedalam class melalui parameter (variabel yang ada di dalam)
        // penamaan parameer bebas asal urutan pengisian dari luar nya sesuai 
        $this->HargaSSuper = $valSSuper;
        $this->HargaVPower = $valVPower;
        $this->HargaVPowerDiesel = $valVPowerDiesel;
        $this->HargaVPowerNitro = $valVPowerNitro;

    }
    
    public function getHarga() {
         // setelah nilai dr attr di simpan, fungsi getter akan mengembalikan/menampilkan nya untuk di gunakan di tempat lain
        // karna data yang akan di kirim/di keluarkan lebih dari satu, maka data-data tersebut di satukan terlebih dahulu
        $semuaDataSolar["SSuper"] = $this->HargaSSuper;
        $semuaDataSolar["VPower"] = $this->HargaVPower;
        $semuaDataSolar["VPowerDiesel"] = $this->HargaVPowerDiesel;
        $semuaDataSolar["VPowerNitro"] = $this->HargaVPowerNitro;
        // tujuan utama dari getter : return
    }

}

class pembelian extends DataBahanBakar { 
    // data sudah di sediakam, tinggal proses jumlah pembelian
    public function totalHarga() {
        $this->totalPembayaran = $this->getHarga()[$this->JenisYangDipilih];
        $this->totalLiter;
    }



     public function totalLiter() {
     echo "------------------";
     echo "Jenis Bahan Bakar : " . $this->jenisYangDipilih;
     echo "Total Liter : " . $this->totalLiter;
     echo "Harga Bayar : Rp. " . number_format($this->totalPembayaran, 0, ',', '.');
     echo "-----------------------------------";
    }
  }
?>