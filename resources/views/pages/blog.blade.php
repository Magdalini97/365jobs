@extends('master')

@section('content')
    <div class="blogblade">

        <div class="bhero">
            <div class="container" >
                <div class="row">
                    <div class="col-10 offset-1">
                        <h1 class="page-title">News<br> & Articles</h1>
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
