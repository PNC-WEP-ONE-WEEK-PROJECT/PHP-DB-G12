
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
        swal({
            title: "Are you sure?",
            text: "Do you really want to delete this photo?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Your image has been deleted successfully!!", {
                icon: "success",
              });
            event.target.parentElement.remove();
            } else {
              swal("Nothing deleted!");
            }
          });
    }
}
let deleteImage = document.getElementById("delete");
if(deleteImage != null){
    deleteImage.addEventListener("click", deleteImg);
}

// loadfile image
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};

