package com.example.volleyball;


import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;







import android.os.Bundle;
import android.app.Activity;
import android.content.ComponentName;
import android.content.ContentValues;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.util.Log;
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

public class PlayerSelectPage extends Activity{
	
	private SQLiteDatabase volleyballDB;
	
	//宣告物件
	private Button add_player1_1;
	private Button add_player1_2;
	private Button add_player2_1;
	private Button add_player2_2;
	private Button add_player3_1;
	private Button add_player3_2;
	private Button add_player4_1;
	private Button add_player4_2;
	private ImageButton backward_bottom2;
	private ImageButton additional_list2;
	private ImageButton finish_bottom2;
	
	private int functionnum=0;
	private int player=0;
	private int record=0;
	private String recordname="";
	private int task_pId = 0, task_serveGoal = 0, task_serveLost = 0, task_spikeGoal = 0, task_spikeLost = 0, task_lobGoal = 0,
	task_lobLost = 0, task_serveDealMis = 0, task_spikeDealMis = 0, task_lobDealMis = 0, task_dealMis = 0;

	String task_playerName = "";

	protected void onCreate(Bundle savedInstanceState) {
		//使用layout並全螢幕顯示
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);   
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
		setContentView(R.layout.player_main);
		//取得bundle值
		Bundle bundle =getIntent().getExtras(); 
		recordname = bundle.getString("recordname");
		record = bundle.getInt("record");
		
		// 建立自訂的 DBOpenHelper 物件
	    DBOpenHelper dbHelper = new DBOpenHelper(getApplicationContext());
	    
	    // 設定建立 table 的指令
	    dbHelper.sCreateTableCommand = "CREATE TABLE tasks(pId INTEGER PRIMARY KEY AUTOINCREMENT, playerName TEXT, serveGoal INTEGER, serveLost INTEGER, spikeGoal INTEGER, spikeLost INTEGER, lobGoal INTEGER, lobLost INTEGER, serveDealMis INTEGER, spikeDealMis INTEGER, lobDealMis INTEGER, dealMis INTEGER);";
		
	    // 取得上面指定的檔名資料庫，如果該檔名不存在就會自動建立一個資料庫檔案
	    volleyballDB = dbHelper.getWritableDatabase();
		
		//定義給layout上的哪個物件
		add_player1_1 = (Button)findViewById(R.id.add_player1_1);
		add_player1_2 = (Button)findViewById(R.id.add_player1_2);
		add_player2_1 = (Button)findViewById(R.id.add_player2_1);
		add_player2_2 = (Button)findViewById(R.id.add_player2_2);
		add_player3_1 = (Button)findViewById(R.id.add_player3_1);
		add_player3_2 = (Button)findViewById(R.id.add_player3_2);
		add_player4_1 = (Button)findViewById(R.id.add_player4_1);
		add_player4_2 = (Button)findViewById(R.id.add_player4_2);
		backward_bottom2 = (ImageButton)findViewById(R.id.backward_bottom2);
		additional_list2 = (ImageButton)findViewById(R.id.additional_list2);
		finish_bottom2 = (ImageButton)findViewById(R.id.finish_bottom2);
		
		add_player1_1.setOnClickListener(add_record_bottom);
		add_player1_2.setOnClickListener(add_record_bottom);
		add_player2_1.setOnClickListener(add_record_bottom);
		add_player2_2.setOnClickListener(add_record_bottom);
		add_player3_1.setOnClickListener(add_record_bottom);
		add_player3_2.setOnClickListener(add_record_bottom);
		add_player4_1.setOnClickListener(add_record_bottom);
		add_player4_2.setOnClickListener(add_record_bottom);
		backward_bottom2.setOnClickListener(other_funtion_bottom);
		additional_list2.setOnClickListener(other_funtion_bottom);
		finish_bottom2.setOnClickListener(other_funtion_bottom);
		
	}
	
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}
	
	private void SetRecordDetail()
	{
		switch(record)
		{
			case 1:
				task_serveGoal = 1;
			break;
			case 2:
				task_serveLost = 1;
			break;
			case 3:
				task_spikeGoal = 1;
			break;
			case 4:
				task_spikeLost = 1;
			break;
			case 5:
				task_lobGoal = 1;
			break;
			case 6:
				task_lobLost = 1;
			break;
			case 7:
				task_serveDealMis = 1;
			break;
			case 8:
				task_spikeDealMis = 1;
			break;
			case 9:
				task_lobDealMis = 1;
			break;
			case 10:
				task_dealMis = 1;
			break;
		}
		String pIdNum = Integer.toString(player);
		String selectQuery = "SELECT * FROM tasks WHERE _pId = "+pIdNum+"";
		Cursor c = volleyballDB.rawQuery(selectQuery, null);
		if (c.moveToFirst()) {
			int record2=Integer.parseInt(c.getString(2))+task_serveGoal;
			Log.i("record",String.valueOf(record2) );
			int record3=Integer.parseInt(c.getString(3))+task_serveLost;
			int record4=Integer.parseInt(c.getString(4))+task_spikeGoal;
			int record5=Integer.parseInt(c.getString(5))+task_spikeLost;
			int record6=Integer.parseInt(c.getString(6))+task_lobGoal;
			int record7=Integer.parseInt(c.getString(7))+task_lobLost;
			int record8=Integer.parseInt(c.getString(8))+task_serveDealMis;
			int record9=Integer.parseInt(c.getString(9))+task_spikeDealMis;
			int record10=Integer.parseInt(c.getString(10))+task_lobDealMis;
			int record11=Integer.parseInt(c.getString(11))+task_dealMis;
			ContentValues cv = new ContentValues();
				cv.put("serveGoal", record2);
				cv.put("serveLost", record3);
				cv.put("spikeGoal", record4);
				cv.put("spikeLost", record5);
				cv.put("lobGoal", record6);
				cv.put("lobLost", record7);
				cv.put("serveDealMis", record8);
				cv.put("spikeDealMis", record9);
				cv.put("lobDealMis", record10);
				cv.put("dealMis", record11);
				int affectedRow = volleyballDB.update("tasks", cv, "_pId='" + pIdNum+"'", null);
				Log.i("record affected",String.valueOf(affectedRow) );
			String selectQuery1 = "SELECT * FROM tasks WHERE _pId = "+pIdNum+"";
			Cursor c1 = volleyballDB.rawQuery(selectQuery1, null);
			if (c1.moveToFirst())
			{
			    Toast.makeText(PlayerSelectPage.this,"name "+c1.getString(1), Toast.LENGTH_SHORT).show();
			    
			    if(task_serveGoal==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"serveGoal "+c1.getString(2), Toast.LENGTH_SHORT).show();
			    }
			    if(task_serveLost==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"serveLost "+c1.getString(3), Toast.LENGTH_SHORT).show();
			    }
			    if(task_spikeGoal==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"spikeGoal "+c1.getString(4), Toast.LENGTH_SHORT).show();
			    }
			    if(task_spikeLost==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"spikeLost "+c1.getString(5), Toast.LENGTH_SHORT).show();
			    }
			    if(task_lobGoal==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"lobGoal "+c1.getString(6), Toast.LENGTH_SHORT).show();
			    }
			    if(task_lobLost==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"lobLost "+c1.getString(7), Toast.LENGTH_SHORT).show();
			    }
			    if(task_serveDealMis==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"serveDealMis "+c1.getString(8), Toast.LENGTH_SHORT).show();
			    }
			    if(task_spikeDealMis==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"spikeDealMis "+c1.getString(9), Toast.LENGTH_SHORT).show();
			    }
			    if(task_lobDealMis==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"lobDealMis "+c1.getString(10), Toast.LENGTH_SHORT).show();
			    }
			    if(task_dealMis==1)
			    {
			    	Toast.makeText(PlayerSelectPage.this,"dealMis "+c1.getString(11), Toast.LENGTH_SHORT).show();
			    }
			}
			c1.close();
		}
		c.close();
	}
	
	private Button.OnClickListener add_record_bottom = new Button.OnClickListener()
	{
		@Override
		public void onClick(View view) 
		{
	        switch(view.getId()) {
	            case R.id.add_player1_1:
	            	player=1;
	            	recordname="先發1  "+recordname;
	            break;
	            case R.id.add_player1_2:
	            	player=2;
	            	recordname="先發2  "+recordname;
	            break;
	            case R.id.add_player2_1:
	            	player=3;
	            	recordname="先發3  "+recordname;
	            break;
	            case R.id.add_player2_2:
	            	player=4;
	            	recordname="先發4  "+recordname;
	            break;
	            case R.id.add_player3_1:
	            	player=5;
	            	recordname="先發5  "+recordname;
	            break;
	            case R.id.add_player3_2:
	            	player=6;
	            	recordname="先發6  "+recordname;
	            break;
	            case R.id.add_player4_1:
	            	player=7;
	            	recordname="板凳1  "+recordname;
	            break;
	            case R.id.add_player4_2:
	            	player=8;
	            	recordname="板凳2  "+recordname;
	            break;
	            
	        }
	        if(player != 0)
	        {
	        	SetRecordDetail();
		        Intent intent = new Intent(PlayerSelectPage.this, MainActivity.class);
			    intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
				startActivity(intent);
				//Toast.makeText(PlayerSelectPage.this,recordname, Toast.LENGTH_SHORT).show();
	        } 
	        else 
	        {
	        	Toast.makeText(PlayerSelectPage.this,"massage is not send", Toast.LENGTH_SHORT).show();
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
		        case R.id.backward_bottom2:
	            	functionnum=1;
	            break;
	            case R.id.additional_list2:
	            	functionnum=2;
	            break;
	            case R.id.finish_bottom2:
	            	functionnum=3;
	            break;
	        }
	        if(functionnum != 0)
	        {
	        	if(functionnum==1)
	        	{
	        		Intent intent = new Intent(PlayerSelectPage.this, MainActivity.class);
	        		intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
	        		startActivity(intent);
	        	}
	        	if(functionnum==2)
	        	{
	        		Toast.makeText(PlayerSelectPage.this,"bottom has not linked", Toast.LENGTH_SHORT).show();
	        	}
	        	if(functionnum==3)
	        	{
	        		Toast.makeText(PlayerSelectPage.this,"bottom has not linked", Toast.LENGTH_SHORT).show();
	        	}
	        }
	        else 
	        {
	        	Toast.makeText(PlayerSelectPage.this, "record is not sended", Toast.LENGTH_SHORT).show();
	        }
	    }
	};
}
