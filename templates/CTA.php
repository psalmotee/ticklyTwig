<section class="bg-background py-20 sm:py-32 border-t border-border">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        
        <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-6">
            Make work flow with Tickly
        </h2>

        <p class="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
            Start tracking, collaborating, and closing tickets the easy way.
            No setup headaches — just sign up and go.
        </p>

        {# Call-to-Action Button (Replacing RouterLink) #}
        <a
            href="/auth/signup"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-indigo-600 px-8 py-3 font-medium text-white hover:bg-indigo-700 transition-colors shadow-xl"
        >
            Get started — it’s free
            {# ArrowRight icon replacement using inline SVG #}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>
