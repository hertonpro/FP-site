@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <header>
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="../files/1.webm" type="video/webm">
                </video>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                            <h1 class="display-3">One stop center</h1>
                            <p class="lead mb-0">L'environnement d'espoir dans une prise en charge holistique</p>
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add
                                        in your own background! The header text is vertically centered using flex utilities
                                        that are build into Bootstrap 4.</p>
                                    <p>The overlay color can be changed by changing the <code>background-color</code> of the
                                        <code>.overlay</code> class in the CSS.</p>
                                    <p>Set the mobile fallback image in the CSS by changing the background image of the
                                        header element within the media query at the bottom of the CSS snippet.</p>
                                    <p class="mb-0">
                                        Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>

@endsection
