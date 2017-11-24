@extends('layouts.app')

@section('content')

    <div class="col-md-4">

        @include('partials.action')
    </div>

    <div class="col-md-8">
        <h1>DashBoard</h1>
        <h2>Last spends</h2>

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
                    @foreach($user->spends as $spend)
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