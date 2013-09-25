            jQuery(window).load(function() {
                jQuery('.scroll-pane').each(
                function()
                {
                    $(this).jScrollPane(
                    {
                        showArrows: $(this).is('.arrow')
                    }
                );
                    var api = $(this).data('jsp');
                    var throttleTimeout;
                    $(window).bind(
                    'resize',
                    function()
                    {
                        if ($.browser.msie) {
                            if (!throttleTimeout) {
                                throttleTimeout = setTimeout(
                                function()
                                {
                                    api.reinitialise();
                                    throttleTimeout = null;
                                },
                                50
                            );
                            }
                        } else {
                            api.reinitialise();
                        }
                    }
                );
                }
            )
            });