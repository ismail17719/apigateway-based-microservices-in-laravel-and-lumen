<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShipAfrika Application Registration</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="" width="320px" height="61px">
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.07692 5.92648C5.07692 4.38908 6.33971 3.14278 7.89744 3.14278H12C12.4248 3.14278 12.7692 3.48268 12.7692 3.90197C12.7692 4.32126 12.4248 4.66116 12 4.66116H7.89744C7.18938 4.66116 6.61539 5.22766 6.61539 5.92648V6.93873C6.61539 7.35802 6.27099 7.69792 5.84615 7.69792C5.42132 7.69792 5.07692 7.35802 5.07692 6.93873V5.92648ZM5.84615 16.3021C6.27099 16.3021 6.61539 16.642 6.61539 17.0613V18.0735C6.61539 18.7723 7.18938 19.3388 7.89744 19.3388H12C12.4248 19.3388 12.7692 19.6788 12.7692 20.098C12.7692 20.5173 12.4248 20.8572 12 20.8572H7.89744C6.33971 20.8572 5.07692 19.6109 5.07692 18.0735V17.0613C5.07692 16.642 5.42132 16.3021 5.84615 16.3021Z" fill="#999"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7692 4.78618C12.7692 3.90491 13.6592 3.29355 14.4966 3.59962L19.6248 5.47416C20.1277 5.658 20.4615 6.13139 20.4615 6.66071V17.3393C20.4615 17.8686 20.1277 18.342 19.6248 18.5258L14.4966 20.4004C13.6592 20.7065 12.7692 20.0951 12.7692 19.2138V4.78618ZM15.0309 2.17576C13.1887 1.5024 11.2308 2.84738 11.2308 4.78618V19.2138C11.2308 21.1526 13.1887 22.4976 15.0309 21.8242L20.1591 19.9497C21.2656 19.5452 22 18.5038 22 17.3393V6.66071C22 5.4962 21.2656 4.45475 20.1591 4.0503L15.0309 2.17576Z" fill="#999"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.32787 9.43867C6.62827 9.14218 7.11532 9.14218 7.41572 9.43867L9.46701 11.4632C9.76741 11.7597 9.76741 12.2403 9.46701 12.5368L7.41572 14.5613C7.11532 14.8578 6.62827 14.8578 6.32787 14.5613C6.02746 14.2649 6.02746 13.7842 6.32787 13.4877L7.06599 12.7592H2.76923C2.3444 12.7592 2 12.4193 2 12C2 11.5807 2.3444 11.2408 2.76923 11.2408H7.06599L6.32787 10.5123C6.02746 10.2158 6.02746 9.73515 6.32787 9.43867Z" fill="#999"/>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url(config('roro.prefix').'/login') }}" class="underline text-gray-900 dark:text-white">Login</a></div>
                            </div>

                           
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;fill:#999" xml:space="preserve">
<g>
	<g>
		<path d="M152.416,304.162c-2.889-4.836-9.152-6.414-13.986-3.525c-44.199,26.405-76.418,70.135-88.394,119.975
			c-1.317,5.477,2.057,10.984,7.534,12.3c0.801,0.193,1.602,0.285,2.392,0.285c4.606,0,8.785-3.143,9.909-7.819
			c10.703-44.538,39.505-83.622,79.021-107.23C153.727,315.259,155.305,308.997,152.416,304.162z"/>
	</g>
</g>
<g>
	<g>
		<path d="M236.809,273.563c-15.038,0-30.016,1.745-44.518,5.187c-5.481,1.3-8.869,6.798-7.568,12.279
			c1.113,4.69,5.296,7.846,9.915,7.846c0.78,0,1.572-0.09,2.363-0.278c12.961-3.076,26.354-4.636,39.807-4.636
			c5.633,0,10.199-4.566,10.199-10.199S242.442,273.563,236.809,273.563z"/>
	</g>
</g>
<g>
	<g>
		<path d="M404.816,308.113c-1.685-1.797-3.393-3.579-5.143-5.329c-29.761-29.762-66.236-50.37-106.007-60.423
			c42.048-20.964,71.004-64.411,71.004-114.5C364.669,57.358,307.311,0,236.809,0S108.948,57.358,108.948,127.86
			c0,50.089,28.957,93.536,71.004,114.5c-39.771,10.053-76.245,30.661-106.007,60.423c-43.502,43.502-67.46,101.341-67.46,162.864
			c0,5.633,4.566,10.199,10.199,10.199h309.072C344.472,497.944,372.406,512,403.564,512c56.216,0,101.951-45.735,101.951-101.951
			C505.515,354.251,460.456,308.787,404.816,308.113z M129.346,127.86c0-59.254,48.208-107.462,107.463-107.462
			c59.255,0,107.462,48.208,107.462,107.462c0,59.254-48.208,107.463-107.462,107.463
			C177.555,235.323,129.346,187.116,129.346,127.86z M27.128,455.448c5.338-111.036,97.347-199.727,209.681-199.727
			c54.695,0,104.564,21.035,141.963,55.431c-44.274,11.103-77.159,51.23-77.159,98.897c0,16.302,3.852,31.72,10.686,45.4H27.128z
			 M403.564,491.602c-44.968,0-81.553-36.585-81.553-81.553c0-44.968,36.585-81.553,81.553-81.553
			c44.968,0,81.553,36.585,81.553,81.553C485.117,455.017,448.532,491.602,403.564,491.602z"/>
	</g>
</g>
<g>
	<g>
		<path d="M456.996,404.572l-32.881-32.883c-3.983-3.983-10.441-3.983-14.425,0c-3.983,3.983-3.983,10.441,0,14.425l15.584,15.584
			h-63.457c-5.633,0-10.199,4.566-10.199,10.199c0,5.633,4.566,10.199,10.199,10.199h63.231l-15.358,15.358
			c-3.983,3.983-3.984,10.441,0,14.424c1.992,1.992,4.602,2.987,7.212,2.987s5.221-0.996,7.212-2.987l32.882-32.882
			c1.912-1.912,2.987-4.507,2.987-7.212C459.983,409.079,458.908,406.484,456.996,404.572z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                                    
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="{{ url(config('roro.prefix').'/register') }}">Register</a>
                                </div>
                            </div>

                        </div>

                        
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
