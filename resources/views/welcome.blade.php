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
        <header class="mainHeader container">
            <a class="mainLogo" href="/" title="Hilary Lucio Creative">
                <img alt="Hilary Lucio Creative logo" src="/images/logo_main.png" />
            </a>
            <nav class="mainNavigation">
                <ul>
                    <li><a href="#" title="See my work">Portfolio</a></li>
                    <li><a href="#" title="View my resume">CV</a></li>
                    <li><a href="#" title="Behold my wares">Services</a></li>
                    <li><a href="#" title="Read aricles">Articles</a></li>
                    <li><a href="#" title="Contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="masthead">
            <div class="container">
                <h1>
                    <span>Holistic creative solutions</span>
                    <br />
                    <span>for your business</span>
                </h1>
                <div class="services">
                    <ul>
                        <li>Branding</li>
                        <li>Print</li>
                        <li>Social</li>
                        <li>Web &amp; Digital</li>
                        <li>Illustration</li>
                        <li>Photography</li>
                        <li>Copywriting</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <section>
                <h2 data-subtitle="Who are you?">About me</h2>
                <p>four loko pop-up farm-to-table Cosby sweater lomo squid quinoa deep v beard pour-over cray mixtape dreamcatcher Helvetica art party craft beer bespoke street art umami +1 skateboard typewriter asymmetrical cardigan Carles next level Truffaut try-hard ethical PBR flexitarian cliche Pinterest locavore meh scenester heirloom crucifix fanny pack you probably haven't heard of them</p>
                <a class="btn primary" href="#">Wanna see my CV?</a>
                <hr />
            </section>
        </div>
        <footer class="mainFooter">
            <div class="container">
                <div>
                    <h6>Explore</h6>
                    <nav>
                        <ul>
                            <li><a href="#">About Me</a></li>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">Request a Quote</a></li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h6>Contact</h6>
                    London, Ontario, Canada<br />
                    <a href="tel:2262680487">226.268.0487</a><br />
                    <a href="mailto:hello@hluciocreative.ca">hello@hluciocreative.ca</a>
                </div>
                <div>
                    <h6>Availability</h6>
                    <p>H. Lucio Creative is currently accepting new freelance projects. Availability may vary on a monthly basis depending on capacity. To request a quote or general questions regarding any design needs you require (including, but not limited to the services outlined on this website), please submit a request in the form&nbsp;above.</p>
                </div>
                <div>
                    <img alt="/images/logo_footer.png" src="#" />
                </div>
            </div>
        </footer>
    </body>
</html>
