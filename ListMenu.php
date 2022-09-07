<?php

    include_once "DataKaryawan\InputKaryawan.php";
    include_once "DataKaryawan\ShowKaryawan.php";
    include_once "DataKaryawan\SearchKaryawan.php";
    include_once "DataKaryawan\ChangeKaryawan.php";
    include_once "DataKaryawan\deleteKaryawan.php";

    function cls()                                                                                                             
    {
        print("\033[2J\033[;H");
    }

    echo "===============================================" . PHP_EOL;
    echo "           List Menu App-Crud Karyawan         " . PHP_EOL;
    echo "===============================================" . PHP_EOL;
    echo "[1] Input Data Karyawan"   . PHP_EOL;
    echo "[2] Lihat Data Karyawan"   . PHP_EOL;
    echo "[3] Cari Data Karyawan"    . PHP_EOL;
    echo "[4] Ubah Data Karyawan"    . PHP_EOL;
    echo "[5] Hapus Data Karyawan\n" . PHP_EOL;

    $menu = readline("[-] Masukan Pilihan Anda : ");
    if($menu == 1){
        cls();
        inputDataKaryawan();
    }elseif($menu == 2){
        cls();
        showDataKaryawan();
    }elseif($menu == 3){
        cls();
        searchDataKaryawan();
    }else if($menu == 4){
        cls();
        changeDataKaryawan();
    }elseif($menu == 5){
        cls();
        deleteDataKaryawan();
    }else{
        echo "[!] Pilihan Salah" . PHP_EOL;
    }

?>