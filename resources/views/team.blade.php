@extends('layouts.master')

@section('pageTitle', 'Meet the Team')

@section('content')
<section class="grey condensed further level">
    <div class="container">
        <div class="row">
            <h3>Meet the team!</h3>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <p>We're <em>extremely proud</em> of our core team. We all have experience in running services and contributing to open source. Our standards are high and these have been carried through to Cachet.</p>
            <hr class="aligncenter mb">
        </div>
        <div class="row centered">
            <div class="col-xs-12 col-md-4">
                <img src="https://www.gravatar.com/avatar/13616b6551a3854378f9e6fea964e519?s=120" height="100%" class="img-circle" alt="">
                <h3>James Brooks<br><small>Founder</small></h3>
                <p>Sublime Text award collector for App of the Year 2014.</p>
                <ul class="list-inline">
                    <li><h1><a href="https://twitter.com/jbrooksuk" target="_blank"><i class="ion-social-twitter"></i></a></h1></li>
                    <li><h1><a href="https://github.com/jbrooksuk" target="_blank"><i class="ion-social-github"></i></a></h1></li>
                    <li><h1><a href="https://james-brooks.uk" target="_blank"><i class="ion-earth"></i></a></h1></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="https://www.gravatar.com/avatar/b19a7e3567c963fe3116e140ab12b8c0?s=120" height="100%" class="img-circle" alt="">
                <h3>Joe Cohen<br><small>Donator &amp; Core Developer</small></h3>
                <p>Founder &amp; CTO of dinkbit.com.</p>
                <ul class="list-inline">
                    <li><h1><a href="https://twitter.com/joecohens" target="_blank"><i class="ion-social-twitter"></i></a></h1></li>
                    <li><h1><a href="https://github.com/joecohens" target="_blank"><i class="ion-social-github"></i></a></h1></li>
                    <li><h1><a href="https://joecohens.com" target="_blank"><i class="ion-earth"></i></a></h1></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="https://www.gravatar.com/avatar/045eff83f076c334afb367f5f046eabf?s=120" height="100%" class="img-circle" alt="">
                <h3>Graham Campbell<br><small>Core Developer</small></h3>
                <p>Graham is a prolific PHP developer and the second largest contributor to the Laravel framework.</p>
                <ul class="list-inline">
                    <li><h1><a href="https://twitter.com/GrahamCampbell" target="_blank"><i class="ion-social-twitter"></i></a></h1></li>
                    <li><h1><a href="https://github.com/GrahamCampbell" target="_blank"><i class="ion-social-github"></i></a></h1></li>
                    <li><h1><a href="https://gjcampbell.co.uk" target="_blank"><i class="ion-earth"></i></a></h1></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')
@endsection
