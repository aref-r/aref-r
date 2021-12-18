@extends('layouts.user.master')


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

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="buy-sell-widget">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#list">tickets list</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                            href="#create">new
                                            ticket</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-content-default">
                                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                                        @if ($tickets->isEmpty())
                                            <p>You have not created any tickets.</p>
                                        @else
                                            <table class="table table-tickets">
                                                <thead>
                                                    <tr>
                                                        <th>title</th>
                                                        <th>status</th>
                                                        <th>priority</th>
                                                        <th>last modified</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tickets as $ticket)
                                                        @foreach (Auth::user()->unreadnotifications as $notification)
                                                            @if ($notification->data['ticket_id'] == $ticket->id)
                                                                <tr>
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    @isset($notification)
                                                        @if ($notification->data['ticket_id'] != $ticket->id)
                                                            <tr class="ticket-read">
                                                        @endif
                                                    @else
                                                        <tr class="ticket-read">
                                                        @endisset

                                                        <td>
                                                            <a href="{{ route('user.ticket.show', $ticket->id) }}">
                                                                #{{ $ticket->ticket_id }} -
                                                                {{ $ticket->title }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            @if ($ticket->status === 'Open')
                                                                <span
                                                                    class="label label-success">{{ $ticket->status }}</span>
                                                            @else
                                                                <span
                                                                    class="label label-danger">{{ $ticket->status }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @switch($ticket->priority)
                                                                @case(0)
                                                                    Low
                                                                @break
                                                                @case(1)
                                                                    Medium
                                                                @break
                                                                @case(2)
                                                                    High
                                                                @break
                                                                @default
                                                                    unexpected
                                                            @endswitch
                                                            {{ $ticket->priority }}
                                                        </td>
                                                        <td>{{ $ticket->updated_at->diffForHumans() }}</td>
                                                    </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        @endif
                                    </div>

                                    {{-- <<< other tab >>> --}}

                                    <div class="tab-pane fade" id="create">
                                        <form class="form-horizontal" role="form" method="POST"
                                            action="{{ route('user.ticket.store') }}">
                                            @csrf
                                            <br>
                                            <div class="form-group @error('title')  is-invalid @enderror">
                                                <label for="title" class="col-md-4 control-label">Title :</label>

                                                <div class="col-md-12">
                                                    <input id="title" type="text" class="form-control" name="title"
                                                        value="{{ old('title') }}">

                                                    @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group @error('priority')  is-invalid @enderror">
                                                <label for="priority" class="col-md-4 control-label">Priority :</label>

                                                <div class="col-md-12">
                                                    <select id="priority" type="" class="form-control" name="priority">
                                                        <option value="Low" selected>Low</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="High">High</option>
                                                    </select>

                                                    @if ($errors->has('priority'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('priority') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group @error('description')  is-invalid @enderror">
                                                <label for="description" class="col-md-4 control-label">description
                                                    :</label>

                                                <div class="col-md-12">
                                                    <textarea rows="10" id="description" class="form-control"
                                                        name="description"></textarea>

                                                    @if ($errors->has('description'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-left:40%">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary" style="margin: 30px">
                                                        <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                                    </button>
                                                </div>
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
