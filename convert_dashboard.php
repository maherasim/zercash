<?php
$html = file_get_contents(__DIR__ . '/theme/dashboard.html');

// 1. Replace src="assets/... with Blade asset()
$html = preg_replace('/src="(assets\/[^"]+)"/', 'src="{{ asset(\'$1\') }}"', $html);

// 2. Replace href="assets/... (if any)
$html = preg_replace('/href="(assets\/[^"]+)"/', 'href="{{ asset(\'$1\') }}"', $html);

// 3. Replace style url('assets/... with Blade (use double quotes for url() so attribute is valid)
$html = preg_replace("/url\('(assets\/[^']+)'\)/", 'url("{{ asset(\'$1\') }}")', $html);

// 4. Replace Tailwind bg-[url('assets/... with Blade - use double quotes for the Blade output
$html = preg_replace("/bg-\[url\('(assets\/[^']+)'\)\]/", 'bg-[url("{{ asset(\'$1\') }}")]', $html);

// 5. Replace .html links with Laravel routes
$html = str_replace('href="index.html"', 'href="{{ route(\'home\') }}"', $html);
$html = str_replace('href="login.html"', 'href="{{ route(\'login\') }}"', $html);
$html = str_replace('href="checkout.html"', 'href="{{ route(\'checkout\') }}"', $html);
$html = str_replace('href="legal-notice.html"', 'href="{{ route(\'legal-notice\') }}"', $html);
$html = str_replace('href="terms.html"', 'href="{{ route(\'terms\') }}"', $html);
$html = str_replace('href="contact.html"', 'href="{{ route(\'contact\') }}"', $html);

// 6. Replace JavaScript redirects
$html = str_replace('window.location.href = "login.html"', 'window.location.href = "{{ route(\'login\') }}"', $html);
$html = str_replace('window.location.href = "index.html"', 'window.location.href = "{{ route(\'home\') }}"', $html);
$html = str_replace('window.location.href = "checkout.html"', 'window.location.href = "{{ route(\'checkout\') }}"', $html);

$out = __DIR__ . '/resources/views/pages/dashboard.blade.php';
file_put_contents($out, $html);
echo "Dashboard Blade written to $out\n";
