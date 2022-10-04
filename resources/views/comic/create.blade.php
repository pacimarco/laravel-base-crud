@extends('layout.app')

@section('title','Crea nuovo elemento')

@section('content')
    <div class="container">

        <form action="{{route('comics.store')}}" method="POST">
            
            @csrf
           
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input type="text" class="form-control" id="title" name="title" >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
                
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" >
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" >
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" >
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
               <select name="type" id="type" class="form-select">
                   <option value="comic book">comic book</option>
                   <option value="graphic novel">graphic novel</option>
               </select>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
          </form>

    </div>
@endsection