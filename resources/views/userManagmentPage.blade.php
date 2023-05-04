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
    <style>
        body {
            background-color: #ff4d4d;
            overflow: hidden;
        }

        ul {

            margin-block-end: 1em;
        }

        li:first-child {
            margin-top: 6vh;
        }

        li {

            margin: 5px;
        }

        main {
            background-color: white;
            border-top-left-radius: 3em;
            padding: 0;
        }

        i {
            color: white;
            font-size: 20px;
        }

        #naslov {
            border-bottom: 1px solid black;

        }

        #praznoPoredNaslova {
            border-bottom: 1px solid black;
            border-right: 1px solid black;
        }

        nav {
            max-width: 4vw;
        }

        label{
            margin: 20px 20px 0px;
        }
          .modal .modal-dialog {
          width: 25%;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="d-flex bd-highlight">
            <!-- style="width: 4vw;" style sam dodao da bih mogao da promenim sirinu kolone sa leve i desne zato sto col-sm-1 nije bilo dovoljno malo a row zahteva da ima col -->

            <nav class="p-1 flex-shrink-1 bd-highlight">
                <div class="d-flex flex-column " style="height: 100vh; ">
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" style="margin-top: 5vh;">
                        <li class="nav-item">
                            <button type="button" class="btn"><i class="bi bi-house"></i></button>
                        </li>
                        <li>
                            <button type="button" class="btn"><i class="bi bi-bell"></i></button>
                        </li>
                        <li>
                            <button type="button" class="btn"><i class="bi bi-list-check"></i></button>
                        </li>
                        <li>
                            <button type="button" class="btn"><i class="bi bi-gear"></i></button>
                        </li>
                    </ul>
                    <div class="d-flex align-items-end justify-content-center" style="margin-bottom: 20px;">

                        <button type="button" class="btn"><i class="bi bi-chat-left"></i></button>

                    </div>
                </div>
            </nav>
            <!-- style="width: 96vw;" style sam dodao da bih mogao da promenim sirinu kolone sa leve i desne zato sto col-sm-1 nije bilo dovoljno malo a row zahteva da ima col -->
            <main class="p-0 w-100 bd-highlight ">
                <div class="d-flex bd-highlight">
                    <div class="p-3 flex-shrink-1 bd-highlight" id="praznoPoredNaslova">

                    </div>
                    <div class="p-2 w-100 bd-highlight" id="naslov">
                        <div class="row">
                            <div class="col-md-10 ">
                                <h1>User managment</h1>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-dark">Sign out</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex bd-highlight h-100">
                    <div class="p-3 flex-shrink-1 bd-highlight " id="praznoPoredNaslova">

                    </div>
                    <div class="p-2 w-100 bd-highlight">
                        <!-- Ovo treba da bude data tables al ne moze previse da se customizuje tako da sam morao rucno da bi izgledalo kao na slici -->
                        <div class="mt-3">
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th><button type="button" class="btn btn-outline-dark">Active</button></th>
                                        <th><button type="button" class="btn btn-outline-dark">Category</button></th>
                                        <th><button type="button" class="btn btn-outline-dark">Name</button></th>
                                        <th><button type="button" class="btn btn-outline-dark">Last name</button></th>
                                        <th><button type="button" class="btn btn-outline-dark">E-mail</button></th>
                                        <th><button type="button" class="btn btn-outline-dark">Action</button></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Zeleno</td>
                                        <td>Administrator</td>
                                        <td>Nemanja</td>
                                        <td>Peric</td>
                                        <td>n.peric@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Info</button>
                                            <button type="button" class="btn btn-secondary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zeleno</td>
                                        <td>User</td>
                                        <td>Marko</td>
                                        <td>Jovanovic</td>
                                        <td>m.j@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Info</button>
                                            <button type="button" class="btn btn-secondary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zeleno</td>
                                        <td>User</td>
                                        <td>Nikola</td>
                                        <td>Todic</td>
                                        <td>to.m@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Info</button>
                                            <button type="button" class="btn btn-secondary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zeleno</td>
                                        <td>Administrator</td>
                                        <td>Maja</td>
                                        <td>Tomic</td>
                                        <td>tomi.m@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Info</button>
                                            <button type="button" class="btn btn-secondary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- MY BUTTON -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add new user
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add new user</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container center">
                                                <!-- Smisliti bolje resenje za ovo -->
                                                <div class="row" style="justify-content: center; width:100%;">
                                                    <div class="col-m-6">
                                                        <div class="tile">
                                                            <div class="login show">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" name="fName" class="form-control" placeholder="First name" required>
                                                                    </div><!-- group -->
                                                                    <div class="form-group">
                                                                        <input type="text" name="lName" class="form-control" placeholder="Last name" required>
                                                                    </div><!-- group -->
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control" placeholder="Email" required>
                                                                    </div><!-- group -->
                                                                    <div class="form-group">
                                                                        <select name="Role" class="form-control" id="idRole">
                                                                            <option value="admin">Admin</option>
                                                                            <option value="user">User</option>
                                                                        </select>
                                                                    </div><!-- group -->
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Phone number" required>
                                                                    </div><!-- group -->
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="Password" required>
                                                                    </div><!-- group -->
                                                                    <!-- USER: Fname,Lname,Email,Role,PhoneNumber,Pass -->

                                                                    <button type="submit" class="btn btn-info btn-block">Create new user</button>
                                                                </form>
                                                            </div><!-- login -->
                                                        </div><!-- tile -->
                                                    </div><!-- col-6 -->
                                                </div><!-- row -->
                                            </div><!-- container -->
                                            </form>
                                        </div>
                                        <!-- <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div> -->
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>