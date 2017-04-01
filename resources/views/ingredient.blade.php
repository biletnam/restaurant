@extends('layout.header_footer')
    @section('content')
    	<div style="width: 300px; margin: 50px auto;">
            <form method="post" action="{{ route('ingredientStore') }}"> 
                {{csrf_field()}}
                <label>Ingredient
                <input type="text" name="ingredient" placeholder="ingredient"></label><br>
                <input type="submit" value="Create">
            </form>
        </div>
        <div style="width: 300px; margin: 50px auto;">
            <form method="post" action="{{ route('menuIngredientStore') }}">
                {{csrf_field()}}
                <div style="width: 200px; padding: 50px auto; border: 1px dashed #bebebe;">
                @foreach ($ingredient as $ingredients)
                <label>
                <input type="checkbox" name="{{ $ingredients -> ingredient }}" value="{{ $ingredients -> id }}">{{ $ingredients -> ingredient }}</label>
                @endforeach
                </div>
                <input type="submit" value="Create">
            </form>
        </div>
    @endsection