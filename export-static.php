<?php
/**
 * Static HTML Exporter for Angi Permana Portfolio
 * Generates a 100% standalone static HTML distribution in the `dist/` directory.
 */

echo "🚀 Starting Static Export for Hostinger...\n";

// 1. Run Vite build to generate assets
exec('npm run build', $output, $returnCode);
if ($returnCode !== 0) {
    echo "❌ Failed to run npm run build\n";
    exit(1);
}

$distDir = __DIR__ . '/dist';
if (!is_dir($distDir)) {
    mkdir($distDir, 0755, true);
}

// 2. Locate built CSS & JS assets from manifest
$manifestPath = __DIR__ . '/public/build/manifest.json';
if (!file_exists($manifestPath)) {
    echo "❌ Manifest file not found\n";
    exit(1);
}

$manifest = json_decode(file_get_contents($manifestPath), true);
$cssFile = 'build/' . ($manifest['resources/css/app.css']['file'] ?? '');
$jsFile  = 'build/' . ($manifest['resources/js/app.js']['file'] ?? '');

// 3. Render blade template
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = [
    'welcome' => 'index.html',
    'portfolio.seo-bandung' => 'portofolio-jasa-seo-bandung/index.html',
    'portfolio.hapus-malware' => 'portofolio-jasa-hapus-malware/index.html',
    'portfolio.iklan-travel' => 'portofolio-kampanye-iklan-travel/index.html',
    'portfolio.silo-seo' => 'portofolio-arsitektur-silo-seo/index.html',
    'portfolio.local-seo-gmb' => 'portofolio-jasa-local-seo-gmb/index.html',
    'portfolio.konversi-cro' => 'portofolio-optimasi-konversi-cro/index.html',
];

foreach ($pages as $viewName => $outRelativePath) {
    $html = view($viewName)->render();

    // Remove dev vite scripts
    $html = preg_replace('/<script type="module" src="http:\/\/127\.0\.0\.1:[0-9]+\/@vite\/client"><\/script>/', '', $html);
    $html = preg_replace('/<link rel="stylesheet" href="http:\/\/127\.0\.0\.1:[0-9]+\/resources\/css\/app\.css" \/>/', '', $html);
    $html = preg_replace('/<script type="module" src="http:\/\/127\.0\.0\.1:[0-9]+\/resources\/js\/app\.js"><\/script>/', '', $html);

    // Calculate relative path depth for static assets
    $depth = substr_count($outRelativePath, '/');
    $assetPrefix = $depth > 0 ? str_repeat('../', $depth) : './';

    $cssLink  = '<link rel="stylesheet" href="' . $assetPrefix . $cssFile . '">';
    $jsScript = '<script type="module" src="' . $assetPrefix . $jsFile . '"></script>';

    $html = str_replace('</head>', "    {$cssLink}\n    {$jsScript}\n</head>", $html);

    $fullOutPath = $distDir . '/' . $outRelativePath;
    $outDir = dirname($fullOutPath);
    if (!is_dir($outDir)) {
        mkdir($outDir, 0755, true);
    }
    file_put_contents($fullOutPath, $html);
    echo "  - Generated: {$outRelativePath}\n";
}


// Copy assets from public/build to dist/build
function copyDir($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst, 0755, true);
    while (($file = readdir($dir))) {
        if ($file != '.' && $file != '..') {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

copyDir(__DIR__ . '/public/build', $distDir . '/build');
if (is_dir(__DIR__ . '/public/images')) {
    copyDir(__DIR__ . '/public/images', $distDir . '/images');
}
if (file_exists(__DIR__ . '/public/favicon.ico')) {
    copy(__DIR__ . '/public/favicon.ico', $distDir . '/favicon.ico');
}

echo "✅ Static build completed successfully!\n";
echo "📁 Output directory: " . realpath($distDir) . "\n";
echo "💡 Upload all files inside the `dist/` directory directly to Hostinger `public_html`.\n";
