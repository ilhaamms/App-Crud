<?php

    // function add karyawan
    function addKaryawan(){

        clearScreen();

        // ini adalah manggil global scope supaya bisa digunakan didalam sebuah function
        // karna kedua array ini berada didalam sebuah file dan folder yang berbeda
        global $dataKaryawan;
        global $tempDataKaryawan;

        echo "                      Input Data Karyawan"                       . PHP_EOL;
        echo "===============================================================" . PHP_EOL;
        $jumlahKaryawan = readline("Jumlah data karyawan yang akan diinput (X untuk cancel) : ");
        
        if($jumlahKaryawan == "x" || $jumlahKaryawan == "X"){
            
            echo "\nInput Data Dibatalkan" . PHP_EOL;
            
            $question = readline("Kembali Kemenu (Y/N ? ) : ");
                if($question == "Y" || $question == "y"){
                    appCrudKaryawan();
                }else{
                    addKaryawan();
                }
        }else{
            $index = count($dataKaryawan) + 1; //ini supaya data index yang ditambahkan sesuai dengan jumlah data karyawannya
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

                // nah pada line 31 maksudnya adalah index ini yang line 32, 33, 35, 36
                // pake function ucwords supaya setiap kata awalnya menjadi huruf kapital pada saat data dimasukan
                $tempDataKaryawan[$index][] = $index; //+ 1; 
                $tempDataKaryawan[$index][] = ucwords($nameKaryawan);
                $tempDataKaryawan[$index][] = ucwords($jenisKelamin);
                $tempDataKaryawan[$index][] = $nikKaryawan;
                $tempDataKaryawan[$index][] = ucwords($statusKaryawan);
                $tempDataKaryawan[$index][] = ucwords($addresKaryawan);
                $tempDataKaryawan[$index][] = $hpKaryawan;
                $tempDataKaryawan[$index][] = $emailKaryawan;
                
                $index++;
            }

            echo "\nData Berhasil Diinput" . PHP_EOL;
            $question = readline("Save Data (Y/N ?) : ");
            
            // kalau data disave
            if($question == "y" || $question == "Y"){
                // ini loop untuk memindahkan semua data array Temporary karyawan kedalam array data karyawan
                // index pada array tempDataKaryawan dimulai dari 1
                // maka pada line 52 count($dataKaryawan) + 1 karena supaya index dataKaryawan juga dimulai dari 1 bukan 0 
                foreach($tempDataKaryawan as $keyTemp => $data){
                    $dataKaryawan[count($dataKaryawan) + 1] = $tempDataKaryawan[$keyTemp];
                }

                // kemudian ini loop untuk menghapus semua data array yang ada di temporary karyawan 
                foreach($tempDataKaryawan as $keyTemp => $data){
                    unset($tempDataKaryawan[$keyTemp]);
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
                foreach($tempDataKaryawan as $keyTemp => $data){
                    unset($tempDataKaryawan[$keyTemp]);
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
    }

?>