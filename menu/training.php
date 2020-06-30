<?php
require_once __DIR__ . '/../vendor/autoload.php';
use C45\C45;

$status = false;

if (@isset($_SESSION['tree'])) {
    $status = true;
}

if (isset($_POST['train'])) {
    // echo "<script>
    //     const loader = document.getElementById('loader');
    //     const btnTrain = document.getElementById('train');

    //     loader.classList.add('loader')
    //     loader.style.visibility = visible;
    //     btnTrain.style.visibility = hidden;
    // </script>";

    ini_set('max_execution_time', '3600');

    $fileName = __DIR__ . '/../datasets/nursery.csv';

    $c45 = new C45([
        'targetAttribute' => 'class',
        'trainingFile' => $fileName,     
        'splitCriterion' => C45::SPLIT_GAIN,
    ]);

    $tree = $c45->buildTree();
    $_SESSION['tree'] = serialize($tree);
    echo "<script> window.location.href = '?menu=training' </script>";
}

?>
<div class="row p-3">
    <div class="col-sm-12">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Status training : <span class="badge badge-<?= $status ? 'success' : 'secondary'?>"><?= $status ? 'Trained' : 'Not yet'?></span></h1>
                <hr class="my-4">
                <div id="loader"></div>
                <?php if(!$status) : ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input id="train" name="train" class="btn btn-primary" type="submit" value="training">
                        </div>
                    </form>
                <?php endif;?>
                <?php 
                // unset($_SESSION['tree']);
                ?>
            </div>
        </div>
    </div>
</div>