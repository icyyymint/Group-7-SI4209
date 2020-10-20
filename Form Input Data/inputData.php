<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <style>
        body {
            background-image: url('logo/tcr.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .card {
            margin: auto;
            float: none;
            margin-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="logo/tcr transparent.png" class="img-fluid" width="150" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="#">Donate</a>
                <a class="nav-link" href="#">Blog</a>
                <a class="nav-link" href="#">Contact</a>
            </div>
            <div class="form-inline ml-auto">
                <button class="btn btn-outline-danger mr-3" type="button">Login</button>
                <button class="btn btn-danger" type="button">Sign Up</button>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card" style="width:750px;background-color: #ffdbcc;">
            <div class="card-body">

                <h5 class="card-title" style="text-align: center;">Registrasi Data Pelanggan</h5>

                <form>
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" maxlength="20"
                            placeholder="Your cat's name">
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Cat's age</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="inputYear" min="0" placeholder="Year">

                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="inputMonth" min="1" max="12" maxlength="2"
                                    placeholder="Month">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputType">Gender</label>
                        <select class="custom-select" id="type" name="type" required>
                            <option name="Male">Male</option>
                            <option name="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputBreed">Breed</label>
                        <input type="text" class="form-control" id="inputBreed" maxlength="20"
                            placeholder="Your cat's breed">
                    </div>

                    <div class="form-group">
                        <label for="traits">Cat's Trait(s)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="trai1" name="traits[]" value="Playful">
                            <label class="form-input-label" for="gridCheck1">Playful</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="trait2" name="traits[]" value="Lazy">
                            <label class="form-check-label" for="gridCheck2">Lazy</label>
                        </div>
                        <div class="form-check mt-2">
                            <label for="name3">
                                <input class="form-check-input" type="checkbox" onclick="var input = document.getElementById('name2','name4'); if(this.checked){ input.disabled = false;
                                    input.focus();}else{input.disabled=true;}" />
                                Special Needs <br>
                                <input class="form-control mt-2" type="text" id="name2" name="name2" disabled="disabled" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNotes">Notes about this cat</label>
                        <textarea class="form-control" id="inputNotes" rows="3"></textarea>
                    </div>
                    <button class="btn btn-danger" >Back</button>
                    <button type="submit" class="btn btn-danger">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>

</html>