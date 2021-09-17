<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/** 
 * Classe responsável por disponibilizar a instância de objetos Patient
 * com dados passados por parâmetro.
 */
class Patient extends Model
{
    use HasFactory;

    private $id;
    private $userName;
    private $respiratoryFrequency;
    private $temperature;
    private $bloodOxygen;
    private $heartRate;
    private $bloodPressure;

    /* Método construtor responsável por inicializar todos os atributos */
    public function __construct(
        $id, 
        $userName, 
        $respiratoryFrequency,
        $temperature,
        $bloodOxygen,
        $heartRate,
        $bloodPressure
    ) {
        $this->id = $id;
        $this->userName = $userName;
        $this->respiratoryFrequency = $respiratoryFrequency;
        $this->temperature = $temperature;
        $this->bloodOxygen = $bloodOxygen;
        $this->heartRate = $heartRate;
        $this->bloodPressure = $bloodPressure;
    }

}
