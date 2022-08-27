<h1>
    <?php
    //Comentarios em PHP - Linha
    /*
    */
    //echo "Hello world - Meu nome é Débora";
    $idade = 32;
    $nome = "Debora";
    $Altura = 1.60;
    $solteira = true;
    //$solteiro = 1;
    //echo $solteira;
    //echo 10 < 12;
    CONST IDADE = 40;
    //echo IDADE;
    /*if(10>12)
    {
        echo "Mentira";
    }
    else
    {
        echo "10 nao é maior que 12";
    }
    */

    /*
    $nota1 = 6;
    if($nota1 >=6)
    {
        echo "Aprovado";
    }else if($nota1 < 6 && $nota >=2)
    {
        echo "Ainda tem chance";
    }
    */
    //Faça um if que calcule a media e escreva na tela
    //se foi aprovado ou nao

    $nota1 = 8;
    $nota2 = 10;
    $media= ($nota1+$nota2)/2;
    if($media >= 6)
    {
        echo "Aprovado";
    }else if($media < 6)
    {
        echo "Reprovado";
    }
    
    //== Mesmo valor
   // === Mesmo tipo e mesmo valor
    // && And
    // || Or
    // ! Negação

    // if(!10>12){} ! Inverte o resultado do teste logico
    // % Resto da divisão

    //Concatenacao- ponto para concatenar ******ATENCAO******
    $nome = "teste";
    echo "<br> <br>  De " . $nome . " Ibidiesel "."<br>"; 

    //Loop em PHP
    /*do{

        //Código a ser repetido
        $contadora ++;
    }while(10 < $contadora < 10);

    while($cont < 10){

        //executa os codigos
        $cont++;
    }*/

    for($i = 0; $i < 10; $i++)
    {
        //Executa os codigos
        if($i % 2 ==0){
            echo "<p>". $i . "é par</p>";
        }else{
            echo "<p> . $i . é impar</p>";
        }
    }
    

?>