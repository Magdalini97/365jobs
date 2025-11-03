@extends('master')

@section('content')
    <div class="positionsblade">
        <div class="container">
            <div class="position-wrapper">
                <div data-aos="fade-down">
                    <h1 class="page-title">Positions</h1>
                </div>
                <div class="html-content">
                    <p>The recruitment from third countries gives
                        the businesses a flexible solution to fulfill the existing gaps
                        in human resources. We cover positions from construction, tourism,
                        agriculture, fishing and food service sectors.
                    </p>
                </div>
            </div>


            <div class="row custom-gutter" data-masonry='{"itemSelector": ".col-4"}'>
                <div class="col-4">
                    <a href="#" title="grid-item" class="item grid-item">
                        <div class="items">
                            <span class="logo-image"><img src="/_365jobs/images/fishing-rod.svg" alt="logo"></span>
                            <h5>Fishing</h5>
                            <ul>
                                <li>Fishermen</li>
                                <li>Unskilled fishery workers</li>
                                <li>Aquacultural workers</li>
                                <li>Fish farming workers</li>
                                <li>Skippers </li>
                                <li>Shipyard workers</li>
                            </ul>
                        </div>
                    </a>
                </div>


                <div class="col-4">
                    <a href="#" title="grid-item" class="item grid-item">
                        <div class="items">
                            <span class="logo-image"><img src="/_365jobs/images/construction.svg" alt="logo"></span>
                            <h5>Construction</h5>
                            <ul>
                                <li>Unskilled construction workers</li>
                                <li>Builders</li>
                                <li>Bricklayers</li>
                                <li>Molders</li>
                                <li>Flooring contractors</li>
                                <li>Carpenters</li>
                                <li>Metal and concrete fasteners</li>
                                <li>Industrial vehicle drivers and machinery</li>
                                <li>operators, assemblers</li>
                                <li>Drillers</li>
                                <li>Welders</li>
                                <li>Earthworkers</li>
                                <li>Turners</li>
                                <li>Clark drivers</li>
                                <li>Mechanical engineering assistants</li>
                                <li>Skimming and plastering workers</li>
                                <li>Carpenters</li>
                                <li>Woodworkers</li>
                            </ul>
                        </div>
                    </a>
                </div>



                <div class="col-4">
                    <a href="#" title="grid-item" class="item grid-item">
                        <div class="items">
                            <span class="logo-image"><img src="/_365jobs/images/granazi.svg" alt="logo"></span>
                            <h5>Tourism</h5>
                            <ul>
                                <li>Building supervisors</li>
                                <li>Maids and cleaners</li>
                                <li>Gardeners</li>
                                <li>Chefs</li>
                                <li>Animators and entertainers</li>
                                <li>Pool maintenance </li>
                                <li>Airport service baggage workers</li>
                                <li>Porters</li>
                                <li>Ship crew</li>
                            </ul>
                        </div>
                    </a>
                </div>



                <div class="col-4">
                    <a href="#" title="grid-item" class="item grid-item">
                        <div class="items">
                            <span class="logo-image"><img src="/_365jobs/images/planting.svg" alt="logo"></span>
                            <h5>Agricultural sector </h5>
                            <ul>
                                <li>Unskilled agricultural, livestock and forestry workers </li>
                                <li>Greenhouse workers </li>
                                <li>Farm workers</li>
                                <li>Foresters, loggers</li>
                                <li>Stable workers and groomers </li>
                                <li>Dairy workers </li>
                                <li>Packaging workers </li>
                            </ul>
                        </div>
                    </a>
                </div>


                <div class="col-4">
                    <a href="#" title="grid-item" class="item  grid-item">
                        <div class="items">
                            <span class="logo-image"><img src="/_365jobs/images/job.svg" alt="logo"></span>
                            <h5>Other jobs</h5>
                            <ul>
                                <li>House cleaners, nurses, carers</li>
                                <li>Slaughters, butchers</li>
                                <li>Car mechanics, car electricians, lighting</li>
                                <li>technicians, tire repairers</li>
                                <li>Warehouse workers</li>
                                <li>Logistic officers</li>
                            </ul>
                        </div>
                    </a>
                </div>


                <div class="col-4">
                    <a href="#" title="grid-item"class="item grid-item">
                        <div class="items">
                            <span class="logo-image"><img src="/_365jobs/images/food-service.svg" alt="logo"></span>
                            <h5>Food service</h5>
                            <ul>
                                <li>Kitchen assistants, dishwashers</li>
                                <li>Chefs</li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include('partials.hpente')

    </div>
@endsection
