$(function() {

    Jknob();

    // progress bars
    $('.progress .progress-bar').progressbar({
            display_text: 'none'
    });


    // top products
    var dataStackedBar = {
            labels: ['Q1','Q2','Q3','Q4','Q5'],
            series: [
                [2350,3205,4520,2351,5632],
                [2541,2583,1592,2674,2323],
                [1212,5214,2325,4235,2519],
            ]
    };
    new Chartist.Bar('#chart-top-products', dataStackedBar, {
            height: "250px",
            stackBars: true,
            axisX: {
                showGrid: false
            },
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value / 1000) + 'k';
                }
            },
            plugins: [
                Chartist.plugins.tooltip({
                    appendToBody: true
                }),
                Chartist.plugins.legend({
                    legendNames: ['Mobile', 'Laptop', 'Computer']
                })
            ]
    }).on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 40px'
                });
            }
    });


    // notification popup
    // toastr.options.closeButton = true;
    // toastr.options.positionClass = 'toast-bottom-left';
    // toastr.options.showDuration = 1000;
    // toastr['info']('Hello, welcome to Lucid, a unique admin Template.');

});

function Jknob() {
    $('.knob').knob({
        draw: function() {
        }
    });
}
