<?php

namespace App\Controllers;

class MainController extends BaseController
{

    public function test($params) {

        $i = \App\Models\Type::findByIdType(10);
        dump($i);

        $n = \App\Models\Pokemon_type::findByTypeId(6);
        dump($n);

        $j = \App\Models\Pokemon_type::findPokemonNumero(6);
        dump($j);

        $j = \App\Models\Pokemon::findByPokemonNumero(81);
        dump($j);

        $p = \App\Models\Pokemon::sortByType(1);
        dump($p);

    }


    public function element($params) {

        $detailId = $params['id'];
        $byElement = \App\Models\Pokemon::sortByType($detailId);
        

        $this->show(
            'element',
            [
                'byElement' =>$byElement,
            ]
        );
    }


    public function home($params)
    {
        
        $pokemons = \App\Models\Pokemon::findAll();

        $this->show('home',['pokemons' => $pokemons]);
    }

    public function notFound($params)
    {
        $this->show('notFound');
    }

    public function detail($params)
    {
        $detailId = $params['id'];
        $detail = \App\Models\Pokemon::findById($detailId);
        $type = \App\Models\Pokemon::findName($detail->getNumero());
        $type2 = \App\Models\Pokemon::findNameTwo($detail->getNumero());

        $this->show(
            'detail',
            [
                'detail' => $detail,
                'type' => $type,
                'type2' => $type2
            ]
        );
    }

    public function types($params) {

        $allTypes = \App\Models\Type::findAllTypes();


        $this->show(
            'types',
            [
                'allTypes' => $allTypes
            ]
        );
    }

}