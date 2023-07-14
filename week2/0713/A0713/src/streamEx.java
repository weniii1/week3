import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.stream.Collectors;

public class streamEx {
    public static void main(String[] args){
        List<Integer> data = new ArrayList<Integer>();
        Random rand = new Random();
        for(int i = 0; i < 20; i++)
            data.add(rand.nextInt(100));
        System.out.println(data);
        long count = data.stream().count();//查詢多少個
        System.out.println(count);
        int min = data.stream().min(Integer::compareTo).orElseThrow();//查詢最小值，終端
        System.out.println(min);
        data.stream().filter((x)-> {return x%2 == 0;})//偶數
                .forEach((x)-> System.out.print(x + " "));
        System.out.println();
        List<Integer> newlist = data.stream().filter((x)-> {return x%2 == 0;})
                .map((x)-> 2*x+1).collect(Collectors.toList());//每個元素都*2+1
        System.out.println(newlist);
        //data.stream().forEach( (x)-> System.out.print(x + " "));
    }
}
