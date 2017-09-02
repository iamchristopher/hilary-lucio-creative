<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hilary Lucio Creative</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!--
    TODO: Add schema definitions
    http://schema.org/location
    https://support.google.com/webmasters/answer/99170?hl=en
    -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'awk4lns',
                    scriptTimeout: 3000,
                    async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
</head>
<body>
    @component('.components/header')@endcomponent
    @yield('content')
    <div class="container">
        <section>
            @component('forms/contact')@endcomponent
        </section>
    </div>
    @component('.components/footer')@endcomponent
</body>
</html>
