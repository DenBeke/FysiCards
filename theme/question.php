<div class="item">
    <div class="real-answer <?php echo $question->answer; ?>">
        <?php if($question->answer == 'none'): ?>
            <span class="">?</span>
        <?php else: ?>
            <i class="mdi-navigation-check"></i>
        <?php endif; ?>
        
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