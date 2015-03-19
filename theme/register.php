<div class="wrap" id="register">
    
    <h3><i class="mdi-social-person-add"></i> Register</h3>
    
    <?php if(!empty($this->notify)): ?>
        <center>
            <div class="card-panel">
                
              <span class="white-text">
                  <?php echo $this->notify; ?>
              </span>
            </div>
        </center>
    <?php endif; ?>
    
    <?php if(!$this->success): ?>
    
        <form action="" method="post" id="add-question">
            
            <div class="input-field col s6">
                <input name="name" id="name" type="text" class="validate">
                <label for="name">Username</label>
            </div>
            
            <div class="input-field col s6">
                <input name="password" id="password" type="password">
                <label for="password">Password</label>
            </div>
            
            <div class="input-field col s6">
                <input name="password-confirm" id="password-confirm" type="password">
                <label for="password-confirm">Confirm password</label>
            </div>
        
            <p>
                <a class="waves-effect waves-light btn" onclick='document.forms["add-question"].submit(); return false;'><i class="mdi-social-person-add"></i> Register</a>
                
                <input type="submit" style="visibility: hidden;">
            </p>
            
        </form>
        
    <?php else: ?>
    
        <script>
            setTimeout( function() {
                window.location.replace('<?php echo SITE_URL; ?>');
            }, 500);
        </script>
    
    <?php endif; ?>
    
</div>