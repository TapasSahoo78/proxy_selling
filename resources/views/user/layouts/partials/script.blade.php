<script src="{{ asset('user/js/plugins.js') }}"></script>
<script src="{{ asset('user/js/designesia.js') }}"></script>
<script src="{{ asset('user/js/validation.js') }}"></script>

<!-- RS5.0 Core JS Files -->
<script src="{{ asset('user/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script src="{{ asset('user/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>

<!-- RS5.0 Extensions Files -->
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('user/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<!-- current page only scripts -->

<script>
    jQuery(document).ready(function() {
        // revolution slider
        jQuery("#revolution-slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                }
            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            spinner: "off",
            gridwidth: 1140,
            gridheight: 600,
            disableProgressBar: "on"
        });
    });
</script>

<!--Start of Tawk.to Script-->
<script>
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5e4a18a6298c395d1ce84227/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

@stack('scripts')
