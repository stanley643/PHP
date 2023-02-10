<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>User View</h1>
    <h2>User Name <?php echo e($name); ?></h2>
    <p>Name: <?php echo e($user['name']); ?></p>
    <p>Email: <?php echo e($user['email']); ?></p>
    <p>Phone: <?php echo e($user['phone']); ?></p>
</body>
</html><?php /**PATH /home/mahihu/laravel8pro/resources/views/user.blade.php ENDPATH**/ ?>