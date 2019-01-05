$(document).ready(function(){

    printHoroscope();    
    function printHoroscope(){
        $.ajax({
            method: 'GET',
            url: "./viewHoroscope.php",
        })
        .done(function(data){
            $('.result').html(data);
        })
    }
    
    $("#saveButton").on("click", function() { saveHoroscope(); });

    function saveHoroscope(){
        var birthDate = $('#date').val();
        if(birthDate !== ""){

            $.ajax(
            {
                method: 'POST',
                url: "./addHoroscope.php",
                data: {birthDate: birthDate}
            })
            .done(function(data){
                printHoroscope();
            })
        }
    }
    
    $("#updateButton").on("click", function() { updateHoroscope(); });

    function updateHoroscope(){
        var birthDate = $('#date').val();
        if(birthDate !== ""){

            $.ajax(
            {
                method: 'PUT',
                url: "./updateHoroscope.php",
                data: {birthDate: birthDate}
            })
            .done(function(data){
                printHoroscope();
            })
        }
    }

    $("#deleteButton").on("click", function() { deleteHoroscope(); });
    function deleteHoroscope(){

        var birthDate = $('#date').val();

        $.ajax({
            method: 'DELETE',
            url: "./deleteHoroscope.php",
        })
        .done(function(data){
            printHoroscope();
        })
    }
});