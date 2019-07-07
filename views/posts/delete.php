<div class="col-xl-12">
    <a href="index.php?controller=posts" type="button" class="btn btn-primary">Back to list</a>
</div>
<div class="col-xl-12">
    <form class="mt-3" action="index.php?controller=posts&action=delete&id=<?php echo $post->id ?>" method="POST">
        <?php 
            if (isset($result)){
                if($result['status'] === true) {
                    echo '<div class="alert alert-success" role="alert">
                    ' .$result['message']. '
                </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    ' .$result['message']. '
                </div>';
            }
        }
        ?>
       
    
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>