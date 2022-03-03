Vue.component('product-review', {
    template:`
     <div class="product">
              
           
      
            
      
      
        <div class="color-box"
                        v-for="(variant, index) in variants" 
                        :key="variant.variantId"
                        :style="{ backgroundColor: variant.variantColor }"
                        @mouseover="updateProduct(index)"
                        >
                    </div> 
        
                
      
             
          
        </div>,
    `,
    data (){
        return{
            name: null,
            review: null,
            rating: null,
        }
    }
})