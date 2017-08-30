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
            <section>
                <h2 data-subtitle="From eh to zed">Services</h2>
                <ul class="buckets">
                    <li>
                        <h3 class="brand">Brand &amp; Identity Development</h3>
                        <p>Find your voice and expand your story into a logo and brand that makes a lasting impression.</p>
                        <small>Includes: Brand Stories and Strategy, Logos, Brand Guidelines, Marketing Tools</small>
                    </li>
                    <li>
                        <h3 class="publication">Print Publications &amp; Collateral</h3>
                        <p>Amplify your brand presence with high quality print pieces that connect with your audience.</p>
                        <small>Includes: Catalogues, Brochures, Brand Stationery, Annual Reports, Invitations</small>
                    </li>
                    <li>
                        <h3 class="digital">Digital Advertising &amp; Website Design</h3>
                        <p>Reach out to potential customers and users with captivating digital advertising and an informative web presence.</p>
                        <small>Includes: Display Advertisements, Website Design, E-Blasts & Newsletters, Presentations</small>
                    </li>
                    <li>
                        <h3 class="social">Social Media Support</h3>
                        <p>Stay connected through social media strategies, supported by eye-catching imagery and strategic content planning.</p>
                        <small>Includes: Account Setup, Brand & Content Support, Content Planning & Scheduling</small>
                    </li>
                    <li>
                        <h3 class="illustration">Illustration &amp; Photography</h3>
                        <p>Elevate your brand with captivating and unique imagery that can be used across various platforms.</p>
                        <small>Includes: Digital Illustration, Infographics, Headshots, Lifestyle & Product Photography</small>
                    </li>
                    <li>
                        <h3 class="copywriting">Copywriting for Print, Web &amp; Social</h3>
                        <p>Create a strong, consistent brand voice across all communication channels through impactful copywriting.</p>
                        <small>Includes: Publication & Website Content, Brand Stories, Social Media Content Calendars</small>
                    </li>
                </ul>
            </section>
            <section class="featuredSection">
                <div class="primary">
                    <div>
                        <h2 class="secondary" data-subtitle="Selected projects">Portfolio</h2><br>
                        <a class="btn secondary" href="#">See all projects</a>
                    </div>
                    <img src="/images/sketchbook.png" />
                </div>
                <div>
                    <h2 class="tertiary" data-subtitle="Thoughts &amp; musings">Articles</h2><br>
                    <a class="btn tertiary" href="#">See all posts</a>
                </div>
            </section>
            <section>
                <h2 data-subtitle="Witty subtitle">Contact me</h2>
                <form>
                    <fieldset>
                        <legend>How can I help?</legend>
                        <label>
                            Your name
                            <input name="name" placeholder="Name" required />
                        </label>
                        <label style="width: 60%">
                            Looking for
                            <select name="service" required>
                                <option selected>Brand Identity &amp; Development</option>
                            </select>
                        </label>
                        <label style="width: 40%">
                            Needed by
                            <input name="date" type="date" placeholder="Date" required />
                        </label>
                        <label>
                            Your email
                            <input name="email" placeholder="Email" />
                        </label>
                        <label>
                            Message
                            <textarea name="notes" placeholder="Leave me some details"></textarea>
                        </label>
                    </fieldset>
                    <button class="btn primary" type="submit">Get started</button>
                </form>
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
