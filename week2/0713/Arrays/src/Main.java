import java.util.Arrays;
import java.util.Random;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        int[] arr = new int[20];
        Random rand = new Random();
        for(int i = 0; i < 20; i++){
            arr[i] = rand.nextInt(100);
        }
        System.out.println(Arrays.toString(arr));//
        Arrays.sort(arr);//排列
        System.out.println(Arrays.toString(arr));

        int [] d2 = Arrays.copyOf(arr, 20);//複製陣列
        System.out.println(Arrays.hashCode(arr));//雜湊，內容一樣，雜湊值一樣
        System.out.println(Arrays.hashCode(d2));
        d2[0] = 0;//內容修改，就會得到不同的雜湊
        System.out.println(Arrays.hashCode(d2));

        Arrays.fill(d2,8);
        boolean e = Arrays.equals(arr, d2);//判斷是否相同
        System.out.println(e);
        d2 = Arrays.copyOf(arr, 20);//重新複製陣列
        System.out.println(Arrays.equals(arr, d2));

        int index = Arrays.binarySearch(arr, 91);//查找某值的位置
        System.out.println(index);

        int [][] two = new int[4][10];
        //Arrays僅可處理一維
    }
}