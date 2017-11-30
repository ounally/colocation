<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Photo de profil</h2>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('avatar')}}" enctype="multipart/form-data" class="update_av" id="update_av">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="file" type="file" name="avatar" class="input-file" accept="image/*"><br>
                <button class="btn_tlink btn-block" type="submit">mettre à jour</button>
            </form>
        </div>
    </div>
</div>
<script>
(function($) {
        jQuery(document).ready(function($) {
            jQuery("#update_av").validate();
        })
}(jQuery));
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