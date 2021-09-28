/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package provaestagio;

/**
 *
 * @author Gabriel
 */
public class ProvaEstagio {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       for(int i = 1; i <=100 ; i++){
          if(i%3 == 0 && i%5 == 0){
               System.out.print("FooBar");
             // s+="FooBAr";
          }else if(i%3 == 0){
              System.out.print("Foo");
             // s+="Foo";
          }else if(i%5 == 0){
            System.out.print("Bar"); 
             // s+= "Bar";
          }else{
             System.out.print(i);
          }
      }
    }
    
    
    
    
}
