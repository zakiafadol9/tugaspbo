<?php
interface Notifikasi {
    public function kirim();
}

class Email implements Notifikasi {
    public function kirim() {
        echo "Mengirim notifikasi melalui Email...<br>";
    }
}

class WhatsApp implements Notifikasi {
    public function kirim() {
        echo "Mengirim notifikasi melalui WhatsApp...<br>";
    }
}

class SMS implements Notifikasi {
    public function kirim() {
        echo "Mengirim notifikasi melalui SMS...<br>";
    }
}

$notif = new WhatsApp();
$notif->kirim();
?>