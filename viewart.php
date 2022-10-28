<?php
    require_once('assets/header.php')
?>

<?php
    require_once('assets/nav.php')
?>

<article>
    <?php 
        include('app/ArtModel.php');
        $artModel = new ArtModel();
        $id = (int)filter_input(INPUT_GET, 'id');
        $results = $artModel->getArtbyid($id);

        // print_r($results)
    ?>

    <h1><?= $results['title'];?></h1>
    <h3>Posted By <?= $results['posted_by'];?></h3>

    
</article>

<?php
    require_once('assets/footer.php')
?>