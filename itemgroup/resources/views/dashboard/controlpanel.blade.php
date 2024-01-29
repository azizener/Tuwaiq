@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h1 class="alert alert-success text-center">Groups details</h1>
            <div class="card">
                <div class="card-body">
                    <div class="table">
                        <thead>
                            <tr>
                                <th>Element number</th>
                                <th>Element name</th>
                                <th>name group</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>color</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data!=null)
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->itemname}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->qty}}</td>
                                <td>{{$row->color}}</td>
                            </tr>
                            @endforeach
            
                            @endif
                            
                        </tbody>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection