@extends('layouts.admin.master')

@section('title', 'All Tickets')

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

                                <div class="tab-content tab-content-default">

                                    @if ($tickets->isEmpty())
                                        <p>There are currently no messages.</p>
                                    @else
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Last Updated</th>
                                                    <th style="text-align:center" colspan="2">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tickets as $ticket)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('admin.ticket.show', $ticket->id) }}">
                                                                #{{ $ticket->ticket_id }} - {{ $ticket->title }}
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
                                                        <td>{{ $ticket->updated_at }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.ticket.show', $ticket->id) }}"
                                                                class="btn btn-primary">Reply</a>
                                                        </td>
                                                        <td>
                                                            @if($ticket->status == 'Open')
                                                            <form
                                                                action="{{ route('admin.close.ticket', $ticket->ticket_id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">Close</button>
                                                            </form>
                                                            @elseif($ticket->status == 'Closed')
                                                            <span>closed</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    @endif

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
