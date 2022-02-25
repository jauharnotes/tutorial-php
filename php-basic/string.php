<?php
// penulisan tipe data string menggunakan metode single quoted
$string1='Ini adalah string sederhana';
 
$string2='Ini adalah string
yang bisa memiliki beberapa
baris';
 
$string3='Dia berkata: "I\'ll be back"';
 
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc';
 
$string5='Kalimat ini tidak akan pindah ke: \n baris baru';
 
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';
 
echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6;

// Penulisan Tipe Data String dengan Double Quoted
$string1="Ini adalah string sederhana";
 
$string2="Ini adalah string
yang bisa memiliki beberapa
baris";
 
$string3="Dia berkata: \"I'll be back\"";
 
$string4="Anda telah berhasil menghapus C:\\xampp\\htdoc";
 
$string5="Kalimat ini akan akan pindah ke: \n baris baru";
 
$string6="Variabel akan otomatis ditampilkan: $string1 dan $string3";
 
echo $string1; echo "<br \>";
echo $string2; echo "<br \>";
echo $string3; echo "<br \>";
echo $string4; echo "<br \>";
echo $string5; echo "<br \>";
echo $string6;

// Penulisan Tipe Data String Dengan Heredoc
$IPK=3.9;
$string1 = <<<end
Saya sedang belajar PHP
di duniailkom.com <br />
Kali ini tentang pembahasan
mengenai "PHP", <br /> dan berharap
bisa dapat IPK $IPK :)
end;
 
echo $string1;

// Penulisan Tipe Data String Dengan Nowdoc
$IPK=3.9;
$string1 = <<< 'selesai'
Saya sedang belajar PHP
di \n duniailkom.com <br />
Kali ini tentang pembahasan
mengenai "PHP", <br /> dan berharap
bisa dapat IPK $IPK :)
selesai;
 
echo $string1;