@extends('master')

@section('content')
    <div class="servicesblade">

        <div class="shero">
            <div class="container">
                <div class="paragraph">
                    <div data-aos="fade-right">
                        <h1 class="page-title">Services</h1>
                    </div>
                    <div data-aos="fade-left" class="html-content">
                        <p>Research, recruiting and outplacement services</p>
                    </div>
                    <div class="btns">
                        <a href="#" title="em" class="primary-btn employer">I am an employer</a>
                        <a href="#" title="em" class="primary-btn transparent">I am a candidate</a>
                    </div>
                </div>
                <div class="background">
                    <img src="/_365jobs/images/stock-photo.png" alt="png">
                </div>
            </div>
        </div>

        <div class="sena">
            <div class="container">
                <div class="services-info">
                    <h1 class="page-title">What are<br>our<span> services?</span></h1>
                    <div class="html-content">
                        <p>Tourism, catering, construction, manufacturing,
                            fishing and agriculture are vital sectors for the Greek economy,
                            with a large number of job vacancies. We understand the specific
                            needs they have and meet them by adopting a 360° approach with speed
                            and professionalism.
                        </p>
                    </div>
                </div>

                <div class="selection">
                    <a href="#"><span><img src="/_365jobs/images/Line 3.png" alt="png"></span>Recruitment solutions</a>
                    <a href="#"><span><img src="/_365jobs/images/Line 3.png" alt="png"></span>Support in the recruitment process of non-EU nationals</a>
                </div>
            </div>
        </div>



        <div class="sdio">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 offset-lg-1 d-flex align-items-center">
                        <div class="recru-solutions">
                            <h3 class="services-section-title">Recruitment solutions</h3>
                            <div class="html-content">
                                <p>We offer tailored workforce solutions for your business
                                    in different sectors to create a strong match between your business
                                    requirements and the candidates&#39; know-how and expertise.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 offset-lg-2">
                        <div class="solutions-image">
                            <img src="/_365jobs/images/recru.png" alt="foto">
                            <div class="small"></div>
                            <div class="medium"></div>
                            <div class="large"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="stria">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 offset-lg-1 d-flex align-items-center">
                        <div class="solutions-image">
                            <img src="/_365jobs/images/recru.png" alt="foto">
                            <div class="small"></div>
                            <div class="medium"></div>
                            <div class="large"></div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 offset-lg-1">
                        <div class="recru-solutions">
                            <h3 class="services-section-title">Support in the recruitment process of non-EU nationals</h3>
                            <div class="html-content">
                                <p>Finding a job in the EU is very challenging for many non-EU citizens.
                                    Mastering the labor market and complying with various legal
                                    and bureaucratic requirements are just some of the many obstacles that jobseekers face.
                                    We help candidates obtain the necessary permit and businesses to place the candidates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('.partials.hpente')

    </div>
@endsection









