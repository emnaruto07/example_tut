<?php
    require_once('assets/header.php')
?>

<?php
    require_once('assets/nav.php')
?>

<article>
    <h1>View by Arts</h1>
    <?php 
        $results = array(
            array('id' => 1, 'title' =>'sunflowers', 'imageurl' => 'sunflowers.jpg'),
            array('id' => 1, 'title' =>'Hands', 'imageurl' => 'hands.jpg'),
            array('id' => 1, 'title' =>'Cat', 'imageurl' => 'cat.jpg'),
        );
        // print_r($results);

        foreach($results as $result){
            echo $result['title']. "<br>";
        };
    ?>
    
</article>

<?php
    require_once('assets/footer.php')
?>