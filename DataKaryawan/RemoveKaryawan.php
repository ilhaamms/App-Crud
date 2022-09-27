<?php

function removeKaryawan(){

    clearScreen();

    global $dataKaryawan;

    echo "                      Hapus Data Karyawan"                       . PHP_EOL;
    echo "===============================================================" . PHP_EOL;
    echo "\n";

    $succes = false;
    $searchKaryawan = readline("Nama (X untuk cancel) : ");
    if($searchKaryawan == "x" || $searchKaryawan == "X"){

        echo "\nHapus Data Dibatalkan" . PHP_EOL;
        
        $question = readline("Kembali Kemenu (Y/N ? ) : ");
            if($question == "Y" || $question == "y"){
                appCrudKaryawan();
            }else{
                removeKaryawan();
            }
    }else{

        foreach($dataKaryawan as $key => $karyawan){ //penjelasannya sama aja kayak function pencarian data karyawan
            if(strtoupper($searchKaryawan) == strtoupper($dataKaryawan[$key][1])){
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
                $indexnya = $key; //data yang ditemukan, kemudian di looping sebanyak data array $dataKaryawan
                for($index = $key; $index < sizeof($dataKaryawan); $index++){
                    $dataKaryawan[$index + 1][0] = $index;
                    $dataKaryawan[$index]        = $dataKaryawan[$index + 1];
                }
    
                unset($dataKaryawan[sizeof($dataKaryawan)]); // ini adalah hapus data pada index terakhir
                
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


}


?>