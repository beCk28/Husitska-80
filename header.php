<?php
/**
 * Theme header.
 *
 * @package Husitska_80
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20">
      <a href="#hero" class="flex items-center gap-2 group">
        <span class="w-8 h-8 border border-gold-500/60 rounded-full flex items-center justify-center group-hover:border-gold-400 transition-colors">
          <span class="w-2 h-2 bg-gold-500 rounded-full"></span>
        </span>
        <span class="text-sm md:text-base font-semibold tracking-widest uppercase gold-gradient-text">Husitská 80</span>
      </a>

      <div class="hidden lg:flex items-center gap-8">
        <a href="#o-nas" class="nav-link relative text-sm font-medium text-gray-300 hover:text-gold-400 transition-colors tracking-wide">O nás</a>
        <a href="#oprava-odevu" class="nav-link relative text-sm font-medium text-gray-300 hover:text-gold-400 transition-colors tracking-wide">Oprava oděvů</a>
        <a href="#kadernictvi" class="nav-link relative text-sm font-medium text-gray-300 hover:text-gold-400 transition-colors tracking-wide">Kadeřnictví</a>
        <a href="#manikura" class="nav-link relative text-sm font-medium text-gray-300 hover:text-gold-400 transition-colors tracking-wide">Manikúra a pedikúra</a>
        <a href="#kontakt" class="nav-link relative text-sm font-medium text-gray-300 hover:text-gold-400 transition-colors tracking-wide">Kontakt</a>
        <a href="#rezervace" class="btn-gold px-5 py-2 rounded-full text-sm font-semibold text-luxury-black tracking-wide">Rezervace</a>
      </div>

      <button id="menu-btn" type="button" class="lg:hidden p-2 text-gold-400 hover:text-gold-300 transition-colors" aria-label="Otevřít menu" aria-expanded="false">
        <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </nav>
</header>

<div id="mobile-overlay" class="fixed inset-0 bg-black/60 z-40 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"></div>
<aside id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-60 max-w-[70vw] bg-luxury-dark border-l border-luxury-border z-50 lg:hidden flex flex-col pt-16 px-4 pb-6">
  <nav class="flex flex-col gap-1">
    <a href="#o-nas" class="mobile-nav-link py-2 text-sm font-medium text-gray-300 hover:text-gold-400 border-b border-luxury-border/50 transition-colors">O nás</a>
    <a href="#oprava-odevu" class="mobile-nav-link py-2 text-sm font-medium text-gray-300 hover:text-gold-400 border-b border-luxury-border/50 transition-colors">Oprava oděvů</a>
    <a href="#kadernictvi" class="mobile-nav-link py-2 text-sm font-medium text-gray-300 hover:text-gold-400 border-b border-luxury-border/50 transition-colors">Kadeřnictví</a>
    <a href="#manikura" class="mobile-nav-link py-2 text-sm font-medium text-gray-300 hover:text-gold-400 border-b border-luxury-border/50 transition-colors">Manikúra a pedikúra</a>
    <a href="#kontakt" class="mobile-nav-link py-2 text-sm font-medium text-gray-300 hover:text-gold-400 border-b border-luxury-border/50 transition-colors">Kontakt</a>
    <a href="#rezervace" class="mobile-nav-link mt-3 btn-gold py-2.5 rounded-full text-center text-xs font-semibold text-luxury-black">Rezervace</a>
  </nav>
</aside>
