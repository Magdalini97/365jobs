@extends('master')

@section('content')
    <div class="looking-for-applicants">

        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="" method="POST">
                        <div class="staff">
                            <h1>What Staff do you need?</h1>

                            <div class="input-wrapper d-flex align-items-center justify-content-center">
                                <label for="search" class="search"></label>
                                <input type="text" name="search" placeholder="search">
                                <div class="job-list">
                                    <ul>
                                        <li class="scroll-to-form"><a href="#">Fishermen <span>></span></a></li>
                                        <li class="scroll-to-form"><a href="#">Unskilled fishery workers <span>></span></a></li>
                                        <li class="scroll-to-form"><a href="#">Aquacultural workers <span>></span></a></li>
                                        <li class="scroll-to-form"><a href="#">Fish farming workers <span>></span></a></li>
                                        <li class="scroll-to-form"><a href="#">Skippers <span>></span></a></li>
                                        <li class="scroll-to-form"><a href="#">Shipyard workers <span>></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="looking-for-applicants-2" style="display:none;">
        <div class="container">
                <div class="col-6 ">
                    <form name="forma-step1" action=""  method="post">
                        <div class="staff">
                            <h1>What are your contact details?</h1>

                            <div class="input-wrapper d-flex align-items-center justify-content-center">
                                <div class="for">
                                    <label for="firstname" class="firstname"></label>
                                    <input type="text" required name="firstName" id="firstName"  placeholder="First Name">
                                </div>
                                <div class="for">
                                    <label for="lastname" class="lastname"></label>
                                    <input type="text" required name="lastName" id="lastName"  placeholder="Last Name">
                                </div>

                                <div class="for">
                                    <label for="Company-name" class="company"></label>
                                    <input type="text" required name="Company" id="Company"  placeholder="Company name">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6 d-flex align-items-center justify-content-between">
                    <div class="mpara">
                        <div class="progress-bar">
                            <div class="miden"></div>
                        </div>
                        <p>Step 1 of 2</p>
                        <div class="vel">
                            <a href="#" title="div" class="velos">
                                <div class="belos"><</div>
                            </a>
                            <button type="button" class="ctab next-step">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="looking-for-applicants-3" style="display:none;">

        <div class="container">
            <div class="row">
                <div class="col-6 ">
                    <form name="forma-step2" action=""  method="post">
                        <div class="staff">
                            <h1>How can we reach you?</h1>

                            <div class="for">
                                <label for="phone" class="phone"></label>
                                <input type="int" required name="phone" id="phone"  placeholder="Phone Number">
                            </div>

                            <div class="for">
                                <label for="email" class="email"></label>
                                <input type="email" required name="email" id="email"  placeholder="Email">
                            </div>

                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                I agree with <span style="text-decoration: underline;">Terms of Use</span> and
                                <span style="text-decoration: underline;"> Privacy Policy </span></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-6  d-flex align-items-center justify-content-between">
                    <div class="mpara">
                        <div class="progress-bar">
                            <div class="miden"></div>
                        </div>
                        <p>Step 2 of 2</p>
                        <div class="vel">
                            <a href="#" title="div" class="velos">
                                <div class="belos"><</div>
                            </a>
                            <button type="button" class="ctab next-step">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="looking-for-applicants-4" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-6 staff d-flex align-items-center justify-content-center">
                    <h1>Thank you!</h1>
                    <p>Hanc ego cum memoriter, tum etiam ac ratione neque disputatione,
                        quam nihil ut de homine sensibus reliqui nihil oportere nimium nos amice
                        et dolorum effugiendorum gratia ego assentior, cum teneam sententiam.</p>
                </div>
            </div>
            <div class="row" style="display:none">
                <div class="mpara">
                    <div class="vel">
                        <a href="#" title="div" class="velos">
                            <div class="belos"><</div>
                        </a>
                        <button type="button" class="ctab next-step">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", () => {

        const x = document.querySelector('.looking-for-applicants');
        const y = document.querySelectorAll('.looking-for-applicants-2, .looking-for-applicants-3, .looking-for-applicants-4');
        let current = 0;

     // Scroll to form links
        document.querySelectorAll('.scroll-to-form').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                x.style.display = 'none';
                y[0].style.display = 'block';
                current = 1;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

     // Next buttons
        document.querySelectorAll('.next-step').forEach(btn => {
            btn.setAttribute("type","button");
            btn.addEventListener('click', () => {
                if (current > 0) {
                    y[current - 1].style.display = 'none';
                } else {
                    x.style.display = 'none';
                }

                if (current < y.length) {
                    y[current].style.display = 'block';
                    current++;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            });
        });

     // Back buttons
        document.querySelectorAll('.velos').forEach(backBtn => {
            backBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (current > 0) {
                    y[current - 1].style.display = 'none';
                    current--;

                }if (current === 0) {
                    x.style.display = 'block';
                } else {
                    y[current - 1].style.display = 'block';
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });

            });
        });

        // Optional: form validation
        document.forms["forma-step1"].addEventListener("submit", (e) => {
            e.preventDefault();
            e.target.reportValidity();
        });
    });

</script>
