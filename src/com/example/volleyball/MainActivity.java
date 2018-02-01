package com.example.volleyball;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONException;
import org.json.JSONObject;

import com.example.volleyball.DBOpenHelper;

import android.os.AsyncTask;
import android.os.Bundle;
import android.app.ActionBar;
import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.util.Log;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

public class MainActivity extends Activity {
	
	private DBOpenHelper dbhelper = null;
	private static final String DB_FILE = "volleyball.db",
								DB_TABLE = "tasks";
	private SQLiteDatabase volleyballDB;
	private Datasource datasource;

	//宣告物件
	private Button add_record1_1;
	private Button add_record1_2;
	private Button add_record2_11;
	private Button add_record2_12;
	private Button add_record2_21;
	private Button add_record2_22;
	private Button add_record3_11;
	private Button add_record3_12;
	private Button add_record3_21;
	private Button add_record3_22;
	private Button add_record4_1;
	private Button add_record4_2;
	private ImageButton backward_bottom;
	private ImageButton additional_list;
	private ImageButton finish_bottom;
	
	private int functionnum=0;
	private int record=0;
	private String recordname="";
	
	@Override
	protected void onCreate(Bundle savedInstanceState) 
	{
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);   
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
		setContentView(R.layout.activity_main);
	    
		//定義給layout上的哪個物件
		add_record1_1 = (Button)findViewById(R.id.add_record1_1);
		add_record1_2 = (Button)findViewById(R.id.add_record1_2);
		add_record2_11 = (Button)findViewById(R.id.add_record2_11);
		add_record2_12 = (Button)findViewById(R.id.add_record2_12);
		add_record2_21 = (Button)findViewById(R.id.add_record2_21);
		add_record2_22 = (Button)findViewById(R.id.add_record2_22);
		add_record3_11 = (Button)findViewById(R.id.add_record3_11);
		add_record3_12 = (Button)findViewById(R.id.add_record3_12);
		add_record3_21 = (Button)findViewById(R.id.add_record3_21);
		add_record3_22 = (Button)findViewById(R.id.add_record3_22);
		add_record4_1 = (Button)findViewById(R.id.add_record4_1);
		add_record4_2 = (Button)findViewById(R.id.add_record4_2);
		backward_bottom = (ImageButton)findViewById(R.id.backward_bottom);
		additional_list = (ImageButton)findViewById(R.id.additional_list);
		finish_bottom = (ImageButton)findViewById(R.id.finish_bottom);
		
		add_record1_1.setOnClickListener(add_record_bottom);
		add_record1_2.setOnClickListener(add_record_bottom);
		add_record2_11.setOnClickListener(add_record_bottom);
		add_record2_12.setOnClickListener(add_record_bottom);
		add_record2_21.setOnClickListener(add_record_bottom);
		add_record2_22.setOnClickListener(add_record_bottom);
		add_record3_11.setOnClickListener(add_record_bottom);
		add_record3_12.setOnClickListener(add_record_bottom);
		add_record3_21.setOnClickListener(add_record_bottom);
		add_record3_22.setOnClickListener(add_record_bottom);
		add_record4_1.setOnClickListener(add_record_bottom);
		add_record4_2.setOnClickListener(add_record_bottom);
		backward_bottom.setOnClickListener(other_funtion_bottom);
		additional_list.setOnClickListener(other_funtion_bottom);
		finish_bottom.setOnClickListener(other_funtion_bottom);
		
	}
	/*@Override
	protected void onDestroy() //結束資料串流，避免資料遺失?
	{
		// TODO Auto-generated method stub
		super.onDestroy();
		volleyballDB.close();
	}*/

	/*@Override
	public boolean onCreateOptionsMenu(Menu menu) 
	{
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}*/
	
	private Button.OnClickListener add_record_bottom = new Button.OnClickListener()
	{
		@Override
		public void onClick(View view) 
		{
			switch(view.getId()) 
		    {
		        case R.id.add_record1_1:
		        	record = 1;
		        	recordname="發球得分";
		        break;
		        case R.id.add_record1_2:
		        	record = 2;
		        	recordname="發球失分";
		        break;
		        case R.id.add_record2_11:
		        	record = 3;
		            recordname="扣球得分";
		        break;
		        case R.id.add_record2_12:
		        	record = 4;
		            recordname="扣球失分";
		        break;
		        case R.id.add_record2_21:
		        	record = 5;
		            recordname="吊球得分";
		        break;
		        case R.id.add_record2_22:
		        	record = 6;
		            recordname="吊球失分";
		        break;
		        case R.id.add_record3_11:
		        	record = 7;
		            recordname="接發失誤";
		        break;
		        case R.id.add_record3_12:
		        	record = 8;
		        	recordname="接吊失誤";
		        break;
		        case R.id.add_record3_21:
		        	record = 9;
		            recordname="接扣失誤";
		        break;
		        case R.id.add_record3_22:
		        	record = 10;
		            recordname="處理失誤";
		        break;
		        case R.id.add_record4_1:
		        	record = 11;
		            recordname="攔網得分";
		        break;
		        case R.id.add_record4_2:
		        	record = 12;
		            recordname="攔網失分";
		        break;
		        case R.id.backward_bottom:
		            functionnum=1;
		        break;
		        case R.id.additional_list:
		            functionnum=2;
		        break;
		        case R.id.finish_bottom:
		            functionnum=3;
		        break;
		    }
	        
	        if(recordname != "")
	        {
		        Intent intent = new Intent(MainActivity.this, PlayerSelectPage.class);	
				Bundle bundle = new Bundle(); 
				bundle.putInt("record",record);
				bundle.putString("recordname",recordname);
			    intent.putExtras(bundle);
				startActivity(intent);
	        }
	        else 
	        {
	        	Toast.makeText(MainActivity.this, "record is not sended", Toast.LENGTH_SHORT).show();
	        }
		}
	};
	
	private ImageButton.OnClickListener other_funtion_bottom = new ImageButton.OnClickListener()
	{
		@Override
		public void onClick(View view) 
		{
	        switch(view.getId()) 
	        {
		        case R.id.backward_bottom:
	            	functionnum=1;
	            break;
	            case R.id.additional_list:
	            	functionnum=2;
	            break;
	            case R.id.finish_bottom:
	            	functionnum=3;
	            break;
	        }
	        if(functionnum != 0)
	        {
	        	if(functionnum==1)
	        	{
	        		Intent intent = new Intent(MainActivity.this, StartPage.class);
	        		intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
	        		startActivity(intent);
	        	}
	        	if(functionnum==2)
	        	{
	        		Toast.makeText(MainActivity.this,"bottom has not linked yet", Toast.LENGTH_SHORT).show();
	        	}
	        	if(functionnum==3)
	        	{
	        		Toast.makeText(MainActivity.this,"bottom has not linked yet", Toast.LENGTH_SHORT).show();
	        	}
	        }
	        else 
	        {
	        	Toast.makeText(MainActivity.this, "record is not sended", Toast.LENGTH_SHORT).show();
	        }
	    }
	};
}
