@extends('layouts.user.master')


@section('style')
    <style>
        table tr {
            cursor: pointer;
        }
    </style>

@endsection


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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="card-title">All Activities</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-responsive-sm">
                                        <tbody>
                                        @foreach($orders as $order)
                                            @if($order->type == 'sell')
                                                <tr>
                                                    <td>
                                                        <span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> {{$order->currency->name}}
                                                    </td>
                                                    <td>
                                                        Using - Bank *******5264
                                                    </td>
                                                    <td class="text-danger">{{$order->fee}} IRR </td>
                                                    <td>{{$order->amount}}</td>
                                                    <td><a class="btn" href="{{ route('user.order.show',['id' =>  $order->id]) }}">show</a></td>
                                                </tr>
                                            @endif
                                            @if($order->type == 'buy')
                                                <tr >
                                                    <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc LTC"></i>  {{$order->currency->name}}
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-success">{{$order->fee}} IRR </td>
                                                    <td>{{$order->amount}}</td>
                                                    <td><a class="btn" href="{{ route('user.order.show',['id' =>  $order->id]) }}">show</a></td>

                                                </tr>
                                            @endif
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


