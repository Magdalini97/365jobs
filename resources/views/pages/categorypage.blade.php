@extends('master')

@section('content')
    <div class="categorypageblade">


        <div class="chero">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="fish">
                            <h1>Fishing</h1>
                            <p>Research, recruiting and outplacement services</p>
                            <div class="bts">
                            <a href="#" title="em" class="ctab em">I am an employer</a>
                            <a href="#" title="em" class="ctab can">I am a candidate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="eiko">
                            <div class="eikonitsa">
                                <img src="/_365jobs/images/fishing.jpg" alt="image">
                                <div class="mikro"></div>
                                <div class="mesaio"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="cena">
            <div class="container">
                <div class="row  align-items-center justify-content-between">
                    <div class="col-5">
                        <div class="provide">
                            <h3>Positions we <span>provide</span></h3>
                            <p>365 jobs provides a flexible solution to businesses seeking personnel
                            undertaking the search and recruitment from third countries.
                            </p>
                        </div>
                        <div class="btns">
                            <a href="#" title="em" class="ctab em">I am an employer</a>
                            <a href="#" title="em" class="ctab can">I am a candidate</a>
                            <a href="#" title="em" class="ctab bt" style="display:none;">Looking for applicants</a>
                        </div>
                    </div>

                    <div class="col offset-lg-2">
                        <div class="providelist">
                            <ul>
                                <li>Fishermen</li>
                                <li>Unskilled fishery workers </li>
                                <li>Aquacultural workers </li>
                                <li>Fish farming workers </li>
                                <li>Skippers </li>
                                <li>Shipyard workers </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('partials.hena')

        @include('partials.hpente')




























































    </div>
@endsection
