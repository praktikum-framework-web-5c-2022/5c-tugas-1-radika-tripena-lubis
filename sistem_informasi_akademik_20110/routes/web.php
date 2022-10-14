<?php

use Illuminate\Support\Facades\Route;

Route::get('/dosen', function(){
    $list_dosen = ["Kamal Prihandani", "Aji Primajaya", "Betha Nurina Sari", "Carudin", "Intan Purnamasari", "Iqbal Maulana",
    "Oman Kamarudin", "Dadang Yusuf", "Rini Mayasari", "Tesa Nur Padila"];
    return view('dosen')->with('dosens', $list_dosen);
});

Route::get('/matakuliah', function(){
    $list_matakuliah = ["Framewrok PW", "PB Mobile", "Blockchain", "Technopreneur", "Data Mining", "Cloud Computing", "Algoritma",
    "Machine Learning", "Mtk Diskrit", "Struktur Data"];
    return view('matakuliah')->with('studies', $list_matakuliah);
});

Route::get('/mahasiswa', function(){
    $list_mahasiswa = ["Radika Lubis", "Sopiatul Ulum", "Kim Jongin", "Park Chanyeol", "Inumaki Toge", "Uchiha Itachi",
    "Kageyama Tobio", "Hinata shoyo", "Lay Zhang", "Zhong Chenle"];
    return view('mahasiswa')->with('students', $list_mahasiswa);
});


