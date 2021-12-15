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
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_title-content">
                            <p>Welcome Back,
                                <span> Carla Pascle</span>
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
                                <h4 class="card-title">Order Detail #{{ $order->id }}</h4>
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
                @if ($order->user_id == auth()->id())
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Offers</h4>
                                    <div class="buyer-seller">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Amount</td>
                                                        <td>Fee</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-center">operation</td>
                                                    </tr>
                                                    @foreach ($offers as $offer)
                                                        <tr>
                                                            <td>{{ $offer->amount }}</td>
                                                            <td>{{ $offer->fee }}</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="col-2">
                                                                <form action="{{ route('user.offer.accept_offer') }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="offer_id"
                                                                        value="{{ $offer->id }}">
                                                                    <button type="submit"
                                                                        class="btn btn-success w-100">Accept</button>
                                                                </form>
                                                            </td>
                                                            {{-- @if ($offer->is_accept) --}}
                                                            {{-- <td> --}}
                                                            {{-- <a class="btn" href="{{route('user.receipt.create' , ['order' => $order->id])}}">send Receipt</a> --}}
                                                            {{-- </td> --}}
                                                            {{-- @endif --}}
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
        </div>

    @elseif(Auth::user()->lang == 'fa')

    @endif
@endsection
