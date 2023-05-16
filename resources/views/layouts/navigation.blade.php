<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User managment page</title>
    <!-- cnd za bootstrap jer nema u alravelu i bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Treba da se ubaci bootstrap, ja sam preko cdn-a -->
    <!-- cdn za plugin datatables -->
    <!-- <link rel="stylesheet" href="cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <div class="container-fluid p-0">
        <div class="d-flex bd-highlight">
            <!-- style="width: 4vw;" style sam dodao da bih mogao da promenim sirinu kolone sa leve i desne zato sto col-sm-1 nije bilo dovoljno malo a row zahteva da ima col -->

            <nav class="p-1 flex-shrink-1 bd-highlight">
                <div class="d-flex flex-column " style="height: 100vh; ">
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" style="margin-top: 5vh;">
                        <li class="nav-item">
                            <button type="button" class="btn"><img src="images/navbarIkone/home.png" alt="Ikona dugmeta"></button>
                        </li>
                        <li>
                            <button type="button" class="btn"><img src="images/navbarIkone/profile.png" alt="Ikona dugmeta"></button>
                        </li>
                        <li>
                            <button type="button" class="btn"><img src="images/navbarIkone/task.png" alt="Ikona dugmeta"></button>
                        </li>
                        <li>
                            <button type="button" class="btn"><img src="images/navbarIkone/gear.png" alt="Ikona dugmeta"></button>
                        </li>
                    </ul>
                    <!-- <div class="d-flex align-items-end justify-content-center" style="margin-bottom: 20px;">

                        <button type="button" class="btn"><i class="bi bi-chat-left"></i></button>

                    </div> -->
                </div>
            </nav>
            <!-- style="width: 96vw;" style sam dodao da bih mogao da promenim sirinu kolone sa leve i desne zato sto col-sm-1 nije bilo dovoljno malo a row zahteva da ima col -->
            <main class="pt-3 w-100 bd-highlight ">
                <div class="ps-5 w-100 bd-highlight">
                    <div class="row">
                        <div class="col-md-10 ">
                            <img src="images/logo-link.png" alt="Slika logo-a">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="mt-3 btn btn-outline-danger border-danger border border-3 text-danger">Log out</button>
                        </div>
                    </div>
                    @yield("main")
                </div>


            </main>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                'columnDefs': [{
                    'targets': [0, 5],
                    'orderable': false, // set orderable false for selected columns
                }]
            });
        });
    </script>
</body>

</html>