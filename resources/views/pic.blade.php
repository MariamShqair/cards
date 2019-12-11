
<html>
<head></head>
<body>
<div class="container">

    <form action="/pic" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">

            <div class="col-md-6">

                <input type="file" name="photo" class="form-control">

            </div>

            <div class="col-md-6">

                <button type="submit" class="btn btn-success">Upload</button>

            </div>

        </div>

    </form>


</div>


</body>
</html>


