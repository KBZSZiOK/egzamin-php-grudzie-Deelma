<?php

echo "Dodano rezasdasdy";


$conn = mysqli_connect('localhost', 'root', '', 'restauracja_4ti_gr1');

if($conn->connect_error){
    die("Connection failed: " 
        . $conn->connect_error);
}

$data = $_GET['data'];

$ilosc_osob = $_GET['ilosc_osob'];

$nr_telefonu = $_GET['nr_telefonu'];

$przetwarzanie = $_GET['przetwarzanie'];


$sql = "INSERT INTO `rezerwacje` (id, data_rez, liczba_osob, telefon) VALUES ($data, $ilosc_osob, $nr_telefonu, $przetwarzanie)";


if($conn->query($sql) === TRUE){
    echo "Dodano rezerwację do bazy";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>