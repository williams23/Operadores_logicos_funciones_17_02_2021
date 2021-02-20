<?php
    //  operadores logicos 17-02-2021
    
    //se debe tener en cuenta la tabla de operadores logicos
    // "and - && las dos deben ser true
    //"or - || alguna de las dos debe ser true 
    //"! cambia el valor del bool
    //Operadores Logicos (Comparadores De Resultados)
    //Operador Logico AND o && (Y) Si las dos variables son "True", el resultado es True
    $a = (bool) false;//0
    $b = (bool) falso;//0

    print_r ($a and $b);   //Resultado False ya que los dos son ceros
    echo "<br>";

    $a = (bool) false;//0
    $b = (bool) true;//1

    print_r ($a and $b);   //Resultado False ya que una es 0 y la otra es 1
    echo "<br>";

    $a = (bool) True;
    $b = (bool) true;

    print_r ($a && $b);    //Resultado True ya que las dos son verdaderas
    echo "<br>";


    //Operador Logico OR o || (O) Si alguna de las variables es "True", El resultado sera True
    $a = (bool) false;
    $b = (bool) false;

    print_r ($a or $b);    //Resultado False

    $a = (bool) True;
    $b = (bool) false;

    print_r ($a or $b);    //Resultado True

    $a = (bool) True;
    $b = (bool) True;

    print_r ($a || $b);    //Resultado True


    //Operador Logico  XOR (XOR) Intercambia el resultado de las variables
    $a = (bool) false;
    $b = (bool) True;

    print_r (!$a) ;    //Resultado True
    print_r (!$b) ;    //Resultado False

    //-------------------------------------------------------------------------------

    //EJERCICIO 1
    var_dump(!( (8>=40)  &&  !(true) ) ||  !( !(85!=='9')  && (78==78) ));
            // (!( (False)  &&  !(True) ) ||  !( !(Verdadero   )  &&    TRUE) ));
            // (!(False     &&  False   ) ||  !(  Falso   &&    True) ));
            //         (!(Falso)          ||  !(       Falso      )       );
            //         (  Verdadero       ||         verdadero            );
            //                             Verdadero


    //EJERCICIO 2
    var_dump(  !(  !(true) && (false) )  || !( !( !(true) &&  (false && true) ) ) );
            (  !(  !(     false       )) || !( !( (false) &&  (    false   ) ) ) );                                
            (          false          )  || !(    true    );
                              (false     ||      false);
                                      (true);


    //SETENCIA IF SENCILLA, ES UNA CONDICIÓN SI NO SE CUMPLE HAY OTRA DESICIÓN
    //EJEMPLO 1
        $num1 = (int) 5;
        $num2 = (int) 8;

        if ( $num1>$num2 ) {// if es "si"
            $mensaje = (string) <<<FIN
            El numero $num1 es mayor que $num2
FIN; // tambien se puede: print_r("El numero $num1 es mayor que $num2")
        }else { // else es "de lo contrario"
            $mensaje = (string) <<<FIN
            El numero $num2 no es mayor que $num1
FIN;
        }

    //EJEMPLO 2 // ELSE IF SE PUEDEN ANIDAR MUCHOS ELSE IF 
    //$_GET['DATO'] (Pedir Datos Por La Url con ?DATO)
        $edad = (int) 18; // DESDE LA URL ?dato = xx y asi simulamos enviar un dato

        if ($edad==18) {
            $mensaje = (string) <<<FIN
            Muestrame La Cedula
FIN;
            Print_r($mensaje);
        }else if ($edad>18) {
            $mensaje = (string) <<<FIN
            Puedes Pasar Al Club
FIN;
            Print_r($mensaje);
        }else if ($edad>=10 && $edad<=17) {
            $mensaje = (string) <<<FIN
            Eres Menor De Edad Ve A Estudiar Algo
            No Andes De Vago Por Favor
FIN;
            Print_r($mensaje);
        }elseif ($edad<=9 && $edad<=1){
            $mensaje = (string) <<<FIN
            ¿Que Haces Despierto A Esta Hora?
            Llamare A Las Autoridades
FIN;
            Print_r($mensaje);
        }else {
            $mensaje = (string) <<<FIN
            BUUUUU!
FIN;
            Print_r($mensaje);
        }


    //COMO FUNCIONA UNA FUNCION  las funciones siempre retornan algo
    //EJEMPLO 1
    function sumar(){
        return 2 + 3;// primero se establece que hará la función
    }
    $res = (int) sumar();
    print_r($res);// despues se asigna la funcion a una variable y se imprime


    //EJEMPLO 2
    $arg1 = (int) 5;
    $arg2 = (int) 2;
    $arg3 = (string) '*';

    function validarZero($p1,$p2,$p3){
        if($p2!==0 && $p3!=="*"){
            return $p1 / $p2;
        }else if($p2!==0 && $p3!=="/"){
            return $p1 * $p2;
        }else{
            return <<<FIN
        Porfavor ingrese un numero mayor a 0
FIN;
        }
    }
    function calculadora($p1,$p2,$p3){
        if($p3=="+"){
            return $p1 + $p2;
        }else if($p3=="-"){
            return $p1 - $p2;
        }else if($p3=="*"){
            return validarZero($p1,$p2,$p3);
        }else if($p3=="/"){
            return validarZero($p1,$p2,$p3);
        }else{
            return <<<FIN
            La opcion enviada no se encuentra disponible
FIN;
        }

    }

    $res2 = (array) calculadora($arg1,$arg2,$arg3);
    print_r($res2);


?> 
