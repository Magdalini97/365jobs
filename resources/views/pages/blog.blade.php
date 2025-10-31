@extends('master')

@section('content')
    <div class="blogblade">

        <div class="bhero">
            <div class="container" >
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h1 data-aos="fade-right" class="page-title">News<br> & Articles</h1>
                        <div class="element">
                            <div class="circle-div">
                                <div class="small"></div>
                                <div class="medium"></div>
                                <div class="large"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news">
            @include('partials.htessera', ['noMargin' => true])
        </div>
    </div>
@endsection
