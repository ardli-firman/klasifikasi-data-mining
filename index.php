<?php
session_start();

// $testingData = [
//     'parents' => 'great_pret',
//     'health' => 'recommended',
//     'social' => 'nonprob',
//     'finance' => 'convinent',
//     'has_nurs' => 'very_crit',
//     'form' => 'complete',
//     'children' => 1,
//     'housing' => 'critical',
//   ];

//   var_dump($tree->classify($testingData));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    </style>
<body>
    <?php require_once '_partials/nav.php' ?>
    <div class="container">
    <?php
        switch (@$_GET['menu']) {
            case 'training':
                require_once 'menu/training.php';
                break;
            case 'tree':
                require_once 'menu/tree.php';
                break;
            case 'about':
                require_once 'menu/about.php';
                break;
            default:
                break;
        }
    ?>
    </div>
</body>
</html>