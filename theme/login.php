<div id="login" class="wrap">
    
    <h2>Login</h2>
    
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
            <input name="name" id="name" type="text" class="validate">
            <label for="name">Username</label>
        </div>
        
        <div class="input-field col s6">
            <input name="password" id="password" type="password">
            <label for="password">Password</label>
        </div>
    
        <p>
            <a class="waves-effect waves-light btn" onclick='document.forms["add-question"].submit(); return false;'><i class="mdi-action-exit-to-app"></i> Login</a>
        </p>
        
    </form>
    
    
    <!--<form action="" method="POST" class="form-horizontal" role="form">
        
        <input name="add-user" type="hidden" value="true">
        
        <div class="form-group">
            <label for="inputfield2" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10 controls">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                    <input name="name" type="text" class="form-control" id="inputfield1" placeholder="Bob">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputfield2" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10 controls">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="password" type="password" class="form-control" id="inputfield2">
                </div>
            </div>
        </div>
                
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
    
    </form>-->
    
</div>