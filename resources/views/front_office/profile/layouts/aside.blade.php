@include('front_office/profile/layouts.avatar')
<div class="user_menu">
    <div class="block_user_av">
    <img class="img_user_tk" src="uploads/avatars/{{Auth::user()->photo}}"> 
    <a href="#"  id="myBtn"><i class="fa fa-camera" aria-hidden="true"></i></a>
    </div>
    <h3>{{ Auth::user()->FullName() }}</h3>
    <div id="menu_for_user">
        @include('front_office/profile/layouts.menu')
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>