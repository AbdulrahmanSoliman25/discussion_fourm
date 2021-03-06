@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">Add Discussion</div>

    <div class="card-body">
    <form action="{{ route('discussions.store')}}" method="POST">
    
        @csrf
        <div class="form-group">
            <label for="title">Title</label>

            <input type="text" class="form-control" name="title">
        </div>
        
         <div class="form-group">
            <label for="title">Content</label>
            <input id="content" type="hidden" name="content" >
            <trix-editor input="content"></trix-editor>
        </div>
        
        <div class="form-group">
            <label for="title">Channel</label>

            <select name="channel" id="channel" class="form-control">
                @foreach ($Channels as $Channel) 

                  <option value="{{$Channel->id}}"> {{ $Channel->name }} </option>
                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create Discussion</button>
    </form>
    </div>
</div>@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>    
@endsection

