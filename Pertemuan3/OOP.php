<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1 - OOP</title>
</head>
<body>
    <div class="text-center">
        <h2>
            # Praktikum 2 - OOP #
        </h2>
    </div>
    <hr>
    <?php
    #Membuat Class Animal
    class Animal {

        #Membuat property animals
        public $animals = array();
        
        #Membuat method constructor - mengisi data awal
        #Parameter: data hewan (array)
        public function __construct() {
            $this->animals = ['Ayam','Ikan'];
        }

        #Method Index - Menampilkan data animals
        public function index() {
            foreach ($this->animals as $animal) {
                echo $animal . "<br>";
            }
        }

        #Method store - Menambahkan hewan baru
        #Parameter: hewan baru
        public function store($data) {
            array_push($this->animals, $data);
        }

        #Method Update - Mengupdate hewan
        public function update($index, $data) {
            $this->animals[$index] = $data;
        }

        #Method delete - Menghapus hewan
        public function destroy($index) {
            unset($this->animals[$index]);
        }  
    }

    #Membuat object
    $animal = new Animal();

    #Membuat data hewan
    echo 'Index - Menampilkan Data Hewan <br>';
    $animal->index();
    echo '<br>';

    #Menambahkan Hewan Baru
    echo 'Store - Menambahkan Hewan Baru <br>';
    $animal->store('Burung');
    $animal->index();
    echo '<br>';

    #Update Data Hewan
    echo 'Update - Mengupdate Data Hewan <br>';
    $animal->update(0, 'Kucing Anggora');
    $animal->index();
    echo '<br>';

    #Menghapus Data Hewan
    echo 'Destroy - Menghapus Data Hewan <br>';
    $animal->destroy(0);
    $animal->index();
    echo '<br>';
    ?>
</body>
</html>