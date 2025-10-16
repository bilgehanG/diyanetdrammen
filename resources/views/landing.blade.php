@extends('layouts.app')

@section('title', 'LuminaSphere · Immersive Digital Experiences')

@section('content')
    <section class="hero" id="about">
        <div class="container hero-content">
            <div class="hero-text">
                <div class="eyebrow">Laravel-powered creativity</div>
                <h1>Illuminate every pixel with immersive digital experiences.</h1>
                <p>
                    LuminaSphere crafts tailor-made interactive journeys that blend artistry with cutting-edge engineering.
                    We partner with bold teams to launch experiences that feel alive, human, and unforgettable.
                </p>
                <div class="hero-actions">
                    <a class="cta-button filled" href="#contact">Book a Discovery Call</a>
                    <a class="cta-link" href="#showcase">Explore our showcase</a>
                </div>
            </div>
            <div class="hero-card">
                <div class="card-glow"></div>
                <div class="card-body">
                    <h3>Next event spotlight</h3>
                    <p class="card-title">Aurora Expo 2025</p>
                    <p class="card copy">
                        Real-time projection artistry, dynamic soundscapes, and responsive lighting installed across 3 continents.
                    </p>
                    <ul class="card-stats">
                        <li>
                            <span class="stat-value">1.4M</span>
                            <span class="stat-label">Attendees engaged</span>
                        </li>
                        <li>
                            <span class="stat-value">92%</span>
                            <span class="stat-label">Satisfaction score</span>
                        </li>
                        <li>
                            <span class="stat-value">36</span>
                            <span class="stat-label">Creative partners</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="floating-orb orb-one"></div>
        <div class="floating-orb orb-two"></div>
    </section>

    <section class="features" id="features">
        <div class="container section-heading">
            <div>
                <div class="eyebrow">What we deliver</div>
                <h2>Meticulously engineered experiences designed to move audiences.</h2>
            </div>
            <p>
                Every engagement is powered by Laravel at the core, ensuring resilient infrastructure, graceful content management,
                and elegant user journeys across any device.
            </p>
        </div>
        <div class="container feature-grid">
            <article class="feature-card">
                <div class="feature-icon">✨</div>
                <h3>Immersive Visuals</h3>
                <p>
                    From projection mapping to dynamic lighting, our visual pipelines are orchestrated through robust Laravel backends for flawless execution.
                </p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">🎧</div>
                <h3>Sonic Narratives</h3>
                <p>
                    Multi-layered audio landscapes react in real time to audience presence, with low-latency streaming pipelines controlled via elegant dashboards.
                </p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">🧭</div>
                <h3>Guided Journeys</h3>
                <p>
                    Personalized itineraries adapt to visitor intent using data-driven insights, keeping every guest captivated at each touchpoint.
                </p>
            </article>
        </div>
    </section>

    <section class="showcase" id="showcase">
        <div class="container showcase-content">
            <div class="showcase-gallery">
                <div class="gallery-item gallery-item--primary">
                    <span class="badge">Immersive Dome</span>
                    <h3>Celestial Reverie</h3>
                    <p>360° projection dome choreographed with responsive motion tracking.</p>
                </div>
                <div class="gallery-item gallery-item--secondary">
                    <span class="badge">Interactive Runway</span>
                    <h3>Spectrum Vogue</h3>
                    <p>Reactive LED fashion show synced with biometric wearables.</p>
                </div>
                <div class="gallery-item gallery-item--tertiary">
                    <span class="badge">Digital Forest</span>
                    <h3>Sylvan Bloom</h3>
                    <p>Living installation powered by generative visuals.</p>
                </div>
            </div>
            <div class="showcase-panel">
                <div class="eyebrow">Behind the scenes</div>
                <h2>Laravel orchestrates the symphony.</h2>
                <p>
                    With expressive routing, Blade templating, and artisan-driven workflows, our creative technologists prototype faster,
                    iterate safely, and deliver awe-inspiring experiences on time.
                </p>
                <ul class="showcase-list">
                    <li>Modular content management tailored to each production</li>
                    <li>Real-time dashboards for live show control</li>
                    <li>Secure APIs for partner integrations and data insights</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container section-heading">
            <div>
                <div class="eyebrow">Client reflections</div>
                <h2>Trusted by pioneers in experiential storytelling.</h2>
            </div>
        </div>
        <div class="container testimonials-grid">
            <figure class="testimonial-card">
                <blockquote>
                    “LuminaSphere’s Laravel expertise meant every creative change we imagined was deployed without downtime. The experience felt magical.”
                </blockquote>
                <figcaption>
                    <span class="name">Amelia Kline</span>
                    <span class="role">Executive Producer, Aurora Expo</span>
                </figcaption>
            </figure>
            <figure class="testimonial-card">
                <blockquote>
                    “Their team translates abstract ideas into intuitive dashboards. We commanded a global launch from a single interface.”
                </blockquote>
                <figcaption>
                    <span class="name">Darius Holt</span>
                    <span class="role">Creative Director, Nova Labs</span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container contact-card">
            <div>
                <div class="eyebrow">Let’s collaborate</div>
                <h2>Schedule a consultation.</h2>
                <p>
                    Share your vision and we will architect an immersive journey tailored to your audience. Our team responds within one business day.
                </p>
            </div>
            <form class="contact-form" action="#" method="post">
                @csrf
                <label for="name">Name</label>
                <input id="name" name="name" type="text" placeholder="Alex Morgan" required>

                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="alex@visionary.co" required>

                <label for="message">Project vision</label>
                <textarea id="message" name="message" rows="4" placeholder="Tell us about your dream experience..." required></textarea>

                <button type="submit" class="cta-button filled full-width">Submit Inquiry</button>
            </form>
        </div>
    </section>
@endsection
