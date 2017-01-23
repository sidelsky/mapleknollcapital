(function(){

    "use strict";

    var $panels,
        $panel,
        $otherPanels,
        $this;

        // Container that wraps panels
        $panels = $('[data-panels]');
        //console.log($panels);

        // The panels
        $panel = $panels.find('.panel');
        //console.log($panel);

        // Other panels
        $otherPanels = $panel.parent().children();
        //console.log($otherPanels);

        // Hover on panel - fade other panels
        $panel.mouseover(function() {
            $this = $(this);
            $otherPanels.not($this).addClass("js-active");
        }).mouseout(function() {
            $otherPanels.not($this).removeClass("js-active");
        });


}());
