<?php

    /**
     * function mengubah data karyawan
     */
    function changeKaryawan(){

        clearScreen();

        global $dataKaryawan;

        echo "                      Ubah Data Karyawan"                       . PHP_EOL;
        echo "===============================================================" . PHP_EOL;

        echo "\n"; //penjelasannya sama aja kayak function pencarian data karyawan
        $succes = false;
        $searchKaryawan = readline("Nama : ");
        foreach($dataKaryawan as $key => $karyawan){
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
            $question = readline("Ubah Data Karyawan (Y/N) ? : ");
            if($question == "y" || $question == "Y"){
                echo "\nMasukan Data Baru" . PHP_EOL;
                echo "===================" . PHP_EOL;
                $nameKaryawan   = readline("Nama                : ");
                $jenisKelamin   = readline("Jenis Kelamin (P/L) : ");
                $nikKaryawan    = readline("Nik                 : ");
                $statusKaryawan = readline("Status              : ");
                $addresKaryawan = readline("Alamat              : ");
                $hpKaryawan     = readline("No Hp               : ");
                $emailKaryawan  = readline("Email               : ");
        
                //ubah data lama dengan data baru
                $dataKaryawan[$key][1] = $nameKaryawan;
                $dataKaryawan[$key][2] = $jenisKelamin;
                $dataKaryawan[$key][3] = $nikKaryawan;
                $dataKaryawan[$key][4] = $statusKaryawan;
                $dataKaryawan[$key][5] = $addresKaryawan;
                $dataKaryawan[$key][6] = $hpKaryawan;
                $dataKaryawan[$key][7] = $emailKaryawan;

                echo "\nData Berhasil Diubah" . PHP_EOL;
                $question = readline("Ubah Data Karyawan Lagi (Y/N) ? : ");
                if($question == "y" || $question == "Y"){
                    changeKaryawan();
                }else{
                    appCrudKaryawan();
                }
            }else{
                echo "\nUbah Data Dibatalkan" . PHP_EOL;
                $question = readline("Ubah Data Karyawan Lagi (Y/N) ? : ");
                if($question == "y" || $question == "Y"){
                    changeKaryawan();
                }else{
                    appCrudKaryawan();
                }
            }
        }else{
            echo "\nData Tidak DItemukan\n" . PHP_EOL;
            $question = readline("Ubah Data Karyawan (Y/N) ? : ");
            if($question == "y" || $question == "Y"){
                changeKaryawan();
            }else{
                appCrudKaryawan();
            }
        }

    }

?>