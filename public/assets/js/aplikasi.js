function fancybox() {
    $("#view").on('click', function (event) {
        event.preventDefault();
        $.fancybox.open({
            href: $(this).attr("to"),
            type: 'iframe',
            padding: 2,
            opacity: true,
            titlePosition: 'over',
            openEffect: 'elastic',
            openSpeed: 150,
            closeEffect: 'elastic',
            closeSpeed: 150,
            width: 900,
            helpers: {
                title: {
                    type: 'inside'
                },
                overlay: {
                    css: {
                        'background': 'transparent',
                        'background': 'rgba(0, 0, 0, 0.6)'
                    }
                }
            }
        });
    });
}
fancybox();

// action function for fancy box
