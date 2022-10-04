@extends('layout.app')

@section('title','Crea nuovo elemento')

@section('content')
    <div class="container">

        <form action="{{route('comics.update', ['comic'=>$uscita->id])}}" method="POST">
            
            @csrf
            @method('PUT')
           
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$uscita->title}}" >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" id="description" class="form-control">{{$uscita->description}}"</textarea>
                
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$uscita->thumb}}" >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$uscita->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$uscita->series}}" >
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$uscita->sale_date}}" >
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
               <select name="type" id="type" class="form-select">
                   <option {{($uscita->type=="comic book")?'selected':''}} value="comic book">comic book</option>
                   <option {{($uscita->type=="graphic novel")?'selected':''}} value="graphic novel">graphic novel</option>
               </select>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
          </form>

    </div>
@endsection