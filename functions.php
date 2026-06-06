<?php
/**
 * Husitská 80 theme functions.
 *
 * @package Husitska_80
 */

if (!defined('ABSPATH')) {
    exit;
}

function husitska_80_setup() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'husitska_80_setup');

function husitska_80_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'husitska-80-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'husitska-80-style',
        get_stylesheet_uri(),
        array('husitska-80-fonts'),
        $theme_version
    );

    wp_enqueue_script(
        'husitska-80-tailwind',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    $tailwind_config = <<<'JS'
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'system-ui', 'sans-serif'],
      },
      colors: {
        gold: {
          50: '#fdf8e8',
          100: '#f9edc4',
          200: '#f2d98a',
          300: '#e8c04f',
          400: '#d4a82a',
          500: '#c9a227',
          600: '#a8841f',
          700: '#86641c',
          800: '#6e511e',
          900: '#5c431c',
        },
        luxury: {
          black: '#0a0a0a',
          dark: '#111111',
          card: '#1a1a1a',
          border: '#2a2a2a',
        },
      },
      animation: {
        'fade-in': 'fadeIn 0.8s ease-out forwards',
        'slide-up': 'slideUp 0.8s ease-out forwards',
        'shimmer': 'shimmer 3s ease-in-out infinite',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { opacity: '0', transform: 'translateY(24px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        shimmer: {
          '0%, 100%': { backgroundPosition: '0% 50%' },
          '50%': { backgroundPosition: '100% 50%' },
        },
      },
    },
  },
};
JS;

    wp_add_inline_script('husitska-80-tailwind', $tailwind_config, 'after');

    wp_enqueue_script(
        'husitska-80-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'husitska_80_enqueue_assets');

function husitska_80_body_class($classes) {
    $classes[] = 'font-sans';
    $classes[] = 'bg-luxury-black';
    $classes[] = 'text-gray-200';
    $classes[] = 'antialiased';
    $classes[] = 'overflow-x-hidden';
    return $classes;
}
add_filter('body_class', 'husitska_80_body_class');
