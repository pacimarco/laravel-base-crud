@extends('layout.app')

@section('title', 'Comics List')

@section('content')
<div class="container">

    <a href="{{route('comics.create')}}" class="btn btn-primary">Crea un nuovo elemento</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">thumb</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
                <th scope="col">azioni</th>
                
            </tr>
            <tbody>
                @foreach ($comics as $uscita)

                <tr>
                    <th scope="row">{{$uscita->id}} </th>
                    <td>{{$uscita->title}} </td>
                    <td>{{$uscita->description}} </td>
                    <td>{{$uscita->thumb}} </td>
                    <td>{{$uscita->price}} </td>
                    <td>{{$uscita->series}} </td>
                    <td>{{$uscita->sale_date}} </td>
                    <td>{{$uscita->type}} </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('comics.show',['comic' => $uscita->id])}}">vedi</a>
                        <a class="btn btn-warning" href="{{route('comics.edit',['comic' => $uscita])}}">modifica</a>
                    
                        <form action="{{route('comics.destroy', ['comic' => $uscita])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">elimina</button>
                        </form>

                    </td>
                    </tr>
                
                @endforeach
            
            </tbody>  
        </thead>
    </table>

</div>



@endsection