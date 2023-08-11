<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">



    <title>Posts</title>
</head>

<body>
    <h1 class="text-center">POSTS List</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-4 Addmodal" data-bs-toggle="modal" data-bs-target="#datamodal">
        Add Post
    </button>

    <!-- Modal -->
    <div class="modal fade" id="datamodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="form-id">

                        <div class="mb-3">
                            <label for="postname" class="fw-bold">Post Name</label>
                            <input type="text" name="postname" id="postname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="postdesc" class="fw-bold">Post Description</label>
                            <textarea name="postdesc" id="postdesc" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3 d-none">
                            <label for="author_name" class="fw-bold">Author</label>
                            <input type="text" name="author_name" id="author_name" class="form-control">
                        </div>


                        <div class="modal-footer">
                            <input type="hidden" name="id" id="id">
                            <button type="button" class="btn btn-secondary closeModel"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary" id="save">Add Post</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- POSTS LIST --}}
<div id="postbox">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $('.Addmodal').on('click', function () {
                $('#form-id')[0].reset();
                $('#id').val('');
            });
           
        });
    </script>




</body>

</html>
