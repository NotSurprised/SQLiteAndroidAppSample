package com.example.volleyball;

import android.app.Activity;  
import android.content.Intent;  
import android.os.Bundle;  
import android.os.Handler;  
import android.view.Window;  
import android.view.WindowManager;  
  
/** 開場動畫 */  
public class OpenAnimation extends Activity {  
    @Override  
    public void onCreate(Bundle savedInstanceState) 
    {  
        super.onCreate(savedInstanceState);  
        //全屏顯示開場畫面  
        requestWindowFeature(Window.FEATURE_NO_TITLE);   
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,   
                WindowManager.LayoutParams.FLAG_FULLSCREEN);          
        setContentView(R.layout.open_animation);  
        
        //延遲0.5秒後跳轉畫面
        new Handler().postDelayed(new Runnable() 
        {            	
            @Override  
            public void run() {  
                Intent intent = new Intent(OpenAnimation.this, StartPage.class);  
                startActivity(intent);  
                OpenAnimation.this.finish();  
            }  
        }, 2500);  
    }  
}  