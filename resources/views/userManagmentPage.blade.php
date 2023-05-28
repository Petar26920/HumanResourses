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
                <div class="d-flex bd-highlight">
                    <div class="p-3 flex-shrink-1 bd-highlight" id="praznoPoredNaslova">

                    </div>
                    <div class=" w-100 bd-highlight">
                        <div class="row">
                            <div class="col-md-10 ">
                                <img src="images/logo-link.png" alt="Slika logo-a">
                            </div>
                            <div class="col-md-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button onclick="event.preventDefault();
                                                this.closest('form').submit();" type="button" class="mt-3 btn btn-outline-danger border-danger border border-3 text-danger">Log out</button>

                                </form>
                            </div>
                        </div>
                        <h1 class="text-center" id="naslov">User managment</h1>
                    </div>
                </div>
                <div class="d-flex bd-highlight h-100">
                    <div class="p-3 flex-shrink-1 bd-highlight " id="praznoPoredNaslova">

                    </div>
                    <div class="p-2 w-100 bd-highlight">
                        <!-- Ovo treba da bude data tables al ne moze previse da se customizuje tako da sam morao rucno da bi izgledalo kao na slici -->
                        <div class="mt-3">
                            <table id="table_id" class=" " class="table table-striped">
                                <thead class="crvena ">
                                    <tr>
                                        <th class="text-center">Active</th>
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Last name</th>
                                        <th class="text-center">E-mail</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>Zeleno</td>
                                        <td>Administrator</td>
                                        <td>Nemanja</td>
                                        <td>Peric</td>
                                        <td>n.peric@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn crvena">Info</button>
                                            <button type="button" class="btn siva">Edit</button>
                                            <button type="button" class="btn crna">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>Zeleno</td>
                                        <td>User</td>
                                        <td>Marko</td>
                                        <td>Jovanovic</td>
                                        <td>m.j@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn crvena">Info</button>
                                            <button type="button" class="btn siva">Edit</button>
                                            <button type="button" class="btn crna">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>Zeleno</td>
                                        <td>User</td>
                                        <td>Nikola</td>
                                        <td>Todic</td>
                                        <td>to.m@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn crvena">Info</button>
                                            <button type="button" class="btn siva">Edit</button>
                                            <button type="button" class="btn crna">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>Zeleno</td>
                                        <td>Administrator</td>
                                        <td>Maja</td>
                                        <td>Tomic</td>
                                        <td>tomi.m@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn crvena">Info</button>
                                            <button type="button" class="btn siva">Edit</button>
                                            <button type="button" class="btn crna">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- MY BUTTON -->
                            <!-- Button trigger modal -->
                            <button type="button" id="addButton" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">

                                Add new user
                            </button>

                            <!-- Modal -->

                            <div class="modal moj fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="myModalLabel">Add new user</h6>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="font-size:12px; padding:0;">
                                                <h3 aria-hidden="true">&times;</h3>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container center centriranje">
                                                <!-- Smisliti bolje resenje za ovo -->
                                                <div class="row" style="justify-content: center; width:100%;">
                                                    <div class="col-m-12">
                                                        <div class="tile">
                                                            <div class="login show">


                                                                <form method="POST" action="{{ url('/userManagmentPage') }}">
                                                                    @csrf

                                                                    <div class="formNewUser">
                                                                        <div class="row">
                                                                            <!--First Name -->
                                                                            <div class="form-group col-md-6">
                                                                                <x-input-label for="firstname" :value="__('First Name')" />
                                                                                <x-text-input id="firstname" class="form-control" type="text" name="firstname" required />
                                                                            </div>
                                                                            <!--Last Name -->
                                                                            <div class="form-group col-md-6">
                                                                                <x-input-label for="lastname" :value="__('Last Name')" />
                                                                                <x-text-input id="lastname" class="form-control" type="text" name="lastname" required />
                                                                            </div><!-- group -->
                                                                        </div>
                                                                        <div class="row">
                                                                            <!-- Phonenum -->
                                                                            <div class="form-group col-md-6">
                                                                                <x-input-label for="phonenum" :value="__('Phone num')" />

                                                                                <x-text-input id="phonenum" class="form-control" type="text" name="phonenum" required />
                                                                            </div>

                                                                            <!-- Email Address -->
                                                                            <div class="form-group col-md-6">
                                                                                <x-input-label for="email" :value="__('Email')" />
                                                                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                                                                <x-input-error :messages="$errors->get('email')" class="" />
                                                                            </div>
                                                                        </div>
                                                                        <!-- Role -->
                                                                        <div class="form-group">
                                                                            <x-input-label for="role" :value="__('Role')" />
                                                                            <select name="role" id="role" class="form-control">
                                                                                <option value="A">Admin</option>
                                                                                <option value="U">User</option>
                                                                            </select>
                                                                        </div>


                                                                        <!-- Password -->
                                                                        <div class="form-group">
                                                                            <x-input-label for="password" :value="__('Password')" />

                                                                            <x-text-input id="password" class="form-control" type="password" name="password" pattern=".{8,}" required autocomplete="new-password" oninvalid="setCustomValidity('Password must be at least 8 characters long.')" />

                                                                            <x-input-error :messages="$errors->get('password')" class="" />
                                                                        </div>


                                                                        <div class="row dugmici">
                                                                            <div class="col-md-8"></div>
                                                                            <button type="button" class="close cancel col-md-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                                            <button type="submit" name="addUser" class="btn btn-info btn-block col-md-2">Add</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div><!-- login -->
                                                        </div><!-- tile -->
                                                    </div><!-- col-6 -->
                                                </div><!-- row -->
                                            </div><!-- container -->
                                            </form>
                                        </div>
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
            $('#table_id').DataTable({
                'columnDefs': [{
                    'targets': [0, 5],
                    'orderable': false, // set orderable false for selected columns
                }]
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>