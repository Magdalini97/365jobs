    <header>
        <div class="container">
            <div class="menu">
                <a href="/"><img src="/_365jobs/images/365jobs.svg" alt="logo" class="job"></a>
                <div class="navbar" id="myNavbar">
                    <a href="/positions" title="Positions">Positions</a>
                    <a href="/services" title="Services">Services</a>
                    <a href="/aboutus" title="About us">About us</a>
                    <a href="/blog" title="News">News</a>
                    <a href="/contact" title="Contact">Contact</a>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <button  onclick="myFunction(this)"  id="icon">
                        <div class="hamburger">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                    </button>

                    <div class="responsive-menu">
                        <a href="/positions" title="Positions">Positions</a>
                        <a href="/services" title="Services">Services</a>
                        <a href="/aboutus" title="About us">About us</a>
                        <a href="/blog" title="News">News</a>
                        <a href="/contact" title="Contact">Contact</a>

                        <div class="look">
                            <a href="/looking-for-applicants-teliko" title="er" class="primary-btn employer ">Looking for applicants</a>
                            <a href="#" title="er" class="primary-btn transparent">Looking for a job</a>
                        </div>
                    </div>
                </div>

                <div class="header-buttons">
                    <a href="/looking-for-applicants-teliko" class="primary-btn">I am an employer</a>
                </div>
            </div>
        </div>
    </header>


<script>
    document.getElementById("icon").addEventListener("click", toggleNav);
    function toggleNav() {
        const element = document.getElementById("icon");
        const responsiveMenu = document.querySelector(".sidebar .responsive-menu");
        element.classList.toggle("change");
        responsiveMenu.classList.toggle("open");
    }
</script>
