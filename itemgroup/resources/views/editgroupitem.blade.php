@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">Edit Element groups</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{route('update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="x1">Element name</label>
                        <input type="text" name="namegroup" id="x1" value="{{$item->itemgroupname}}">

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2">save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection