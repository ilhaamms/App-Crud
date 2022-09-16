<?php

    /**
     * function mencari data karyawan
     */
    function searchKaryawan(){

        clearScreen();

        global $dataKaryawan;

        echo "                      Cari Data Karyawan"                       . PHP_EOL;
        echo "===============================================================" . PHP_EOL;

        echo "\n";
        $succes = false;
        $searchKaryawan = readline("Nama : ");
        foreach($dataKaryawan as $key => $karyawan){ // cari data berdasarkan data yang ada di array dataKaryawan
            if($searchKaryawan == $dataKaryawan[$key][1]){ //karna nama berada di kolom 1 maka menjadi 1, dan keynya dalah dimana data ditemukan
                $succes = true; //kalau data ditemukan maka true
                break;
            }
        }

        if($succes){
            echo "\nData Ditemukan" . PHP_EOL;
            echo "==============" . PHP_EOL; // outputnya berdasarkan key yang ditemukan dan juga kolom nama jenis kelamin dll
            echo "Nama          : " . $dataKaryawan[$key][1] . PHP_EOL; // kolom nama
            echo "Jenis Kelamin : " . $dataKaryawan[$key][2] . PHP_EOL; // kolom jenis kelamin
            echo "Nik           : " . $dataKaryawan[$key][3] . PHP_EOL;
            echo "Status        : " . $dataKaryawan[$key][4] . PHP_EOL;
            echo "Alamat        : " . $dataKaryawan[$key][5] . PHP_EOL;
            echo "No Hp         : " . $dataKaryawan[$key][6] . PHP_EOL;
            echo "Email         : " . $dataKaryawan[$key][7] . PHP_EOL;

            echo "\n";
            $question = readline("Cari Data Lagi (Y/N) ? : ");
            if($question == "y" || $question == "Y"){
                searchKaryawan();
            }else{
                appCrudKaryawan();
            }
        }else{
            echo "\nData Tidak DItemukan\n" . PHP_EOL;
            $question = readline("Cari Data Lagi (Y/N) ? : ");
            if($question == "y" || $question == "Y"){
                searchKaryawan();
            }else{
                appCrudKaryawan();
            }
        }

    }

?>