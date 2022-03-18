
// Hide element
var post_control = document.getElementsByClassName("post-control");
var space_img = document.getElementById("image_space");
let modal = document.getElementById("my-modal");
let btn_post = document.getElementsByClassName("open-create");
let button = document.getElementById("ok-btn");


function hide(element){
    element.style.display = "none";
}
function show(element){
    element.style.display = "";
}

// We want the modal to open when the Open button is clicked
if(btn_post.length > 0){
  btn_post[0].onclick = function() {
    modal.style.display = "block";
  }
  btn_post[1].onclick = function() {
    modal.style.display = "block";
  }
}
// We want the modal to close when the OK button is clicked
function close_create() {
  modal.style.display = "none";
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
              })
              ;
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


