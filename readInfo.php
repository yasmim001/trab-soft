<?php

include_once("conect.php"); //importar o aquivo de conexão

include_once("Crud.php"); //importar o aquivo da classe Crud

//$obj = new Crud($conect);

// $dado = $obj->readInfo(3);

// //var_dump($dado);

// echo $dado->id." - ".$dado->nome." - ".$dado->idade." - ".$dado->email." - ".$dado->data_now;

// $obj->readInfo();

// $dado = $obj->getAll();

// //var_dump($dado);

// foreach ($dado as $info) {
//     echo $info['id']." - ".$info['nome']." - ".$info['idade']." - ".$info['email']." - ".$info['data_now']."<br>";
// }

// echo "<table border='1'>";
// echo "<tr> <th> Nome </th>  <th> Idade </th>  <th> E-mail </th>  <th> Data </th> </tr>";

// foreach ($dado as $info) {
//     echo "<tr><td>".$info['nome']." </td>
//         <td>".$info['idade']." </td>
//         <td>".$info['email']." </td>
//         <td>".$info['data_now']." </td></tr>";
// }

// echo "</table>";

$nome = $_POST['nome'];

$obj = new Crud($conect);

$dado = $obj->readInfoAll($nome);

?>

<link rel="stylesheet" type="text/css" href="css/estilo.css">
<main>
<header> Registro(s)! </header>

<?php

//var_dump($dado);

echo "<table border='1'>";
echo "<tr> <th> Nome </th>  <th> Idade </th>  <th> E-mail </th>  <th> Data </th> </tr>";

foreach($dado as $info){
    echo "<tr><td>".$info['nome']." </td>
        <td>".$info['idade']." </td>
        <td>".$info['email']." </td>
        <td>".$info['data_now']." </td></tr>";
    }

echo "</table>";

?>

</main>