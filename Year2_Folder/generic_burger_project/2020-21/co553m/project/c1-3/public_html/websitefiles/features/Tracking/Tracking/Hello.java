import java.util.*;
/**
 * Write a description of class Track here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */

public class Hello{
    static void checkmealstatus(String str[]){
        //Declaring Function CHECKMEALSTATUS
        System.out.println("YOUR ORDER STATUS IS");//print the counter i followed by the item 
        for(int i =0; i<str.length;i++){
            System.out.println("i"+str[i]);
        }
    }

    public static void main(String args[]){
        Scanner sc = new Scanner(System.in);
        //declaring a scanner object to read the input to the user
        String[] a=new String[10];
        System.out.println("WHAT DO YOU WANT TO ORDER?");
        for(int i=0;i<10;i++){
            a[i]=sc.next();
        }
        System.out.println("want to check your status press 1");
        //Asking user whether he/she wants to check her order and give further instructions

        int k=sc.nextInt();
        if(k==1){
            checkmealstatus(a);
            //Calling that function(hence it will go to that function and hence user can track)

        }
        else{
            System.out.println("your order is being prepared");
        }
    }

}
