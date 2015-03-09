<div class="item">
    <div class="real-answer blue">
        <i class="mdi-navigation-check"></i>
    </div>
    
    <div class="info">
        <h5><?php echo $question->question ?></h5>
        <p><?php echo date('d-m-Y', $question->date); ?></p>
    </div>
    
    <div class="possible-answers">
        <?php foreach(explode(',', $question->colors) as $class): ?>
            <?php if(!empty($class)): ?>
            <div class="answer <?php echo $class; ?>"></div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>
    
</div><!-- .item -->