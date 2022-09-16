<?php

    // ini manggil file difolder lain wajib seperti ini, langsung aja /nama folder/nama file php
    // langsung dipanggil seperti ini karena file app.php file tempatnya sama dengan folder yang lain
    require_once __DIR__ . "/Model/DataKaryawan.php";
    require_once __DIR__ . "/DataKaryawan/ShowKaryawan.php";
    require_once __DIR__ . "/DataKaryawan/AddKaryawan.php";

    // clear screen in cli
    function clearScreen(){
        print("\033[2J\033[;H");
    }

    // function utama program appsnya
    function appCrudKaryawan(){

        clearScreen();

        echo "APLIKASI CRUD KARYAWAN  " . PHP_EOL;
        echo "======================  " . PHP_EOL;
        echo "[1] Tambah Data Karyawan" . PHP_EOL;
        echo "[2] Lihat Data Karyawan " . PHP_EOL;
        echo "[3] Cari Data Karyawan  " . PHP_EOL;
        echo "[4] Ubah Data Karyawan  " . PHP_EOL;
        echo "[5] Hapus Data Karyawan \n" . PHP_EOL;

        $menu = readline("[-] Menu Pilihan : ");
        if($menu == 1){
            addKaryawan();
        }elseif($menu == 2){
            showKaryawan();
        }elseif($menu == 3){

        }elseif($menu == 4){

        }elseif($menu == 5){

        }else{
            echo "[!] Pilihan Tidak Ada" . PHP_EOL;
        }
    }

    // manggil function utamanya
    appCrudKaryawan();
    
?>