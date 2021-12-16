@extends('layouts.user.master')


@section('content')

    @if (\Session::has('success'))
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

    @if (Auth::user()->lang == 'en')

        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="buyer-seller">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Currency</td>
                                                    <td>{{ $order->currency->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Type</td>
                                                    <td>{{ $order->type }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Fee</td>
                                                    <td>{{ $order->fee }}</td>
                                                </tr>

                                                <tr>
                                                    <td>Amount</td>
                                                    <td>{{ $order->amount }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>{{ $order->fee * $order->amount }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($order->user_id == auth()->id())
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="buyer-seller">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Amount</td>
                                                    <td>Fee</td>
                                                    <td></td>
                                                </tr>
                                                @foreach ($offers as $offer)
                                                    <tr>
                                                        <td>{{ $offer->amount }}</td>
                                                        <td>{{ $offer->fee }}</td>

                                                        <td>
                                                            <form action="{{ route('user.offer.accept_offer') }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="offer_id"
                                                                    value="{{ $offer->id }}">
                                                                <button type="submit">Accept</button>
                                                            </form>
                                                        </td>
                                                        @if ($offer->is_accept)
                                                            <td>
                                                                <a class="btn"
                                                                    href="{{ route('user.receipt.create', ['order' => $order->id]) }}">send
                                                                    Receipt</a>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    @elseif(Auth::user()->lang == 'fa')

    @endif
@endsection
