<div class="container">
    <div class="page-header">
        <img src="../assets/img/user.png" width="55" height="70"/>
        <h1 class="visible-lg-inline">Users</h1>
    </div>

    <!--admin users-->
    <div class="panel panel-green">
        <div class="panel-heading">Admin Users</div>
        <div class="panel-body">
            <table class="table dataTable">
                <thead>
                <tr>
                    <th></th>
                    <th>Account Created</th>
                    <th>User Name</th>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Mobile</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($admins as $admin): ?>
                    <tr>
                        <td>
                            <img
                                src= <?php if ($admin->image) {
                                    echo "\"../uploads/admin/$admin->image\"";
                                } else {
                                    echo "\"../assets/img/user.png\"";
                                } ?>

                                width="117" height="150" alt="admin user"/>
                        </td>
                        <td><?= $admin->create_date ?></td>
                        <td><?= $admin->user_name ?></td>
                        <td><?= $admin->emp_no ?></td>
                        <td><?= $admin->fname ?></td>
                        <td><?= $admin->lname ?></td>
                        <td><?= $admin->gender ?></td>
                        <td><?= $admin->tel_no ?></td>
                        <td>
                            <button class="btn btn-sm btn-success"
                                    onclick="window.location.href = 'admin/view_moreadmin/1'">more...
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

    <!--users-->
    <div>
        <div class="panel panel-yellow">
            <div class="panel-heading">Users</div>
            <div class="panel-body">
                <table class="table dataTable">
                    <thead>
                    <tr>
                        <th>Account Created</th>
                        <th>User Name</th>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2017-03-01</td>
                        <td>renuka_uok</td>
                        <td>SE4582</td>
                        <td>Renuka</td>
                        <td>Fernando</td>
                        <td>Male</td>
                        <td>(+94)77 129 5502</td>
                        <td>
                            <button class="btn btn-warning" onclick="window.location.href = 'request.html'">View
                            </button>
                            <button class="btn btn-warning" onclick="window.location.href = 'request.html'">Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2017-03-01</td>
                        <td>renuka_uok</td>
                        <td>SE4582</td>
                        <td>Renuka</td>
                        <td>Fernando</td>
                        <td>Male</td>
                        <td>(+94)77 129 5502</td>
                        <td>
                            <button class="btn btn-warning" onclick="window.location.href = 'request.html'">View
                            </button>
                            <button class="btn btn-warning" onclick="window.location.href = 'request.html'">Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2017-03-01</td>
                        <td>renuka_uok</td>
                        <td>SE4582</td>
                        <td>Renuka</td>
                        <td>Fernando</td>
                        <td>Male</td>
                        <td>(+94)77 129 5502</td>
                        <td>
                            <button class="btn btn-warning" onclick="window.location.href = 'request.html'">View
                            </button>
                            <button class="btn btn-warning" onclick="window.location.href = 'request.html'">Edit
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>