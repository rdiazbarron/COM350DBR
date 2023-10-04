package com.example.combinatoria;
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class ArquiActivity extends AppCompatActivity {
    EditText editTextCombiA, editTextCombiB;
    Button buttonCombi;
    TextView textViewCombi;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_arqui);
        editTextCombiA = findViewById(R.id.editTextCombiA);
        editTextCombiB = findViewById(R.id.editTextCombiB);
        buttonCombi = findViewById(R.id.buttonCombi);
        textViewCombi = findViewById(R.id.textViewCombi);
        buttonCombi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int n = Integer.parseInt(editTextCombiA.getText().toString());
                int p = Integer.parseInt(editTextCombiB.getText().toString());
                Factorial f= new Factorial(n);
                int n1 = f.calcularFactorial();

                Factorial f2 = new Factorial(p);
                int p2 = f2.calcularFactorial();

                Factorial f3 = new Factorial(n-p);
                int nmenosp = f3.calcularFactorial();

                float resultado = (float)( n1 / (p2 * nmenosp));
                textViewCombi.setText(String.valueOf(resultado));

            }
        });
    }
}