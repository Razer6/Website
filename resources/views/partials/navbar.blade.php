<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img class='img-responsive' src='/img/logo.svg' width='175'>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="https://docs.cachethq.io/docs/frequently-asked-questions" target="_blank">FAQ</a></li>
                <li><a href="{{ route('site.press') }}">Press</a></li>
                @if(count($recentArticles) > 0)
                <li role="presentation" class='dropdown'>
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript: void(0);">Blog <span class="badge badge-info">{{ count($recentArticles) }}</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($recentArticles as $article)
                        <li><a href="{{ $article->get_link() }}">{{ $article->get_title() }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li><a href="https://blog.alt-three.com">Blog</a></li>
                @endif
                <li><a href="https://docs.cachethq.io">Documentation</a></li>
                <li><a href="https://status.cachethq.io">Status</a></li>
            </ul>
        </div>
    </div>
</div>
