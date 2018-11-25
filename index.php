<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- Default HTML Form Example -->
        <form class="form" action="http://localhost:8000/server.php" method="POST">

            <!-- Uncomment the section below for the FILE UPLOAD example -->
            <!-- <div class="form-group">
                <label>File</label>
                <input id="fileInput" class="form-control" type="file">
            </div> -->

            <div class="form-group">
                <input class="form-control" type="text" name="email" value="john.doe@gmail.com">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name" value="John Doe">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submt">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
    /*
    |---------------------------------------------------
    | JavaScript Client Code Examples
    |---------------------------------------------------
    |
    | Uncomment section by section to test the examples.
    |
    */

    ////////////////////
    // POST FORM DATA //
    ////////////////////

    // const data = new FormData();
    // data.set('name', 'John Doe');
    // data.set('email', 'john.doe@gmail.com');

    // window.$.ajax({
    //     method: 'POST',
    //     url: 'http://localhost:8000/server.php',
    //     data,
    //     processData: false,
    //     contentType: false,
    //     // headers: {
    //     //     'Content-Type': 'multipart/form-data',
    //     // },
    //     success(response) {
    //         console.log('OK', response);
    //     },
    //     error(response) {
    //         console.log('ERROR', response);
    //     },
    // });

    ///////////////////
    // PUT FORM DATA //
    ///////////////////

    // const data = new FormData();
    // data.set('name', 'John Doe');
    // data.set('email', 'john.doe@gmail.com');

    // window.$.ajax({
    //     method: 'PUT',
    //     url: 'http://localhost:8000/server.php',
    //     data,
    //     processData: false,
    //     contentType: false,
    //     // headers: {
    //     //     'Content-Type': 'multipart/form-data',
    //     // },
    //     success(response) {
    //         console.log('OK', response);
    //     },
    //     error(response) {
    //         console.log('ERROR', response);
    //     },
    // });

    /////////////////
    // FILE UPLOAD //
    /////////////////

    // const fileInput = document.querySelector('#fileInput');

    // fileInput.onchange = (event) => {
    //     const data = new FormData();

    //     data.set('file', fileInput.files[0]);

    //     window.$.ajax({
    //         method: 'PUT',
    //         url: 'http://localhost:8000/server.php',
    //         data,
    //         processData: false,
    //         contentType: false,
    //         // headers: {
    //         //     'Content-Type': 'multipart/form-data',
    //         // },
    //         success(response) {
    //             console.log('OK', response);
    //         },
    //         error(response) {
    //             console.log('ERROR', response);
    //         },
    //     });
    // };
    </script>
</body>
</html>
