// fonction qui va afficher une sorte de liste déroulante
function visibilite(thingId){
    var targetElement;
    var elements;
    targetElement = document.getElementById(thingId) ;
    elements = document.getElementsByClassName("Element")

    for (var i = 0; i < elements.length; i++) {
        if( !targetElement.isSameNode(elements[i]) ){
            elements[i].style.display = "none" ;
        }
    }
      
    if (targetElement.style.display == "none") {
            targetElement.style.display = "" ;
    } else{
            targetElement.style.display = "none" ;
    }
}