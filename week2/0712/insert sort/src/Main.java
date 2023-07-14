// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        int[] arr = new int[20];
        System.out.println("原陣列排列為：");
        for (int i = 0; i < 20; i++) {
            arr[i] = (int) (Math.random() * 100);
            System.out.print(arr[i]);
            System.out.print(",");
        }
        for(int i = 1; i < 20; i++){
            int j = i;
            while (arr[j] < arr[(j-1)]){
                int x = arr[j];
                arr[j] = arr[j-1];
                arr[j-1] = x;
                j--;
            }
        }
        System.out.println("\ninsert sort之後：");
        for (int i = 0; i < 20; i++) {
            System.out.print(arr[i]);
            System.out.print(",");
        }
    }
}