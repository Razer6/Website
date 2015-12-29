@extends('layouts.master')

@section('pageTitle', 'Frequently Asked Questions')

@section('content')
<section class="grey condensed further level">
    <div class="container">
        <div class="row">
            <h3>Frequently Asked Questions</h3>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Have a question that we haven't answered? Email us at support@cachethq.io and we'll get back to you as soon as we can.</p>

                <h3>Can I contribute to Cachet?</h3>
                <p>We'd love for you to contribute! We're always looking for fresh designs, new code and features suggested. And don't worry, if you're not a developer or designer there are plenty of ways to contribute to Cachet.</p>
                <p>Our servers aren't free and development time is limited. If you're able to donate, you can do so with Paypal, just get in touch! If you're looking for something different, you can contribute to <a href="https://docs.cachethq.io" target="_blank">documentation</a> and by spreading the word of Cachet.</p>

                <h3>Can you install Cachet for me?</h3>
                <p>Yeah, of course! We charge a one off fee which starts from $99 for Cachet installations. This is completely dependant on your requirements. For example, if you need load balancing setup then there is more overhead and an appropriate fee will be discussed before any work is carried out.</p>
                <p>If you would like to discuss installation, please email us at support@cachethq.io and we'll be in touch.</p>

                <h3>Do you have stickers?</h3>
                <p>Every good startup has stickers, right? We certainly do! <a href="https://www.stickermule.com/user/1070642474/stickers">Stickermule marketplace</a>.</p>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')
@endsection
