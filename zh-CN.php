<?php
/*
Created by Erxin Shang from en-US, sherxin@gmail.com
Remaining some still English for further updates.
TO CREATE A NEW LANGUAGE, COPY THE en-us.php to your own localization code name.
We are going to keep these files in the iso xx-xx format because that will also
allow us to autoformat numbers on the sites.

PLEASE put your name somewhere at the top of the language file so we can get in touch with
you to update it and thank you for your hard work!

PLEASE NOTE: DO NOT ADD RANDOM KEYS in the middle of the translations.  In order to make it easier to tell what language keys are missing, from this point forward, we are going to add all new language keys at the BOTTOM of this file. The number of lines in your language file will tell you which keys still need to be translated.  If you have questions please ask on the forums or on Discord.

UserSpice
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();
//important strings
//You defiitely want to customize these for your language
$lang = array_merge($lang,array(
"THIS_LANGUAGE"	=>"简体中文",
"THIS_CODE"			=>"zh-CN",
"MISSING_TEXT"	=>"Missing Text",
));

//Database Menus
$lang = array_merge($lang,array(
"MENU_HOME"			=> "首页",
"MENU_HELP"			=> "帮助",
"MENU_ACCOUNT"	=> "账户",
"MENU_DASH"			=> "管理员面板",
"MENU_USER_MGR"	=> "用户管理",
"MENU_PAGE_MGR"	=> "页面管理",
"MENU_PERM_MGR"	=> "权限管理",
"MENU_MSGS_MGR"	=> "消息管理",
"MENU_LOGS_MGR"	=> "系统日志",
"MENU_LOGOUT"		=> "注销",
));

// Signup
$lang = array_merge($lang,array(
	"SIGNUP_TEXT"					=> "用户注册",
	"SIGNUP_BUTTONTEXT"		=> "注册",
	"SIGNUP_AUDITTEXT"		=> "已注册",
	));

// Signin
$lang = array_merge($lang,array(
	"SIGNIN_FAIL"				=> "登录失败",
	"SIGNIN_PLEASE_CHK" => "请检查您的用户名密码，再试一次",
	"SIGNIN_UORE"				=> "用户名或邮件地址",
	"SIGNIN_PASS"				=> "密码",
	"SIGNIN_TITLE"			=> "请登录",
	"SIGNIN_TEXT"				=> "登录",
	"SIGNOUT_TEXT"			=> "注销",
	"SIGNIN_BUTTONTEXT"	=> "登录",
	"SIGNIN_REMEMBER"		=> "记住登录",
	"SIGNIN_AUDITTEXT"	=> "已登录",
	"SIGNIN_FORGOTPASS"	=>"忘记密码",
	"SIGNOUT_AUDITTEXT"	=> "Logged Out",
	));

// Account Page
$lang = array_merge($lang,array(
	"ACCT_EDIT"					=> "编辑账户信息",
	"ACCT_2FA"					=> "Manage 2 Factor Authentication",
	"ACCT_SESS"					=> "Manage Sessions",
	"ACCT_HOME"					=> "账户首页",
	"ACCT_SINCE"				=> "Member Since",
	"ACCT_LOGINS"				=> "登录次数",
	"ACCT_SESSIONS"			=> "Number of Active Sessions",
	"ACCT_MNG_SES"			=> "Click the Manage Sessions button in the left sidebar for more information.",
	));

	//General Terms
	$lang = array_merge($lang,array(
		"GEN_ENABLED"			=> "Enabled",
		"GEN_DISABLED"		=> "Disabled",
		"GEN_ENABLE"			=> "Enable",
		"GEN_DISABLE"			=> "Disable",
		"GEN_NO"					=> "No",
		"GEN_YES"					=> "Yes",
		"GEN_MIN"					=> "最小",
		"GEN_MAX"					=> "最大",
		"GEN_CHAR"				=> "字符", //as in characters
		"GEN_SUBMIT"			=> "Submit",
		"GEN_MANAGE"			=> "管理",
		"GEN_VERIFY"			=> "验证",
		"GEN_SESSION"			=> "Session",
		"GEN_SESSIONS"		=> "Sessions",
		"GEN_EMAIL"				=> "电子邮件",
		"GEN_FNAME"				=> "First Name",
		"GEN_LNAME"				=> "Last Name",
		"GEN_UNAME"				=> "用户名",
		"GEN_PASS"				=> "密码",
		"GEN_MSG"					=> "消息",
		"GEN_TODAY"				=> "今天",
		"GEN_CLOSE"				=> "关闭",
		"GEN_CANCEL"			=> "取消",
		"GEN_CHECK"				=> "[ 全选/全部取消 ]",
		"GEN_WITH"				=> "with",
		"GEN_UPDATED"			=> "Updated",
		"GEN_UPDATE"			=> "Update",
		"GEN_BY"					=> "by",
		"GEN_FUNCTIONS"		=> "Functions",
		"GEN_NUMBER"			=> "number",
		"GEN_NUMBERS"			=> "numbers",
		"GEN_INFO"				=> "Information",
		"GEN_REC"					=> "Recorded",
		"GEN_DEL"					=> "Delete",
		"GEN_NOT_AVAIL"		=> "Not Available",
		"GEN_AVAIL"				=> "Available",
		"GEN_BACK"				=> "Back",
		"GEN_RESET"				=> "重置",
		"GEN_REQ"					=> "required",
		"GEN_AND"					=> "and",
		"GEN_SAME"				=> "must be the same",
		));

//validation class
	$lang = array_merge($lang,array(
		"VAL_SAME"				=> "必须相同",
		"VAL_EXISTS"			=> "已经存在。请重新选择",
		"VAL_DB"					=> "数据库错误",
		"VAL_NUM"					=> "必须是数字",
		"VAL_INT"					=> "must be a whole number",
		"VAL_EMAIL"				=> "必须是有效的电子邮件地址",
		"VAL_NO_EMAIL"		=> "不能是电子邮件地址",
		"VAL_SERVER"			=> "must belong to a valid server",
		"VAL_LESS"				=> "须小于",
		"VAL_GREAT"				=> "须大于",
		"VAL_LESS_EQ"			=> "须小于或等于",
		"VAL_GREAT_EQ"		=> "须大于或等于",
		"VAL_NOT_EQ"			=> "不能等于",
		"VAL_EQ"					=> "必须等于",
		"VAL_TZ"					=> "必须是有效的时区名",
		"VAL_MUST"				=> "必须是",
		"VAL_MUST_LIST"		=> "must be one of the following",
		"VAL_TIME"				=> "must be a valid time",
		"VAL_SEL"					=> "is not a valid selection",
		"VAL_NA_PHONE"		=> "must be a valid North American phone number",
	));

		//Time
	$lang = array_merge($lang,array(
		"T_YEARS"			=> "年",
		"T_YEAR"			=> "年",
		"T_MONTHS"		=> "月",
		"T_MONTH"			=> "月",
		"T_WEEKS"			=> "周",
		"T_WEEK"			=> "周",
		"T_DAYS"			=> "天",
		"T_DAY"				=> "日",
		"T_HOURS"			=> "小时",
		"T_HOUR"			=> "时",
		"T_MINUTES"		=> "分钟",
		"T_MINUTE"		=> "分",
		"T_SECONDS"		=> "秒",
		"T_SECOND"		=> "秒",
		));


		//Passwords
	$lang = array_merge($lang,array(
		"PW_NEW"		=> "新密码",
		"PW_OLD"		=> "旧密码",
		"PW_CONF"		=> "确认密码",
		"PW_RESET"	=> "重置密码",
		"PW_UPD"		=> "保存密码",
		"PW_SHOULD"	=> "密码应...",
		"PW_SHOW"		=> "显示密码",
		"PW_SHOWS"	=> "显示密码",
		));


		//Join
	$lang = array_merge($lang,array(
		"JOIN_SUC"			=> "欢迎使用",
		"JOIN_THANKS"		=> "感谢您的注册！",
		"JOIN_HAVE"			=> "至少",
		"JOIN_CAP"			=> "大写字母",
		"JOIN_TWICE"		=> "准确输入两次",
		"JOIN_CLOSED"		=> "很抱歉现在不接受注册。如有疑问请联系网站管理员。",
		"JOIN_TC"				=> "用户注册协议",
		"JOIN_ACCEPTTC" => "接受用户协议",
		"JOIN_CHANGED"	=> "用户协议有所改变",
		"JOIN_ACCEPT" 	=> "接受用户协议",
		));

		//Sessions
	$lang = array_merge($lang,array(
		"SESS_SUC"	=> "Successfully killed ",
		));

		//Messages
	$lang = array_merge($lang,array(
		"MSG_SENT"			=> "消息已成功发送！",
		"MSG_MASS"			=> "Your mass message has been sent!",
		"MSG_NEW"				=> "新消息",
		"MSG_NEW_MASS"	=> "New Mass Message",
		"MSG_CONV"			=> "Conversations",
		"MSG_NO_CONV"		=> "No Conversations",
		"MSG_NO_ARC"		=> "No Conversations",
		"MSG_QUEST"			=> "Send Email Notification if Enabled?",
		"MSG_ARC"				=> "Archived Threads",
		"MSG_VIEW_ARC"	=> "View Archived Threads",
		"MSG_SETTINGS"  => "消息设置",
		"MSG_READ"			=> "Read",
		"MSG_BODY"			=> "正文",
		"MSG_SUB"				=> "主题",
		"MSG_DEL"				=> "Delivered",
		"MSG_REPLY"			=> "回复",
		"MSG_QUICK"			=> "快速回复",
		"MSG_SELECT"		=> "选择用户",
		"MSG_UNKN"			=> "Unknown Recipient",
		"MSG_NOTIF"			=> "Message Email Notifications",
		"MSG_BLANK"			=> "不允许空白信息",
		"MSG_MODAL"			=> "Click here or press Alt + R to focus on this box OR press Shift + R to open the expanded reply pane!",
		"MSG_ARCHIVE_SUCCESSFUL"        => "You have successfully archived %m1% threads",
		"MSG_UNARCHIVE_SUCCESSFUL"      => "You have successfully unarchived %m1% threads",
		"MSG_DELETE_SUCCESSFUL"         => "You have successfully deleted %m1% threads",
		"USER_MESSAGE_EXEMPT"         			=> "User is %m1% exempted from messages.",
		"MSG_MK_READ"		=> "已读",
		"MSG_MK_UNREAD"	=> "未读",
		"MSG_ARC_THR"		=> "Archive Selected Threads",
		"MSG_UN_THR"		=> "Unarchive Selected Threads",
		"MSG_DEL_THR"		=> "Delete Selected Threads",
		"MSG_SEND"			=> "发送消息",
		));

	//2 Factor Authentication
	$lang = array_merge($lang,array(
		"2FA"				=> "2 Factor Authentication",
		"2FA_CONF"	=> "Are you sure you want to disable 2FA? Your account will no longer be protected.",
		"2FA_SCAN"	=> "Scan this QR code with your authenticator app or input the key",
		"2FA_THEN"	=> "Then enter one of your one-time passkeys here",
		"2FA_FAIL"	=> "There was a problem verifying 2FA. Please check Internet or contact support.",
		"2FA_CODE"	=> "2FA Code",
		"2FA_EXP"		=> "Expired 1 fingerprint",
		"2FA_EXPD"	=> "已过期",
		"2FA_EXPS"	=> "Expires",
		"2FA_ACTIVE"=> "Active Sessions",
		"2FA_NOT_FN"=> "No fingerprints found",
		"2FA_FP"		=> "Fingerprints",
		"2FA_NP"		=> "<strong>Login Failed</strong> Two Factor Auth Code was not present. Please try again.",
		"2FA_INV"		=> "<strong>Login Failed</strong> Two Factor Auth Code was invalid. Please try again.",
		"2FA_FATAL"	=> "<strong>Fatal Error</strong> Please contact System Admin.",
		));

	//Redirect Messages - These get a plus between each word
	$lang = array_merge($lang,array(
		"REDIR_2FA"						=> "Sorry.Two+factor+is+not+enabled+at+this+time",
		"REDIR_2FA_EN"				=> "2+Factor+Authentication+Enabled",
		"REDIR_2FA_DIS"				=> "2+Factor+Authentication+Disabled",
		"REDIR_2FA_VER"				=> "2+Factor+Authentication+Verified+and+Enabled",
		"REDIR_SOM_TING_WONG" => "Something+went+wrong.+Please+try+again.",
		"REDIR_MSG_NOEX"			=> "That+thread+does+not+belong+to+you+or+does+not+exist.",
		"REDIR_UN_ONCE"				=> "Username+has+already+been+changed+once.",
		"REDIR_EM_SUCC"				=> "Email+Updated+Successfully",
		));

	//Emails
	$lang = array_merge($lang,array(
		"EML_CONF"			=> "验证邮件",
		"EML_VER"				=> "验证您的邮件地址",
		"EML_CHK"				=> "Email request received. Please check your email to perform verification. Be sure to check your Spam and Junk folder as the verification link expires in ",
		"EML_MAT"				=> "您的邮件地址不匹配。",
		"EML_HELLO"			=> "Hello from ",
		"EML_HI"				=> "您好，",
		"EML_AD_HAS"		=> "管理员已经重置了您的密码。",
		"EML_AC_HAS"		=> "管理员已建立了您的账户",
		"EML_REQ"				=> "您需通过上面链接设置您的密码。",
		"EML_EXP"				=> "请注意，重置密码链接将于此日期过期：",
		"EML_VER_EXP"		=> "请注意，验证链接将于此日期过期：",
		"EML_CLICK"			=> "点击这里登录。",
		"EML_REC"				=> "建议您登录时修改您的密码。",
		"EML_MSG"				=> "您有新消息来自于",
		"EML_REPLY"			=> "Click here to reply or view the thread",
		"EML_WHY"				=> "You are receiving this email because a request was made to reset your password. If this was not you, you may disregard this email.",
		"EML_HOW"				=> "If this was you, click the link below to continue with the password reset process.",
		"EML_EML"				=> "A request to change your email was made from within your user account.",
		"EML_VER_EML"		=> "Thanks for signing up.  Once you verify your email address you will be ready to login! Please click the link below to verify your email address.",

		));

		//Verification
		$lang = array_merge($lang,array(
			"VER_SUC"			=> "您的邮件地址验证成功！",
			"VER_FAIL"		=> "无法验证您的账户，请再试一次。",
			"VER_RESEND"	=> "重新发送验证邮件",
			"VER_AGAIN"		=> "输入您的邮件地址再试一次",
			"VER_PAGE"		=> "<li>Check your email and click the link that is sent to you</li><li>Done</li>",
			"VER_RES_SUC" => "<p>Your verification link has been sent to your email address.</p><p>Click the link in the email to complete verification. Be sure to check your spam folder if the email isn't in your inbox.</p><p>Verification links are only valid for ",
			"VER_OOPS"		=> "Oops...something went wrong, maybe an old reset link you clicked on. Click below to try again",
			"VER_RESET"		=> "Your password has been reset!",
			"VER_INS"			=> "<li>Enter your email address and click Reset</li> <li>Check your email and click the link that is sent to you.</li>
												<li>Follow the on screen instructions</li>",
			"VER_SENT"		=> "<p>Your password reset link has been sent to your email address.</p>
			    							<p>Click the link in the email to Reset your password. Be sure to check your spam folder if the email isn't in your inbox.</p><p>Reset links are only valid for ",
			"VER_PLEASE"	=> "请重置您的密码",
			));

	//User Settings
	$lang = array_merge($lang,array(
		"SET_PIN"				=> "重置PIN吗",
		"SET_WHY"				=> "无法改变？",
		"SET_PW_MATCH"	=> "必须和新密码一致",

		"SET_PIN_NEXT"	=> "You can set a new PIN the next time you require verification",
		"SET_UPDATE"		=> "保存用户设置",
		"SET_NOCHANGE"	=> "管理员已禁止修改用户名。",
		"SET_ONECHANGE"	=> "管理员设置用户名只能更改一次，您已修改过用户名。",

		"SET_GRAVITAR"	=> "<strong>Want to change your profile picture? </strong><br> Visit <a href='https://en.gravatar.com/'>https://en.gravatar.com/</a> and setup an account with the same email you used on this site.It works across millions of sites. It's fast and easy!",

		"SET_NOTE1"			=> "<p><strong>Please note</strong> there is a pending request to update your email to",

		"SET_NOTE2"			=> ".</p><p>Please use the verification email to complete this request.</p>
		<p>If you need a new verification email, please re-enter the email above and submit the request again.</p>",

		"SET_PW_REQ" 		=> "required for changing password, email, or resetting PIN",
		"SET_PW_REQI" 	=> "Required to change your password",

		));

	//Errors
	$lang = array_merge($lang,array(
		"ERR_FAIL_ACT"		=> "Failed to kill active sessions, Error: ",
		"ERR_EMAIL"				=> "Email NOT sent due to error. Please contact site administrator.",
		"ERR_EM_DB"				=> "数据库中不存在此邮件地址",
		"ERR_TC"					=> "请阅读并接受用户协议",
		"ERR_CAP"					=> "您未通过Captcha测试, 是机器人！",
		"ERR_PW_SAME"			=> "您的新密码不能与旧密码相同",
		"ERR_PW_FAIL"			=> "Current password verification failed. Update failed. Please try again.",
		"ERR_GOOG"				=> "<strong>NOTE:</strong> If you originally signed up with your Google/Facebook account, you will need to use the forgot password link to change your password...unless you're really good at guessing.",
		"ERR_EM_VER"			=> "Email verification is not enabled. Please contact the System Administrator.",
		"ERR_EMAIL_STR"		=> "Something is strange. Please re-verify your email. We are sorry for the inconvenience",

		));

	//Maintenance Page
	$lang = array_merge($lang,array(
		"MAINT_HEAD"		=> "我们会很快回来！",
		"MAINT_MSG"			=> "很抱歉给您带来不便。我们正在对网站进行维护。<br> 我们会很快重新上线的！",
		"MAINT_BAN"			=> "很抱歉您被禁止使用本服务。如果您认为这是错误的，请联系网站管理员。",
		"MAINT_TOK"			=> "There was an error with your form. Please go back and try again. Please note that submitting the form by refreshing the page will cause an error. If this continues to happen, please contact the administrator.",
		"MAINT_OPEN"		=> "开源PHP用户管理框架",
		"MAINT_PLEASE"	=> "您已成功安装UserSpice！<br>如希望浏览使用文档，请访问"
		));

		//dataTables Added in 4.4.08
		//NOTE: do not change the words like _START_ between the two _ symbols!
		$lang = array_merge($lang,array(
		"DAT_SEARCH"    => "查询",
		"DAT_FIRST"     => "First",
		"DAT_LAST"      => "Last",
		"DAT_NEXT"      => "后一条",
		"DAT_PREV"      => "前一条",
		"DAT_NODATA"        => "表中无可用数据",
		"DAT_INFO"          => "Showing _START_ to _END_ of _TOTAL_ entries",
		"DAT_ZERO"          => "Showing 0 to 0 of 0 entries",
		"DAT_FILTERED"      => "(filtered from _MAX_ total entries)",
		"DAT_MENU_LENG"     => "Show _MENU_ entries",
		"DAT_LOADING"       => "正在装载...",
		"DAT_PROCESS"       => "正在处理...",
		"DAT_NO_REC"        => "无匹配记录",
		"DAT_ASC"           => "Activate to sort column ascending",
		"DAT_DESC"          => "Activate to sort column descending",
		));


///////////////////////////////////////////////////////////////

//Backend Translations for UserSpice
$lang = array_merge($lang,array(
"BE_DASH"    			=> "仪表台",
"BE_SETTINGS"     => "设置",
"BE_GEN"					=> "一般",
"BE_REG"					=> "注册",
"BE_CUS"					=> "个性设置",
"BE_DASH_ACC"			=> "访问仪表台",
"BE_TOOLS"				=> "工具",
"BE_BACKUP"				=> "备份",
"BE_UPDATE"				=> "升级",
"BE_CRON"				  => "Crons定时任务",
"BE_IP"				  	=> "IP管理器",
));



//LEAVE THIS LINE AT THE BOTTOM.  It allows users/lang to override these keys
if(file_exists($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php")){
	include($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php");
}
?>
