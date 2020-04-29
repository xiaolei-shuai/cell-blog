@inject('systemPresenter', 'App\Presenters\SystemPresenter')

@extends('layouts.app')

@section('title', $systemPresenter->getKeyValue('title'))

@section('description', $systemPresenter->getKeyValue('description'))

@section('keywords', $systemPresenter->getKeyValue('keywords'))

@section('header-text')
    <div class="text-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 class="to-animate fadeInUp animated color-white">
                    {{ $systemPresenter->getKeyValue('motto') }}
                </h3>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('default.article')
@endsection