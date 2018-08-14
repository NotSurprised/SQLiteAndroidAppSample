package com.example.volleyball;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteDatabase.CursorFactory;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

public class DBOpenHelper extends SQLiteOpenHelper {
	
	public String sCreateTableCommand;

	public DBOpenHelper(Context context) {
		super(context, "volleyball.db", null, 1);
		// TODO Auto-generated constructor stub
		sCreateTableCommand="";
	}
	

	@Override
	public void onCreate(SQLiteDatabase db) {
		// TODO Auto-generated method stub
		sCreateTableCommand = "CREATE TABLE tasks(_pId INTEGER PRIMARY KEY AUTOINCREMENT, playerName TEXT, serveGoal INTEGER, serveLost INTEGER, spikeGoal INTEGER, spikeLost INTEGER, lobGoal INTEGER, lobLost INTEGER, serveDealMis INTEGER, spikeDealMis INTEGER, lobDealMis INTEGER, dealMis INTEGER);";
		
		db.execSQL(sCreateTableCommand);
		
	}

	@Override
	public void onUpgrade(SQLiteDatabase db, int oldVer, int newVer) {
		// TODO Auto-generated method stub
		Log.w(DBOpenHelper.class.getName(),
		        "Upgrading database from version " + oldVer + " to "
		            + newVer + ", which will destroy all old data");
		    db.execSQL("DROP TABLE IF EXISTS tasks");
		    onCreate(db);
	}

}
