function viewAnime () {
    var test = document.getElementById("anime");
    if(test.className === "display") {
        test.className = "hidden";
    }
    else {
        test.className = "display";
    }
}

function viewManga () {
    var test = document.getElementById("manga");
    if(test.className === "display") {
        test.className = "hidden";
    }
    else {
        test.className = "display";
    }
}

function viewLight () {
    var test = document.getElementById("light");
    if(test.id === "light") {
        test.id = "light_";
    }
    else {
        test.id = "light";
    }
}
