<?php /* Smarty version 3.1.27, created on 2017-11-15 15:29:31
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/template/admin/qrcode.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11953849365a0becdb3a2e05_10553950%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb6ff5f8bc88417f54287878de97e99215e6735' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/template/admin/qrcode.tpl',
      1 => 1510730966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11953849365a0becdb3a2e05_10553950',
  'variables' => 
  array (
    'template_root' => 0,
    'userinfo' => 0,
    'ldaps' => 0,
    'authtype' => 0,
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0becdb44b038_27634319',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0becdb44b038_27634319')) {
function content_5a0becdb44b038_27634319 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11953849365a0becdb3a2e05_10553950';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<TITLE>验证</TITLE> 
<META http-equiv="Content-Type" content="text/html; charset=utf-8"><LINK href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/all_purpose_style.css" 
rel="stylesheet" type="text/css"> 
<STYLE type="text/css">
td{
	font-size: 14px;
}
#red_text {
	font-size: 16px;
	color: #0078ff;
	font-weight:bold;
}

#tinybox{position:absolute; display:none; padding:10px; background:#ffffff url(image/preload.gif) no-repeat 50% 50%; border:10px solid #e3e3e3; z-index:2000;}
#tinymask{position:absolute; display:none; top:0; left:0; height:100%; width:100%; background:#000000; z-index:1500;}
#tinycontent{background:#ffffff; font-size:1.1em;}
</STYLE>
 
<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/jquery-1.10.2.min.js" type="text/javascript"></SCRIPT>

<BODY style="background-color:#f1f1f1;">
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<DIV style="margin: 0px auto; width: 634px; ">
<TABLE width="670" align="center" border="0" cellspacing="0" cellpadding="0">
  <FORM name="f1" action="admin.php?controller=admin_index&amp;action=doqrcode" 
  method="post" >
  <TBODY>
  <TR>
    <TD align="center" valign="top"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/mobile_top<?php if (!($_smarty_tpl->tpl_vars['userinfo']->value['usbkey'] && $_smarty_tpl->tpl_vars['userinfo']->value['usbkeystatus'] == 11)) {?>1<?php }?>.jpg" width="670" height="43"></TD>
  </TR>
  <TR>
    <TD height="395" align="center" valign="top" background="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/mobile_bottom.jpg">
      <br>
      <TABLE width="90%" align="center" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD height="160" align="center" valign="bottom">
            <TABLE width="100%" border="0" cellspacing="1" cellpadding="5">
              <TBODY>
              <TR>
                <TD>
                  <TABLE width="100%" border="0" cellspacing="0" 
cellpadding="0">
                    <TBODY>
<TR>
                      <TD colspan="2" width="100%" align="right"></td></TR>
					    
                    <TR>
                      <TD colspan="2" height="45" align="center" align="center">用户名：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];
if ($_smarty_tpl->tpl_vars['userinfo']->value['usbkey'] && $_smarty_tpl->tpl_vars['userinfo']->value['usbkeystatus'] == 11) {?>&nbsp;&nbsp;(radkey:<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['usbkey'];?>
)<?php }?></TD></TR>
					    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['usbkey'] && $_smarty_tpl->tpl_vars['userinfo']->value['usbkeystatus'] == 11) {?>
                      <TR>
                        <TD height=45 align=center colspan=2><img src="include/phpqrcode/qrcodeimage.php?data=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['usbkey'];?>
&level=H&size=7" ></TD></TR>
                      <TR>
                        <TD height=45 align=center colspan=2>输入动态密码：<input type=text name="qrcode" id="qrcode" style="WIDTH: 200px; height:30px; line-height:30px;"  value="" ></TD>
					  </TR>
					  <?php } else { ?>
					   <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['authtype']) {?>
					  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['localauth'] && $_SESSION['authtype'] != 'localauth') {?>
					   <TR>
					   <TD height=45 align=right>输入本地密码：</TD>
                        <TD><input type=password name="localpwd" id="localpwd" style="WIDTH: 200px; height:30px; line-height:30px;"  value="" ></TD>
					  </TR>
                    <TR>
					
					  <?php }?>
					  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['radiusauth'] && $_SESSION['authtype'] != 'radiusauth') {?>
                       <TR> <TD height="45" align="right">输入RADIUS密码：</TD>
                      <TD><INPUT name="radiuspwd" id="ldapwd" style="width: 200px; height: 30px; line-height: 30px;" type="password"></TD></TR>
					   <?php }?>
					  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['ldapauth'] && $_SESSION['authtype'] != 'ldapauth') {?>
                    <TR>

                      <TD height="45" align="right">输入LDAP密码：</TD>
                      <TD><INPUT name="ldapwd" id="ldapwd" style="width: 200px; height: 30px; line-height: 30px;" type="password">&nbsp;<SELECT 
                        name="ldapserver" style="width: 150px; height: 30px; line-height: 30px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ldaps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
<option value='ldapauth_<?php echo $_smarty_tpl->tpl_vars['ldaps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['address'];?>
' <?php if ($_smarty_tpl->tpl_vars['authtype']->value == 'ldapauth') {?>selected<?php }?>>LDAP <?php echo $_smarty_tpl->tpl_vars['ldaps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['domain'];?>
</option>
<?php endfor; endif; ?> </SELECT></TD></TR>
                    <TR>
					
					  <?php }?>
					   <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['adauth'] && $_SESSION['authtype'] != 'adauth') {?>
                      <TD height="45" align="right">输入AD密码：</TD>
                      <TD><INPUT name="adpwd" id="adpwd" style="width: 200px; height: 30px; line-height: 30px;" type="password">&nbsp;<SELECT 
                        name="adserver" style="width: 150px; height: 30px; line-height: 30px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ads']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
<option value='adauth_<?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['address'];?>
' <?php if ($_smarty_tpl->tpl_vars['authtype']->value == 'adauth') {?>selected<?php }?>>AD <?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['domain'];?>
</option>
<?php endfor; endif; ?>
                        </SELECT></TD></TR>
						
					  <?php }?>
					  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['auth'] == 2) {?>
                    <TR>
                      <TD height="45" align="right">手机号：</TD>
                      <TD id="red_text"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['mobilenum'];?>
</TD></TR>
                    <TR>
                      <TD height="45" align="right">输入短信密码：</TD>
                      <TD><INPUT name="smspassword" id="smspassword" style="width: 85px; height: 30px; line-height: 30px;" type="text"> 
                                                 &nbsp;&nbsp;                 
<INPUT class="phonebtn3" id="ElapsedTimeBu" onClick="sendsms(120);" type="button" value="获取短信密码"></TD></TR>
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['emailauth']) {?>
                    <TR>
                      <TD height="45" align="right">邮箱：</TD>
                      <TD id="red_text"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['email'];?>
</TD></TR>
                    <TR>
                      <TD height="45" align="right">输入邮件密码：</TD>
                      <TD><INPUT name="smspassword" id="smspassword" style="width: 85px; height: 30px; line-height: 30px;" type="text"> 
                                                 &nbsp;&nbsp;                 
<INPUT class="phonebtn3" id="ElapsedTimeBu" onClick="sendemail(120);" type="button" value="获取邮件密码"></TD></TR>
 <?php }?>
					  <?php }?>
					  <?php }?>
</TBODY>
<style type="text/css">
.test ul{list-style:none;}
.test li{float:left;width:80px;margin-left:-10px;line-height:30px;}
</style>
</TABLE></TD></TR></TBODY></TABLE></TD></TR>
        <TR>
          <TD height="95" align="center"><div class="test"><ul><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['usbkey'] && $_smarty_tpl->tpl_vars['userinfo']->value['usbkeystatus'] == 11) {?><li><a id="ios" href='#' onclick="openjpg('ios');return false;" >IOS扫描下载</a><br /><img src="logo/ios.jpg" width="50" height="50"></li><li><a id="android" href='#' onclick="openjpg('android');return false;" >安卓扫描下载</a><br /><img src="logo/android.jpg" width="50" height="50"></li><li><a id="android" href='#' onclick="return false;" >Windows</a><br /><a href="admin.php?controller=admin_index&action=getkey" target="hide" >软件下载</a><br /><a href="admin.php?controller=admin_index&action=getkey&key=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['usbkey'];?>
" target="hide" >key</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php }?><li style="width: 130px;"><INPUT name="button" <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['usbkey'] && $_smarty_tpl->tpl_vars['userinfo']->value['usbkeystatus'] == 11) {?>onclick="return confirm('用户令牌将被新生成的手机令牌替换,确定操作吗？')"<?php }?> class="phonebtn1" id="button" onMouseOut="this.className='phonebtn1'" onMouseMove="this.className='phonebtn1cur'" type="submit" value="提 交"></li><li style="width: 130px;"><INPUT name="button" onclick="location='admin.php?controller=admin_index&action=logout'" class="phonebtn1" id="button" onMouseOut="this.className='phonebtn1'" onMouseMove="this.className='phonebtn1cur'" type="button" value="退 出"></li></ul></div></TD></TR></TBODY></TABLE></TD></TR></TBODY></FORM></TABLE>
</DIV>
<SCRIPT language="javascript">
 function checkdpwd(){
 	var obj = document.getElementById('qrcode');
 	if(obj==null||obj==undefined||obj.value==''||/^[0-9a-z]+$/.test(obj.value)){
 		return true;
 	}
 	alert('动态密码请输入小写字母或数字');
 	return false;
 }
 $msg = '获取短信密码';
function sendsms(seconds){
  $msg = '获取短信密码';
	window.open ('admin.php?controller=admin_index&action=get_sms&uid=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['uid'];?>
', 'hide', 'height=130, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');
	document.getElementById('ElapsedTimeBu').disabled = true;
	document.getElementById('ElapsedTimeBu').value='还剩'+seconds+'秒';
	ElapsedTime(seconds)
	
}
function sendemail(seconds){
  $msg = '获取邮件密码';
  window.open ('admin.php?controller=admin_index&action=get_email&uid=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['uid'];?>
', 'hide', 'height=130, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');
  document.getElementById('ElapsedTimeBu').disabled = true;
  document.getElementById('ElapsedTimeBu').value='还剩'+seconds+'秒';
  ElapsedTime(seconds)
  
}
function ElapsedTime(seconds){
	if(seconds==1){
		document.getElementById('ElapsedTimeBu').disabled = false;
		document.getElementById('ElapsedTimeBu').value= $msg ;
		return ;
	}
	document.getElementById('ElapsedTimeBu').value='还剩'+(seconds-1)+'秒';
    setTimeout("ElapsedTime("+(seconds-1)+")", 1000);
}

function openjpg(t){
	var msg = "";
	if(t=='ios'){
		window.open ('logo/install.php?t=ios', 'newwindow', 'height=200, width=200, top=200, left=400, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');
	}else{
		window.open ('logo/install.php?t=android', 'newwindow', 'height=200, width=200, top=200, left=400, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');
	}
}

</SCRIPT>
 <IFRAME name="hide" height="0" src="about:blank" frameborder="0" scrolling="no"></IFRAME> </BODY></HTML>
<?php }
}
?>