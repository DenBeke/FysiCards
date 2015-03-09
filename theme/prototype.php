
        
        <h3><i class="mdi-communication-textsms"></i>Question</a></h3>
        
        
        <div class="items">
            
            <div class="circle"></div>
            <div class="circle" id="vertical"></div>
            
        </div><!-- .items -->
        
        
        <script>
            
            var old_data = '';
            
            $(document).ready(function() {
                
                // inital load
                setTimeout(function() {
                    $.get('<?php echo SITE_URL . '/api/question'; ?>', function(data) {
                        //console.log('Got question!');
                        $('.items').hide().empty().append(data).fadeIn();
                        old_data = data;
                    });
                }, 500);
                
                // refresh
                setInterval(function() {
                    $.get('<?php echo SITE_URL . '/api/question'; ?>', function(data) {
                        //console.log('Got question!');
                        
                        if(data == old_data) {
                            //console.log('No new question');
                        }
                        else {
                            //console.log('New question!');
                            old_data = data;
                            $('.items').hide().empty().append(data).delay(400).fadeIn();
                        }
                        
                    });
                }, 2000);
                
            });
            
            
        </script>
        
        
    
