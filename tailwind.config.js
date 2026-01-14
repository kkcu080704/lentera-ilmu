import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // 'Inter' untuk menu/tombol (Modern)
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                // 'Merriweather' untuk judul & isi artikel (Kesan Klasik/Buku)
                serif: ['Merriweather', 'serif'], 
            },
            colors: {
                // Palet Warna Khusus "Lentera Ilmu"
                library: {
                    primary: '#047857',   // Emerald Green (Hijau Kampus)
                    secondary: '#ECFDF5', // Hijau Tipis (Highlight)
                    paper: '#FDFBF7',     // Krem Kertas Tua (Agar mata tidak lelah)
                    ink: '#334155',       // Abu-abu Tinta (Slate 700) - Lebih lembut dari hitam
                    gold: '#B45309',      // Aksen Emas Tua
                }
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'), // Plugin wajib untuk format artikel
    ],
};