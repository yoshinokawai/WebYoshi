<?php
/**
 * Template Name: Login
 * Template Post Type: page
 *
 * Source: vtuber_wiki_login_variant_2/code.html
 * Full-page layout — bypasses standard header/footer wrappers.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary":           "#994ce6",
                        "primary-dark":      "#6b21a8",
                        "primary-light":     "#d8b4fe",
                        "background-light":  "#f7f6f8",
                        "background-dark":   "#191121",
                        "surface-light":     "#ffffff",
                        "surface-dark":      "#2a1f3d",
                    },
                    fontFamily: { "display": ["Be Vietnam Pro", "sans-serif"] },
                    borderRadius: { "DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px" },
                },
            },
        }
    </script>
    <?php wp_head(); ?>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex overflow-hidden">
<?php wp_body_open(); ?>

<!-- Left Side: Visual/Illustration -->
<div class="relative hidden lg:flex w-1/2 flex-col justify-end p-12 overflow-hidden bg-primary/10">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 h-full w-full bg-cover bg-center"
         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA9G3vFTFMQhg7boEgjIPndNNCAybDznl5cvjmRZNwiTxv1soDnii6b-EDcIAMpGbEFS1SU9crafgfJHRDmB98XOTIHNRlqhjMIAwrU7WUdI0JXW7AAAzLMqAITiVzwANQxGm3lhLmmJ-pKG_rkQ8WjuH36JFhBqOADNtNv3jrjUn6ruuKmWSEXNo7oAbFjSrdbGAnG2WYYeCkqknHWKELdx_0oQy_Pc7pHcUYS3BHgwgELCgxOCqo5BcVQ9PHYLbQMMAG7Ltmjpqo');">
    </div>
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 z-10 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
    <!-- Content -->
    <div class="relative z-20 max-w-lg">
        <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-white/20 backdrop-blur-md border border-white/30 text-white shadow-lg">
            <span class="material-symbols-outlined text-2xl">auto_stories</span>
        </div>
        <h1 class="text-4xl font-black text-white leading-tight tracking-tight mb-4">
            Dive back into the <br/>Virtual World
        </h1>
        <p class="text-lg text-white/90 font-medium leading-relaxed">
            Your number one source for everything VTuber. Edit articles, discover new talents, and discuss with the community.
        </p>
        <div class="mt-8 flex gap-2">
            <span class="h-1.5 w-8 rounded-full bg-white"></span>
            <span class="h-1.5 w-2 rounded-full bg-white/40"></span>
            <span class="h-1.5 w-2 rounded-full bg-white/40"></span>
        </div>
    </div>
</div>

<!-- Right Side: Login Form -->
<div class="flex flex-1 flex-col justify-center items-center px-6 py-12 lg:px-24 w-full bg-background-light dark:bg-background-dark relative">
    
    <div class="w-full max-w-[480px] flex flex-col">
        <!-- Back link -->
        <div class="mb-8 self-start">
            <a class="group flex items-center gap-2 text-slate-500 hover:text-primary transition-colors text-sm font-medium"
               href="<?php echo esc_url( home_url('/') ); ?>">
                <span class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
                Back to Wiki
            </a>
        </div>

        <!-- Premium Login Card -->
        <div class="w-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-3xl p-8 md:p-12 shadow-2xl shadow-primary/5">
            <!-- Header -->
            <div class="mb-10 text-center sm:text-left">
                <div class="mb-6 h-14 w-14 flex items-center justify-center rounded-2xl bg-primary text-white shadow-primary/30 shadow-lg mx-auto sm:mx-0">
                    <span class="material-symbols-outlined text-3xl">lock</span>
                </div>
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-2 tracking-tight">Login to VTuber Wiki</h2>
                <p class="text-slate-500 dark:text-slate-400">Welcome back! Please enter your details.</p>
            </div>

            <!-- WP Login Form -->
            <form class="flex flex-col gap-6" method="post" action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>">
                <input type="hidden" name="redirect_to" value="<?php echo esc_attr( home_url('/') ); ?>">
                
                <!-- Username -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-200" for="user_login">Username or Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 group-focus-within:text-primary transition-colors">person</span>
                        </div>
                        <input class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 pl-11 pr-4 py-3.5 text-slate-900 dark:text-white placeholder-slate-400 focus:border-primary focus:ring-2 focus:ring-primary/20 shadow-sm transition-all text-base outline-none"
                               id="user_login" name="log" placeholder="HololiveFan123" type="text" autocomplete="username">
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-200" for="user_pass">Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 group-focus-within:text-primary transition-colors">key</span>
                        </div>
                        <input class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 pl-11 pr-12 py-3.5 text-slate-900 dark:text-white placeholder-slate-400 focus:border-primary focus:ring-2 focus:ring-primary/20 shadow-sm transition-all text-base outline-none"
                               id="user_pass" name="pwd" placeholder="••••••••" type="password" autocomplete="current-password">
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center cursor-pointer text-slate-400 hover:text-slate-600 transition-colors"
                             onclick="var i=document.getElementById('user_pass');i.type=i.type==='password'?'text':'password';this.querySelector('span').textContent=i.type==='password'?'visibility_off':'visibility'">
                            <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                        </div>
                    </div>
                </div>

                <!-- Options Row -->
                <div class="flex flex-wrap items-center justify-between gap-x-4 gap-y-3 mt-1">
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input class="h-4 w-4 rounded border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-primary focus:ring-primary/30 transition-all cursor-pointer" type="checkbox" name="rememberme" value="forever">
                        <span class="text-sm font-medium text-slate-600 dark:text-slate-400 group-hover:text-slate-800 dark:group-hover:text-slate-200 transition-colors">Remember me</span>
                    </label>
                    <a class="text-sm font-bold text-primary hover:text-primary-dark transition-colors"
                       href="<?php echo esc_url( wp_lostpassword_url() ); ?>">Forgot password?</a>
                </div>

                <!-- Submit -->
                <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                <button class="mt-4 w-full flex items-center justify-center gap-2 bg-primary hover:bg-primary-dark text-white font-bold py-4 px-4 rounded-xl shadow-lg shadow-primary/25 hover:shadow-primary/40 active:scale-[0.98] transition-all duration-200" type="submit" name="wp-submit">
                    <span>Log In</span>
                    <span class="material-symbols-outlined text-xl">login</span>
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-10">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-100 dark:border-slate-800"></div>
                </div>
                <div class="relative flex justify-center text-xs uppercase tracking-widest font-bold">
                    <span class="bg-white dark:bg-surface-dark px-4 text-slate-400">Or continue with</span>
                </div>
            </div>

            <!-- Social Buttons -->
            <div class="grid grid-cols-2 gap-4">
                <button class="flex items-center justify-center gap-2.5 rounded-xl bg-slate-50 dark:bg-surface-dark/50 border border-slate-100 dark:border-slate-800 py-3 px-4 text-slate-700 dark:text-slate-200 font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
                    <img alt="Google" class="h-5 w-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqo64h8cIiojcKChsXeY_2T6FOfgItzi0w3MTXAhyRmNimymdCSsYaEURuBcbogcJEGINLDG-uK1A7MpJOjY1K9yj_kTnx7Dh4ajpyYxsoGvL4YYEA7Mb6BKZ6G9k0MKpBG_Hs43VjtsZTJHvRpnfUjA5nVujRBK0I0QLs5FqVucRxxOaQxRTwIm56BHaJrA1EXAugOeVgN8Ki3-gcrqJj866JRob_5EWz8UjLMJbusnZHLIvDA5uB1IEuI_esVh0jBFgN5PHhoo0">
                    <span class="text-sm">Google</span>
                </button>
                <button class="flex items-center justify-center gap-2.5 rounded-xl bg-slate-50 dark:bg-surface-dark/50 border border-slate-100 dark:border-slate-800 py-3 px-4 text-slate-700 dark:text-slate-200 font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
                    <img alt="Discord" class="h-5 w-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgfUtIm1sn3RLNuQpbpzfBp05R4M2kaqm-vnqoL4EixN-8g_42HuL9J3sgNIwEhagOHIedRIOHpZCMuHE3jLOyQfd2uOAIklvjg1qB6qWaJM4HhTz0mNFlk3P6IfyEDRyFC3vpFVC-vdCfyMHSYZVfpWEU6BpuqMjXr-SZ5MAoJQZguNM0FX-MOcWAGuULU3wffyiJjhT1Le-3ktVjgpwQ92vFqQp7_TomrDqngpOR0-5D_bObUHslVNhg4A6ahONGOSlUzw7X0L0">
                    <span class="text-sm">Discord</span>
                </button>
            </div>
        </div>

        <!-- Sign-up Footer -->
        <div class="mt-8 text-center">
            <p class="text-slate-600 dark:text-slate-400 tracking-tight">
                Don't have an account?
                <a class="font-bold text-primary hover:text-primary-dark transition-colors ml-1 inline-flex items-center gap-1.5"
                   href="<?php echo vtwiki_page_url('register'); ?>">
                    Create an account
                    <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
                </a>
            </p>
        </div>
    </div>

    <!-- Footer copyright -->
    <div class="absolute bottom-6 w-full text-center text-xs text-slate-400 dark:text-slate-600">
        © <?php echo date('Y'); ?> VTuber Wiki. All rights reserved.
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
