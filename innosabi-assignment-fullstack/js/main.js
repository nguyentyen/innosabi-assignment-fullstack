var entireText = document.getElementById("search-content").
    innerHTML;
function findIt(){
    var searchedText = document.getElementById(
        "search").value;
    alert(searchedText);
    if(entireText.toLocaleLowerCase().indexOf(
        searchedText.toLowerCase()) > -1) {
        var tempText = entireText.toLowerCase().replace(
            searchedText.toLowerCase(), "<span " +
            "style='background-color:yellow'>" +
            searchedText.toLowerCase() + "</span>");
        document.getElementById("search-content").innerHTML =
            tempText;
    }

}