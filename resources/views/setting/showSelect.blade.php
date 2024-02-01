
@extends('app.base')
@section('title', 'Setting')
@section('content')

<form ="{{url('setting/showSelect')}}" method=post>
    @csrf
    
   <select name="pais" class="form-select" id="pais">
        <option selected disabled>Seleccionar pais</option>

    @foreach ($paises as $value => $label)

        <option value="{{ $value }}"  {{$value == $label ? 'selected' : ' '}}>{{ $label }}</option>

    @endforeach

    </select>
    <br>
    <br>
    
    
    
    
    
     <select name="provincias" class="form-select" id="provincias">
          <option selected disabled>Select provincia</option>

    @foreach ($provincias as $value => $label)

        <option value="{{ $label }}" {{$value == $label ? 'selected' : ' '}} >{{ $label }}</option>

    @endforeach

    </select>
    <br>
    <br>
    
    
    
    
    
    <select name="countries" class="form-select" id="countries">
         <option disabled>Select country</option></option>

    @foreach ($paises as $value => $label)

        <option value="{{ $value }}">{{ $label }}</option>

    @endforeach

    </select>
</form>


@endsection