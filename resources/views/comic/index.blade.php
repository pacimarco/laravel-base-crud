@extends('layout.app')

@section('title', 'Comics List')

@section('content')
<div class="container">

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
                </tr>
                
                @endforeach
            
            </tbody>  
        </thead>
    </table>

</div>



@endsection