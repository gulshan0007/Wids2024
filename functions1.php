<?php
require_once("connect1.php");
function cleanQuery($string)
{
  if(get_magic_quotes_gpc())  // prevents duplicate backslashes
  {
    $string = stripslashes($string);
  }
  $badWords = array("/delete/i", "/update/i","/union/i","/insert/i","/drop/i","/http/i","/--/i");
  $string = preg_replace($badWords, "", $string);
  if (phpversion() >= '4.3.0')
  {
    $string = mysql_real_escape_string($string);
  }
  else
  {
    $string = mysql_escape_string($string);
  }
  return $string;
}


function ldap_auth($ldap_id,$ldap_password){
	//return true;
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	if($ldap_id=='') die("You have not entered any LDAP ID. Please go back and fill it up.");
	if($ldap_password=='') die("You have not entered any password. Please go back and fill it up.");
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_id)");
	$info = ldap_get_entries($ds, $sr);
	$ldap_id = $info[0]['dn'];
	if(@ldap_bind($ds,$ldap_id,$ldap_password)){
		return true;
	}
	else{ return false;}
	
}

function already_has_project($ldap_id){
$db = mysqli_connect("10.105.177.5", "ugacademics", "ug_acads","ugacademics") or die("Connection Error: " . mysql_error());

        #mysql_select_db("ugacademics") or die("Error conecting to db.");

        $query = "SELECT ldap_id FROM surp_member WHERE ldap_id='$ldap_id'";
$result= mysqli_query($db,$query);
        $is_registered = mysqli_num_rows($db,$result);
 
        return $is_registered;
}

function is_registered($email){

	// $db = mysqli_connect("10.105.177.5", "ugacademics", "ug_acads","ugacademics") or die("Connection Error: " . mysql_error());
	//$db = mysqli_connect("localhost", "root", "","ugacademics") or die("Connection Error: " . mysql_error());
	$db = mysqli_connect('remotemysql.com', 'NFQ7BMypRh', 'J1oIPYSZ1Q', 'NFQ7BMypRh') or die("Connection Error: " . mysql_error());

	#mysql_select_db() or die("Error conecting to db.");

	// $query = "SELECT Roll_Number FROM surp_test WHERE Roll_Number='$ldap_id'";
	$query = "SELECT username FROM surp_registered WHERE username='$email'";
	#echo $query;
	$result= mysqli_query($db,$query) or die("Your query is not right");
	#echo $result;
	$is_registered = mysqli_num_rows($result);
	#echo $is_registered;
	
	return $is_registered;
}

function ldap_find_all($attribute = 'uid', $value = '*', $baseDn = 'dc=iitb,dc=ac,dc=in') 
{  
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
    $r = ldap_search($ds, $baseDn, $attribute . '=' . $value); 

    if ($r) 
    { 
        //if the result contains entries with surnames, 
        //sort by surname: 
        ldap_sort($ds, $r, "sn"); 

        return ldap_get_entries($ds, $r); 
    } 
} 

function DepartmentFindAll(){
	
	$db = new PDO("mysql:dbname=ugacademics;host=10.105.177.5", "ugacademics", "ug_acads" );
	
	$query = $db->prepare("SELECT value,department from departments ");
	$query->execute();
	$result = $query->fetchAll();
	$db=null;
	return $result;
	
	
}

// function register_user($timestamp,$fullname,$roll,$email,$hostel,$alt_email,$department,$mobile,$room,$cpi,$pid1,$profname1,$profdept1,$projtitle1,$sop1,$pid2,$profname2,$profdept2,$projtitle2,$sop2,$pid3,$profname3,$profdept3,$projtitle3,$sop3)
function register_user($timestamp,$fullname,$roll,$email,$alt_email,$department,$cpi,$pid1,$sop1,$pid2,$sop2,$pid3,$sop3,$ss_asc){
	/*$db = new PDO("mysql:dbname=ispa;host=10.105.177.5", "root", "fedora13" );
	$created_at =date("Y-m-d H:i:s");
	$query = $db->prepare("INSERT INTO registered_users_for_project (username,fullname,department,email,alt_email,year_of_study,mobile,hostel,room) VALUES (?,?,?,?,?,?,?,?,?)");
	*/
	// $db = mysqli_connect("10.105.177.5", "ugacademics", "ug_acads","ugacademics") or die("Connection Error: " . mysql_error()); echo "hi";
	//$db = mysqli_connect("localhost", "root", "","ugacademics") or die("Connection Error: " . mysql_error()); echo "hi";
	$db = mysqli_connect('remotemysql.com', 'NFQ7BMypRh', 'J1oIPYSZ1Q', 'NFQ7BMypRh') or die("Connection Error: " . mysql_error()); echo "hi";

#	mysql_select_db();

	// $query = "INSERT INTO surp_test (Timestamp,Full_Name,Roll_Number,Email,Alt_Email,Hostel,Room,Mobile,Department,CPI,PreferenceID1,ProfName1,ProfDept1,ProjectTitle1,SOP1,PreferenceID2,ProfName2,ProfDept2,ProjectTitle2,SOP2,PreferenceID3,ProfName3,ProfDept3,ProjectTitle3,SOP3) VALUES ('$timestamp','$fullname','$roll','$email','$alt_email','$hostel','$room','$mobile','$department','$cpi','$pid1','$profname1','$profdept1','$projtitle1','$sop1','$pid2','$profname2','$profdept2','$projtitle2','$sop2','$pid3','$profname3','$profdept3','$projtitle3','$sop3')";
	$query = "INSERT INTO surp_registered(Timestamp,username, fullname, roll, department, altemail, cpi, PreferenceID1, SOP1, PreferenceID2, SOP2, PreferenceID3, SOP3, SS_Asc) VALUES ('$timestamp','$email','$fullname','$roll','$department','$alt_email','$cpi','$pid1','$sop1','$pid2','$sop2','$pid3','$sop3','$ss_asc')";
	$result= mysqli_query($db, $query) or die ('Error Connecting to database');
	
	/*$query->bindParam(':username',$username);
	$query->bindParam(':fullname',$fullname);
	$query->bindParam(':department',$department);
	$query->bindParam(':email',$email);
	$query->bindParam(':alt_email',$alt_email);
	$query->bindParam(':year_of_study',$year_of_study);
	$query->bindParam(':mobile',$mobile);
	$query->bindParam(':hostel',$hostel);
	$query->bindParam(':room',$room);*/
	//$query->execute(array($username,$fullname,$department,$email,$alt_email,$year_of_study,$mobile,$hostel,$room));
//	$db=null;
	
	
	
	
}    

function add_new_book($created_by,$name,$semester,$course,$cost,$tags){
$db = new PDO("mysql:dbname=$dbname;host=10.105.177.5", "$dbuser", "$dbpasswd" );
$query=$db->prepare("INSERT INTO books(created_by,name,semester_used,course,cost,tags) VALUES (?,?,?,?,?,?)");
$query->execute(array($created_by,$name,$semester,$course,$cost,$tags));
return true;
}

function add_new_student_application($username,$department,$preference_1,$preference_2,$preference_3){
$db = new PDO("mysql:dbname=$dbname;host=10.105.177.5", "$dbuser", "$dbpasswd" );
$query=$db->prepare("INSERT INTO user_data_2013(ldap_id,department) VALUES (?,?)");
$query->execute(array("username","department"));
return true;
}
