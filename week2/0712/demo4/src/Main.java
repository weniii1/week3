import java.util.concurrent.CompletableFuture;
import java.util.concurrent.ExecutionException;
public class Main {
    public static void main(String[] args) {
        System.out.println("Starting synchronous processing...");
        long startTime = System.currentTimeMillis();
        String result = doSynchronousProcessing();
        long endTime = System.currentTimeMillis();
        System.out.println("Synchronous processing finished in " + (endTime - startTime) + " milliseconds");

        System.out.println("Starting asynchronous processing...");
        startTime = System.currentTimeMillis();
        CompletableFuture<String> future = doAsynchronousProcessing();
        System.out.println("Asynchronous processing started");

        System.out.println("Doing other things...");
        try {
            Thread.sleep(2000);
        } catch (InterruptedException e) {
            e.printStackTrace();
        }

        System.out.println("Getting the result of the asynchronous processing...");
        try {
            result = future.get();
        } catch (InterruptedException e) {
            // 處理 InterruptedException
            e.printStackTrace();
            // 重新設定執行緒的中斷狀態，如果需要的話
            Thread.currentThread().interrupt();
        } catch (ExecutionException e) {
            // 處理 ExecutionException
            e.printStackTrace();
        }
        endTime = System.currentTimeMillis();
        System.out.println("Asynchronous processing finished in " + (endTime - startTime) + " milliseconds");

        System.out.println("The result is: " + result);
    }
    private static String doSynchronousProcessing() {
        // This is a synchronous method that takes some time to execute
        try {
            Thread.sleep(2000);
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
        return "The result of the synchronous processing";
    }
    private static CompletableFuture<String> doAsynchronousProcessing() {
        // This is an asynchronous method that takes some time to execute
        return CompletableFuture.supplyAsync(() -> {
            try {
                Thread.sleep(2000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
            return "The result of the asynchronous processing";
        });
    }
}