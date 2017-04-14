<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Add new Vehicle</title>


        <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/main.css"/>
        <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css"/>
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="../assets/js/bootstrap.min.js"></script>

    </head>

    <body>

        <div id="wrapper">

            <!--Heading section-->
            <div class="headSection">
                <img src="../img/logo.png" height="100"/>
                <span style="color: white; font-size: xx-large; ">
                    | Transport Division
                </span>
            </div>

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="active" href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"><img src="../../images/Add_Car-512.png" width="75px" height="75px">  Add Vehicle</h2>
                        </div>

                    </div>

                    <div class="">
                        <div class="form-group col-lg-offset-3">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>Vehicle Type</label>
                                        <select class="form-control col-md-4">
                                            <option >Car</option>
                                            <option>Van</option>
                                            <option>Bus</option>
                                        </select>

                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Model</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>Engine Number</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Registered Number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>Number of seats</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Fuel Type</label>
                                        <select class="form-control col-md-4">
                                            <option >Petrol 90-octane</option>
                                            <option>Petrol 95-octane</option>
                                            <option>Super Diesel</option>
                                            <option>Diesel</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label >Air Condition</label><br>
                                        <input type="radio" name="aircondition" value="ac" id="ac">
                                        <label for="ac">A/C</label>
                                        <input type="radio" name="aircondition" value="non ac" id="nonac">
                                        <label for="nonac">Non A/C</label>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Vehicle Weight</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>Kilometers per Fuel Liter(km)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="row col-lg-4">
                                        <label class="control-label">Image</label><br>
                                        <div class="col-sm-8">
                                            <input type="file" onchange="readURL(this);" class=""><br>
                                            <img class="" id="blah" src="../../images/vehicle-icon.png" alt="your image" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-success" style="float: right">
                                        <input type="reset" class="btn btn-warning" style="float: right">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                                .attr('src', e.target.result)
                                .width(150)
                                .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <script src="../../vendor/jquery/jquery.min.js"></script>

        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

        <script src="../../dist/js/sb-admin-2.js"></script>

    </body>

</html>
