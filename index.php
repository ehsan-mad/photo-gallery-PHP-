<?php include './db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos Gallery</title>
    <?php include './css.php'; ?>
</head>
<body>

    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Enter title" required>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Submit</button>
        </form>

    </div>
    <hr>
    <div>
        <?php $result = $conn->query("select * from photos order by created_at desc ");
            if ($result->num_rows > 0):
                while ($rows = $result->fetch_assoc()):

            ?>

		<h1><?php echo $rows['title'] ?></h1>
		<img src="<?php echo $rows['image_path'] ?>" alt="image" width="200px">
		<form method="post" action="delete.php">

		<input type="hidden" name='id' value="<?= $rows['id']?>"/>
		                <button>Delete</button>
		            </form>


		    <?php
                endwhile;
                else:
                    echo "No photos found";
                endif;

            ?>

		    </div>

</body>
</html>
