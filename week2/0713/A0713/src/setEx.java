import java.util.Arrays;
import java.util.HashSet;
import java.util.Random;
import java.util.Set;

public class setEx {
    public static void main(String[] args) {
        Set<Integer> hashSet = new HashSet<>();
        Random rand = new Random();
        for (int i = 0; i < 20; i++)
            hashSet.add(rand.nextInt(50));//可能會有重複

        Integer [] data = new Integer[15];
        for (int i = 0; i < 15; i++)
            data[i] = rand.nextInt(100);

        hashSet.addAll(Arrays.asList(data));
        System.out.print("Size: " + hashSet.size() + " hashSet: ");
        for (Integer x : hashSet){
            System.out.print(x + " ");
        }
    }
}
