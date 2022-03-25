<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Decide Precise Calculator</title>
</head>

<body>
    <?php
    $ans = 0;
    if (isset($_POST['res'])) {
        $p = $_POST['p'];
        $r = $_POST['r'];
        $t = $_POST['t'];
        $ans =  $p * (pow((1 + $r / 100), $t));
    }
    ?>
    <div class="container my-5">
        <div class="row my-5">
            <div class="bg-danger mx-5 col-sm-10 justify-content-center">
                <h1 class="text-center text-white">Decide Precise Technologies</h1>
            </div>
        </div>
        <div class="row">
            <form action="" method="post" class="card my-5">
            <div class="mb-3 row my-5">
                <label for="staticEmail" class="col-sm-2 col-form-label">Principal</label>
                <div class="col-sm-10">
                <input type="text"class="form-control" name="p" value="">
                </div>
            </div>
            <div class="mb-3 row my-5">
                <label for="staticEmail" class="col-sm-2 col-form-label">Rate</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="r" value="">
                </div>
            </div>
            <div class="mb-3 row my-5">
                <label for="staticEmail" class="col-sm-2 col-form-label">Time</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="t" value="">
                </div>
            </div>
                <input type="submit" value="Calculate" class="btn btn-success" name="res">
                <div class="row my-3">
                    <div class="col-sm-12">
                        <input type="text" disabled class="form-control" value="<?php echo $ans; ?>">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>