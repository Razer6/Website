<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

    <body>
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58442674-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script>
        (function () {
            $('.dropdown-toggle').dropdown();
            document.getElementById('github', function (event) {
                _gs('event', 'GitHub');
            });
            document.getElementById('demo', function (event) {
                _gs('event', 'Demo');
            });
        }());
        </script>
        <script>
            var _intro_bar = window._intro_bar || {};(function() {var i,e;i=document.createElement("script"), i.type='text/javascript';i.async=1, i.src="//cdn.introbar.com/js/v1.js", e=document.getElementsByTagName("script")[0], e.parentNode.insertBefore(i,e);})();
            _intro_bar.account_id = '558919a53aa1a';
        </script>
    </body>
</html>
