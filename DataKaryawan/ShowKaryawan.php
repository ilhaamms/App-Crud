<?php

    require_once 'Console/Table.php'; //ini supaya bisa menggunakan function clearScreen
    require_once __DIR__ . "/AddKaryawan.php"; //karna masih 1 folder yang sama jadi langsung aja /nama file.php

    // function showKaryawan
    function showKaryawan(){

        clearScreen();

        global $dataKaryawan;

        echo "Lihat Data Karyawan"                                             . PHP_EOL;
        echo "Jumlah Data Karyawan : " . count($dataKaryawan)                  . PHP_EOL;
        echo "===============================================================" . PHP_EOL;
        
        $tabelKaryawan = new Console_Table(); //membuat tabel tampilan karyawan
        // ini header tabelnya
        $tabelKaryawan ->setHeaders(array("No", "Nama", "Jenis Kelamin", "Nik", "Status", "Alamat", "No Hp", "Email"));
        
        // ini looping untuk memasukan array data karyawan kedalam baris sebuah tabel    
        foreach($dataKaryawan as $key => $karyawan){
            $tabelKaryawan ->addRow($dataKaryawan[$key]);
        }

        // kalau data karyawannya belum diinput atau kosong
        if(count($dataKaryawan) == 0){
            echo "\nBelum ada data karyawan yang diinput" . PHP_EOL;
            $question = readline("Input Data Karyawan (Y/N ?) : ");

            if($question == "y" || $question == "Y"){
                addKaryawan();
            }else{
                appCrudKaryawan();
            }
        // kalau data karyawannya sudah ada yang diinput
        }else{

            echo $tabelKaryawan->getTable() . PHP_EOL;

            echo "\n";
            $question = readline("Input Data Karyawan (Y/N ?) : ");

            if($question == "y" || $question == "Y"){
                addKaryawan();
            }else{
                appCrudKaryawan();
            }
        }

    }

?>