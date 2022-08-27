<?php
function ImprimirQuebra()
{
    echo "</br>";
    echo "<hr>";
    echo "<br>";
}
function ImprimirTexto($texto)
{
    echo $texto;
}
$meuTexto = "Aqui vai uma string de qualquer tipo de dados"."32";
ImprimirTExto("Fernando");
ImprimirQuebra();
ImprimirTexto($meuTexto);
#ImprimirTexto();
ImprimirQuebra();

function Adicao($numero1, $numero2)
{
    return $numero1+$numero2;
   
}
function Subtracao($numero1, $numero2)
{
    return  $numero1 - $numero2;
    
}

function Multiplicacao($numero1, $numero2)
{
    return  $numero1 * $numero2;
    
}
function Divisao($numero1, $numero2)
{
    return  $numero1 / $numero2;
   
}

function Media($numero1, $numero2)
{
   return Adicao($numero1,$numero2)/2;
}
function Calculadora($numero2, $numero2,$operacao)
{
    if($operacao == "+"){
        ImprimirTexto(Adicao($numero1+$numero2));
    }else if($operacao == "-")
    {
        ImprimirTexto(Subtracao($numero1-$numero2));
    }else if($operacao == "*"){
        ImprimirTexto(Multiplicacao($numero1*$numero2));
    }else if($operacao == "/")
    {
        ImprimirTexto(Divisao($numero1/$numero2));
    }else{
        ImprimirTexto("Operacao Invalida");
    }
}

//Adicao(12,8);
//ImprimirQuebra();
//Subtracao(12,8);
//ImprimirQuebra();
//Multiplicacao(12,8);
//ImprimirQuebra();
//Divisao(12,8);
//ImprimirQuebra();
//Media(12,8);
$media = Media(8,9);
ImprimirTexto(Media (8,9));
ImprimirTexto(Adicao(5432, 4567));
ImprimirTexto(Calculadora(15,5));


?>