@extends('template/web') 

@section('index')

<div id="bg-overlay"></div>

<div id="main">
    <!--===== CONTENT BEGIN ===== -->
    <div id="content">
        <div class="page-deco">
            RISTEK HIMSI &nbsp;|&nbsp;
            <a href="https://www.instagram.com/himsiunsri/" target="_blank">
                <i class="uil uil-instagram"></i>
            </a>
            <a
                href="https://liff.line.me/1645278921-kWRPP32q/?accountId=himsiunsri"
                target="_blank"
                class="social__icon"
            >
                <i class="uil uil-line"></i>
            </a>
            <a
                href="https://www.youtube.com/channel/UCmyzeEb4Q1FCrGQ2kxeIiLQ"
                target="_blank"
                class="social__icon"
            >
                <i class="uil uil-youtube"></i>
            </a>
        </div>

        <div class="social-icons-fixed">
            <div class="sc-inner"></div>
        </div>

        <!--===== SECTION BEGIN ===== -->
        <section
            id="section-home"
            aria-label="section"
            class="full-height no-top no-bottom text-light"
            data-bgimage="url(../../img/himsi.jpg)"
        >
            <div id="particles-js"></div>

            <div class="overlay-bg t50">
                <div class="middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-5 text-center">
                                <div class="spacer60"></div>

                                <div
                                    style="margin-top: -10%"
                                    class="h1_ultra uppercase"
                                >
                                    <div class="typed-strings">
                                        <p>WELCOME TO</p>
                                        <p>OPREC BPH</p>
                                        <p>HIMSI UNSRI</p>
                                        <p>2023</p>
                                    </div>

                                    <div class="typed"></div>
                                </div>

                                <div class="spacer60"></div>

                                <a
                                    class="button button-flex registration-open"
                                    style="color: white !important"
                                >
                                    CLOSED IN :
                                    <span id="countdown"></span>
                                </a>

                                <br />

                                <a
                                    class="button button-flex registration-closed"
                                    style="
                                        color: white !important;
                                        font-size: 2rem;
                                    "
                                >
                                    Registration is closed. See you in next
                                    Oprec!
                                </a>
                              
                                <br class="registration-closed"/>

                                <a
                                    href="{{ route('validateNIM') }}"
                                    class="button button--flex registration-open"
                                    style="color: white !important"
                                >
                                    Register
                                </a>
                                
                                <a
                                    href="{{ route('login') }}"
                                    class="button button--flex"
                                    style="color: white !important"
                                >
                                    Login
                                </a>
                                
                                <a
                                    href="{{ route('faq') }}"
                                    style="color: white !important"
                                    class="button button--flex registration-open"
                                    target="_blank"
                                >
                                    FAQ<i
                                        class="uil uil-question-circle button__icon"
                                    ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===== SECTION CLOSE ===== -->
    </div>
    <!--===== CONTENT CLOSE ===== -->
</div>

@endsection
