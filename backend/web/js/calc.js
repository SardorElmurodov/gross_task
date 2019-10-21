(function($) {
    $(".min").text(43000000);
    $(".max").text(55000000);
    $(".current-cost").text(50000000);
    $(".current-cost").css('left', 550 / 12 + 5 + '%');

    $("#cost-slide").slider({
        range: "min",
        min: 43000000,
        max: 55000000,
        value: 50000000,
        step: 10000,
        slide: function(event, ui) {
          $(".current-cost").text(ui.value);
          $(".current-cost").css('left', $(".ui-slider-range").width());
          loancalculate();
        }
    });
    $("#cost").text($("#cost-slide").slider("value"));
    loancalculate();

})(jQuery);

function loancalculate()
{
    var cost_amount = parseInt($(".current-cost").text());
    $("#policy_cost_uz").text(cost_amount * 2 / 4 + " сум");
    $("#policy_cost_usd").text((cost_amount * 2 / (4 * 9450)).toFixed() + " USD");

}