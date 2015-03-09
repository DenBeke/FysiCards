<div id="admin">
    
    <h3>Admin</h3>
    
    <?php if(!empty($this->notify)): ?>
        <center>
            <div class="card-panel">
                
              <span class="white-text">
                  <?php echo $this->notify; ?>
              </span>
            </div>
        </center>
    <?php endif; ?>
    
    <form action="" method="post" id="add-question">
        
        <div class="input-field col s6">
            <input name="question" id="question" type="text" class="validate">
            <label for="question">Question</label>
        </div>
        
        <?php foreach(\Model\Question::getColors() as $name => $class): ?>
            <p>
              <input type="checkbox" id="<?php echo $class; ?>" name="<?php echo $class; ?>" value="true" />
              <label for="<?php echo $class; ?>"><?php echo $name; ?></label>
            </p>
        <?php endforeach; ?>

        <p>
            <a class="waves-effect waves-light btn" onclick='document.forms["add-question"].submit(); return false;'><i class="mdi-av-playlist-add left"></i>Add</a>
        </p>
        
    </form>
    
</div>