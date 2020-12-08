<?php

$text = "Di dalam HTML terdapat beberapa komponen, seperti 
tag yang digunakan sebagai awalan instruksi atau perintah yang akan dibaca oleh browser. 
Misalnya tag <bold> akan menampilkan teks dalam format cetak tebal. Kemudian element, merupakan
keseluruhan kode yang terdiri dari tag pembuka dan tag
penutup. Contohnya <h1></h1>. Meski demikian, tidak semua tag
HTML memiliki pasangan penutup. Terakhir yaitu, attribute
berupa informasi atau perintah tambahan yang berada di dalam
elemen. Misalnya elemen <img> memiliki atribut sumber gambar
(src) dan alternatif text (alt).";

function html($php){
    $regex= "/<([\w]+)>/";
    $hasil= [];

    preg_match_all($regex, $php, $hasil);

    print_r($hasil);
}

html($text);

?>