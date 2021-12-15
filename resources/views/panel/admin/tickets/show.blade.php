@extends('layouts.admin.master')


@section('content')

@if(\Session::has('success'))
@javascript('success', session('success'))
@javascript('type', 'success')
@elseif(\Session::has('info'))
@javascript('info', session('info'))
@javascript('type', 'info')
@elseif(\Session::has('warning'))
@javascript('warning', session('warning'))
@javascript('type', 'warning')
@elseif(\Session::has('error'))
@javascript('error', session('error'))
@javascript('type', 'error')
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

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="buy-sell-widget">
                                <div class="tab-content tab-content-default">
                                    <div class="ticket-info">
                                        <p><strong>{{$ticket->user->name}}</strong></p>
                                        <p>{{ $ticket->description }}</p>
                                        <p>
                                            @if ($ticket->status === 'Open')
                                                Status: <span class="badge badge-secondary">{{ $ticket->status }}</span>
                                            @else
                                                Status: <span class="label label-danger">{{ $ticket->status }}</span>
                                            @endif
                                            &emsp;&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&emsp;
                                            Created on: {{ $ticket->created_at->diffForHumans() }}
                                        </p>
                                    </div>

                                    <hr>

                                    <div class="comments">
                                        @foreach ($comments as $comment)
                                            <div class="panel panel-@if ($ticket->user->id === $comment->user_id) {{ 'default' }}@else{{ 'success' }}@endif">
                                                <div class="panel panel-heading"><strong>
                                                    {{ $comment->user->name }}
                                                </strong>
                                                    <span
                                                        class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                                                </div>

                                                <div class="panel panel-body">
                                                    {{ $comment->comment }}
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                                    @if($ticket->status == 'Closed')
                                    <span><strong>this ticket is closed</strong> </span>
                                    @endif
                                    <hr>
                                    <div class="comment-form">
                                        <form action="{{ route('user.comment.store') }}" method="POST"
                                            class="form">
                                            @csrf

                                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                                            <div class="form-group @error('comment')  is-invalid @enderror">
                                                <textarea rows="10" id="comment" class="form-control"
                                                    name="comment"></textarea>

                                                @error('comment'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('comment') }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary"
                                                    style="margin: 30px">Submit</button>
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
