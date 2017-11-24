@extends('layouts.app')

@section('content')


        <h1>DashBoard</h1>
        <h2>Historique</h2>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Pay Date</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($spends as $spend)
                    <tr>
                        
                        <td>{{$spend->id}}</td>
                        <td>{{$spend->title}}</td>
                        <td>{{$spend->price}}</td>
                        <td>{{$spend->pay_date}}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
        </table>
    </div>  
</div>
@endsection