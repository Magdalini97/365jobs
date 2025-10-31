@extends('master')

@section('content')
<div class="categorypageblade">
    <div class="chero">
        <div class="container">
            <div class="row">
                <div class="col-12  col-lg-4 ">
                    <div class="paragraph">
                        <h1 data-aos="fade-right" class="page-title">Fishing</h1>
                        <div data-aos="fade-left" class="html-content">
                            <p>Research, recruiting and outplacement services</p>
                        </div>
                        <div class="btns">
                            <a href="#" title="em" class="primary-btn employer">I am an employer</a>
                            <a href="#" title="em" class="primary-btn transparent">I am a candidate</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-3">
                    <div class="double-image">
                        <div class="span-image">
                            <img src="/_365jobs/images/fishing.jpg" alt="image">
                            <div class="small"></div>
                            <div class="medium"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="cena">
        <div class="container">
            <div class="row">
                <div class="paragraph">
                    <h2 class="section-title">Positions we <span>provide</span></h2>
                    <div class="html-content">
                        <p>365 jobs provides a flexible solution to businesses seeking personnel
                            undertaking the search and recruitment from third countries.
                        </p>
                    </div>
                    <div class="btns">
                        <a href="#" title="em" class="primary-btn employer">I am an employer</a>
                        <a href="#" title="em" class="primary-btn transparent">I am a candidate</a>
                    </div>
                </div>

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
                <div class="btn-list">
                    <a href="/#" class="d-block d-lg-none primary-btn employer">Looking for applicants</a>
                </div>
            </div>
        </div>
    </div>



    @include('partials.hena')

    @include('partials.hpente')

</div>
@endsection
