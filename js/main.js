
function get_genres() {
    $.ajax({
        url: "backend/fetchers/genre-fetcher.php?screen=return_genres",
        success: function(result){
            result = JSON.parse(result)
            result.forEach(function(genre) {
                $("#genre_select > select").append("<option>"+genre+"</option>");
            })
            get_films_by_genre();
        }
    });

}

$(document).on('change','#genre_select',function(){
    get_films_by_genre();
});

function get_films_by_genre(){
    param = $("#genre_select > select").find(":selected").text();
    $.ajax({
        url: "backend/fetchers/genre-fetcher.php?screen=return_filtered_movies&genre=" + param,
        success: function(result){
            $("#genre_div").html(result);

        }
    });
}



