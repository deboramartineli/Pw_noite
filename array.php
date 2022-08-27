<?php
    //$carros = array();
    //$carros = array("BMW", "Saveiro", "Gol", "Palio");
    //echo "<br>";
    //echo $carros[1];
    // echo "<br>";//br tag html que quebra linha
    // echo $carros[0];
   //echo "<pre>"; //pre - pre formata
  // print_r($carros);
   //echo "</pre>";

  // $nomes = ["Fernando", "Maria", "João", "Pedro"];//tambem posso fazer vetor (array) em PHP com colchetes

   //$nomes[675] = "Julia";
   //$nomes[465] = "Matheus";
  // $nomes[34] = "Luis Fernando";

  // echo "<pre>"; //pre - pre formata
  // print_r($nomes);
  // echo "</pre>";
   // $salas = array("Lab01" => 40, "Lab02" => 32);//atribui um nome (string) e um valor

    //$salas[0] = "24";
    

   // echo "<pre>"; 
    //print_r($salas);
    //echo "</pre>";

 //   echo $salas["Lab02"];

    $tabuada = array(0,1,2,3,4);

    $tabuada[0] = array(0,1,2,3,4);
    $tabuada[1] = array(0,1,2,3,4);
    $tabuada[2] = array(0,1,2,3,4);
    $tabuada[3] = array(0,1,2,3,4);
    $tabuada[4] = array(0,1,2,3,4);

    $tabuada[4] = array();
    $tabuada[4][0] = 0;
    $tabuada[4][1] = 4;
    $tabuada[4][2] = 8;
    $tabuada[4][3] = 12;
    $tabuada[4][4] = 16;

    //echo "<pre>";
    //print_r($tabuada);
   // echo "</pre>";

   $armarios = array();
   $armarios["Portas"] = array("Fio 2mm","Fio 1mm");
   $armarios["Portas2"] = array();
   $armarios["Gavetinha"] = array();

   array_push($armarios["Gavetinha"], "Brincos");
   array_push($armarios["Gavetinha"], "Aneis");
   array_push($armarios["Gavetinha"], "Berloques");
   array_push($armarios["Gavetinha"], "Pulseiras");

    $armarios["Porta2"][0] = "Porca";
    $armarios["Porta2"][1] = "Parafuso";
    $armarios["Porta2"][2] = "Arruela";

    //$prateleira = array();
    //$prateleira[Espaco1] = array("Parafuso");
   // $prateleira[Espaco2] = array();
    //$prateleira[Espaco3] = array();
    
  echo "<pre>"; //pre - pre formata
  print_r($armarios);
  echo "</pre>";



?>