
        
        <h3><i class="mdi-communication-textsms"></i>Question</a></h3>
        
        
        <div class="items">
            
            <div class="circle"></div>
            <div class="circle" id="vertical"></div>
            
        </div><!-- .items -->
        
        
        <script>
            
            var old_id = '';
            
            $(document).ready(function() {
                
                
                $('main').on('click', '.possible-answers .answer', function() {
                    var answer = $(this).data('answer');
                    var question = $(this).data('question');
                    
                    $.get('<?php echo SITE_URL . '/api/save_answer/'; ?>' + question + ',' + answer, function(data) {
                        //console.log('Got question!');
                        //console.log('<?php echo SITE_URL . '/api/save_answer/'; ?>' + question + ',' + answer);
                        toast(data, 4000);
                        
                        $.get('<?php echo SITE_URL . '/api/question'; ?>', function(data) {
                            //console.log('Got question!');
                            $('.items').empty().append(data);
                            old_id = $(data).filter('.item').data('question');
                        });
                    });
                });
                
                // inital load
                setTimeout(function() {
                    $.get('<?php echo SITE_URL . '/api/question'; ?>', function(data) {
                        //console.log('Got question!');
                        $('.items').hide().empty().append(data).fadeIn();
                        old_id = $(data).filter('.item').data('question');
                    });
                }, 500);
                
                // refresh
                setInterval(function() {
                    $.get('<?php echo SITE_URL . '/api/question'; ?>', function(data) {
                        //console.log('Got question!');
                        
                        var id = $(data).filter('.item').data('question');
                        
                        if(old_id == id) {
                            //console.log('No new question');
                            //old_id = $(data).filter('.item').data('question');
                            //console.log(old_id);
                            $('.items').empty().append(data);
                        }
                        else {
                            //console.log('New question!');
                            old_id = id;
                            //alert(old_id);
                            $('.items').hide().empty().append(data).delay(400).fadeIn();
                            toast('New question!', 4000)
                        }
                        
                    });
                }, 2000);
                
            });
            
            
        </script>
        
        
    
