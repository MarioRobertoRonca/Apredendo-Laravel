@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
            <h1>Algum título</h1>
            @if(10 > 5){
                <p> A condição é verdadeira</p>
            }@endif

            <p>{{ $nome }}</p>

            @if($nome == "Pedro")
            <p>Nome é Pedro</p>
            @elseif($nome == "Mário Roberto")
            <p>Nome é {{ $nome }} e ele tem {{ $idade }} anos! e trabalha como profissão {{ $profissao }}</p>
            @else
            <p>Nome não é Pedro</p>
            @endif

            @for($i = 0; $i < count($arr); $i++)
                <p>{{ $arr[$i]}} - {{ $i }}</p>
                @if($i == 2)
                    <p>oi é 2</p>
                @endif
            @endfor

            @foreach($nomes as $nome)
                <p>{{ $loop->index }}</p>
                <p>{{ $nome }}</p>
            @endforeach

            @php
                $name = "Mário";
                echo $name;
            @endphp

            {{-- akfnaifnifnisfnifn --}}

@endsection
