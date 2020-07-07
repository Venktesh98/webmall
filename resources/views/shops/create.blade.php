@extends('layouts.app')

@section('content')

<div class="container">
<h2>Submit Your Shops</h2>

<form action="{{ route('shops.store') }}" method="POST">
    @csrf
    <div class="from-group">
        <label for="name">Name of Shop</label>
        <input type="text" class ="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>
    
    <div class="from-group">
        <label for="description">Description</label>
        <textarea name="desctription" id="" rows="3" class="form-control"></textarea>
    </div>
    <p></p>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
@endsection