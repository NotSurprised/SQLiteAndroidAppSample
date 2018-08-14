package com.example.volleyball;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;







import java.util.Timer;
import java.util.TimerTask;

import com.example.volleyball.Datasource;
import com.example.volleyball.R;

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


public class NameInserter extends Activity {
	private static final String DB_FILE = "volleyball.db",
								DB_TABLE = "tasks";
	private SQLiteDatabase volleyballDB;
	private Datasource datasource;
	private String tag = "nameInsert" ;
	private String pIdrecord="";
	
	EditText mainlist_1;
	EditText mainlist_2;
	EditText mainlist_3;
	EditText mainlist_4;
	EditText mainlist_5;
	EditText mainlist_6;
	EditText mainlist_7;
	EditText mainlist_8;
	
	private ImageButton check_playername;
	
	protected void onCreate(Bundle savedInstanceState) 
	{
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);   
	    getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
		setContentView(R.layout.insert_player_name);
		
		// 建立自訂的 DBOpenHelper 物件
		
	    DBOpenHelper dbHelper = new DBOpenHelper(getApplicationContext());//?getApplicationContext()

	    
	    
	    // 設定建立 table 的指令
	    dbHelper.sCreateTableCommand = "CREATE TABLE tasks(pId INTEGER PRIMARY KEY AUTOINCREMENT, playerName TEXT, serveGoal INTEGER, serveLost INTEGER, spikeGoal INTEGER, spikeLost INTEGER, lobGoal INTEGER, lobLost INTEGER, serveDealMis INTEGER, spikeDealMis INTEGER, lobDealMis INTEGER, dealMis INTEGER);";
		
	    // 取得上面指定的檔名資料庫，如果該檔名不存在就會自動建立一個資料庫檔案
	    volleyballDB = dbHelper.getWritableDatabase();
	    
		//定義給layout上的哪個物件
		check_playername = (ImageButton)findViewById(R.id.check_player_name);
		mainlist_1 = (EditText)findViewById(R.id.mainlist_1);
		mainlist_2 = (EditText)findViewById(R.id.mainlist_2);
		mainlist_3 = (EditText)findViewById(R.id.mainlist_3);
		mainlist_4 = (EditText)findViewById(R.id.mainlist_4);
		mainlist_5 = (EditText)findViewById(R.id.mainlist_5);
		mainlist_6 = (EditText)findViewById(R.id.mainlist_6);
		mainlist_7 = (EditText)findViewById(R.id.mainlist_7);
		mainlist_8 = (EditText)findViewById(R.id.mainlist_8);
		
		check_playername.setOnClickListener(check_player_name);
	}
	
	private ImageButton.OnClickListener check_player_name = new ImageButton.OnClickListener()
	{
		public void onClick(View view) 
		{
			String deletesql = "DELETE FROM tasks  ";
			volleyballDB.execSQL(deletesql);
			int playerId=1;
			ContentValues newRow1 = new ContentValues();
			newRow1.put("_pId", playerId);
			newRow1.put("playerName", mainlist_1.getText().toString());
			newRow1.put("serveGoal", 0);
			newRow1.put("serveLost", 0);
			newRow1.put("spikeGoal", 0);
			newRow1.put("spikeLost", 0);
			newRow1.put("lobGoal", 0);
			newRow1.put("lobLost", 0);
			newRow1.put("serveDealMis", 0);
			newRow1.put("spikeDealMis", 0);
			newRow1.put("lobDealMis", 0);
			newRow1.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow1);
			
			playerId++;
			ContentValues newRow2 = new ContentValues();
			newRow2.put("_pId", playerId);
			newRow2.put("playerName", mainlist_2.getText().toString());
			newRow2.put("serveGoal", 0);
			newRow2.put("serveLost", 0);
			newRow2.put("spikeGoal", 0);
			newRow2.put("spikeLost", 0);
			newRow2.put("lobGoal", 0);
			newRow2.put("lobLost", 0);
			newRow2.put("serveDealMis", 0);
			newRow2.put("spikeDealMis", 0);
			newRow2.put("lobDealMis", 0);
			newRow2.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow2);
			
			playerId++;
			ContentValues newRow3 = new ContentValues();
			newRow3.put("_pId", playerId);
			newRow3.put("playerName", mainlist_3.getText().toString());
			newRow3.put("serveGoal", 0);
			newRow3.put("serveLost", 0);
			newRow3.put("spikeGoal", 0);
			newRow3.put("spikeLost", 0);
			newRow3.put("lobGoal", 0);
			newRow3.put("lobLost", 0);
			newRow3.put("serveDealMis", 0);
			newRow3.put("spikeDealMis", 0);
			newRow3.put("lobDealMis", 0);
			newRow3.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow3);
			
			playerId++;
			ContentValues newRow4 = new ContentValues();
			newRow4.put("_pId", playerId);
			newRow4.put("playerName", mainlist_4.getText().toString());
			newRow4.put("serveGoal", 0);
			newRow4.put("serveLost", 0);
			newRow4.put("spikeGoal", 0);
			newRow4.put("spikeLost", 0);
			newRow4.put("lobGoal", 0);
			newRow4.put("lobLost", 0);
			newRow4.put("serveDealMis", 0);
			newRow4.put("spikeDealMis", 0);
			newRow4.put("lobDealMis", 0);
			newRow4.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow4);
			
			playerId++;
			ContentValues newRow5 = new ContentValues();
			newRow5.put("_pId", playerId);
			newRow5.put("playerName", mainlist_5.getText().toString());
			newRow5.put("serveGoal", 0);
			newRow5.put("serveLost", 0);
			newRow5.put("spikeGoal", 0);
			newRow5.put("spikeLost", 0);
			newRow5.put("lobGoal", 0);
			newRow5.put("lobLost", 0);
			newRow5.put("serveDealMis", 0);
			newRow5.put("spikeDealMis", 0);
			newRow5.put("lobDealMis", 0);
			newRow5.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow5);
			
			playerId++;
			ContentValues newRow6 = new ContentValues();
			newRow6.put("_pId", playerId);
			newRow6.put("playerName", mainlist_6.getText().toString());
			newRow6.put("serveGoal", 0);
			newRow6.put("serveLost", 0);
			newRow6.put("spikeGoal", 0);
			newRow6.put("spikeLost", 0);
			newRow6.put("lobGoal", 0);
			newRow6.put("lobLost", 0);
			newRow6.put("serveDealMis", 0);
			newRow6.put("spikeDealMis", 0);
			newRow6.put("lobDealMis", 0);
			newRow6.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow6);
			
			playerId++;
			ContentValues newRow7 = new ContentValues();
			newRow7.put("_pId", playerId);
			newRow7.put("playerName", mainlist_7.getText().toString());
			newRow7.put("serveGoal", 0);
			newRow7.put("serveLost", 0);
			newRow7.put("spikeGoal", 0);
			newRow7.put("spikeLost", 0);
			newRow7.put("lobGoal", 0);
			newRow7.put("lobLost", 0);
			newRow7.put("serveDealMis", 0);
			newRow7.put("spikeDealMis", 0);
			newRow7.put("lobDealMis", 0);
			newRow7.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow7);
			
			playerId++;
			ContentValues newRow8 = new ContentValues();
			newRow8.put("_pId", playerId);
			newRow8.put("playerName", mainlist_8.getText().toString());
			newRow8.put("serveGoal", 0);
			newRow8.put("serveLost", 0);
			newRow8.put("spikeGoal", 0);
			newRow8.put("spikeLost", 0);
			newRow8.put("lobGoal", 0);
			newRow8.put("lobLost", 0);
			newRow8.put("serveDealMis", 0);
			newRow8.put("spikeDealMis", 0);
			newRow8.put("lobDealMis", 0);
			newRow8.put("dealMis", 0);
			volleyballDB.insert(DB_TABLE, null, newRow8);
			
			Toast.makeText(NameInserter.this, "新增成功!", Toast.LENGTH_SHORT).show();
			Intent intent = new Intent(NameInserter.this, MainActivity.class);
			intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);//它可以关掉所要到的界面中间的activity
			startActivity(intent);
		}
	};
}
