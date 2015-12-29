@extends('layouts.master')

@section('pageTitle', 'Press Resources')

@section('content')
<section class="grey condensed further level">
    <div class="container">
        <div class="row">
            <h3>Press Resources</h3>
            <h4>News, company info and media resources.</h4>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-2">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#about">About</a></li>
                    <li class="list-group-item"><a href="https://github.com/CachetHQ/Assets" target="_blank">Logos &amp; Resources</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-10">
                <div id="about">
                    <h3>Transparency</h3>

                    <p>Cachet is the easiest way to be transparent with your customers, users and share-holders.</p>

                    <h3>History</h3>

                    <p>We were in need of a status page system for another service that was being privately developed. Looking around for a status page led to the discovery of over-priced, featureless alternatives. As there were no currently maintained open source alternatives we took it upon ourselves to create the best open source status page system available.</p>

                    <h3>Alt Three</h3>

                    <p>Developed by <a href="https://alt-three.com">Alt Three Services Limited</a>, Cachet is fast becoming the go-to resource for status pages.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')
@endsection
