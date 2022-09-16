<?php

function removeKaryawan(){

    clearScreen();

    global $dataKaryawan;

    echo "                      Hapus Data Karyawan"                       . PHP_EOL;
    echo "===============================================================" . PHP_EOL;

    echo "\n";
    $succes = false;
    $searchKaryawan = readline("Nama : ");
    foreach($dataKaryawan as $key => $karyawan){ //penjelasannya sama aja kayak function pencarian data karyawan
        if($searchKaryawan == $dataKaryawan[$key][1]){
            $succes = true;
            break;
        }
    }

    if($succes){
        echo "\nData Ditemukan" . PHP_EOL;
        echo "==============" . PHP_EOL;
        echo "Nama          : " . $dataKaryawan[$key][1] . PHP_EOL;
        echo "Jenis Kelamin : " . $dataKaryawan[$key][2] . PHP_EOL;
        echo "Nik           : " . $dataKaryawan[$key][3] . PHP_EOL;
        echo "Status        : " . $dataKaryawan[$key][4] . PHP_EOL;
        echo "Alamat        : " . $dataKaryawan[$key][5] . PHP_EOL;
        echo "No Hp         : " . $dataKaryawan[$key][6] . PHP_EOL;
        echo "Email         : " . $dataKaryawan[$key][7] . PHP_EOL;

        echo "\n";
        $question = readline("Hapus Data Karyawan ? : ");
        if($question == "y" || $question == "Y"){
            unset($dataKaryawan[$key]); //hapus data karyawan berdasarkan index yang ditemukan
            echo "\nData Berhasil Dihapus" . PHP_EOL;
            
            $question = readline("Coba Hapus Data Lagi (Y/N) ? : ");
            if($question == "y" || $question == "Y"){
                removeKaryawan();
            }else{
                appCrudKaryawan();
            }
        }else{
            echo "\nHapus Data Dibatalkan" . PHP_EOL;
            
            $question = readline("Coba Hapus Data Lagi (Y/N) ? : ");
            if($question == "y" || $question == "Y"){
                removeKaryawan();
            }else{
                appCrudKaryawan();
            }
        }
    }else{
        echo "\nData Tidak Ditemukan\n" . PHP_EOL;
        $question = readline("Coba Hapus Data Lagi (Y/N) ? : ");
        if($question == "y" || $question == "Y"){
            removeKaryawan();
        }else{
            appCrudKaryawan();
        }
    }

}


?>