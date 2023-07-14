import java.util.LinkedList;
import java.util.Random;

public class linkEx {
    public static LinkedList<Integer> merge(LinkedList<Integer> a, LinkedList<Integer> b) {
        LinkedList<Integer> result = new LinkedList<>();
        // merge two sorted lists
        while (!a.isEmpty() && !b.isEmpty()) {
            if (a.peek() <= b.peek())
                result.add(a.poll());
            else
                result.add(b.poll());
        }
        // append remaining elements
        while (!a.isEmpty())
            result.add(a.poll());
        while (!b.isEmpty())
            result.add(b.poll());
        return result;
    }
    private static LinkedList<Integer> mergeSort(LinkedList<Integer> list){
        if(list.size() <= 1) return list;
        LinkedList<Integer> first = new LinkedList<>();
        LinkedList<Integer> second = new LinkedList<>();
        int index = 0;
        for (; index < list.size()/2; index++)
            first.add(list.get(index));
        for (; index < list.size(); index++)
            second.add(list.get(index));
        return merge(mergeSort(first), mergeSort(second));

    }
    public static void main(String[] args) {
        LinkedList<Integer> list = new LinkedList<>();
        Random rand = new Random();
        for(int i = 0; i < 20; i++)
            list.add(rand.nextInt(100));
        System.out.println("Before sorting : " + list);
        list = mergeSort(list);
        System.out.println("After sorting  : " + list);
    }
}