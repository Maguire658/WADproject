 $(document).ready(function(){     
     $(function(){


             var $index = ('.navbar-fixed-top');
             $('.draggable').draggable({
                
                containment:"document",
                zIndex: 2000,
                revert: true,
                drag:function(event, ui){
                   $(this).addClass("tempStyleDraggable");
                }

             
             }); 
         
             $('#dropable').droppable({
                 accept:".draggable",
                 drop:function(event,ui){
                    console.log("Working");
                    $(this).removeClass("tempStyleDraggable");
                    $('.draggable').addClass("talkholder");

                }
                //create a function that is actived on, the drop of element
                // when the element is dropped grab the info from within and use ajax to display it 

             });

             console.log("My gits are not counting thank you linus")

            }); 


});
