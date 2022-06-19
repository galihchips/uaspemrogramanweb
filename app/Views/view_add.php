<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid mt-3 mb-5">
    <h2>Add Residence</h2>
    <?= form_open('/save') ?>
        <div class="form-group mt-3">
            <label>Residence name</label>
            <input type="text" class="form-control" id="name" name ="name" placeholder="Bintaro">
        </div>
        <div class="form-group">
            <label for="category">Choose category</label>
            <select class="form-control" id="category" name="category">
            <option value="1">Cluster</option>
            <option value="2">Subsidi</option>
            <option value="3">Apartement</option>
            </select>
        </div>
        <div class="form-group">
            <label for="area">Choose area</label>
            <select class="form-control" id="area" name="area">
            <option value="1">Jawa </option>
            <option value="2">Luar Jawa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="textarea">Description of residence</label>
            <textarea class="form-control" id="desc" name = "desc" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Surface area /sqm</label>
            <input type="text" class="form-control" id="sqm" name ="sqm" placeholder="120">
        </div>
        <div class="form-group">
            <label>Image url</label>
            <input type="text" class="form-control" id="image_url" name ="image_url" placeholder="www.youtube.com">
        </div>
    <input type="submit" class="btn btn-primary" value="Save">
    <?= form_close(); ?>
    </div>
</body>
</html>