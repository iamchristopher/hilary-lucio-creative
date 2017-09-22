@extends('layouts.main')
@section('content')
<div class="masthead primary large">
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
        <section class="aboutSection">
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
    </div>
@endsection
