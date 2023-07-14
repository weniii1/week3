import java.util.HashMap;
import java.util.Map;

public class mapEx {
    public static void main(String[] args) {
        Map<String, Integer> map1 = new HashMap<String, Integer>();//TreeMap
        map1.put("聯合大學", 98);
        map1.put("交通大學", 95);
        map1.put("清華大學", 84);

        System.out.println(map1.get("聯合大學"));
        map1.put("聯合大學", 99);
        System.out.println(map1.get("聯合大學"));

        for (Map.Entry<String, Integer> x : map1.entrySet()){//尋找某一key或value時可用
            System.out.println("key: " + x.getKey() + "value: " + x.getValue());
        }
        map1.remove("交通大學");//key有點像索引
    }
}
