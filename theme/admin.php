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
    
    <script>
        $(document).ready(function() {
          $('select').material_select();
        });
    </script>
    
    
    <?php foreach($this->latest_questions as $question): ?>
        <div class="edit-question">
            <h5><?php echo $question->question; ?></h5>
            <form action="" method="post" id="edit-question-<?php echo $question->id ?>">
                <input name="set-answer-id" id="set-answer-id" type="hidden" value="<?php echo $question->id ?>">
                <div class="input-field col s6">
                    <select name="answer">
                        <option value="none" selected>none</option>
                        <?php foreach(explode(',', $question->colors) as $color): ?>
                            <?php if(!empty($color)): ?>
                            <option value="<?php echo $color ?>" <?php if($question->answer == $color) echo 'selected'; ?>><?php echo $color; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <p>
                    <a class="waves-effect waves-light btn" onclick='document.forms["edit-question-<?php echo $question->id ?>"].submit(); return false;'><i class="mdi-content-save left"></i>Save</a>
                </p>
                
            </form>
        </div>
    
    <?php endforeach; ?>
    
</div>