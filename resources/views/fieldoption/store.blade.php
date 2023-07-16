@extends('layouts.master')


@section('top')
    <!-- Log on to codeastro.com for more projects! -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<form action="{{ route('storeFieldOption') }}" method="POST">  
    @csrf
    <div class="form-group">
        <label for="category">Subcategory field</label>
        
        <select class="form-control" id="subcategoryfield" name="subcategoryFieldID" required>
            <option value="{{$data13->id}}">{{$data13->name}}</option>
        </select>
       
    </div>

    <div class="form-group">
        <label for="name">Field option name</label>
        <input type="text" class="form-control" id="name" name="fieldOption" placeholder="Enter field option name" required>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('displayFieldOption',['id' => Crypt::encrypt($data13->id ) ,'id2' => Crypt::encrypt($data14->id )     ] ) }}"><button type="button" class="btn btn-dark" style="color:white; background-color: #343a40;">Go Back</button></a>

</form>

   

@endsection