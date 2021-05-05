<?php

function selesai(){

    global $pdo;

    try{
        $stmt = $pdo->prepare("UPDATE `pengaduan` SET `status` = 'selesai' WHERE `pengaduan`.`id_pengaduan` = $id  "); 
        $stmt->execute();
        $status = "selesai";
    } catch (Exception $ex) {
        print_r($ex);
        die();
    }  
}

function diproses(){

    global $pdo;

    try{
        $stmt = $pdo->prepare("UPDATE `pengaduan` SET `status` = 'proses' WHERE `pengaduan`.`id_pengaduan` = $id  "); 
        $stmt->execute();
        $status = "diproses";
    }catch (Exception $ex) {
        print_r($ex);
        die();
    }
}

function terkirim(){

    global $pdo;

    try{
        $stmt = $pdo->prepare("UPDATE `pengaduan` SET `status` = '0' WHERE `pengaduan`.`id_pengaduan` = $id  "); 
        $stmt->execute();
        $status = "terkirim";
    }catch (Exception $ex) {
        print_r($ex);
        die();
    }
}

