
// Hide element
var post_control = document.getElementsByClassName("post-control");


function hide(element){
    element.style.display = "none";
}
function show(element){
    element.style.display = "";
}


// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (event.target.matches('.control-post')) {
        let controller = event.target.nextElementSibling;
        show(controller);
    }else{
        var i;
        for (i = 0; i < post_control.length; i++) {
            hide(post_control[i]);
        }
    }
  }

function deleteImg(event){
    if(event.target.id = "delete"){
        event.target.parentNode.remove();
    }
}
let deleteImage = document.getElementById("delete");
deleteImage.addEventListener("click", deleteImg);
