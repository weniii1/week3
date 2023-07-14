// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        int[] arr = new int[20];
        int[] arr2 = new int[20];
        int[] result = new int[20];
        System.out.println("原陣列排列為：");
        for (int i = 0; i < 20; i++) {
            arr[i] = (int) (Math.random() * 100);
            arr2[i] = 0;
            System.out.print(arr[i]);
            System.out.print(",");
        }
        for (int i = 0; i < 20; i++) {
            int x = 11000;
            int y = -1;
            for (int j = 0; j < 20; j++) {
                if(x > arr[j] && arr2[j] == 0) {
                    x = arr[j];
                    y = j;
                }
            }
            arr2[y] = 1;
            result[i] = x;
        }
        System.out.println("\nselect sort之後：");
        for (int i = 0; i < 20; i++) {
            System.out.print(result[i]);
            System.out.print(",");
        }
    }
}