<?php 
// fungsi ini untuk memanggil library FPDF
require('fpdf/fpdf.php');
// fungsi ini untuk instance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// fungsi ini untuk membuat halaman baru
$pdf->AddPage();
// fungsi ini untuk setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// fungsi ini untuk mencetak string
$pdf->Cell(190, 7, 'PROGRAM STUDI TEKNIK INFORMATIKA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS', 0, 1, 'C');
// Fungsi ini memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'NIM', 1, 0);
$pdf->Cell(50, 6, 'NAMA MAHASISWA', 1, 0);
$pdf->Cell(25, 6, 'J KEL', 1, 0);
$pdf->Cell(50, 6, 'ALAMAT', 1, 0);
$pdf->Cell(30, 6, 'TANGGAL LHR', 1, 1);
$pdf->SetFont('Arial', '', 10);
// Fungsi ini untuk mengkoneksikan dengan database
include 'koneksi.php';
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(20, 6, $row['nim'], 1, 0);
    $pdf->Cell(50, 6, $row['nama'], 1, 0);
    $pdf->Cell(25, 6, $row['jkel'], 1, 0);
    $pdf->Cell(50, 6, $row['alamat'], 1, 0);
    $pdf->Cell(30, 6, $row['tgllhr'], 1, 1);
}
$pdf->Output();