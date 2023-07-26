<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="{{ asset('css/image.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container text-center position-absolute top-50 start-50 translate-middle">
    <div class="row row-cols-5">
        <img src="{{ asset('images/MOB_Game_Asset_01.jpg') }}" alt="" id="modalTrigger1"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_02.jpg') }}" alt="" id="modalTrigger2"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_03.jpg') }}" alt="" id="modalTrigger3"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_04.jpg') }}" alt="" id="modalTrigger4"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_05.jpg') }}" alt="" id="modalTrigger5"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_06.jpg') }}" alt="" id="modalTrigger6"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_07.jpg') }}" alt="" id="modalTrigger7"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_08.jpg') }}" alt="" id="modalTrigger8"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_09.jpg') }}" alt="" id="modalTrigger9"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_10.jpg') }}" alt="" id="modalTrigger1"
            data-bs-target="#staticBackdrop" class="col">
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Wait for the document to be ready
    $(document).ready(function() {
        // When the modal trigger image is clicked
        $("#modalTrigger1").click(function() {
            // Show the modal
            $("#staticBackdrop").modal("show");
        });

        // Optional: If you want to close the modal when clicking outside of it
        $("#staticBackdrop").on("click", function(event) {
            if ($(event.target).hasClass("modal")) {
                $(this).modal("hide");
            }
        });
    });
</script>
