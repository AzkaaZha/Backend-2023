<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //property animals
    public $animals = ["Ayam", "Ikan", "Kucing", "Angsa", "Bebek"];

    //method menampilkan semua hewan
    public function index()
    {
        echo "Menampilkan Data Animals <br>";
        
        //loop property animals
        foreach($this->animals as $animal){
            echo "- $animal <br>";
        }
    }

    //method menambahkan hewan
    public function store(Request $request)
    {
        echo "Menambahkan Hewan Baru <br>";
        
        //tambahkan data hewan baru ke property animals
        array_push($this->animals, $request->animal);
        $this->index();
    }

    //method mengupdate hewan
    public function update(Request $request, $id)
    {
        echo "Mengupdate Data Hewan ID $id. <br>";
        
        //update data hewan
        $this->animals[$id] = $request->animal;
        $this->index();
    }

    //method menghapus hewan
    public function destroy($id)
    {
        echo "Menghapus Data Hewan ID <br>";
        
        //hapus data hewan
        unset($this->animals[$id]);
        $this->index();
    }
}
