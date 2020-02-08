$(document).ready(function(){
    var availableTags = [
        "Aberystwyth",
        "Aston",
        "Bath",
        "Bedfordshire",
        "Bradford",
        "Cardiff Met",
        "Coventry",
        "Dundee",
        "Edinburgh",
        "Glyndwr",
        "Hull",
        "Kent",
        "Lancaster",
        "Leeds",
        "Leeds Beckett",
        "Leicester",
        "LJMU – Girls in Tech",
        "Newcastly",
        "Northumbria",
        "Nottingham Trent",
        "Open University",
        "Plymouth",
        "Reading",
        "Salford",
        "Stirling",
        "Sunderland",
        "Surrey",
        "Sussex",
        "University of South Wales",
        "Warwick",
        "Wolverhampton",
        "Birkbeck",
        "Brunel",
        "Goldsmiths",
        "GSM",
        "London Met",
        "Queen Mary",
        "Royal Holloway"
    ];
    $( "#name" ).autocomplete({
        appendTo: $("#div_suggestions").parent(),
        source: availableTags,
        messages: {
            noResults: '',
            results: function(amount) {
                return ''
            }
        }
    });
});