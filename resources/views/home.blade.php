@extends('layouts.master')

@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <h1>Beautiful &amp; simple service statuses</h1>
                <h2>The open source status page system, for everyone</h2>
                <a class="btn btn-conf btn-green" href="https://github.com/cachethq/cachet" target="_blank" id="github"><i class='ion-social-github'></i> View on GitHub</a>
                <a class="btn btn-conf btn-clear" href="https://demo.cachethq.io" target="_blank" id="demo">See the demo</a>
            </div>
        </div>
    </div>
</header>

<section class="grey">
    <div class="container">
        <div class="row centered">
            <div class="col-sm-12 col-md-2 love m">
                <img src="/img/used-by/blue-bay-travel.png">
            </div>
            <div class="col-sm-12 col-md-2 love m">
                <img src="/img/used-by/styleci.png">
            </div>
            <div class="col-sm-12 col-md-2 love m">
                <img src="/img/used-by/mozilla.png">
            </div>
            <div class="col-sm-12 col-md-2 love m">
                <img src="/img/used-by/tideways.png">
            </div>
            <div class="col-sm-12 col-md-2 love m">
                <img src="/img/used-by/jumplead.png">
            </div>
            <div class="col-sm-12 col-md-2 love m">
                <img src="/img/used-by/shoutcast.png">
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter', ['condensed' => true])

<section>
    <div class="container">
        <div class="row mtb">
            <div class="col-md-12 centered">
                <h2 title="Have a dekko at this">Have a dekko at this</h2>
                <hr class="aligncenter mb">
                <img class="img-responsive aligncenter" src="/img/main-interface.jpg">
            </div>
        </div>
    </div>
</section>

<section class="grey features">
    <div class="container">
        <div class="row">
            <h2 class="centered">What's it all about?</h2>
            <hr class="aligncenter mb">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="mb"><i class="ion-heart cachet-red feature-icons hidden-x"></i> Beautifully crafted</h3>
                        <p>Cachet has been beautifully built, not only in design, but code too. Using Bootstrap 3, Cachet is completely responsive, working beautifully on your desktop, tablet and phone.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb"><i class="ion-earth cachet-blue feature-icons hidden-x"></i> Translated</h3>
                        <p>Don't speak English? No problem, Cachet supports several languages right off the bat, with translations being improved all of the time.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb"><i class="ion-wand feature-icons icon h"></i> JSON API</h3>
                        <p>Sometimes it's just not possible to manually update your status page with incidents and component status changes, we totally get that. It's why Cachet is bundled with a simple to use, secure API system.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h3 class="mb"><i class="ion-settings cachet-pink feature-icons hidden-x"></i> Scheduled maintenance</h3>
                        <p>It can't be avoided, sometimes you just need to perform maintenance. With Cachet, you can schedule these events ahead of time.</p>
                        <p>Once the maintenance time has passed, the incident drops into the timeline for posterity.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb"><i class="ion-stats-bars cachet-teal feature-icons icon h"></i> Metrics</h3>
                        <p>Within the Dashboard you're able to setup metrics - a way to measure something, whether it's uptime, error rates or something completely random like "Cups of coffee drank today". Using the API you can send a point to the metric.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb"><i class="ion-key cachet-yellow feature-icons hidden-x"></i> Two-factor authentication</h3>
                        <p>Need some extra security on your account? No problem, you can lock your account with Two-factor authentication.</p>
                        <p>Compatible with the Google Authenticator app.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')
@endsection
