<!-- Nama   : Muhammad Ramadhan Muna -->
<!-- NIM    : 20051397059 -->
<!-- Kelas  : 2020 A - D4 Manajemen Informatika -->

<html lang="en">
<head>
    <link rel="stylesheet" href="No 1.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal No 1</h2>

<?php 
// Program PHP
class Orang {
    protected $nama, $umur;

    public function __construct($nama, $umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }

}

class Dosen extends Orang {
    private $nip;

    public function __construct($nama, $umur, $nip){
        $this->nip = $nip;
        parent::__construct($nama, $umur);
    }
    public function info(){
        return $this->nama . ' berumur '. $this->umur. ' dengan NIP : '. $this->nip;
    }
}

$dosen1 = new Dosen('Munz', 25, 20051397059);
$dosen2 = new Dosen('Raul', 30, 20051397057);
$dosen3 = new Dosen("Natzy", 25, 20051397055);

echo $dosen1->info();
echo '<br>  <br>';
echo $dosen2->info();
echo '<br>  <br>';
echo $dosen3->info();
?>
</div>
</body>
</html>