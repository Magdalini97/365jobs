@extends('master')

@section('content')
    <div class="blogblade">

        <div class="bhero">
            <div class="container" >
                <div class="row">
                    <div class="col ">
                        <h1>News & Articles</h1>
                    </div>
                    <div class="col offset-3">
                        <div class="basic">
                            <div class="mikro"></div>
                            <div class="mesaio"></div>
                            <div class="megalo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news">
           @include('partials.htessera')
        </div>
    </div>
@endsection
