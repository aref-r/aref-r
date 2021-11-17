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
                <div class="col-xl-6 col-lg-12 col-md-12">
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
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Withdraw</h4>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text"><i class="fa fa-money"></i></label>
                                        </div>
                                        <input type="text" class="form-control" placeholder="5000 USD">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text"><i class="fa fa-bank"></i></label>
                                        </div>
                                        <select class="form-control">
                                            <option>Bank of America ********45845</option>
                                            <option>Master Card ***********5458</option>
                                        </select>
                                    </div>
                                </div>

                                <button class="btn btn-primary w-100">Withdraw Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
