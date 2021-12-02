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
                            <div class="buyer-seller">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Currency</td>
                                            <td>{{$order->currency->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Fee</td>
                                            <td>{{$order->fee}}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td>{{$order->amount}}</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>{{$order->fee * $order->amount}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        @foreach($offers as $offer)
                                            <tr>
                                                <td>{{ $offer->amount }}</td>
                                                <td>{{ $offer->fee }}</td>
                                                <td><a href="">Accept</a></td>
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
        </div>
    </div>
@endsection
