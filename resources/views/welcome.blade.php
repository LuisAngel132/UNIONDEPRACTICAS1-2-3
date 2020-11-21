<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>angel</title>
        
  @csrf
  <input
    type="text"
    name="codigo"
    placeholder="codigo"
  /> Te equivocaste
  
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>

       </head>
        </html>