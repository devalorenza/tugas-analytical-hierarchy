<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

# Penggunaan Class VIRTUALACCOUNT
class virtualaccount extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Pembayaran virtualaccount Rp {$this->jumlah} berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk virtualaccount: Rp {$this->jumlah}";
    }
}
?>