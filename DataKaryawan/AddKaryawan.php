<?php

    function addKaryawan(){

        global $dataKaryawan;

        echo "                      Input Data Karyawan"                       . PHP_EOL;
        echo "===============================================================" . PHP_EOL;
        
        $jumlahKaryawan = readline("Jumlah data karyawan yang akan diinput : ");
        $index = 0;
        for($data = 1; $data <= $jumlahKaryawan; $data++){
            echo "\nData Karyawan Ke-$data" . PHP_EOL;
            echo "====================================" . PHP_EOL;
            $nameKaryawan   = readline("Nama                : ");
            $jenisKelamin   = readline("Jenis Kelamin (P/L) : ");
            $nikKaryawan    = readline("Nik                 : ");
            $statusKaryawan = readline("Status              : ");
            $addresKaryawan = readline("Alamat              : ");
            $hpKaryawan     = readline("No Hp               : ");
            $emailKaryawan  = readline("Email               : ");

            $dataKaryawan[$index][] = $data;
            $dataKaryawan[$index][] = $nameKaryawan;
            $dataKaryawan[$index][] = $jenisKelamin;
            $dataKaryawan[$index][] = $nikKaryawan;
            $dataKaryawan[$index][] = $statusKaryawan;
            $dataKaryawan[$index][] = $addresKaryawan;
            $dataKaryawan[$index][] = $hpKaryawan;
            $dataKaryawan[$index][] = $emailKaryawan;

            $index++;
        }

        echo "\nData Berhasil Diinput" . PHP_EOL;
        $question = readline("Save Data (Y/N ?) : ");

        if($question == "y" || $question == "Y"){
            echo "Data Saved" . PHP_EOL;
            
            // $question = readline("Kembali Kemenu (Y/N) : ");
            // if($question == "Y" || $question == "y"){

            // }
        }else{
            echo "Data Not Saved" . PHP_EOL;
        }
    }

?>