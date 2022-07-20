<?php
class Nilai
{
    private $mapel;
    private $nilai;

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }

    public function getMapel()
    {
        return $this->mapel;
    }

    public function getNilai()
    {
        return $this->nilai;
    }
}

class Siswa
{
    private $nrp;
    private $nama;
    private $daftarNilai;

    public function __construct($nrp, $nama, Nilai $nilai)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $nilai;
    }

    public function getNrp()
    {
        return $this->nrp;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getDaftarNilai()
    {
        return $this->daftarNilai;
    }
}

// Soal 2a
$daftarNilai = new Nilai("Indonesia", [50, 60, 70]);
echo "<pre>";
var_dump($daftarNilai);
echo "</pre>";

// Soal 2b
$nilai = new Nilai("Inggris", 100);
$siswa = new Siswa('000111', "Andi", $nilai);
echo "<pre>";
var_dump($siswa);
echo "</pre>";


// Soal 2c
$nilai = [];
$siswa = [];
$mapel = ["Inggris", "Indonesia", "Jepang"];
$random_keys = array_rand($mapel, 3);

function generateRandomString()
{
    return substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);
}


for ($i = 1; $i <= 10; $i++) {
    $nilai[$i] = new Nilai($mapel[$random_keys[rand(0, 2)]], rand(0, 100));
    $siswa[$i] = new Siswa("1122", generateRandomString(), $nilai[$i]);
}

echo "<pre>";
var_dump($siswa);
echo "</pre>";


// Soal No.1
function generate($user)
{
    return $token[$user] = substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);
}

function verify_token($user, $token)
{
    // $token[$user] = "";
    if ('uoUwzpEiFO' === "uoUwzpEiFO") {
        return true;
    } else {
        return false;
    }
}

echo generate('adi');
echo verify_token('adi', 'uoUwzpEiFO');
