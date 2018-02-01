package com.example.volleyball;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;







import java.util.Timer;
import java.util.TimerTask;

import android.os.Bundle;
import android.app.Activity;
import android.content.ComponentName;
import android.content.ContentValues;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.util.Log;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.view.View.OnClickListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.Spinner;
import android.app.ActionBar;
import android.app.AlarmManager;
import android.app.AlertDialog;
import android.app.DatePickerDialog;
import android.app.PendingIntent;
import android.app.TimePickerDialog;
import android.widget.DatePicker;
import android.widget.TimePicker;
import android.widget.Toast;

public class StartPage extends Activity {
	
	private Button mainlist_1;
	private Button mainlist_2;
	private Button mainlist_3;
	private Button mainlist_4;
	
	private int bottomonclick = 0;
	
	//按兩次返回鍵離開程式
	private static Boolean isExit = false;
	private static Boolean hasTask = false;
	private static Timer tExit = new Timer();
	private static TimerTask task;
	private static String tag = "main" ;
	protected void onCreate(Bundle savedInstanceState) 
	{
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);   
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
		setContentView(R.layout.start_page);
		
		//定義給layout上的哪個物件
		mainlist_1 = (Button)findViewById(R.id.mainlist_1);
		mainlist_2 = (Button)findViewById(R.id.mainlist_2);
		mainlist_3 = (Button)findViewById(R.id.mainlist_3);
		mainlist_4 = (Button)findViewById(R.id.mainlist_4);
		
		mainlist_1.setOnClickListener(mainlist);
		mainlist_2.setOnClickListener(mainlist);
		mainlist_3.setOnClickListener(mainlist);
		mainlist_4.setOnClickListener(mainlist);
		
		//判斷跳出程式變數
		task = new TimerTask() 
		{					
			@Override
			public void run() 
			{
				isExit = false;
				hasTask = true;
			}
		};
	}
	
	private Button.OnClickListener mainlist = new Button.OnClickListener()
	{
		@Override
		public void onClick(View view) 
		{
			Log.i(tag , String.valueOf(view.getId()));
		        switch(view.getId()) 
		        {
		            case R.id.mainlist_1:
		            	bottomonclick = 1;
		            break;
		            case R.id.mainlist_2:
		            	bottomonclick = 2;
		            break;
		            case R.id.mainlist_3:
		            	bottomonclick = 3;
		            break;
		            case R.id.mainlist_4:
		            	bottomonclick = 4;
		            break;
		        }
		    Log.i(tag, String.valueOf(bottomonclick));
	        if(bottomonclick == 1)
	        {
		        Intent intent = new Intent(StartPage.this, NameInserter.class);	
				startActivity(intent);
	        }
	        else if(bottomonclick == 2) 
	        {
	        	Toast.makeText(StartPage.this, "bottom has not linked yet", Toast.LENGTH_SHORT).show();
	        }
	        else if(bottomonclick == 3) 
	        {
	        	Toast.makeText(StartPage.this, "bottom has not linked yet", Toast.LENGTH_SHORT).show();
	        }
	        else if(bottomonclick == 4)
	        {
	        	Log.i("main", "click exit");
	        	//finish();
				System.exit(0);
	        }
		}
	};
	
	@Override
	public boolean onKeyDown(int keyCode, KeyEvent event) 
	{
		if (keyCode == KeyEvent.KEYCODE_BACK) 
		{
			if(isExit == false ) 
			{
				isExit = true;
				Toast.makeText(this, "再按一次後退鍵退出應用程式", Toast.LENGTH_SHORT).show();
				
				if(!hasTask) 
				{
					tExit.schedule(task, 2000);
				}
			} 
			else 
			{
				finish();
				System.exit(0);
			}	
		}
		return false;
	}
}
