<?php include 'database.php'; ?>
<?php
    //create select query
    $query = "SELECT * FROM shouts ORDER by id DESC";
    $shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Thapar Shoutout</title>
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>TU ShoutBox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                  <li><?php echo $row['name'];?>:<?php echo $row['shout'];?> [<?php echo $row['date'];?>]</li>
              <?php endwhile; ?>
                <ul>
            </div>
            <footer>
                <form>
                    <label>Name:</label>
                    <input type="text" id="name">
                    <label>Shout-Text:</label>
                    <input type="text" id="shout">
                    <input type="submit" id="submit" value="SHOUT!" onClick="window.location.reload();">
                </form>
            </footer>
        </div>
    </body>
</html>