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

$html = view('welcome')->render();

// Remove dev vite scripts
$html = preg_replace('/<script type="module" src="http:\/\/127\.0\.0\.1:[0-9]+\/@vite\/client"><\/script>/', '', $html);
$html = preg_replace('/<link rel="stylesheet" href="http:\/\/127\.0\.0\.1:[0-9]+\/resources\/css\/app\.css" \/>/', '', $html);
$html = preg_replace('/<script type="module" src="http:\/\/127\.0\.0\.1:[0-9]+\/resources\/js\/app\.js"><\/script>/', '', $html);

// Inject static assets
$cssLink  = '<link rel="stylesheet" href="./' . $cssFile . '">';
$jsScript = '<script type="module" src="./' . $jsFile . '"></script>';

$html = str_replace('</head>', "    {$cssLink}\n    {$jsScript}\n</head>", $html);

// Save to dist/index.html
file_put_contents($distDir . '/index.html', $html);

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
if (file_exists(__DIR__ . '/public/favicon.ico')) {
    copy(__DIR__ . '/public/favicon.ico', $distDir . '/favicon.ico');
}

echo "✅ Static build completed successfully!\n";
echo "📁 Output directory: " . realpath($distDir) . "\n";
echo "💡 Upload all files inside the `dist/` directory directly to Hostinger `public_html`.\n";
