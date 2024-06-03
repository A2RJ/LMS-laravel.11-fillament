import preset from './vendor/filament/support/tailwind.config.preset'
const plugin = require('tailwindcss/plugin')

export default {
    presets: [preset],
    content: [
        './resources/**/*.blade.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                '15': 'repeat(15, minmax(0, 1fr))',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        plugin(({ addVariant, e }) => {
            addVariant('svg-checked', ({ modifySelectors, separator }) => {
                modifySelectors(
                    ({ className }) => {
                        const eClassName = e(`svg-checked${separator}${className}`); // escape class
                        const yourSelector = 'input[type="radio"]'; // your input selector. Could be any
                        return `${yourSelector}:checked ~ label .${eClassName}`; // ~ - CSS selector for siblings, specifically targeting label then svg
                    }
                )
            })
        })
    ]
}