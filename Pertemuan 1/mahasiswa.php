<?php
class mahasiswa {
    // Property
    public $nim;
    public $nama;
    public $prodi;

    // Method
    public function sayHello(){
        return "Hallo, Nama saya " . $this->nama .
               " dengan NIM " . $this->nim .
               " saya adalah jurusan / prodi " . $this->prodi . " program.";
    }
}

// object 1
$mahasiswa1 = new mahasiswa();
$mahasiswa1->nim = 'T3124111';
$mahasiswa1->nama = 'Ibrahim';
$mahasiswa1->prodi = 'Teknik Informatika';

// object 2
$mahasiswa2 = new mahasiswa();
$mahasiswa2->nim = 'T3124111';
$mahasiswa2->nama = 'Ibrahim';
$mahasiswa2->prodi = 'Teknik Informatika';

echo "Daftar Mahasiswa <br>";
echo "------------------------ <br>";
echo $mahasiswa1->sayHello() . '<br>';
echo $mahasiswa2->sayHello() . '<br>';
?>
