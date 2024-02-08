@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items['quote'] as $row)
                    <tr>
                        <td>{{$row['symbol']}}</td>
                       <td>{{$row['country']}}</td>
                        <td><img src="" alt="Prlbm" height="100px" width="100px"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- @endsectionarray:2 [▼ // app\Http\Controllers\ItemsController.php:24
"quote" => array:25 [▼
  0 => array:19 [▼
    "securityType" => "Common Stock"
    "symbol" => "2U1"
    "exchange" => "Frankfurt"
    "country" => "United States"
    "currency" => "EUR"
    "resourceType" => "Company"
    "fundamentalDataCurrency" => "USD"
    "resourceSubtype" => "Public"
    "region" => "EMEA"
    "ticker" => "2u1:gr"
    "tickerName" => "2U1:GR"
    "template" => "Stock"
    "tinyName" => "2U Inc"
    "name" => "2U Inc"
    "watchlist" => true
    "resourceId" => "2U1:GR"
    "id" => "2U1:GR"
    "title" => "2U Inc"
    "card" => "security"
  ] -->