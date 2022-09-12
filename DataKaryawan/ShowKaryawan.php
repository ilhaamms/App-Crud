<?php

    require_once 'Console/Table.php';

    function showKaryawan(){

        global $dataKaryawan;
        
        echo "Lihat Data Karyawan"                                             . PHP_EOL;
        echo "Jumlah Data Karyawan : " . count($dataKaryawan)                  . PHP_EOL;
        echo "===============================================================" . PHP_EOL;
        
        $tabelKaryawan = new Console_Table();
        $tabelKaryawan ->setHeaders(array("No", "Nama", "Jenis Kelamin", "Nik", "Status", "Alamat", "No Hp", "Email"));
        
        foreach($dataKaryawan as $key => $data){
            $tabelKaryawan ->addRow($dataKaryawan[$key]);
        }

        echo $tabelKaryawan->getTable() . PHP_EOL;
        // echo var_dump($dataKaryawan) . PHP_EOL;
        // if(var_dump($dataKaryawan) == "array(1) {
        //     [0]=>
        //     array(0) {
        //     }
        //   }"){
        // }else{
        //     echo "Belum ada data karyawan yang diinput" . PHP_EOL;
        // }

    }

?>