/**
 * 
 *
 * Simples plugin para cabeçalho.
 * Objetivo: tornar o cabeçalho fixo ao iniciar rolagem da página
 * 
 * 
 */
(function ($) {
    let header = null;
    let elementAfterHeader = null;
    let customClass = null;

    let headerHeight = null;
    let newHeaderHeight = null;
    let headerIsFixed = false;

    /**
     * @param {String} elementAfterHeaderSelector seletor do elemento imediatamente após o header
     * @param {Object} config objeto com classe opcional a ser adicionada ao header e a altura do header fixo
     * 
     * config = {
     *      class: 'example',
     *      newHeight: 50
     * }
     * 
     */
    $.fn.monitore = function (elementAfterHeaderSelector, config = null) {
        elementAfterHeader = $(elementAfterHeaderSelector);
        customClass = config.class ?? null;
        header = $(this);
        headerHeight = header.height();
        newHeaderHeight = config.newHeight ?? headerHeight;

        update();

        $(window).on("scroll", function () {
            update();
        });
    };

    function update() {
        let scrollTop = $(this).scrollTop();
        let diff = scrollTop - (headerHeight / 2);

        if (diff >= 0) {
            if (!headerIsFixed) {
                headerIsFixed = true;
                fixe();
            }
        } else {
            if (headerIsFixed) {
                headerIsFixed = false;
                unfixe();
            }
        }
    }

    function fixe() {
        let css = {
            "background-color": "rgb(0, 0, 0, 0.98)",
            "box-shadow": "0 0 12px -2px rgb(0, 0, 0, 0.75)",
            "color": "#f1f1f1",
        };

        if (customClass) {
            header.addClass(customClass).css({
                "height": (newHeaderHeight) + "px",
                "position": "fixed",
                "top": "0",
                "z-index": "100",
                "transition": "0.25s",
            });
        } else {
            header.css({
                ...css,
                "height": (newHeaderHeight) + "px",
                "position": "fixed",
                "top": "0",
                "z-index": "100",
                "transition": "0.25s",
            });
        }


        elementAfterHeader.css({
            "margin-top": (newHeaderHeight + (headerHeight / 2)) + "px",
        });
    }

    function unfixe() {
        if (customClass)
            header.removeClass(customClass)
        header.css({
            "background-color": "",
            "height": headerHeight + "px",
            "position": "relative",
            "box-shadow": "none",
            "color": "none"
        });

        elementAfterHeader.css({
            "margin-top": "0px"
        });
    }

}(jQuery));