@extends('layouts.plantilla')

@section('title', 'Arrays')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Arrays y Arrays bidimensionales</h1>
</div>
<script>
    // Arreglos
    var uni1 = [1,2,3,4,5];
    var uni2 = ['a','b','c'];
    var bid1 = [[1,2,3],[1,2,3]];
    var bid2 = [['a','b','c'],['a','b','c']];


    
    for (var i = 0; i < 2; i++) {
        console.log(uni1[i]);
        console.log(uni2[i]);
    }
    console.log('<<-------------------------->>')
    for (var x = 0; x < 2; x++) {
        for (var y = 0; y < 3; y++) {
            console.log(bid1[x][y]);
            console.log(bid2[x][y]);
        }
    }
</script>
@endsection