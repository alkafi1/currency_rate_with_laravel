@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card bordered">
                <div class="card-header">
                    <h3 class="text-bold">Exchance Rate Of Your Currency</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('currency.post') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-2">
                                    <label for="" class="form-label">Currency From</label>
                                    <select class="form-select" name="from" id="" required>
                                        <option class="form-option" value="">Selected Currency From</option>
                                        @foreach ($currencies as $currency )
                                            <option {{(@_POST['from']== $currency->currency_code )?'slected':''}} class="form-option"  value="{{$currency->currency_code}}">{{$currency->currency_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-2">
                                    <label for="" class="form-label">Currency To</label>
                                    <select class="form-select" name="to" id="" required>
                                        <option class="form-option" value="">Selected Currency To</option>
                                        @foreach ($currencies as $currency )
                                            <option class="form-option" value="{{$currency->currency_code}}">{{$currency->currency_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-2">
                                    <label for="" class="form-label">Amount</label>
                                    <input class="form-control" step="any" type="number" name="amount" id="" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-2">
                                    <label for="" class="form-label">Date</label>
                                    <input class="form-control" type="date" name="date" id="" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-2">
                                    <label for="" class="form-label">Converted Amount</label>
                                    <input class="form-control" step="any" type="number" name="converted_amount" id="" value="{{session('converted')}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-2 ">
                                    <button type="submit" class="btn btn-primary">Converted Amount</button>
                                </div>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection