@extends('master')

@section('content')
    <div class="looking-for-applicants-teliko">

        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="" method="POST">
                        <div class="looking-for-applicants-1">
                            <h1 class="page-title">What Staff do you need?</h1>

                            <div class="input-wrapper">
                                <input type="search" class="search" placeholder="Search">
                                <a href=""><img src="/_365jobs/images/downsign.png.png" alt="png"></a>
                            </div>

                            <div class="job-list">
                                <ul>
                                    <li class="scroll-to-form"><a href="#">Fishermen <img src="/_365jobs/images/downsign.png.png" alt="png"></a></li>
                                    <li class="scroll-to-form"><a href="#">Unskilled fishery workers<img src="/_365jobs/images/downsign.png.png" alt="png"></a></li>
                                    <li class="scroll-to-form"><a href="#">Aquacultural workers <img src="/_365jobs/images/downsign.png.png" alt="png"></a></li>
                                    <li class="scroll-to-form"><a href="#">Fish farming workers <img src="/_365jobs/images/downsign.png.png" alt="png"></a></li>
                                    <li class="scroll-to-form"><a href="#">Skippers <img src="/_365jobs/images/downsign.png.png" alt="png"></a></li>
                                    <li class="scroll-to-form"><a href="#">Shipyard workers <img src="/_365jobs/images/downsign.png.png" alt="png"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="looking-for-applicants-2">
                            <div class="staff">
                                <h1 class="page-title">What are your contact details?</h1>

                                <div class="input-wrapper">
                                    <div class="for">
                                        <label for="firstname" class="firstname"></label>
                                        <input type="text" required name="firstName" id="firstName" placeholder="First Name">
                                    </div>
                                    <div class="for">
                                        <label for="lastname" class="lastname"></label>
                                        <input type="text" required name="lastName" id="lastName" placeholder="Last Name">
                                    </div>

                                    <div class="for">
                                        <label for="Company-name" class="company"></label>
                                        <input type="text" required name="Company" id="Company" placeholder="Company name">
                                    </div>
                                </div>


                                <div class="bar" >
                                    <div class="progress-bar">
                                        <div class="line"></div>

                                        <div class="html-content">
                                            <p>Step 1 of 2</p>
                                        </div>
                                    </div>
                                    <div class="sign">
                                        <a href="#" title="div" class="back-sign">
                                            <img src="/_365jobs/images/downsign.png.png" alt="png">
                                        </a>
                                        <button type="button" class="primary-btn next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="looking-for-applicants-3">
                            <div class="staff">
                                <h1 class="page-title">How can we reach you?</h1>
                                <div class="input-wrapper">

                                    <div class="for">
                                        <label for="phone" class="phone"></label>
                                        <input type="int" required name="phone" id="phone" placeholder="Phone Number">
                                    </div>

                                    <div class="for">
                                        <label for="email" class="email"></label>
                                        <input type="email" required name="email" id="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"> I agree with <span style="text-decoration: underline;">Terms of Use</span> and
                                    <span style="text-decoration: underline;"> Privacy Policy </span></label>
                                </div>

                                <div class="bar" >
                                    <div class="progress-bar">
                                        <div class="line"></div>
                                        <div class="html-content">
                                            <p>Step 2 of 2</p>
                                        </div>
                                    </div>
                                    <div class="sign">
                                        <a href="#" title="div" class="back-sign">
                                            <img src="/_365jobs/images/downsign.png.png" alt="png">
                                        </a>
                                        <button type="button" class="primary-btn next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="looking-for-applicants-4">
                            <div class="staff">
                                <h1 class="page-title">Thank you!</h1>
                                <div class="html-content">
                                    <p>Hanc ego cum memoriter, tum etiam ac ratione neque disputatione,
                                        quam nihil ut de homine sensibus reliqui nihil oportere nimium nos amice
                                        et dolorum effugiendorum gratia ego assentior, cum teneam sententiam.
                                    </p>
                                </div>

                                <div class="design-circle">
                                    <div class="small"></div>
                                    <div class="medium"></div>
                                    <div class="large"></div>
                                </div>

                                <div class="mpara" style="display:none">
                                    <div class="vel">
                                        <a href="#" title="div" class="velos">
                                            <div class="belos"><</div>
                                        </a>
                                        <button type="button" class="ctab next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



<script>
    document.addEventListener("DOMContentLoaded", () => {
        const step1 = document.querySelector(".looking-for-applicants-1");
        const steps = document.querySelectorAll(".looking-for-applicants-2, .looking-for-applicants-3, .looking-for-applicants-4");
        let current = 0;

        step1.style.display = "block";
        steps.forEach(step => step.style.display = "none");

        document.querySelectorAll(".scroll-to-form").forEach(item => {
            item.addEventListener("click", (e) => {
                e.preventDefault();
                steps[0].style.display = "block";
                step1.style.display = "none";
                current = 1;
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });

        document.querySelectorAll(".next-step").forEach((btn) => {
            btn.addEventListener("click", () => {
                const currentStep = (current === 0) ? step1 : steps[current - 1];
                const inputs = currentStep.querySelectorAll("input[required]");
                for (let input of inputs) {
                    if (!input.checkValidity()) {
                        input.reportValidity();
                        return;
                    }
                }

                const checkbox = currentStep.querySelector('input[type="checkbox"]');

                if (checkbox && !checkbox.checked) {
                    alert('You must agree with Terms of Use and Privacy Policy');
                    return;
                }

                currentStep.style.display = "none";
                if (current < steps.length) {
                    steps[current].style.display = "block";
                    current++;
                    window.scrollTo({ top: 0, behavior: "smooth" });
                }
            });
        });

        document.querySelectorAll('.back-sign').forEach(backBtn => {
            backBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (current > 0) {
                    steps[current - 1].style.display = 'none';
                    current--;

                }if (current === 0) {
                    step1.style.display = 'block';
                } else {
                    steps[current - 1].style.display = 'block';
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });

            });
        });
    });
</script>
