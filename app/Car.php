<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Car extends Model
{

    protected static $data = [
      [
        'id' => 101,
        'plateNumber' => 'EPE68ET',
        'color' => 'White',
        'model' => 'Toyota Highlander',
        'chasisNumber' => '7YP0K3EH8AS006555',
        'status' => 'Brand New',
        'productionYear' => 2015,
        'issueDate' => '2018-01-14',
        'expiryDate' => '2019-02-13'
      ],
      [
        'id' => 102,
        'plateNumber' => 'KSF992EF',
        'color' => 'Silver',
        'model' => 'Honda Accord',
        'chasisNumber' => '5TDYK3IO4WQ006854',
        'status' => 'Fairly Used',
        'productionYear' => 2010,
        'issueDate' => '2018-02-12',
        'expiryDate' => '2019-03-11'
      ],
      [
        'id' => 103,
        'plateNumber' => 'KRD419EZ',
        'color' => 'Blue',
        'model' => 'Toyota Corolla',
        'chasisNumber' => '2FGKK5ET8AS006127',
        'status' => 'Brand New',
        'productionYear' => 2016,
        'issueDate' => '2018-06-02',
        'expiryDate' => '2019-07-01'
      ],
      [
        'id' => 104,
        'plateNumber' => 'IKJ914EZ',
        'color' => 'Yellow',
        'model' => 'Lexus RX330',
        'chasisNumber' => '9ERTD3EH9AR115167',
        'status' => 'Fairly Used',
        'productionYear' => 2012,
        'issueDate' => '2018-04-25',
        'expiryDate' => '2019-05-24'
      ],
      [
        'id' => 105,
        'plateNumber' => 'APP756IE',
        'color' => 'Black',
        'model' => 'Toyota Avalon',
        'chasisNumber' => '5TDYK3EH8AS006348',
        'status' => 'Brand New',
        'productionYear' => 2017,
        'issueDate' => '2018-03-22',
        'expiryDate' => '2019-04-21'
      ]
    ];


    public static function getAllCars()
    {
        return self::$data;
    }

    public static function searchCar($plateNumber)
    {
        $result = collect(self::$data)->where('plateNumber', $plateNumber);

        return $result->first();
    }
}
