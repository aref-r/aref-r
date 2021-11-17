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
                <div class="col-xl-5 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="buy-sell-widget">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                            href="#buy">Buy</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sell">Sell</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-content-default">
                                    <div class="tab-pane fade show active" id="buy" role="tabpanel">
                                        <form method="post" name="myform" class="currency_validate" action="{{route('user.order.store')}}">
                                            @csrf
                                            <input type="hidden" value="buy" name="type">
                                            <div class="mb-3">
                                                <label class="me-sm-2">Currency</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="cc BTC-alt"></i></label>
                                                    </div>
                                                    <select name='currency_id' class="form-control">
                                                        <option value="">Select</option>
                                                        @foreach($currencies as $currency)
                                                            <option value="{{$currency->id}}">{{$currency->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
<!--
                                            <div class="mb-3">
                                                <label class="me-sm-2">Payment Method</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="fa fa-bank"></i></label>
                                                    </div>
                                                    <select class="form-control" name="method">
                                                        <option value="">Select</option>
                                                        <option value="bank">Bank of America ********45845</option>
                                                        <option value="master">Master Card ***********5458</option>
                                                    </select>
                                                </div>
                                            </div>
-->

                                            <div class="mb-3">
                                                <label class="me-sm-2">Enter your amount and price</label>
                                                <div class="input-group">
                                                    <input type="text" name="amount" class="form-control"
                                                           placeholder="amount">

                                                    <input type="text" name="fee" class="form-control"
                                                           placeholder="price">

                                                </div>
                                                @error('amount')
                                                <div>
                                                        <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                                @error('fee')
                                                <div>
                                                        <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                                <div class="d-flex justify-content-between mt-3">
                                                    <p class="mb-0">Monthly Limit</p>
                                                    <h6 class="mb-0">$49750 remaining</h6>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit"
                                                    class="btn btn-success w-100">Exchange
                                                Now</button>

                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="sell">
                                        <form method="post" name="myform" class="currency_validate" action="{{route('user.order.store')}}">
                                            @csrf
                                            <input type="hidden" value="sell" name="type">
                                            <div class="mb-3">
                                                <label class="me-sm-2">Currency</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="cc BTC-alt"></i></label>
                                                    </div>
                                                    <select name='currency_id' class="form-control">
                                                        <option value="">Select</option>
                                                        @foreach($currencies as $currency)
                                                            <option value="{{$currency->id}}">{{$currency->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--
                                                                                        <div class="mb-3">
                                                                                            <label class="me-sm-2">Payment Method</label>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="input-group-prepend">
                                                                                                    <label class="input-group-text"><i
                                                                                                            class="fa fa-bank"></i></label>
                                                                                                </div>
                                                                                                <select class="form-control" name="method">
                                                                                                    <option value="">Select</option>
                                                                                                    <option value="bank">Bank of America ********45845</option>
                                                                                                    <option value="master">Master Card ***********5458</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                            -->

                                            <div class="mb-3">
                                                <label class="me-sm-2">Enter your amount and price</label>
                                                <div class="input-group">
                                                    <input type="text" name="amount" class="form-control"
                                                           placeholder="amount">

                                                    <input type="text" name="fee" class="form-control"
                                                           placeholder="price">

                                                </div>
                                                @error('amount')
                                                <div>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                                @error('fee')
                                                <div>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                                <div class="d-flex justify-content-between mt-3">
                                                    <p class="mb-0">Monthly Limit</p>
                                                    <h6 class="mb-0">$49750 remaining</h6>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit"
                                                    class="btn btn-success w-100">Exchange
                                                Now</button>

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
