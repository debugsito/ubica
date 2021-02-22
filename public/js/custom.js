var custom = document.getElementsByClassName("Tab");

Array.prototype.forEach.call(custom, function(tab) {
    tab.addEventListener("click", setActiveClass);
});

function setActiveClass(evt) {
    Array.prototype.forEach.call(custom, function(tab) {
        tab.classList.remove('active');
    });

    evt.currentTarget.classList.add('active');
}

let min = 10;
let max = 100;

const calcLeftPosition = value => 100 / (100 - 10) *  (value - 10);

$('#rangeMin').on('input', function(e) {
    const newValue = parseInt(e.target.value);
    if (newValue > max) return;
    min = newValue;
    $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
    $('#min').html(newValue);
    $('#line').css({
        'left': calcLeftPosition(newValue) + '%',
        'right': (100 - calcLeftPosition(max)) + '%'
    });
});

$('#rangeMax').on('input', function(e) {
    const newValue = parseInt(e.target.value);
    if (newValue < min) return;
    max = newValue;
    $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
    $('#max').html(newValue);
    $('#line').css({
        'left': calcLeftPosition(min) + '%',
        'right': (100 - calcLeftPosition(newValue)) + '%'
    });
});
$('.tab-content-wrapper > div').eq(0).show();
$('.tab-nav-wrapper ul li a').click(function(){
    $('.tab-content-wrapper > div').hide();
    $('.tab-content-wrapper > div').eq($(this).parent().index()).show();
});
$('.closeLink').click( function(e) {
    e.preventDefault();
});
