<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Resources\Patient as PatientResource;
use Illuminate\Http\Request;

/** 
 * Classe responsável por disponibilizar o método que retorna os dados 
 * dos pacientes consumidos em um arquivo .txt e formatados em JSON.
 */
class PatientController extends Controller
{
    /* Caminho do arquivo que será lido */
    const PATH = "Exemplo\Exemplo\SeuArquivo.txt"; 

    /**
     * Retorna todos os dados dos pacientes no formato JSON.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Encontra o arquivo a partir do diretório especificado na variável PATH */
        $file = file(self::PATH);

        $patients = array(); //Armazena arrays de dados dos pacientes.
        $data = array();     //Armazena os dados de um paciente.

        $count = -1; //Indica quantidade de linhas salvas do arquivo (.txt).

        for($i = 0; $i < count($file); $i++) { 
            $count++;
            $data[] = $file[$i]; //Armazena uma linha do arquivo .txt a cada iteração.

            if($count == 6) {
                /* Armazena 7 linhas consecutivas do arquivo .txt */
                $patients[] = array(
                    'id'                   => str_replace("\n", "", $data[0]), 
                    'userName'             => str_replace("\n", "", $data[1]), 
                    'respiratoryFrequency' => str_replace("\n", "", $data[2]), 
                    'temperature'          => str_replace("\n", "", $data[3]), 
                    'bloodOxygen'          => str_replace("\n", "", $data[4]), 
                    'heartRate'            => str_replace("\n", "", $data[5]), 
                    'bloodPressure'        => str_replace("\n", "", $data[6])
                );

                unset($data); //Remove os dados contidos no array.
                $count = -1;
            }
        }
        
        /* Retorna o array patients no formato JSON */
        return json_encode($patients);
    }

}
