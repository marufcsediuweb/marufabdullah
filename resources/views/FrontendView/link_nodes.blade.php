@extends('FrontendView.Layout.frontendlayout')
@section('pageTitle')
    Navigate | Maruf Abdullah
@endsection

@section('bodyContent')
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-md-10 offset-lg-3 offset-xl-3 offset-md-1">
                <div class="header-top">
                    <h2>Authorized Link Nodes</h2>
                </div>
                <div class="link-list">
                    <ul class="list-menu">
                        <li>
                            <a href="https://about.me/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/rion.jfif') }}">
                                </div>
                                <div class="link-title">
                                    <h3>About Me</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/linkedin.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>LinkedIn Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/facebook.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Facebook Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/rizensolutions" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/facebook.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Facebook Fan Page</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/youtube.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>YouTube Channel</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.flickr.com/people/marufcsediuweb/" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/flickr.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Flickr - Showcase</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://replit.com/@marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/coding_hand.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Replit Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://codepen.io/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/code.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>CodePen Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/github.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>GitHub Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/instagram.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Instagram Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/twitter.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Twitter Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://medium.com/@marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/medium.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Medium Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.showwcase.com/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/www_showwcase.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Showwcase Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/marufcsediuweb" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/dribbble.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Dribbble Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('agency') }}" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/cloud-agency.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Our Web Agency</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.trustpilot.com/review/maruf.com.bd" target="_blank" class="link-p">
                                <div class="link-img">
                                    <img src="{{ asset('FrontendAssets/images/trustpilot.png') }}">
                                </div>
                                <div class="link-title">
                                    <h3>Maruf is rated "Excellent" on Trustpilot</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
