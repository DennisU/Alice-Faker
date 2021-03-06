<?php
    require_once '../../vendor/autoload.php';

    $faker = Faker\Factory::create("de_DE");
    $faker->addProvider(new myProvider($faker));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Customer</title>
</head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Zip</th>
                <th>City</th>
                <th>Company</th>
                <th>Country</th>
            </tr>

            <?php
            for($i = 1; $i <= 10; $i++) {
                ?>

                <tr>
                    <td><?php echo $faker->name; ?></td>
                    <td><?php echo $faker->email; ?></td>
                    <td><?php echo $faker->postcode; ?></td>
                    <td><?php echo $faker->city; ?></td>
                    <td><?php echo $faker->itCompany; ?></td>
                    <td><?php echo $faker->country; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>