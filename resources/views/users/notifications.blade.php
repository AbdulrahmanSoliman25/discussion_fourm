@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Notifications</div>

    <div class="card-body">
        
        <ul class="list-group">
          
            @foreach ($notifications as $notification)
            
                <li class="list-group-item">
                
                    @if ($notification->type == 'App\Notifications\NewReplyAdded')
                         A new reply added to discussion <strong>{{ $notification->data['discussion']['title'] }}</strong>
                       
                         <a href="{{ route('discussions.show',$notification->data['discussion']['slug'])}}" class="btn btn-sm btn-info float-right">
                            View Discussion
                        </a>
                    
                    @endif

                     @if ($notification->type == 'App\Notifications\ReplyMarkedAsBestReply')
                         Your reply to<strong>{{ $notification->data['discussion']['title'] }}</strong>was marked as the best
                       
                         <a href="{{ route('discussions.show',$notification->data['discussion']['slug'])}}" class="btn btn-sm btn-info float-right">
                            View Discussion
                        </a>
                    
                    @endif
                
                
                </li>
            @endforeach
            
        </ul> 
    </div>
</div>

@endsection