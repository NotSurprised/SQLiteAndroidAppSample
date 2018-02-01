package com.example.volleyball;

import java.util.ArrayList;
import java.util.List;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;

public class Datasource {

  // Database fields
  private SQLiteDatabase database;
  private DBOpenHelper dbHelper;

  public Datasource(Context context) {
    dbHelper = new DBOpenHelper(context);
  }

  public void open() throws SQLException {
    database = dbHelper.getWritableDatabase();
  }

  public void close() {
    dbHelper.close();
  }
  
  @SuppressWarnings("deprecation")
  public Cursor getCursor(){
	  String[] columns = {"pId","playerName","serveGoal","serveLost","spikeGoal","spikeLost","lobGoal","lobLost","serveDealMis","spikeDealMis","lobDealMis","dealMis"};
	  Cursor cursor = database.query("tasks", columns, null, null, null, null, null);//undone
	  return cursor;
	}
}