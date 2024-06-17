<?php require_once './vendor/autoload.php';


use Designbycode\BusinessNameGenerator\BusinessNameGenerator;

$businessName = new BusinessNameGenerator();
$names = $businessName;
//var_dump($names);
//echo '-----------------------';
//var_dump($names->last());
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Count</title>
</head>
<body class="grid place-items-center h-screen bg-gray-900 text-white">
<div class="space-y-8 text-center max-w-7xl ">
    <h1 id="businessName" class="text-7xl space-y-4 font-bold">
        Here are <span class="text-amber-500 "><?= count($names->amount(101)->generate()->get()) ?></span> names
    </h1>

    <h2 class="text-2xl text-center">
        <?= $names->last() ?>
    </h2>

    <div class="text-xl">
        <?php foreach ($names->generate()->randomArray(17) as $name) : ?>
            <span class="even:text-amber-500 inline-block p-2">
            <?= $name ?>
            </span>
        <?php endforeach; ?>
    </div>


</div>

