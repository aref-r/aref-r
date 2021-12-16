@extends('layouts.user.master')


@section('content')

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
                                <div class="buy-sell-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                href="#buy">Buy</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="#sell">Sell</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-content-default">
                                        <div class="tab-pane fade show active" id="buy" role="tabpanel">
                                            <form method="post" name="myform" class="currency_validate"
                                                action="{{ route('user.order.store') }}">
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
                                                            @foreach ($currencies as $currency)
                                                                <option value="{{ $currency->id }}">{{ $currency->name }}
                                                                </option>
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
                                                <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                                                    Now</button>

                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="sell">
                                            <form method="post" name="myform" class="currency_validate"
                                                action="{{ route('user.order.store') }}">
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
                                                            @foreach ($currencies as $currency)
                                                                <option value="{{ $currency->id }}">{{ $currency->name }}
                                                                </option>
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
                                                <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                                                    Now</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p class="p-4">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                            cupiditate
                            suscipit explicabo voluptas eos in tenetur error temporibus dolorum. Nulla!</p>
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
                                                @foreach ($orders as $order)
                                                    @if ($order->type == 'sell')
                                                        <tr>
                                                            <td><span class="sold-thumb"><i
                                                                        class="la la-arrow-down"></i></span>
                                                            </td>

                                                            <td>
                                                                <span class="badge bg-danger">Sold</span>
                                                            </td>
                                                            <td>
                                                                <i class="cc BTC"></i> {{ $order->currency->name }}
                                                            </td>
                                                            <td>
                                                                Using - Bank *******5264
                                                            </td>
                                                            <td class="text-danger">{{ $order->fee }} IRR </td>
                                                            <td>{{ $order->amount }}</td>
                                                            <td>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success w-100" data-toggle="modal"
                                                                    data-target="#exampleModal"
                                                                    onclick="setValueModal({{ $order->id }},{{ $order->amount }},{{ $order->fee }})">
                                                                    Send Offer</button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if ($order->type == 'buy')
                                                        <tr>
                                                            <td><span class="buy-thumb"><i
                                                                        class="la la-arrow-up"></i></span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Buy</span>
                                                            </td>
                                                            <td>
                                                                <i class="cc LTC"></i> {{ $order->currency->name }}
                                                            </td>
                                                            <td>
                                                                Using - Card *******8475
                                                            </td>
                                                            <td class="text-success">{{ $order->fee }} IRR </td>
                                                            <td>{{ $order->amount }}</td>
                                                            <td>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success w-100" data-toggle="modal"
                                                                    data-target="#exampleModal"
                                                                    onclick="setValueModal({{ $order->id }},{{ $order->amount }},{{ $order->fee }})">
                                                                    Send Offer</button>
                                                            </td>
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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Offer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" name="myform" class="currency_validate" action="{{ route('user.offer.store') }}">
                        <div class="modal-body">

                            @csrf
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    {{-- <div class="input-group-prepend"> --}}
                                    {{-- <label class="input-group-text">Fee</label> --}}
                                    {{-- </div> --}}
                                    <input type="text" class="form-control" name="fee" id="fee_modal" placeholder="Fee">
                                </div>
                            </div>




                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    {{-- <div class="input-group-prepend"> --}}
                                    {{-- <label class="input-group-text">Amount</label> --}}
                                    {{-- </div> --}}
                                    <input type="text" class="form-control" name="amount" id="amount_modal"
                                        placeholder="Amount">
                                </div>
                            </div>


                            <input type="hidden" class="form-control" name="order_id" id="order_id_modal">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @elseif (Auth::user()->lang == 'fa')
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
                                <div class="buy-sell-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                href="#buy">Buy</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="#sell">Sell</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-content-default">
                                        <div class="tab-pane fade show active" id="buy" role="tabpanel">
                                            <form method="post" name="myform" class="currency_validate"
                                                action="{{ route('user.order.store') }}">
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
                                                            @foreach ($currencies as $currency)
                                                                <option value="{{ $currency->id }}">{{ $currency->name }}
                                                                </option>
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
                                                <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                                                    Now</button>

                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="sell">
                                            <form method="post" name="myform" class="currency_validate"
                                                action="{{ route('user.order.store') }}">
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
                                                            @foreach ($currencies as $currency)
                                                                <option value="{{ $currency->id }}">{{ $currency->name }}
                                                                </option>
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
                                                <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                                                    Now</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p class="p-4">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                            cupiditate
                            suscipit explicabo voluptas eos in tenetur error temporibus dolorum. Nulla!</p>
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
                                                @foreach ($orders as $order)
                                                    @if ($order->type == 'sell')
                                                        <tr>
                                                            <td><span class="sold-thumb"><i
                                                                        class="la la-arrow-down"></i></span>
                                                            </td>

                                                            <td>
                                                                <span class="badge bg-danger">Sold</span>
                                                            </td>
                                                            <td>
                                                                <i class="cc BTC"></i>
                                                                {{ $order->currency->name }}
                                                            </td>
                                                            <td>
                                                                Using - Bank *******5264
                                                            </td>
                                                            <td class="text-danger">{{ $order->fee }} IRR </td>
                                                            <td>{{ $order->amount }}</td>
                                                            <td>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success w-100" data-toggle="modal"
                                                                    data-target="#exampleModal"
                                                                    onclick="setValueModal({{ $order->id }},{{ $order->amount }},{{ $order->fee }})">
                                                                    Send Offer</button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if ($order->type == 'buy')
                                                        <tr>
                                                            <td><span class="buy-thumb"><i
                                                                        class="la la-arrow-up"></i></span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Buy</span>
                                                            </td>
                                                            <td>
                                                                <i class="cc LTC"></i>
                                                                {{ $order->currency->name }}
                                                            </td>
                                                            <td>
                                                                Using - Card *******8475
                                                            </td>
                                                            <td class="text-success">{{ $order->fee }} IRR </td>
                                                            <td>{{ $order->amount }}</td>
                                                            <td>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success w-100" data-toggle="modal"
                                                                    data-target="#exampleModal"
                                                                    onclick="setValueModal({{ $order->id }},{{ $order->amount }},{{ $order->fee }})">
                                                                    Send Offer</button>
                                                            </td>
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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Offer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" name="myform" class="currency_validate" action="{{ route('user.offer.store') }}">
                        <div class="modal-body">

                            @csrf
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    {{-- <div class="input-group-prepend"> --}}
                                    {{-- <label class="input-group-text">Fee</label> --}}
                                    {{-- </div> --}}
                                    <input type="text" class="form-control" name="fee" id="fee_modal" placeholder="Fee">
                                </div>
                            </div>




                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    {{-- <div class="input-group-prepend"> --}}
                                    {{-- <label class="input-group-text">Amount</label> --}}
                                    {{-- </div> --}}
                                    <input type="text" class="form-control" name="amount" id="amount_modal"
                                        placeholder="Amount">
                                </div>
                            </div>


                            <input type="hidden" class="form-control" name="order_id" id="order_id_modal">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @else
        field 'lang' in 'users' table is empty!
    @endif
@endsection
