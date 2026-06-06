<?php
/**
 * Homepage content.
 *
 * @package Husitska_80
 */
?>
<main>
    <!-- Hero -->
    <section id="hero" class="relative min-h-[65vh] md:min-h-[60vh] flex items-center justify-center hero-glow pt-20 pb-0 mb-0">
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gold-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gold-600/5 rounded-full blur-3xl"></div>
      </div>

      <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-in">
        <p class="text-gold-500/80 text-xs sm:text-sm font-medium tracking-[0.3em] uppercase mb-4">Praha 3 · Žižkov</p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-light leading-tight mb-4">
          <span class="gold-gradient-text font-semibold">Služby</span>
          <span class="block text-white mt-1">pod jednou střechou</span>
        </h1>
        <div class="gold-line w-24 mx-auto my-5"></div>
        <p class="text-gray-400 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-light leading-relaxed mb-6">
          Oprava oděvů, Kadeřnictví Camelia a Nehtové studio Anna — vše na jedné adrese v srdci Žižkova.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
          <a href="#rezervace" class="btn-gold w-full sm:w-auto px-7 py-3 rounded-full text-sm font-semibold text-luxury-black tracking-wide">Rezervovat termín</a>
          <a href="#o-nas" class="w-full sm:w-auto px-7 py-3 rounded-full text-sm font-medium text-gold-400 border border-gold-500/40 hover:border-gold-400 hover:bg-gold-500/5 transition-all tracking-wide">Zjistit více</a>
        </div>
        <p class="mt-6 text-gray-500 text-sm tracking-wide">
          <span class="text-gold-500/70">Husitská 65</span> · 130 00 Praha 3-Žižkov
        </p>
      </div>
    </section>

    <!-- O nás -->
    <section id="o-nas" class="py-5 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal text-center mb-10 visible">
          <p class="text-gold-500 text-xs font-medium tracking-[0.25em] uppercase mb-2">O nás</p>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-white mb-3">
            Vítejte v <span class="gold-gradient-text font-medium">Husitské 80</span>
          </h2>
          <div class="gold-line w-20 mx-auto"></div>
        </div>

        <div class="reveal grid md:grid-cols-2 gap-6 lg:gap-8 items-center visible">
          <div class="space-y-4">
            <p class="text-gray-400 text-sm sm:text-base leading-relaxed font-light">
              Naše multioborová provozovna nabízí komplexní služby v oblasti péče o oděvy, vlasy i nehty — vše pod jednou střechou v srdci Žižkova.
            </p>
            <p class="text-gray-400 text-sm sm:text-base leading-relaxed font-light">
              Ať potřebujete opravit oblíbené kalhoty, nový střih v kadeřnictví Camelia, nebo profesionální manikúru ve studiu Anna — najdete nás na adrese <strong class="text-gold-400/90 font-medium">Husitská 65, 130 00 Praha 3-Žižkov</strong>.
            </p>
            <div class="flex flex-wrap gap-2 pt-1">
              <span class="px-3 py-1 rounded-full border border-gold-500/30 text-gold-400 text-xs font-medium tracking-wide">Oprava oděvů</span>
              <span class="px-3 py-1 rounded-full border border-gold-500/30 text-gold-400 text-xs font-medium tracking-wide">Kadeřnictví Camelia</span>
              <span class="px-3 py-1 rounded-full border border-gold-500/30 text-gold-400 text-xs font-medium tracking-wide">Nehtové studio Anna</span>
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-1 gap-3">
            <div class="card-glow bg-luxury-card border border-luxury-border rounded-xl p-4 sm:p-5 transition-all duration-300">
              <div class="w-8 h-8 rounded-full bg-gold-500/10 flex items-center justify-center mb-3">
                <svg class="w-4.5 h-4.5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-5.758-5.758"></path></svg>
              </div>
              <h3 class="text-white text-sm sm:text-base font-medium mb-0.5">Oprava oděvů</h3>
              <p class="text-gray-500 text-xs sm:text-sm">Precizní šití a opravy na míru</p>
            </div>
            <div class="card-glow bg-luxury-card border border-luxury-border rounded-xl p-4 sm:p-5 transition-all duration-300">
              <div class="w-8 h-8 rounded-full bg-gold-500/10 flex items-center justify-center mb-3">
                <svg class="w-4.5 h-4.5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
              </div>
              <h3 class="text-white text-sm sm:text-base font-medium mb-0.5">Kadeřnictví Camelia</h3>
              <p class="text-gray-500 text-xs sm:text-sm">Styling a péče o vlasy</p>
            </div>
            <div class="card-glow bg-luxury-card border border-luxury-border rounded-xl p-4 sm:p-5 transition-all duration-300">
              <div class="w-8 h-8 rounded-full bg-gold-500/10 flex items-center justify-center mb-3">
                <svg class="w-4.5 h-4.5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
              </div>
              <h3 class="text-white text-sm sm:text-base font-medium mb-0.5">Nehtové studio Anna</h3>
              <p class="text-gray-500 text-xs sm:text-sm">Manikúra, pedikúra a modeláž</p>
            </div>
          </div>
        </div>
      </div>

      <a href="#oprava-odevu" class="absolute bottom-[-31px] left-1/2 -translate-x-1/2 text-gold-500/50 hover:text-gold-400 transition-colors animate-bounce" aria-label="Posunout dolů">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </a>
    </section>

    <!-- Oprava oděvů -->
    <section id="oprava-odevu" class="py-12 md:py-16 bg-luxury-dark/50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal mb-8 md:mb-12">
          <p class="text-gold-500 text-xs font-medium tracking-[0.25em] uppercase mb-3">Služba</p>
          <h2 class="text-3xl sm:text-4xl font-light text-white mb-2">Oprava <span class="gold-gradient-text font-medium">oděvů</span></h2>
          <div class="gold-line w-24 mt-4"></div>
        </div>

        <div class="reveal grid lg:grid-cols-3 gap-4 md:gap-8 mb-8 md:mb-12">
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6">
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-2 md:mb-3">Adresa</h3>
            <p class="text-gray-300 text-sm leading-relaxed">Husitská 65<br>130 00 Praha 3-Žižkov</p>
          </div>
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6">
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-2 md:mb-3">Kontakt</h3>
            <p class="text-gray-300 text-sm leading-relaxed">
              IČO: 87178982<br>
              <a href="tel:+420776604625" class="text-gold-400 hover:text-gold-300 transition-colors">776 604 625</a>
            </p>
          </div>
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6">
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-2 md:mb-3">Otevírací doba</h3>
            <p class="text-gray-300 text-sm leading-relaxed">
              Po–Pá: 13:30 – 18:00<br>
              So–Ne: na objednání
            </p>
          </div>
        </div>

        <div class="reveal">
          <h3 class="text-xl font-medium text-white mb-4 md:mb-6">Ceník</h3>
          <div class="overflow-x-auto rounded-2xl border border-luxury-border">
            <table class="table-luxury w-full text-xs sm:text-sm">
              <thead>
                <tr class="border-b border-luxury-border">
                  <th class="text-left px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold tracking-wide">Služba</th>
                  <th class="text-right px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold tracking-wide whitespace-nowrap">Cena</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-luxury-border">
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Zkrácení kalhot</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">100 – 150 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Výměna zipu</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">150 – 250 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Zkrácení trika / bundy</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">180 – 350 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Zkrácení rukávu</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">180 – 350 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Zúžení / rozšíření nohavic</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">150 – 350 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-400 italic">Ostatní opravy (šaty, sukně, kabáty, kůže, batohy)</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gray-400 italic whitespace-nowrap">na domluvě</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Kadeřnictví -->
    <section id="kadernictvi" class="py-12 md:py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal mb-8 md:mb-12">
          <p class="text-gold-500 text-xs font-medium tracking-[0.25em] uppercase mb-3">Služba</p>
          <h2 class="text-3xl sm:text-4xl font-light text-white mb-2">Kadeřnictví <span class="gold-gradient-text font-medium">Camelia</span></h2>
          <div class="gold-line w-24 mt-4"></div>
        </div>

        <div class="reveal grid lg:grid-cols-2 gap-4 md:gap-8 mb-8 md:mb-12">
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6">
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-2 md:mb-3">Kontakt</h3>
            <p class="text-gray-300 text-sm">
              Tel: <a href="tel:+420776604625" class="text-gold-400 hover:text-gold-300 transition-colors">776 604 625</a>
            </p>
          </div>
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6 flex items-center">
            <p class="text-gray-400 text-sm leading-relaxed">Profesionální péče o vlasy — mytí, speciální masky a relaxační masáže hlavy a obličeje.</p>
          </div>
        </div>

        <div class="reveal space-y-6 md:space-y-8">
          <div>
            <h3 class="text-lg md:text-xl font-medium text-white mb-3 md:mb-4">Mytí (šampon + kondicionér)</h3>
            <div class="overflow-x-auto rounded-2xl border border-luxury-border">
              <table class="table-luxury w-full text-xs sm:text-sm">
                <thead>
                  <tr class="border-b border-luxury-border">
                    <th class="text-left px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold">Délka vlasů</th>
                    <th class="text-right px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold whitespace-nowrap">Cena</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-luxury-border">
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Krátké</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">100 Kč</td></tr>
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Středně dlouhé</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">120 Kč</td></tr>
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Dlouhé</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">150 Kč</td></tr>
                </tbody>
              </table>
            </div>
          </div>

          <div>
            <h3 class="text-lg md:text-xl font-medium text-white mb-3 md:mb-4">Mytí speciál (šampon + maska)</h3>
            <div class="overflow-x-auto rounded-2xl border border-luxury-border">
              <table class="table-luxury w-full text-xs sm:text-sm">
                <thead>
                  <tr class="border-b border-luxury-border">
                    <th class="text-left px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold">Délka vlasů</th>
                    <th class="text-right px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold whitespace-nowrap">Cena</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-luxury-border">
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Krátké</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">120 Kč</td></tr>
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Středně dlouhé</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">150 Kč</td></tr>
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Dlouhé</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">200 Kč</td></tr>
                </tbody>
              </table>
            </div>
          </div>

          <div>
            <h3 class="text-lg md:text-xl font-medium text-white mb-3 md:mb-4">Masáže (hlava/obličej nebo hlava/krk)</h3>
            <div class="overflow-x-auto rounded-2xl border border-luxury-border">
              <table class="table-luxury w-full text-xs sm:text-sm">
                <thead>
                  <tr class="border-b border-luxury-border">
                    <th class="text-left px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold">Délka</th>
                    <th class="text-right px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold whitespace-nowrap">Cena</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-luxury-border">
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">15 minut</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">200 Kč</td></tr>
                  <tr><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">30 minut</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium">350 Kč</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Manikúra a pedikúra -->
    <section id="manikura" class="py-12 md:py-16 bg-luxury-dark/50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal mb-8 md:mb-12">
          <p class="text-gold-500 text-xs font-medium tracking-[0.25em] uppercase mb-3">Služba</p>
          <h2 class="text-3xl sm:text-4xl font-light text-white mb-2">Nehtové studio <span class="gold-gradient-text font-medium">Anna</span></h2>
          <p class="text-gray-500 mt-2 text-sm">Manikúra a pedikúra</p>
          <div class="gold-line w-24 mt-4"></div>
        </div>

        <div class="reveal grid lg:grid-cols-3 gap-4 md:gap-8 mb-8 md:mb-12">
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6">
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-2 md:mb-3">Kontakt</h3>
            <p class="text-gray-300 text-sm leading-relaxed">
              IČO: 289 302 40<br>
              <a href="tel:+420774386868" class="text-gold-400 hover:text-gold-300 transition-colors">774 386 868</a>
            </p>
          </div>
          <div class="bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6 lg:col-span-2">
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-2 md:mb-3">Otevírací doba</h3>
            <p class="text-gray-300 text-sm leading-relaxed flex flex-col gap-1">
              <span class="block">Po–Pá: 9 – 20</span>
              <span class="block">So: 9:30 – 19:30</span>
              <span class="block">Ne: pouze na objednání</span>
            </p>
          </div>
        </div>

        <div class="reveal">
          <h3 class="text-xl font-medium text-white mb-4 md:mb-6">Ceník</h3>
          <div class="overflow-x-auto rounded-2xl border border-luxury-border">
            <table class="table-luxury w-full text-xs sm:text-sm">
              <thead>
                <tr class="border-b border-luxury-border">
                  <th class="text-left px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold tracking-wide">Služba</th>
                  <th class="text-right px-3 sm:px-6 py-3 sm:py-4 text-gold-400 font-semibold tracking-wide whitespace-nowrap">Cena</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-luxury-border">
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Manikúra</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">250 – 550 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Pedikúra</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">450 – 650 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-300">Modelace nehtů (acryl / gel)</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gold-300 font-medium whitespace-nowrap">450 – 600 Kč</td>
                </tr>
                <tr>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-400 italic">Doplňky (zdobení, odstranění, úpravy)</td>
                  <td class="px-3 sm:px-6 py-3 sm:py-4 text-right text-gray-400 italic whitespace-nowrap">10 – 150 Kč</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Rezervace -->
    <section id="rezervace" class="py-12 md:py-16">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal text-center mb-8 md:mb-12">
          <p class="text-gold-500 text-xs font-medium tracking-[0.25em] uppercase mb-3">Rezervace</p>
          <h2 class="text-3xl sm:text-4xl font-light text-white mb-3 md:mb-4">Objednejte si <span class="gold-gradient-text font-medium">termín</span></h2>
          <div class="gold-line w-24 mx-auto"></div>
          <p class="text-gray-500 text-sm mt-4 md:mt-6 max-w-md mx-auto">Vyplňte formulář a my vás budeme kontaktovat pro potvrzení rezervace.</p>
        </div>

        <form id="reservation-form" class="reveal bg-luxury-card border border-luxury-border rounded-2xl p-6 sm:p-8 space-y-5" novalidate>
          <div>
            <label for="name" class="block text-xs font-medium text-gold-400 tracking-widest uppercase mb-2">Jméno</label>
            <input type="text" id="name" name="name" required autocomplete="name"
              class="input-luxury w-full bg-luxury-black border border-luxury-border rounded-xl px-4 py-3 text-gray-200 text-sm placeholder-gray-600 outline-none transition-all"
              placeholder="Vaše jméno">
          </div>

          <div>
            <label for="phone" class="block text-xs font-medium text-gold-400 tracking-widest uppercase mb-2">Telefon</label>
            <input type="tel" id="phone" name="phone" required autocomplete="tel"
              class="input-luxury w-full bg-luxury-black border border-luxury-border rounded-xl px-4 py-3 text-gray-200 text-sm placeholder-gray-600 outline-none transition-all"
              placeholder="+420 000 000 000">
          </div>

          <div>
            <label for="service" class="block text-xs font-medium text-gold-400 tracking-widest uppercase mb-2">Služba</label>
            <select id="service" name="service" required
              class="input-luxury w-full bg-luxury-black border border-luxury-border rounded-xl px-4 py-3 text-gray-200 text-sm outline-none transition-all appearance-none cursor-pointer">
              <option value="" disabled selected>Vyberte službu</option>
              <option value="oprava-odevu">Oprava oděvů</option>
              <option value="kadernictvi">Kadeřnictví Camelia</option>
              <option value="manikura">Nehtové studio Anna – Manikúra</option>
              <option value="pedikura">Nehtové studio Anna – Pedikúra</option>
              <option value="modelace">Nehtové studio Anna – Modelace nehtů</option>
            </select>
          </div>

          <div class="grid sm:grid-cols-2 gap-5">
            <div>
              <label for="date" class="block text-xs font-medium text-gold-400 tracking-widest uppercase mb-2">Datum</label>
              <input type="date" id="date" name="date" required
                class="input-luxury w-full bg-luxury-black border border-luxury-border rounded-xl px-4 py-3 text-gray-200 text-sm outline-none transition-all [color-scheme:dark]">
            </div>
            <div>
              <label for="time" class="block text-xs font-medium text-gold-400 tracking-widest uppercase mb-2">Čas</label>
              <input type="time" id="time" name="time" required
                class="input-luxury w-full bg-luxury-black border border-luxury-border rounded-xl px-4 py-3 text-gray-200 text-sm outline-none transition-all [color-scheme:dark]">
            </div>
          </div>

          <button type="submit" class="btn-gold w-full py-3.5 rounded-xl text-sm font-semibold text-luxury-black tracking-wide mt-2">
            Odeslat rezervaci
          </button>

          <div id="form-success" class="hidden text-center py-3 px-4 rounded-xl bg-gold-500/10 border border-gold-500/30">
            <p class="text-gold-300 text-sm font-medium">Děkujeme! Vaše rezervace byla odeslána. Brzy vás budeme kontaktovat.</p>
          </div>
          <div id="form-error" class="hidden text-center py-3 px-4 rounded-xl bg-red-500/10 border border-red-500/30">
            <p class="text-red-300 text-sm">Vyplňte prosím všechna povinná pole.</p>
          </div>
        </form>
      </div>
    </section>

    <!-- Kontakt -->
    <section id="kontakt" class="py-12 md:py-16 bg-luxury-dark/50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal text-center mb-8 md:mb-12">
          <p class="text-gold-500 text-xs font-medium tracking-[0.25em] uppercase mb-3">Kontakt</p>
          <h2 class="text-3xl sm:text-4xl font-light text-white mb-3 md:mb-4">Kde nás <span class="gold-gradient-text font-medium">najdete</span></h2>
          <div class="gold-line w-24 mx-auto"></div>
        </div>

        <div class="reveal grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
          <div class="card-glow bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6 text-center transition-all">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gold-500/10 flex items-center justify-center mx-auto mb-3 md:mb-4">
              <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-1 md:mb-2">Adresa</h3>
            <p class="text-gray-300 text-sm mt-1 md:mt-2 leading-relaxed">Husitská 65<br>130 00 Praha 3-Žižkov</p>
          </div>

          <div class="card-glow bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6 text-center transition-all">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gold-500/10 flex items-center justify-center mx-auto mb-3 md:mb-4">
              <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-1 md:mb-2">Oprava oděvů / Kadeřnictví</h3>
            <a href="tel:+420776604625" class="text-gray-300 text-sm hover:text-gold-400 transition-colors mt-1 md:mt-2 inline-block">776 604 625</a>
            <p class="text-gray-300 text-xs mt-3 md:mt-4 leading-relaxed flex flex-col gap-0.5 md:gap-1">
              <span class="block">Po–Pá: 13:30 – 18:00</span>
              <span class="block">So–Ne: na objednání</span>
            </p>
          </div>

          <div class="card-glow bg-luxury-card border border-luxury-border rounded-2xl p-5 md:p-6 text-center transition-all">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gold-500/10 flex items-center justify-center mx-auto mb-3 md:mb-4">
              <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="text-gold-400 text-xs font-semibold tracking-widest uppercase mb-1 md:mb-2">Nehtové studio Anna</h3>
            <a href="tel:+420774386868" class="text-gray-300 text-sm hover:text-gold-400 transition-colors mt-1 md:mt-2 inline-block">774 386 868</a>
            <p class="text-gray-300 text-xs mt-3 md:mt-4 leading-relaxed flex flex-col gap-0.5 md:gap-1">
              <span class="block">Po–Pá: 9 – 20</span>
              <span class="block">So: 9:30 – 19:30</span>
              <span class="block">Ne: pouze na objednání</span>
            </p>
          </div>
        </div>

        <div class="reveal mt-6 md:mt-10 rounded-2xl overflow-hidden border border-luxury-border h-64 sm:h-auto sm:aspect-[16/7] min-h-[200px]">
          <iframe
            title="Mapa – Husitská 65, 130 00 Praha 3-Žižkov"
            src="https://www.openstreetmap.org/export/embed.html?bbox=14.4496%2C50.0855%2C14.4556%2C50.0895&layer=mapnik&marker=50.087451%2C14.452579"
            class="w-full h-full grayscale-[30%] contrast-[1.1] opacity-80"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </section>
  </main>
