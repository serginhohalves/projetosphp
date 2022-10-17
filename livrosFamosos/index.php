<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $pdo->query("SELECT * FROM famosos") ;
    if($result)
    {
//        retornar os resultados como vetor
//        foreach($result as $row)
//        {
//            print $row['id'] . ' ' . $row['nome'] . '<br>';
//        }

//        retornar os resultados como objeto:
        while($row= $result->fetchObject())
        {
            print $row->id . ' - ' . $row->nome . '<br>';
        }
    }



    $pdo = null;

    echo "Dados inseridos com sucesso!";



}catch(PDOException $e){
    echo 'Erro ao conectar com o MySQL: '.$e->getMessage();
}

?>

