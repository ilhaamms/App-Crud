<?php

    // function add karyawan
    function addKaryawan(){

        clearScreen();

        // ini adalah manggil global scope supaya bisa digunakan didalam sebuah function
        global $dataKaryawan;
        global $temporaryDataKaryawan;

        echo "                      Input Data Karyawan"                       . PHP_EOL;
        echo "===============================================================" . PHP_EOL;
        
        $jumlahKaryawan = readline("Jumlah data karyawan yang akan diinput : ");
        $index = count($dataKaryawan); //ini supaya data index yang ditambahkan sesuai dengan jumlah data karyawannya
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

            // nah pada line 16 maksudnya adalah index ini yang line 29-36
            $temporaryDataKaryawan[$index][] = $index + 1; 
            $temporaryDataKaryawan[$index][] = $nameKaryawan;
            $temporaryDataKaryawan[$index][] = $jenisKelamin;
            $temporaryDataKaryawan[$index][] = $nikKaryawan;
            $temporaryDataKaryawan[$index][] = $statusKaryawan;
            $temporaryDataKaryawan[$index][] = $addresKaryawan;
            $temporaryDataKaryawan[$index][] = $hpKaryawan;
            $temporaryDataKaryawan[$index][] = $emailKaryawan;

            $index++;
        }

        echo "\nData Berhasil Diinput" . PHP_EOL;
        $question = readline("Save Data (Y/N ?) : ");
        
        // kalau data disave
        if($question == "y" || $question == "Y"){
            // ini loop untuk memindahkan semua data array Temporary karyawan kedalam array data karyawan  
            foreach($temporaryDataKaryawan as $keyTemporary => $data){
                $dataKaryawan[count($dataKaryawan)] = $temporaryDataKaryawan[$keyTemporary];
            }

            // kemudian ini loop untuk menghapus semua data array yang ada di temporary karyawan 
            foreach($temporaryDataKaryawan as $index => $value){
                unset($temporaryDataKaryawan[$index]);
            }
            
            echo "\nData Saved" . PHP_EOL;

            $question = readline("Input Data Karyawan Lagi (Y/N ? ) : ");
            if($question == "Y" || $question == "y"){
                addKaryawan();
            }else{
                appCrudKaryawan();
            }
        // kalau data engga di save
        }else{

            // kemudian ini loop untuk menghapus semua data array yang ada di temporary karyawan
            foreach($temporaryDataKaryawan as $index => $value){
                unset($temporaryDataKaryawan[$index]);
            }

            echo "\nData Not Saved" . PHP_EOL;

            $question = readline("Input Data Karyawan Lagi (Y/N ? ) : ");
            if($question == "Y" || $question == "y"){
                addKaryawan();
            }else{
                appCrudKaryawan();
            }
        }
    }

?>