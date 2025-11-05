@extends('master')

@section('content')

<div class="aboutusblade">
    <div class="abhero">
        <div class="container">
            <div class="paragraph">
                <div data-aos="fade-right">
                    <h1 class="page-title">About 365 Jobs</h1>
                </div>
                <div data-aos="fade-left" class="html-content">
                    <p>Recruiting solutions: Find the right job ad for your
                        hiring needs and budget
                    </p>
                </div>
            </div>
            <div class="big-image">
                <img src="/_365jobs/images/talkers.png" alt="image">
                <div class="small"></div>
                <div class="medium"></div>
                <div class="large"></div>

            </div>
        </div>
    </div>


    @include('partials.hdio')


    <div class="abena">
        <div class="container">
            <div class="row">
                <div class="col-12  col-lg-6  order-2 order-lg-1 d-lg-flex align-items-center">
                    <div class="aboutus-content">
                        <h2 class="section-title">We connect businesses and <span>job seekers</span></h2>
                        <div class="html-content">
                            <p>Our aim is to make the job market accessible to everyone,
                                where each individual and all companies have equal access to opportunities.
                                Let us support your hiring process in what we do best, by finding you the best match.
                                We handle the task of searching and recruiting people for businesses,
                                ensuring a smooth recruitment process regardless of whether you are looking
                                for qualified candidates from different countries or you are a third country national
                                looking for work in Greece.<br>Contact us today and find out more about our services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5 order-1 order-lg-2 offset-lg-1 ">
                    <div class="about">
                        <img src="/_365jobs/images/profession.png" alt="png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="abdio">
        <div class="container">
            <h2 class="section-title">Your benefits with<span>365 jobs</span></h2>
            <div class="benefit-list">
                <div class="benefit-items">
                    <div class="job-image"><img src="/_365jobs/images/tilevoas.svg" alt="logo"></div>
                    <h4 class="small-title">Take advantage of<br> our candidate pools</h4>
                    <div class="html-content">
                        <p>Top quality service, we do quality checks with your
                            ads to ensure high ROI
                        </p>
                    </div>
                </div>

                <div class="benefit-items">
                    <div class="job-image"><img src="/_365jobs/images/headphones.svg" alt="logo"></div>
                    <h4 class="small-title">Excellent<br> customer service</h4>
                    <div class="html-content">
                        <p>Top quality service, we do quality checks with your
                            ads to ensure high ROI
                        </p>
                    </div>
                </div>


                <div class="benefit-items">
                    <div class="job-image"><img src="/_365jobs/images/job.svg" alt="logo"></div>
                    <h4 class="small-title">Full flexibility in the<br> recruiter space</h4>
                    <div class="html-content">
                        <p>Top quality service, we do quality checks with your
                            ads to ensure high ROI
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
