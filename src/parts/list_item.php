<!-- <form action="/website" method="post" class="card">
    <input type="hidden" name="element" value='<?php echo json_encode($element) ?>'>
    <button href="" class="">
        <div class="card-header bg <?php echo $element->class ?>">
        </div>
        <p class="card-title"><?php echo $element->title ?></p>
    </button>
</form> -->

<a href="<?php echo APP_ROOT_URL_COMPLETE ?>/<?php echo $element->type ?>/<?php echo $element->class ?>" class="card">
    <div class="card-header bg <?php echo $element->class ?>">
    </div>
    <p class="card-title"><?php echo $element->title ?></p>
</a>