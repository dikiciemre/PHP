<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
</head>

<body>

    <div class="container">
        <div class="row">
            
        <h1>USERS</h1>
        <?php foreach ($data as $key =>  $value): ?>
            <div class="col-md4">
                <div class="card">
                    <div class="card-header"> <?= $value['isim']; ?> </div>
                    <div class="card-body"> 
                    <?= $value['eposta']; ?> 
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>