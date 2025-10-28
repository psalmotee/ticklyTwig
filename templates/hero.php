{# 
    This template is the Twig conversion of src/views/LandingPage/Hero.vue.
    It contains the main headline, description, CTAs, and feature summary.
#}
<section class="relative overflow-hidden bg-background py-24 sm:py-32">
    
    <!-- Decorative circles (matching Vue component) -->
    {# Note: The 'primary' and 'accent' colors reference Tailwind config, which is loaded in base.twig #}
    <div class="absolute -top-10 -left-10 h-80 w-80 rounded-full bg-indigo-600/30 blur-3xl" />
    <div class="absolute -bottom-32 -right-10 h-80 w-80 rounded-full bg-secondary/30 blur-3xl" />

    <!-- Wavy background (inline SVG) -->
    {# The Vue component used '#10b981' (Emerald green); changing fill to indigo-600 for consistency #}
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
                fill="#4f46e5" 
                fill-opacity="1"
                d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,106.7C672,128,768,224,864,256C960,288,1056,256,1152,234.7C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
        </svg>
    </div>

    <!-- Main content -->
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex flex-col gap-6 items-center">
            
            <!-- Tagline -->
            <div class="inline-flex items-center gap-2 rounded-full border border-border bg-secondary/50 px-4 py-2">
                <span class="h-2 w-2 rounded-full bg-indigo-600" />
                <span class="text-sm font-medium text-foreground">
                    Simple, smart ticket management
                </span>
            </div>

            <!-- Headline -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-foreground leading-tight max-w-3xl">
                Keep every task on track with
                <span class="text-indigo-600">Tickly</span>
            </h1>

            <!-- Description -->
            <p class="text-lg text-muted-foreground max-w-2xl">
                Tickly helps your team stay organized and connected. Create, assign,
                and resolve tickets without the clutter. Fast, easy, and actually
                fun to use.
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center">
                
                {# Get started button #}
                <a
                    href="/auth/signup"
                    class="inline-flex items-center justify-center gap-2 rounded-lg bg-indigo-600 px-6 py-3 font-medium text-white hover:bg-indigo-700 transition-colors shadow-lg hover:shadow-xl"
                >
                    Get started - it’s free
                    {# ArrowRight icon replacement using inline SVG #}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                        <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                    </svg>
                </a>
                
                {# See features button #}
                <a
                    href="#features"
                    class="inline-flex items-center justify-center rounded-lg border border-border px-6 py-3 font-medium text-foreground bg-secondary/50 hover:bg-secondary/70 hover:border-indigo-600 transition-colors"
                >
                    See how it works
                </a>
            </div>

            <!-- Feature boxes (Static rendering replacing v-for) -->
            <div class="grid sm:grid-cols-3 gap-6 mt-12 w-full max-w-4xl">
                
                {# Feature 1: Create & Track #}
                <div class="rounded-xl shadow-md bg-card p-6 border border-border hover:shadow-lg transition-shadow">
                    <h3 class="font-semibold text-foreground text-base mb-2">
                        Create & Track
                    </h3>
                    <p class="text-muted-foreground text-sm">Open, assign, and follow tickets with no fuss.</p>
                </div>
                
                {# Feature 2: Real-time Sync #}
                <div class="rounded-xl shadow-md bg-card p-6 border border-border hover:shadow-lg transition-shadow">
                    <h3 class="font-semibold text-foreground text-base mb-2">
                        Real-time Sync
                    </h3>
                    <p class="text-muted-foreground text-sm">Everyone stays updated as things move.</p>
                </div>
                
                {# Feature 3: Team-Friendly #}
                <div class="rounded-xl shadow-md bg-card p-6 border border-border hover:shadow-lg transition-shadow">
                    <h3 class="font-semibold text-foreground text-base mb-2">
                        Team-Friendly
                    </h3>
                    <p class="text-muted-foreground text-sm">Built for smooth collaboration and quick wins.</p>
                </div>
            </div>
        </div>
    </div>
</section>
