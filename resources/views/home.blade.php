@extends('layouts.site')

@section('content')
<section class="hero-cinema" aria-labelledby="hero-title">
    <video class="hero-video" data-hero-video autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/motion/network-cables-poster.jpg') }}" aria-hidden="true"><source src="{{ asset('assets/motion/network-cables.mp4') }}" type="video/mp4"></video>
    <div class="hero-cinema-shade" aria-hidden="true"></div>
    <div class="hero-cinema-inner shell">
        <div class="hero-copy" data-reveal>
            <p class="hero-breadcrumb">Ingeniería de redes · El Salvador</p>
            <h1 id="hero-title">Infraestructura de red para empresas.</h1>
            <p class="hero-intro">Diseñamos e instalamos redes cableadas y Wi-Fi. Planifica la apertura de una sede, la ampliación de tu red o la renovación del cableado.</p>
            <div class="hero-actions"><a class="button button-primary" href="{{ url('/cotizar') }}">Solicitar cotización</a><a class="hero-secondary" href="#catalogo">Ver equipos</a></div>
        </div>
        <figure class="enterprise-photo"><img src="{{ asset('assets/motion/office-networking-v3.webp') }}" alt="Oficina y gabinete de comunicaciones" fetchpriority="high"></figure>
        <div class="hero-scroll-cue" aria-hidden="true"><span></span> Baja para ver las soluciones</div>
    </div>
</section>

<section class="showcase-section section-space" id="experiencia" aria-labelledby="showcase-title">
    <div class="shell">
    <div class="showcase-heading" data-reveal><p class="eyebrow">Redes, Wi-Fi y seguridad</p><h2 id="showcase-title">Soluciones por necesidad</h2><p>Revisa qué equipo interviene en cada caso y cuéntanos qué necesitas cotizar.</p></div>
    <div class="hero-experience" data-reveal data-showcase aria-label="Explorador de soluciones">
        <div class="experience-head"><span class="micro-label">REDES · WI-FI · SEGURIDAD</span></div>
        <div class="experience-tabs" role="tablist" aria-label="Tipo de solución">
            <button class="experience-tab is-active" type="button" role="tab" aria-selected="true" data-mode="redes" id="tab-redes" aria-controls="panel-solucion">Redes</button>
            <button class="experience-tab" type="button" role="tab" aria-selected="false" data-mode="wifi" id="tab-wifi" aria-controls="panel-solucion">Wi-Fi</button>
            <button class="experience-tab" type="button" role="tab" aria-selected="false" data-mode="seguridad" id="tab-seguridad" aria-controls="panel-solucion">Seguridad</button>
        </div>
        <div class="experience-stage" id="panel-solucion" role="tabpanel" aria-labelledby="tab-redes">
            <div class="stage-grid" aria-hidden="true"></div>
            <div class="stage-orbit stage-orbit-a" aria-hidden="true"></div><div class="stage-orbit stage-orbit-b" aria-hidden="true"></div>
            <img class="stage-product" data-stage-image src="{{ asset('assets/catalog/switch.webp') }}" alt="Switch de red empresarial" width="1200" height="900">
            <div class="stage-chip stage-chip-top"><span class="chip-dot"></span> Conectividad para tu empresa</div>
            <div class="stage-chip stage-chip-bottom"><span class="chip-mini-icon" aria-hidden="true">↗</span> Diseño e instalación</div>
        </div>
        <div class="experience-detail"><div><span class="micro-label" data-stage-label>REDES EMPRESARIALES</span><h2 data-stage-title>Red entre áreas y equipos</h2><p data-stage-copy>Conexión por cable para computadoras, impresoras y otros equipos de trabajo.</p></div><a data-stage-link href="{{ url('/cotizar?categoria=redes') }}" aria-label="Cotizar redes empresariales">Cotizar <span aria-hidden="true">↗</span></a></div>
        <div class="experience-progress" aria-hidden="true"><span class="is-active"></span><span></span><span></span></div>
    </div>
    </div>
</section>

<section class="solutions section-space" id="soluciones" aria-labelledby="solutions-title">
    <div class="shell"><div class="section-heading" data-reveal><div><p class="eyebrow">Servicios de red</p><h2 id="solutions-title">Conectividad para el trabajo diario.</h2></div><p>Diseñamos la solución a partir del espacio, la cantidad de usuarios y los equipos que necesitan conectarse.</p></div>
        <div class="solution-grid">
            <a class="solution-card solution-card-dark" href="{{ url('/cotizar?categoria=redes') }}" data-reveal><span class="card-index">RED CABLEADA</span><div class="solution-visual"><img src="{{ asset('assets/catalog/switch.webp') }}" alt="Switch para redes empresariales" width="1200" height="900" loading="lazy"></div><div class="solution-copy"><h3>Conecta computadoras, impresoras y áreas.</h3><p>Definimos puntos, equipos y cableado según la distribución de tu oficina o local.</p><span class="card-action">Cotizar red cableada</span></div></a>
            <a class="solution-card solution-card-blue" href="{{ url('/cotizar?categoria=wifi') }}" data-reveal><span class="card-index">WI-FI</span><div class="solution-visual"><img src="{{ asset('assets/catalog/wifi.webp') }}" alt="Punto de acceso Wi-Fi empresarial" width="1200" height="900" loading="lazy"></div><div class="solution-copy"><h3>Wi-Fi en las áreas que necesitas.</h3><p>Ubicamos los puntos de acceso según el espacio y las personas que se conectan.</p><span class="card-action">Cotizar Wi-Fi</span></div></a>
            <a class="solution-card solution-card-light" href="{{ url('/cotizar?categoria=seguridad') }}" data-reveal><span class="card-index">ROUTER Y FIREWALL</span><div class="solution-visual"><img src="{{ asset('assets/catalog/firewall.webp') }}" alt="Router y firewall para seguridad de red" width="1200" height="900" loading="lazy"></div><div class="solution-copy"><h3>Administra la salida a internet.</h3><p>Revisamos enlaces, accesos y separación de redes.</p><span class="card-action">Cotizar seguridad</span></div></a>
        </div>
    </div>
</section>

<section class="architecture hologram-section section-space" id="arquitectura" aria-labelledby="architecture-title">
    <div class="shell"><div class="hologram-heading" data-reveal><p class="eyebrow">Arquitectura de red</p><h2 id="architecture-title">La red de una sede, área por área</h2><p>Cuando cada área tiene lo que necesita para conectarse, el equipo puede concentrarse en avanzar. Explora cómo se organiza la red de tu espacio.</p></div>
        <div class="hologram-stage" data-hologram data-active="sede" aria-label="Explorador interactivo de arquitectura de red">
            <div class="hologram-nodes" role="group" aria-label="Explorar componentes de la red">
                <button class="hologram-node is-active" type="button" data-holo-node="sede" aria-pressed="true"><b>Sede</b></button>
                <button class="hologram-node" type="button" data-holo-node="wifi" aria-pressed="false"><b>Wi-Fi</b></button>
                <button class="hologram-node" type="button" data-holo-node="equipos" aria-pressed="false"><b>Equipos</b></button>
                <button class="hologram-node" type="button" data-holo-node="control" aria-pressed="false"><b>Router y firewall</b></button>
            </div>
            <div class="hologram-visual" aria-hidden="true">@include('partials.network-hologram')</div>
            <div class="hologram-detail" aria-live="polite"><span class="micro-label" data-holo-index>SEDE</span><h3 data-holo-title>El lugar de instalación</h3><p data-holo-copy>Las áreas, distancias y materiales del edificio ayudan a definir recorridos y cobertura.</p><a data-holo-link href="{{ url('/cotizar?categoria=redes') }}">Cotizar esta parte <span aria-hidden="true">↗</span></a></div>
        </div>
    </div>
</section>

<section class="catalog section-space" id="catalogo" aria-labelledby="catalog-title">
    @php($catalogItems = config('catalog'))
    <div class="shell"><div class="section-heading catalog-heading" data-reveal><div><p class="eyebrow">Equipos</p><h2 id="catalog-title">Encuentra el equipo para tu red.</h2></div><p>Explora las categorías, elige lo que necesitas y prepara tu solicitud de cotización.</p></div>
        <div class="catalog-feature" data-catalog-feature aria-label="Explorador visual de equipos">
            <div class="catalog-feature-tabs" role="tablist" aria-label="Familias de equipos">
                @foreach($catalogItems as $slug => $item)
                    <button type="button" class="catalog-feature-tab @if($loop->first) is-active @endif" role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}" aria-controls="catalog-feature-panel" id="feature-tab-{{ $slug }}" data-feature-tab="{{ $slug }}" data-feature-name="{{ $item['name'] }}" data-feature-summary="{{ $item['summary'] }}" data-feature-group-name="{{ $item['group_label'] }}" data-feature-image-src="{{ asset('assets/catalog/'.$item['image']) }}" tabindex="{{ $loop->first ? '0' : '-1' }}">{{ $item['name'] }}</button>
                @endforeach
            </div>
            <div class="catalog-feature-body" id="catalog-feature-panel" role="tabpanel" aria-labelledby="feature-tab-switches">
                <div class="catalog-feature-copy"><span class="catalog-feature-kicker" data-feature-group>Conectividad</span><h3 data-feature-title>Switches</h3><p data-feature-copy>Conecta por cable computadoras, impresoras y puntos de acceso.</p><button type="button" class="catalog-feature-add" data-quote-item="switches" aria-pressed="false">Añadir a mi solicitud</button></div>
                <div class="catalog-feature-visual" data-feature-visual><div class="catalog-feature-image-wrap"><img data-feature-image src="{{ asset('assets/catalog/switch.webp') }}" alt="Switch de red" width="1200" height="900" fetchpriority="low"></div></div>
            </div>
            <div class="catalog-feature-bottom"><span>Selecciona una categoría para ver el equipo</span><div><button type="button" data-feature-prev aria-label="Equipo anterior">←</button><button type="button" data-feature-next aria-label="Equipo siguiente">→</button></div></div>
        </div>
        <div class="catalog-controls"><div class="filter-pills" role="group" aria-label="Filtrar categorías"><button class="filter-pill is-active" type="button" data-filter="todos" aria-pressed="true">Todos</button><button class="filter-pill" type="button" data-filter="conectividad" aria-pressed="false">Conectividad</button><button class="filter-pill" type="button" data-filter="seguridad" aria-pressed="false">Seguridad</button><button class="filter-pill" type="button" data-filter="infraestructura" aria-pressed="false">Infraestructura</button></div><label class="catalog-search"><span class="sr-only">Buscar categorías</span><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.2"/><path d="m15.5 15.5 5 5"/></svg><input type="search" placeholder="Buscar equipo" data-catalog-search></label></div>
        <div class="catalog-grid" data-catalog-grid>
            @foreach($catalogItems as $slug => $item)
                <article class="catalog-card" data-category="{{ $item['group'] }}" data-name="{{ $item['search'] }}" data-slug="{{ $slug }}"><div class="catalog-media"><span class="catalog-tag">{{ $item['group_label'] }}</span><img src="{{ asset('assets/catalog/'.$item['image']) }}" alt="{{ $item['name'] }}" loading="lazy" width="600" height="450"></div><div class="catalog-info"><h3>{{ $item['name'] }}</h3><p>{{ $item['summary'] }}</p><div class="catalog-card-actions"><button type="button" data-feature-open="{{ $slug }}">Ver en detalle <span aria-hidden="true">↗</span></button><button type="button" data-quote-item="{{ $slug }}" aria-pressed="false">Añadir <span aria-hidden="true">+</span></button></div></div></article>
            @endforeach
        </div>
        <p class="empty-catalog" data-catalog-empty hidden>No encontramos esa categoría. Prueba otra búsqueda.</p>
        @foreach($catalogItems as $slug => $item)
            <template data-detail-guide="{{ $slug }}">@foreach($item['questions'] as $question)<li>{{ $question }}</li>@endforeach</template>
        @endforeach
        <dialog class="catalog-dialog" data-catalog-dialog aria-labelledby="catalog-dialog-title">
            <button class="catalog-dialog-close" type="button" data-detail-close aria-label="Cerrar ficha">×</button>
            <div class="catalog-dialog-layout">
                <div class="catalog-dialog-visual"><img data-detail-image src="{{ asset('assets/catalog/switch.webp') }}" alt="Switch de red" width="1200" height="900"></div>
                <div class="catalog-dialog-copy"><p class="eyebrow" data-detail-group>Conectividad</p><h2 id="catalog-dialog-title" data-detail-title>Switches</h2><p class="catalog-dialog-summary" data-detail-summary>Conecta por cable computadoras, impresoras y puntos de acceso.</p><div class="catalog-dialog-guide"><h3>Para dimensionar tu solicitud</h3><p>Comparte estos datos si los conoces. Podemos ayudarte a definirlos.</p><ul data-detail-questions></ul></div><div class="catalog-dialog-actions"><a class="button button-primary" data-detail-quote href="{{ url('/cotizar?intereses=switches') }}">Solicitar cotización</a><button type="button" data-detail-next>Ver otra familia</button></div></div>
            </div>
        </dialog>
        <div class="quote-dock" data-quote-dock hidden><span><strong data-quote-count>0</strong> <span data-quote-label>tipos de equipo</span> para cotizar</span><a class="button button-primary" data-quote-go href="{{ url('/cotizar') }}">Continuar solicitud</a><button type="button" data-quote-clear aria-label="Vaciar selección">Vaciar</button></div>
    </div>
</section>

<section class="services section-space" id="servicios" aria-labelledby="services-title">
    <div class="shell">
        <div class="services-heading" data-reveal>
            <div><p class="eyebrow">Servicios</p><h2 id="services-title">Diseño, implementación y soporte</h2></div>
            <div class="services-intro"><p>Instalamos y configuramos redes cableadas y Wi-Fi. También podemos ayudarte con soporte y mantenimiento.</p><a class="button button-outline" href="{{ url('/cotizar') }}">Solicitar cotización</a></div>
        </div>
        <div class="service-list">
            <article class="service-row" data-reveal><span class="service-mark" aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M5 25h22M8 25V11l8-5 8 5v14M12 25v-7h8v7M5 13h6M21 13h6"/></svg></span><div><h3>Instalación</h3><p>Puntos de red, cableado y equipos según el espacio.</p></div></article>
            <article class="service-row" data-reveal><span class="service-mark" aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M6 12a15 15 0 0 1 20 0M10 16a9 9 0 0 1 12 0M14 20a3 3 0 0 1 4 0M16 23v4M6 27h20"/></svg></span><div><h3>Configuración</h3><p>Wi-Fi, accesos y redes separadas para tus equipos.</p></div></article>
            <article class="service-row" data-reveal><span class="service-mark" aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M25 10a9 9 0 0 0-14-4l-2 2 5 5 2-2a3 3 0 0 1 4 4l-2 2 5 5 2-2a9 9 0 0 0 0-10ZM6 26l8-8M7 21l4 4"/></svg></span><div><h3>Soporte</h3><p>Revisión de fallas, cambios y mantenimiento de red.</p></div></article>
        </div>
    </div>
</section>

<section class="affiliate section-space" id="afiliados" aria-labelledby="affiliate-title">
    <div class="shell affiliate-inner" data-reveal>
        <div><p class="eyebrow">Programa de afiliados</p><h2 id="affiliate-title">Afiliados de NODAXIS · 10%</h2></div>
        <div><p>Si conoces una empresa que necesita mejorar su red, preséntanosla. Escríbenos para confirmar las condiciones, el cálculo de la comisión y cuándo se paga antes de participar.</p><a class="button button-primary" href="https://wa.me/50372311719?text=Hola%2C%20quiero%20conocer%20las%20condiciones%20del%20programa%20de%20afiliados%20NODAXIS." target="_blank" rel="noopener">Consultar afiliación</a></div>
    </div>
</section>

<section class="newsletter section-space" id="boletin" aria-labelledby="newsletter-title">
    <div class="shell newsletter-inner">
        <div class="newsletter-copy"><p class="eyebrow">Pulso de red</p><h2 id="newsletter-title">Guías para administrar tu red</h2><p>Un correo ocasional con guías breves de Wi-Fi, cableado, seguridad y equipos. Sin promociones diarias.</p><div class="newsletter-topics" aria-label="Temas del boletín"><span>Wi-Fi</span><span>Seguridad</span><span>Infraestructura</span></div></div>
        <form class="newsletter-form" action="{{ route('newsletter.store') }}" method="post">
            @csrf
            <label for="newsletter-email">Tu correo electrónico</label>
            <div class="newsletter-entry"><input id="newsletter-email" type="email" name="email" maxlength="254" autocomplete="email" placeholder="nombre@empresa.com" required><button type="submit" class="button button-primary">Suscribirme</button></div>
            <label class="newsletter-consent"><input type="checkbox" name="consent" value="1" required><span>Acepto recibir el boletín y he leído los <a href="{{ route('terms') }}">términos y aviso de privacidad</a>.</span></label>
            <input class="newsletter-trap" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
            @if(session('newsletter_success'))<p class="form-status" role="status">¡Listo! Te has suscrito a Pulso de red.</p>@endif
            @error('email')<p class="form-error" role="alert">{{ $message }}</p>@enderror
            @error('consent')<p class="form-error" role="alert">Necesitamos tu consentimiento para suscribirte.</p>@enderror
        </form>
    </div>
</section>

<section class="about-cta section-space" id="nosotros" aria-labelledby="about-title"><div class="shell about-inner" data-reveal><div><p class="eyebrow">NODAXIS · El Salvador</p><h2 id="about-title">Redes que conectan empresas.</h2></div><div><p>Atendemos proyectos de conectividad, Wi-Fi, seguridad perimetral y soporte en El Salvador. Cuéntanos qué necesita tu espacio y revisamos opciones.</p><a class="button button-primary" href="{{ url('/cotizar') }}">Cuéntanos qué necesitas</a></div></div></section>
@endsection
