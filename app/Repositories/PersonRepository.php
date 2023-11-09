<?php

namespace App\Repositories;

use App\Models\Person;

class PersonRepository
{
    // Atributo que armazena uma instância do model Person
    private $model;

    // Construtor que recebe o model Person por injeção de dependência
    public function __construct(Person $model)
    {
        $this->model = $model;
    }

    // Método que retorna todas as pessoas
    public function findAll()
    {
        return $this->model->all();
    }
}