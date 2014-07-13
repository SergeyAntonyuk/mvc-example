<?php

class Model_Portfolio extends Model
{
    public function get_data()
    {
        return array(
            array(
                'Year' => '2013',
                'Site' => 'http://DunkelBeer.ru',
                'Description' => 'Питание прогиба исходным материалом, которая в'
                . ' настоящее время находится ниже уровня моря, максимально.'
            ),
            array(
                'Year' => '2014',
                'Site' => 'http://ZopoMobile.ru',
                'Description' => 'Антиклиналь в связи с преобладанием карьерной'
                . ' разработки ископаемых сдвигает подземный сток.'
            ),
            // todo
        );
    }
}