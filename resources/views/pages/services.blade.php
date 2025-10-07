@extends('master')

@section('content')
    <div class="servicesblade">

        <div class="shero">
            <div class="container">
                <div class="col3">
                    <div class="service">
                        <h1>Services</h1>
                        <p>Research, recruiting and outplacement services</p>
                    </div>

                    <div class="btns">
                        <a href="http://127.0.0.1:8000/looking-for-applicants" title="em" class="ctab em">I am an employer</a>
                        <a href="#"title="em" class="ctab can">I am a candidate</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sena">

            <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="what">
                                <h2>What are our <span>services?</span></h2>
                                <p  >Tourism, catering, construction, manufacturing,
                                fishing and agriculture are vital sectors for the Greek economy,
                                with a large number of job vacancies. We understand the specific
                                needs they have and meet them by adopting a 360° approach with speed
                                and professionalism.</p>

                            </div>
                            <div class="erotisi">
                                <ul>
                                    <li><div class="apost"><a href="#" title="rs">> <span>Recruitment solutions</span></a></div></li>
                                    <li><div class="apost"><a href="#" title="si">> <span>Support in the recruitment process of non-EU nationals</span></a></div></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="par">
                                <p>Tourism, catering, construction, manufacturing,
                                fishing and agriculture are vital sectors for the Greek economy,
                                with a large number of job vacancies. We understand the specific
                                needs they have and meet them by adopting a 360° approach with speed
                                and professionalism.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="sdio">
            <div class="container">
                <div class="row">
                    <div class="col offset-1 d-flex align-items-center">
                        <div class="keimeno">
                            <h1>Recruitment solutions</h1>
                            <p>We offer tailored workforce solutions for your business
                            in different sectors to create a strong match between your business
                            requirements and the candidates&#39; know-how and expertise.</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="solutions">
                            <img src="/_365jobs/images/recru.png" alt="foto">
                            <div class="mikro"></div>
                            <div class="mesaio"></div>
                            <div class="megalo"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>





       <div class="stria">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col">
                       <div class="solution">
                            <img src="/_365jobs/images/recru.png" alt="foto">
                            <div class="mikro"></div>
                            <div class="mesaio"></div>
                            <div class="megalo"></div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="keimenos">
                           <h1>Support in the recruitment process of non-EU nationals</h1>
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


       @include('.partials.hpente')



    </div>
@endsection









