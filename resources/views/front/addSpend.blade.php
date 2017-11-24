@extends('layouts.app')

@section('content')
    <h1>Add a spend</h1>
    <div class="row">
    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="Pay date">Pay date</label>
            <input type="date" id="pay_date" name="pay_date">
        </div>

        <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select>
                <option vlaue="0">Choisir un status</option>
            </select>
        </div>
    </form>
    </div>
@endsection