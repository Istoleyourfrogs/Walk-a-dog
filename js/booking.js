$(document).ready(function () {
    var valueSelect = $('#numberOfDogs');
    var valueSelect2 = $('#typeWalk');
    var dog = $('#dog');

    //dog picturs
    var dogPic1 = $('img[alt="dog1"]');
    var dogPic2 = $('img[alt="dog2"]');
    var dogPic3 = $('img[alt="dog3"]');
    dogPic1.hide();
    dogPic2.hide();
    dogPic3.hide();

    //dog form segments
    var dog1 = $('div[dog="1"]');
    var dog2 = $('div[dog="2"]');
    var dog3 = $('div[dog="3"]');
    dog1.hide();
    dog2.hide();
    dog3.hide();

//Changes the amount of dog forms based on dropdown number
    valueSelect.on('change', function () {


        if(valueSelect.val() === '0'){
            dog1.fadeOut('slow');
            dog2.fadeOut('slow');
            dog3.fadeOut('slow');
            dogPic1.fadeTo('slow',0);
            dogPic2.fadeTo('slow',0);
            dogPic3.fadeTo('slow',0);
        }

        if(valueSelect.val() === '1'){
            dog1.fadeTo('slow',1);
            dog2.fadeTo('slow',0);
            dog3.fadeTo('slow',0);
            dogPic1.fadeTo('slow',1);
            dogPic2.fadeTo('slow',0);
            dogPic3.fadeTo('slow',0);

        }
        if(valueSelect.val() === '2'){
            dog1.fadeTo('slow',1);
            dog2.fadeTo('slow',1);
            dog3.fadeTo('slow',0);
            dogPic1.fadeTo('slow',1);
            dogPic2.fadeTo('slow',1);
            dogPic3.fadeTo('slow',0);
        }
        if(valueSelect.val() === '3'){
            dog1.fadeTo('slow',1);
            dog2.fadeTo('slow',1);
            dog3.fadeTo('slow',1);
            dogPic1.fadeTo('slow',1);
            dogPic2.fadeTo('slow',1);
            dogPic3.fadeTo('slow',1);
        }

    });

    valueSelect2.on('change',function () {
        var date = $('div[walk="date"]');
        var time = $('div[walk="time"]');
        var day = $('div[walk="day"]');


        if(valueSelect2.val() === ''){
            date.addClass("none");
            time.addClass("none");
            day.addClass("none");
            date.addClass("none");

        }
        if(valueSelect2.val() === 'oneTime'){
            date.removeClass("none");
            time.removeClass("none");
            day.addClass("none");
            date.removeClass("none");
        }
        if(valueSelect2.val() === 'daily'){
            date.removeClass("none");
            time.removeClass("none");
            day.addClass("none");
            date.addClass("none");
        }
        if(valueSelect2.val() === 'weekly'){
            date.removeClass("none");
            time.removeClass("none");
            day.removeClass("none");
            date.addClass("none");

        }

    });

    //adds +381 when clicked on input phone
    var phone = $('input[name="phone"]');
    phone.focus(function () {
        phone.val('+381 ');
    });

    //adding submit button only after filling out every necessary field
    validate();
    var inputs = $('input[name="firstName"], input[name="lastName"], input[name="email"]');
    inputs.change(validate);
    //checks if there are any values entered in the inputs
    function validate(){
        if (($('input[name="firstName"]').val().length > 0) && ($('input[name="lastName"]').val().length > 0) && ($('input[name="email"]').val().length > 0)) {
            $('button[name="submit"]').fadeTo('slow',1);
        }
        else {
            $('button[name="submit"]').hide();

        }
    }



}) ;