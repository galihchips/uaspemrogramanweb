<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Residences</title>
    <style>
        table {
            width : 100%;
            border-collapse : collapse;
        }
        img {
            width : 200px;
            height : 100px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-light justify-content-between">
        <h2>List Residence</h2>
        <button class="btn btn-primary" type="button" onclick="window.location='<?php echo site_url('add')?>'">Add data</button>
    </nav>
    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Area</th>
            <th scope="col">Desc</th>
            <th scope="col">sqm</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0;
                foreach ($showdata as $row) :
                $no++;
            ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $row->name; ?></td>
                <td><?= $row->category_name; ?></td>
                <td><?= $row->area_name; ?></td>
                <td><?= $row->desc; ?></td>
                <td><?= $row->sqm; ?></td>
                <td><img src=<?= $row->image_url; ?> alt="imageurl"></td>
                <td class = "d-flex flex-row">
                    <button type="button" class="btn btn-info" onclick="window.location='<?php echo site_url('edit/'.$row->id)?>'">Edit</button>
                    <button type="button" class="btn btn-danger" onclick="deleteResidence('<?= $row->id; ?>')">Delete</button>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
    <script>
        deleteResidence = (id) => {
            msg = confirm('Are you sure to delete this residence?');
            if(msg) {
                window.location.href=("<?= site_url('delete/') ?>") + id;
            } 
        }
    </script>
    </div>
</body>
</html>