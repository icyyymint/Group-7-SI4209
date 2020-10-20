<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Adoption Cat</title>
</head>

<body>
    <!-- Navbar mulai -->
    <nav class="navbar navbar-expand-lg navbar-light bg-default">
        <div class="container">
            <a class="navbar-brand" href="Home-TCR.php">
                <img src="img/logo-telkom-catrescue.png" width="110" height="55" class="d-inline-block">
            </a>
            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
                aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="Home-TCR.php">Home</a>
                    <a class="nav-link active" href="Page-Adoption.php">Adopt<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Donate</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>

                <div class="form-inline ml-auto">
                    <a class="btn btn-sm btn-outline-secondary mr-3" href="page-login.php" role="button">Login</a>
                    <a class="btn btn-sm btn-secondary" href="page-signup.php" role="button">Sign up</a>
                </div>
            </div>
    </nav>
    <!-- Navbar selesai -->


    <!-- Form search kucing mulai -->
    <div class="container">
        <h3 class="text-center mb-4">Search cat for adoption...</h3>
        <form>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Cat Age</label>
                    <select class="custom-select" id="validationDefault04">
                        <option selected disable value="">Select cat by age</option>
                        <option>All</option>
                        <option>Kitten</option>
                        <option>Young</option>
                        <option>Adult</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Breed</label>
                    <select class="custom-select" id="validationDefault04">
                        <option selected disable value="">Select cat by breed</option>
                        <option>All</option>
                        <option>Local</option>
                        <option>Muchkin</option>
                        <option>Persian</option>
                        <option>Anggora</option>
                        <option>Mix breed</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Cat Gender</label>
                    <select class="custom-select" id="validationDefault04">
                        <option selected disable value="">Select cat by gender</option>
                        <option>All</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Cat Behaviour</label>
                    <select class="custom-select" id="validationDefault04">
                        <option selected disable value="">Select cat by behaviour</option>
                        <option>All</option>
                        <option>Playful</option>
                        <option>Lazy</option>
                        <option>Special Needs</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <button class="btn btn-secondary mx-auto d-block" type="submit">Search Adoption</button>
            </div>
        </form>
    </div>
    <!-- Form search kucing selesai -->

</body>

</html>