<?php include('partials/head.php') ?>

    <div class="container mt-3">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Create a New User
                    </div>
                    <div class="card-body">
                        <form method="post" action="/users">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"  placeholder="Enter a Name">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        All Users
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <th scope="row"><?= $user->id ?></th>
                                        <td><?= $user->name ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include('partials/footer.php') ?>
