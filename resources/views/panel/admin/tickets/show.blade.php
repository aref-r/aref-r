@extends('layouts.user.master')


@section('content')


    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page_title-content">
                        <p>#{{ $ticket->ticket_id }} 
                            <span> {{ $ticket->title }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="buy-sell-widget">
                                
                                <div class="tab-content tab-content-default">

                                    <div class="ticket-info">
                                        <p>{{ $ticket->description }}</p>
                                        <p>
                                            @if ($ticket->status === 'Open')
                                                Status: <span class="label label-success">{{ $ticket->status }}</span>
                                            @else
                                                Status: <span class="label label-danger">{{ $ticket->status }}</span>
                                            @endif
                                            &emsp;&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&emsp;
                                        Created on: {{ $ticket->created_at->diffForHumans() }}</p>
                                    </div>
                
                                    <hr>
                
                                    <div class="comments">
                                        @foreach ($comments as $comment)
                                            <div class="panel panel-@if ($ticket->user->id === $comment->user_id) {{ 'default' }}@else{{ 'success' }}@endif">
                                                <div class="panel panel-heading">
                                                    {{ $comment->user->name }}
                                                    <span class="pull-right">{{ $comment->created_at->format('Y-m-d') }}</span>
                                                </div>
                
                                                <div class="panel panel-body">
                                                    {{ $comment->comment }}
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                
                                    <hr>
                
                                    <div class="comment-form">
                                        <form action="{{ route('user.comment.store') }}" method="POST" class="form">
                                            @csrf
                
                                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                
                                            <div class="form-group @error('comment')  is-invalid @enderror">
                                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>
                
                                                @error('comment'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('comment') }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style="margin: 30px">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <p class="p-4">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cupiditate
                        suscipit explicabo voluptas eos in tenetur error temporibus dolorum. Nulla!</p>
                </div>
            </div>

        </div>
    </div>

  

@endsection
