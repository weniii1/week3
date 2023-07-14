package com.example.demo5;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class HelloApplication extends Application {

    private TextField num1Field, num2Field, resultField;

    @Override
    public void start(Stage primaryStage) {
        num1Field = new TextField();
        num2Field = new TextField();
        resultField = new TextField();
        resultField.setEditable(false);
        Button addButton = new Button("add");

        addButton.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                double num1 = Double.parseDouble(num1Field.getText());
                double num2 = Double.parseDouble(num2Field.getText());
                double result = num1 + num2;
                resultField.setText(String.valueOf(result));
            }
        });

        HBox hbox1 = new HBox(10, num1Field, num2Field);
        HBox hbox2 = new HBox(10, addButton, resultField);
        hbox1.setAlignment(Pos.CENTER);
        hbox2.setAlignment(Pos.CENTER);

        VBox vbox = new VBox(10, hbox1, hbox2);
        vbox.setAlignment(Pos.CENTER);

        Scene scene = new Scene(vbox, 300, 200);

        primaryStage.setTitle("Simple Calculator");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    public static void main(String[] args) {
        launch(args);
    }
}