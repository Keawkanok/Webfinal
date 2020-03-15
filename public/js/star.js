var Ratings = -1,
    uID = 0;
console.log(uID);



$(document).ready(function() {
    resetStarColors();

    if (localStorage.getItem('Ratings') != null)
        setStar(parseInt(localStorage.getItem('Ratings')));


    $('.fa-meteor').on('click', function() {

        Ratings = parseInt($(this).data('index'));
        localStorage.setItem('Ratings', Ratings);

        console.log(Ratings);
        uID = Ratings;
        console.log(uID);

        $ajax({
            url: "/Ratings/",
            medthod: "POST",
            dataType: 'json',
            data: {
                save: 1,
                uID: uID,
                user_id: user_id,
                _token: token
            },
            success: function(r) {
                uID = r.uID;
                console.log(uID);
            }

        });

    });

    // พอ โดนเมาส์จะเป็นที่ เราตั้งทันที่
    $('.fa-meteor').mouseover(function() {
        resetStarColors();

        var currentIndex = parseInt($(this).data('index'));
        setStar(currentIndex);
        // console.log(currentIndex);


    });
    $('.fa-meteor').mouseleave(function() {
        resetStarColors();
        $('.info').html("Your vote: <b>" + "Not Rated" + "<b>");

        if (Ratings != -1)
            setStar(Ratings);
    });
});

function saveToTheBD() {

}
var VeryGood = String("Very Good");
var Good = String("Good");
var Ok = String("Ok");
var VeryPoor = String("Very Poor");
var Poor = String("Poor");
var NotRated = String("Not Rated");


function setStar(max) {
    for (var i = 0; i <= max; i++)
        $('.fa-meteor:eq(' + i + ')').css('color', '#FF1493');
    if (i == 5) {
        $('.info').html("Your vote: <b>" + VeryGood + "<b>");
    } else if (i == 4) {
        $('.info').html("Your vote: <b>" + Good + "<b>");
    } else if (i == 3) {
        $('.info').html("Your vote: <b>" + Ok + "<b>");
    } else if (i == 2) {
        $('.info').html("Your vote: <b>" + VeryPoor + "<b>");
    } else if (i == 1) {
        $('.info').html("Your vote: <b>" + Poor + "<b>");
    } else {
        $('.info').html("Your vote: <b>" + NotRated + "<b>");
    }


}

function resetStarColors() {
    $('.fa-meteor').css('color', 'black');
}