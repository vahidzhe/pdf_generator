<?php
require_once 'dompdf/autoload.inc.php';// Dompdf kütüphanesi için autoload dosyasını çağırıyoruz
use Dompdf\Dompdf;

// HTML sayfasının içeriğini al
ob_start();
require 'index.php';
$content = ob_get_clean();


// PDF dosyasını oluştur
$dompdf = new Dompdf();
$content = preg_replace('/<a\b[^>]*>(.*?)<\/a>/i', '', $content);
$content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');
$content.='';

$dompdf->loadHtml($content);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// PDF dosyasını indir
$dompdf->stream('example.pdf', array('Attachment' => false));
