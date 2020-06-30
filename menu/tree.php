<?php
require_once __DIR__ . '/../vendor/autoload.php';
use C45\C45;

@$tre = unserialize($_SESSION['tree']);

?>
<div class="row p-3">
    <div class="col-sm-12">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4 pb-3">Tree</h1>
            <?php if($tre): ?>
            <pre><?= $tre->toString(); ?></pre>
            <?php else: ?>
            <p class="lead">Data belum di training</p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>