<div class="error-page">
    
    <h3>Error</h3>
    
    <center><h5><?php echo $this->message; ?></h5></center>
    
    <?php if(DEBUG and !empty($this->trace)): ?>
    
        <pre class="language-markup"><code><?php echo $this->trace; ?></code></pre>
    
    <?php endif; ?>
    
</div>