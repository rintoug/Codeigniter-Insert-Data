<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <style type="text/css">
        .shadow {
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
            -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
            box-shadow:         3px 3px 5px 6px #ccc;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
        }
    </style>
</head>
<body>

<div class="container shadow" style="width: 500px;background: ">
	<h3>Register</h3>

    <?php print $success?>

    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
            <?php echo form_error('name'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" >
            <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small>
            <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
            <label for="address1">Address 1</label>
            <input type="text" class="form-control" id="address1" name="address1" >
            <?php echo form_error('address1'); ?>

        </div>
        <div class="form-group">
            <label for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2" name="address2">

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <?php echo form_error('password'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div style="height: 20px;">&nbsp;</div>
    </form>


</div>

</body>
</html>