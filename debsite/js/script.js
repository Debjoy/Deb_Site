jQuery(document).ready(function ($){
var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('[name="quantity"]').val());
        
        // If is not undefined
            
            $('[name="quantity"]').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('[name="quantity"]').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>1){
            $('[name="quantity"]').val(quantity - 1);
            }
    });
    
});