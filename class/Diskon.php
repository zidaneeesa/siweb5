<?php
class Diskon {
    private $totalBayar;
    private $diskon;

    // Konstruktor untuk inisialisasi nilai
    public function __construct($totalBayar, $diskon) {
        $this->totalBayar = $totalBayar;
        $this->diskon = $diskon;
    }

    public function hitungTotalBersih() {
        $totalDiskon = $this->totalBayar * ($this->diskon / 100);
        $totalBersih = $this->totalBayar - $totalDiskon;
        return $totalBersih;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalBayar = $_POST['totalBayar'];
    $diskon = $_POST['diskon'];

    $payment = new Diskon($totalBayar, $diskon);
    $totalBersih = $payment->hitungTotalBersih();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
</head>
<body>

<h2>Form Hitung Total Pembayaran</h2>
<form method="post" action="">
    <label for="totalBayar">Total Bayar:</label><br>
    <input type="number" id="totalBayar" name="totalBayar" step="0.01" required><br><br>

    <label for="diskon">Diskon (%):</label><br>
    <input type="number" id="diskon" name="diskon" step="0.01" required><br><br>

    <input type="submit" value="Hitung Total Bersih">
</form>

<?php
if (isset($totalBersih)) {
    echo "<h3>Total Bersih Pembayaran: Rp " . number_format($totalBersih, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>
