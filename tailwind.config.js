import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/bezhansalleh/filament-language-switch/resources/views/language-switch.blade.php',
        '<path-to-vendor>/awcodes/filament-quick-create/resources/**/*.blade.php',
        './vendor/kenepa/translation-manager/resources/**/*.blade.php',
    ],
}
