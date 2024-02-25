<?php
$m_fruits = [
  [ "ID" => "1", "Nama" => "Melon", "color" => "Hijau", "stock" => 20, "price" => 25000, "description" => "Melon dengan rasa yang manis dan cocok buat campuran es buah"],
  [ "ID" => "2", "Nama" => "Semangka", "color" => "Merah", "stock" => 30, "price" => 20000, "description" => "Semangka dengan rasa yang manis dan segar"],
  [ "ID" => "3", "Nama" => "Jeruk", "color" => "Kuning", "stock" => 50, "price" => 18000, "description" => "Jeruk dengan rasa yang manis dan dijamin enak"],
  [ "ID" => "4", "Nama" => "Rambutan", "color" => "Merah", "stock" => 70, "price" => 15000, "description" => "Rambutan dengan kualitas yang baik dan harga murah"],
  [ "ID" => "5", "Nama" => "Mangga", "color" => "Kuning", "stock" => 15, "price" => 30000, "description" => "Mangga dengan rasa manis dan cocok di buat jus"], 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
 
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
        foreach ($m_fruits as $fruit) {
          ?>
          <tr>

          <td><?= $fruit["ID"] ?></td> 
          <td><?= $fruit["Nama"] ?></td> 
          <td><?= $fruit["color"] ?></td> 
          <td><?= $fruit["stock"] ?></td> 
          <td><?= $fruit["price"] ?></td> 
          <td><?= $fruit["description"] ?></td> 
          
      </tr>

      <?php
        } 
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>