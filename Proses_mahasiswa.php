<?php
class Mahasiswa {
    private $nim;
    private $nama;

    // Method untuk mengatur data
    public function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    // Method untuk mendapatkan data
    public function getData() {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama
        ];
    }
}
?>