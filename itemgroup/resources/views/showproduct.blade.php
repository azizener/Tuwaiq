@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($data as $row)
    <div class="card">
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-sm-3">
                    <img src="#" alt="">
                </div>
                <div class="col-sm-9 text-start">
                <h1 class="alert alert-info text-dark">{{$row->itemname}}</h1>
                <h5>{{$row->price}}</h5>

                <div class="row">
                    <div class="col text-center">
                        <a href="{{route('addtocart', ['id'=>$row->id])}}" class="btn btn-success">Add to card</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection