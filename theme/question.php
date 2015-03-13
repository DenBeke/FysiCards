<div class="item" data-question="<?php echo $question->id; ?>">
    <div class="real-answer <?php echo $question->answer; ?>">
        <?php if($question->answer == 'none'): ?>
            <span class="">?</span>
        <?php elseif($question->answer == \Auth\Auth::user()->getAnswer($question->id)): ?>
            <i class="mdi-navigation-check"></i>
        <?php else: ?>
            <i class="mdi-navigation-close"></i>
        <?php endif; ?>
        
    </div>
    
    <div class="info">
        <h5><?php echo $question->question ?></h5>
        <p><?php echo date('d-m-Y', $question->date); ?></p>
    </div>
    
    <div class="possible-answers">
        <?php foreach(explode(',', $question->colors) as $class): ?>
            <?php if(!empty($class)): ?>
            <div data-answer="<?php echo $class; ?>" data-question="<?php echo $question->id; ?>" class="answer <?php echo $class; ?>">
                <?php if(\Auth\Auth::user()->getAnswer($question->id) == $class): ?>
                    <i class="mdi-social-person"></i>
                <?php endif; ?>
            </div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>
    
</div><!-- .item -->