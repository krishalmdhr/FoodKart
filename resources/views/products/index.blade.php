@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center">Products</h3>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>

                @foreach ($product as $row)
                <tr>
                    <td>{{$row['Name']}}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
