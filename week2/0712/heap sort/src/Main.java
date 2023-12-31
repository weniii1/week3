import java.util.ArrayList;
import java.util.Random;
import java.util.Collections;


public class Main {
    public static void heapify(ArrayList<Integer> array, int size, int root) {
        int largest = root;
        int leftChild = 2 * root + 1;
        int rightChild = 2 * root + 2;

        // If left child is larger than root
        if (leftChild < size && array.get(leftChild) > array.get(largest))
            largest = leftChild;

        // If right child is larger than root
        if (rightChild < size && array.get(rightChild) > array.get(largest))
            largest = rightChild;

        // If largest is not root
        if (largest != root) {
            Collections.swap(array, root, largest);

            // Recursively heapify the affected sub-tree
            heapify(array, size, largest);
        }
    }
    public static void main(String[] args) {
        ArrayList<Integer> data = new ArrayList<>();//未定義陣列長度
        Random rand = new Random();
        System.out.println("原陣列排列為：");
        for (int i = 0; i < 20; i++)
            data.add(rand.nextInt(100));
        for(Integer x : data)System.out.print(x + " ");
        System.out.println();
        for(int i = data.size()/2-1; i >= 0; i--)
            heapify(data, data.size(), i);
        for(Integer x : data) System.out.print(x + " ");

        for(int i = data.size()-1; i > 0; i--){
            Collections.swap(data, 0, i);
            heapify(data, i, 0);
        }
        System.out.println();
        for(Integer x : data)System.out.print(x + " ");
    }
}