<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        $seculo = 0;

        //Transforma o ano em uma string
        $ano_txt = (string)$ano;
        
        //Transforma a string em array
        $arr_ano = str_split($ano_txt);

        // calcula posiçoes do array
        $number_array = count($arr_ano);

        //Se o valor for menor que 2 sempre sera seculo 1
        if($number_array <= 2){
            $seculo = 1;
        }

        //Se o valor do aray for maior w 2 ele faz os calculos necessarios
        if($number_array > 2){
            $penultimo = $arr_ano[ count($arr_ano) - 1  ];
            $ultimo = $arr_ano[ count($arr_ano) - 2  ];

            //Se os dois ultimos tiverem o valor de 0 retorna o valor do primeiro 
            if($ultimo == 0 && $penultimo == 0){
                $primeiro = $arr_ano[0];

                //tranforma string em int
                $seculo = intval($primeiro);

            }else{
                $primeiro = $arr_ano[0];

                //tranforma string em int
                $seculo = intval($primeiro) + 1;
            }
        }

         if($number_array > 3){

            $penultimo = $arr_ano[ count($arr_ano) - 1  ];
            $ultimo = $arr_ano[ count($arr_ano) - 2  ];

            //Se os dois ultimos tiverem o valor de 0 retorna o valor do primeiro concatenado com o segundo
            if($ultimo == 0 && $penultimo == 0){
                $primeiro = $arr_ano[0];
                $segundo = $arr_ano[1];

                //tranforma string em int
                $seculo = intval($primeiro . $segundo);

            }else{
                $primeiro = $arr_ano[0];
                $segundo = $arr_ano[1];

                //tranforma string em int
                $seculo = intval($primeiro . $segundo) + 1;
            }
        }


        return $seculo ;
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {

        $divisores = 0;

        //Verifica se o numero passado é primo
        for($count=2; $count<$numero; $count++){

            //Verifica se tem divisores
            if($numero % $count == 0){
                $divisores++;
            }
        }

            if($divisores){
                $resposta = false;
            }else{
                $resposta =  true;
            }
        
            //Se não achar divisores decrementa o numero e verifica se é primo novamente 
        while(!$resposta){
            $numero = $numero - 1;
            
            $divisores = 0;
        for($count=2; $count<$numero; $count++){

            //Verifica se tem divisores
            if($numero % $count == 0){
                $divisores++;
            }
        }

            if($divisores){
                $resposta = false;
            }else{
                $resposta =  true;
            }
        }

        return $numero;
    }




    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $resposta= 0;

        $valor = array();

        //Percorre cada linha do array
        foreach ($arr as $row)
        {
            //Percorre cada campo de cada linha
            foreach($row as $i )
            {
                
                $valor[] .= $i ;
            }

        }        

        //Deixa tudo em ordem crescente 
        sort($valor);

        //Busca o penultimo campo
        $resposta = $valor[ count($valor) -2];
       
        return $resposta;
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): boolean {
        
    }
}
