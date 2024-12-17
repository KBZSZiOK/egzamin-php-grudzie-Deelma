<?php

// Połączenie z serwerem bazodanowym
$conn = mysqli_connect('localhost', 'root', '', 'restauracja_4ti_gr1');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobieranie danych z formularza
$data = $_GET['data'];
$ilosc_osob = $_GET['ilosc_osob'];
$nr_telefonu = $_GET['nr_telefonu'];
$przetwarzanie = $_GET['przetwarzanie'];

// Zapytanie wstawiające rekord do tabeli rezerwacje
$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$ilosc_osob', '$nr_telefonu')";

// Wykonanie zapytania i sprawdzenie, czy zostało wykonane poprawnie
if ($conn->query($sql) === TRUE) {
    echo "Dodano rezerwację do bazy";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Zamknięcie połączenia z serwerem
$conn->close();
?>
