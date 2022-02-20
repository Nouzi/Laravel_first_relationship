<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Laravel</title>

    </head>

<body>

<h1 class="m-4 font-bold text-2xl text-red-500 ">
Main tag
</h1>


<ul class="flex gap-10">
@foreach($triedy as $class)
<li class="rounded shadow border p-4 border-slate-400">
    <h1 class="font-bold uppercase">Trieda: {{$class->class_name}}</h1>
    <span class="font-semibold text-slate-600">Seznam studentu:</span>
    <ul class="flex flex-col text-md font-normal text-blue-500 ">
        @foreach($class->ludia as $student)
            <li>
                    <span>{{$student->name}}</span>
                    <span>{{$student->surname}}</span>
            </li>
        @endforeach
    </ul>
</li>
@endforeach
</ul>

</body>


</html>
