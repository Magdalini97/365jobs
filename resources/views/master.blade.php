<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite([
        'resources/sass/app.scss',
        'resources/sass/mobile.scss',
        'resources/js/app.js'
    ])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="menu">
                <a href="http://127.0.0.1:8000"><img src="/_365jobs/images/365jobs.svg" alt="logo" class="job"></a>
                <div class="navbar" id="myNavbar">
                    <a href="http://127.0.0.1:8000"><img src="/_365jobs/images/365jobs.svg" alt="logo" class="job"></a>
                    <a href="/positions" title="Positions">Positions</a>
                    <a href="/services" title="Services">Services</a>
                    <a href="/aboutus" title="About us">About us</a>
                    <a href="/blog" title="News">News</a>
                    <a href="/contact" title="Contact">Contact</a>
                    <button id="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="look">
                        <a href="/looking-for-applicants-teliko" title="er" class="ctab lookapp">Looking for applicants</a>
                        <a href="#" title="er" class="ctab lookjob">Looking for a job</a>
                    </div>
                </div>
                <a href="/looking-for-applicants-teliko" title="er" class="ctab">I am an employer</a>
                <a href="/looking-for-applicants-teliko" title="er" class="bitn">I am an employer</a>

            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer>
        <div class="container">
            <div class="job"><img src="/_365jobs/images/365jobs.svg" alt="logo"></div>
            <div class="lists">
                <div class="li1">
                    <h5>Navigation</h5>
                    <ul style="list-style-type: none;">
                        <li><a href="/positions" title="Positions">Positions</a></li>
                        <li><a href="/services" title="Services">Services</a></li>
                        <li><a href="/aboutus" title="About us">About us</a></li>
                        <li><a href="/blog" title="News">News</a></li>
                        <li><a href="/contact" title="Contact">Contact</a></li>
                    </ul>
                </div>

                <div class="li2">
                    <h5>Legal</h5>
                    <ul style="list-style-type: none;">
                        <li><a href="#" title="terms of use">Όροι Χρήσης</a></li>
                        <li><a href="#" title="privacy policy">Πολιτική Cookies</a></li>
                        <li><a href="#" title="cookies policy">Πολιτική Απορρήτου</a></li>
                    </ul>
                </div>

                <div class="li3">
                    <h5>Follow us</h5>
                    <ul class="icons" style="list-style-type: none;">
                        <li><a href="#" title="fb"><img src="/_365jobs/images/facebook copy.svg"
                                    alt="svg"></a></li>
                        <li><a href="#" title="insta"><img src="/_365jobs/images/instagram-2.svg"
                                    alt="svg"></a></li>
                        <li><a href="#" title="link"><img src="/_365jobs/images/linkedin-2.svg"
                                    alt="svg"></a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2024 365jobs <span>Created with <favicon style="color:rgb(163, 42, 42);">♥</favicon>
                by Darkpony</span></p>
                <img src="/_365jobs/images/Group54.svg" alt="logo">
            </div>
        </div>
    </footer>
</body>

</html>
