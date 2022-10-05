@extends('layout.app')

@section('title','Crea nuovo elemento')

@section('content')
    <div class="container">

        <form action="{{route('comics.update', ['comic'=>$uscita->id])}}" method="POST">
            
            @csrf
            @method('PUT')
           
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $uscita->title)}}" >
              @error('title')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{old('description', $uscita->description)}}"</textarea>
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb', $uscita->thumb)}}" >
                @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $uscita->price)}}">
                @error('price')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series', $uscita->series)}}" >
                @error('series')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date', $uscita->sale_date)}}" >
                @error('sale_date')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
               <select name="type" id="type" class="form-select @error('type') is-invalid @enderror">
                   <option {{(old('type',$uscita->type)=="comic book")?'selected':''}} value="comic book">comic book</option>
                   <option {{(old('type', $uscita->type)=="graphic novel")?'selected':''}} value="graphic novel">graphic novel</option>
               </select>
               @error('type')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
          </form>

    </div>
@endsection