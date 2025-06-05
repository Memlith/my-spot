<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MySpot</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
            *,
            :before,
            :after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            *,
            :before,
            :after {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            :before,
            :after {
                --tw-content: ""
            }

            html,
            :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                -o-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                letter-spacing: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            button,
            input:where([type=button]),
            input:where([type=reset]),
            input:where([type=submit]) {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            ol,
            ul,
            menu {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            button,
            [role=button] {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0
            }

            .z-0 {
                z-index: 0
            }

            .\!row-span-1 {
                grid-row: span 1 / span 1 !important
            }

            .-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-3 {
                margin-left: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .grid {
                display: grid
            }

            .\!hidden {
                display: none !important
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-5 {
                width: 1.25rem
            }

            .w-\[calc\(100\%_\+_8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .transform {
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .cursor-default {
                cursor: default
            }

            .resize {
                resize: both
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .\!flex-row {
                flex-direction: row !important
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-[10px] {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-l-md {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem
            }

            .rounded-r-md {
                border-top-right-radius: .375rem;
                border-bottom-right-radius: .375rem
            }

            .border {
                border-width: 1px
            }

            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: #ff2d201a
            }

            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20
            }

            .object-cover {
                -o-object-fit: cover;
                object-fit: cover
            }

            .object-top {
                -o-object-position: top;
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-2 {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .px-3 {
                padding-left: .75rem;
                padding-right: .75rem
            }

            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: .5rem;
                padding-bottom: .5rem
            }

            .pt-3 {
                padding-top: .75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
            }

            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: .875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-medium {
                font-weight: 500
            }

            .font-semibold {
                font-weight: 600
            }

            .leading-5 {
                line-height: 1.25rem
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .text-black\/50 {
                color: #00000080
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .underline {
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
            }

            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / .05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .duration-150 {
                transition-duration: .15s
            }

            .duration-300 {
                transition-duration: .3s
            }

            .ease-in-out {
                transition-timing-function: cubic-bezier(.4, 0, .2, 1)
            }

            .selection\:bg-\[\#FF2D20\] *::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white *::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black\/70:hover {
                color: #000000b3
            }

            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / .2)
            }

            .focus\:z-10:focus {
                z-index: 10
            }

            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
            }

            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            @media (min-width: 640px) {
                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:flex-1 {
                    flex: 1 1 0%
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity, 1))
                }
            }

            .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white\/50 {
                    color: #ffffff80
                }

                .dark\:text-white\/70 {
                    color: #ffffffb3
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
                }

                .dark\:hover\:text-gray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: #ffffffb3
                }

                .dark\:hover\:text-white\/80:hover {
                    color: #fffc
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus\:border-blue-700:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
                }

                .dark\:focus\:border-blue-800:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
                }

                .dark\:active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
                }

                .dark\:active\:text-gray-300:active {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div
        class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 bg-[url(https://images.unsplash.com/photo-1531685250784-7569952593d2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-no-repeat bg-center">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-myspot-blue selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <x-big-application-logo>
                    </x-big-application-logo>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ route('index') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-myspot-blue dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-myspot-blue dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-myspot-blue dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-myspot-blue md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-myspot-blue">
                            <div id="screenshot-container"
                                class="relative flex w-full flex-1 items-stretch bg-gray-200 rounded-[85px] ">
                                <img src="https://i.postimg.cc/bwbCTNrJ/phonemap.png" alt="myspot"
                                    class="aspect-video  h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_2px_28px_rgba(0,0,0,0.06)] dark:hidden" />
                                <div
                                    class="absolute -bottom-16 -left-16 h-60 w-[calc(100%_+_8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                                </div>
                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div
                                        class="flex size-12 shrink-0 items-center justify-center rounded-[10px] bg-myspot-blue/10 sm:size-16">
                                        <svg class="shrink-0 size-8 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M565.6 36.2C572.1 40.7 576 48.1 576 56l0 336c0 10-6.2 18.9-15.5 22.4l-168 64c-5.2 2-10.9 2.1-16.1 .3L192.5 417.5l-160 61c-7.4 2.8-15.7 1.8-22.2-2.7S0 463.9 0 456L0 120c0-10 6.1-18.9 15.5-22.4l168-64c5.2-2 10.9-2.1 16.1-.3L383.5 94.5l160-61c7.4-2.8 15.7-1.8 22.2 2.7zM48 136.5l0 284.6 120-45.7 0-284.6L48 136.5zM360 422.7l0-285.4-144-48 0 285.4 144 48zm48-1.5l120-45.7 0-284.6L408 136.5l0 284.6z" />
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Mapa de Vagas</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            O Mapa de Vagas é uma ferramenta que permite visualizar as vagas disponíveis
                                            em tempo real, facilitando a busca por um local para estacionar.
                                            Com ele, você pode encontrar rapidamente uma vaga próxima ao seu destino,
                                            economizando tempo e evitando o estresse de procurar por estacionamento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-myspot-blue lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-myspot-blue">
                            <div
                                class="flex items-center justify-center size-12 shrink-0  rounded-[10px] bg-myspot-blue/10 sm:size-16">
                                <svg class="shrink-0 size-8 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path
                                        d="M64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16l80 0 0-64c0-26.5 21.5-48 48-48s48 21.5 48 48l0 64 80 0c8.8 0 16-7.2 16-16l0-384c0-8.8-7.2-16-16-16L64 48zM0 64C0 28.7 28.7 0 64 0L320 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm88 40c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zM232 88l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zm144-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16z" />
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Estabelecimentos</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Com MySpot, as empresas podem gerenciar suas vagas de estacionamento de forma
                                    eficiente e prática, além de permitir o controle do uso das vagas pelos
                                    funcionários.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-myspot-blue"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-myspot-blue lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-myspot-blue">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-[10px] bg-myspot-blue/10 sm:size-16">
                                <svg class="shrink-0 size-8 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path
                                        d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.4-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Assinaturas</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    O MySpot oferece um sistema de assinatura que permite aos usuários reservar vagas de
                                    estacionamento com antecedência, garantindo um espaço garantido quando necessário.
                                    Isso é especialmente útil para aqueles que precisam estacionar em locais
                                    movimentados ou em horários de pico.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-myspot-blue"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-myspot-blue lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-myspot-blue">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-[10px] bg-myspot-blue/10 sm:size-16">
                                <svg class="shrink-0 size-8 fill-myspot-blue" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path
                                        d="M210.6 5.9L62 169.4c-3.9 4.2-6 9.8-6 15.5C56 197.7 66.3 208 79.1 208l24.9 0L30.6 281.4c-4.2 4.2-6.6 10-6.6 16C24 309.9 34.1 320 46.6 320L80 320 5.4 409.5C1.9 413.7 0 419 0 424.5c0 13 10.5 23.5 23.5 23.5L192 448l0 32c0 17.7 14.3 32 32 32s32-14.3 32-32l0-32 168.5 0c13 0 23.5-10.5 23.5-23.5c0-5.5-1.9-10.8-5.4-15L368 320l33.4 0c12.5 0 22.6-10.1 22.6-22.6c0-6-2.4-11.8-6.6-16L344 208l24.9 0c12.7 0 23.1-10.3 23.1-23.1c0-5.7-2.1-11.3-6-15.5L237.4 5.9C234 2.1 229.1 0 224 0s-10 2.1-13.4 5.9z" />
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Preservando o Meio-Ambiente
                                </h2>

                                <p class="mt-4 text-sm/relaxed">
                                    O MySpot é uma plataforma que visa reduzir o impacto ambiental causado pelo tráfego
                                    de veículos, promovendo a utilização consciente dos espaços de estacionamento.
                                    Ao facilitar o compartilhamento de vagas, contribuímos para a diminuição da emissão
                                    de poluentes e do consumo de recursos naturais.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
