@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Items</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('items.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->code }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('items.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['items.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


 {!! $items->render() !!}

@endsection
