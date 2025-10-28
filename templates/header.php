{# 
    This template is the Twig conversion of src/views/LandingPage/Header.vue.
    It provides the navigation bar for unauthenticated users.
#}
<header class="sticky top-0 z-40 w-full border-b border-border bg-background/95 backdrop-blur [backdrop-filter]:bg-background/60">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            
            <!-- Logo (Matching the 'T' style from the Vue component) -->
            <a href="/" class="flex items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-600">
                    <span class="text-sm font-bold text-white">T</span>
                </div>
                <span class="text-xl font-bold text-foreground">Tickly</span>
            </a>
            
            <!-- Auth Links -->
            <div class="flex items-center gap-4">
                
                <!-- Log In Button -->
                <a
                    href="/auth/login"
                    class="text-sm px-4 py-2 border border-border hover:border-indigo-600/50 rounded-lg bg-indigo-600/10 hover:bg-indigo-600/20 font-medium text-foreground transition-colors"
                >
                    Log in
                </a>
                
                <!-- Sign Up Button -->
                <a
                    href="/auth/signup"
                    class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700 transition-colors shadow-md"
                >
                    Sign up
                </a>
            </div>
        </div>
    </div>
</header>
