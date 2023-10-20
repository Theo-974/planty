$(document).ready(function() {
    $('.minus1').click(function () {
        var input1 = $(".input1");
        var count = parseInt(input1.val()) - 1;
        count = count < 0 ? 0 : count;
        input1.val(count);
        input1.change();
        return false;
    });
    $('.plus1').click(function () {
        var input1 = $(".input1");
        input1.val(parseInt(input1.val()) + 1);
        input1.change();
        return false;
    });


    $('.minus2').click(function () {
        var input2 = $(".input2");
        var count = parseInt(input2.val()) - 1;
        count = count < 0 ? 0 : count;
        input2.val(count);
        input2.change();
        return false;
    });
    $('.plus2').click(function () {
        var input2 = $(".input2");
        input2.val(parseInt(input2.val()) + 1);
        input2.change();
        return false;
    });


    $('.minus3').click(function () {
        var input3 = $(".input3");
        var count = parseInt(input3.val()) - 1;
        count = count < 0 ? 0 : count;
        input3.val(count);
        input3.change();
        return false;
    });
    $('.plus3').click(function () {
        var input3 = $(".input3");
        input3.val(parseInt(input3.val()) + 1);
        input3.change();
        return false;
    });


    $('.minus4').click(function () {
        var input4 = $(".input4");
        var count = parseInt(input4.val()) - 1;
        count = count < 0 ? 0 : count;
        input4.val(count);
        input4.change();
        return false;
    });
    $('.plus4').click(function () {
        var input4 = $(".input4");
        input4.val(parseInt(input4.val()) + 1);
        input4.change();
        return false;
    });
});