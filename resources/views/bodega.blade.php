@extends('layouts.master')


@section('content')

El Nombre del producto  : {{$sucursal}}
<h4>Sucursales</h4>
<select class="form-select" aria-label="Default select example">
  <option selected>Seleccione Sucural</option>
  <option value="1">Santiago Centro</option>
  <option value="2">Pudahuel</option>
  <option value="3">San Bernardo</option>
  <option value="4">La Florida</option>
 
</select>
<br>
<h4>Productos</h4>
<select class="form-select" aria-label="Default select example">
  <option selected>Seleccione el producto</option>
  <option value="1">Cafe       Codigo #9586486482</option>
  <option value="2">Azucar     Codigo #9623186865</option>
  <option value="3">Té         Codigo #9875648236</option>
  <option value="4">Mermelada  Codigo #956987153</option>
  <option value="5">Galletas   Codigo #959556486</option>
  <option value="6">Harina     Codigo #958964782</option>
  <option value="6">Levadura   Codigo #978995585</option>
</select>





<br>

@stop