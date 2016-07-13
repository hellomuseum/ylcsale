<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
$("form :input").click(function(){
	var content = $(this).val();
	alert(content);

if ($("input").hasClass("submitButton")==false) {
$("input").addClass("submitButton");
}

});

  });
</script>
<style type="text/css"> 
#search-box 
{ 
position: relative; 
float: left; 
width: 265px; 
height: 55px; 
background: url(Images/search-bg.gif) top right no-repeat; 
} 
.searchTextBox 
{ 
position: relative; 
float: left; 
margin-top: 14px; 
margin-right:14px; 
padding: 5px 5px 0 5px; 
height: 22px; 
width: 141px; 
border: 1px solid #000; 
background: #915735; 
margin-left: 14px; 
color: #fdf086; 
} 
.submitButton 
{ 
position: relative; 
height: 29px; 
margin-top: 14px; 
width: 70px; 
background: #D2B277; 
border: 1px solid #3E1210; 
letter-spacing: 1px; 
text-transform: uppercase; 
cursor: pointer; 
font-size: 11px; 
} 
.submitButton:hover 
{ 
text-decoration: underline; 
} 

</style> 

</head>
<body>
<table width="800" height="385" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800" height="385" align="center" valign="top" background="站点/images/bg01.gif"><p>请注册页面 （带*必填）</p>
    <p>&nbsp;</p>
    <form id="form1" name="form1" method="post" action="">
      <label>姓名：
      <input name="姓名" type="text" id="姓名" accesskey="1" tabindex="a" size="20" maxlength="30" />
        </label>
    *
    </form>
    <form id="form2" name="form2" method="post" action="">
       <label>密码：
        <input name="密码" type="text" id="密码" accesskey="2" tabindex="b" size="20" maxlength="24" />
        </label>
      *
    </form>   
    <form id="form3" name="form3" method="post" action="">
      
      <label>电子邮件：
        <input type="text" name="电子邮件" id="电子邮件" />
        </label>
    </form>   
    <form id="form4" name="form4" method="post" action="">
      <label></label>
      <label>您的</label>
    
    <label>出生日期：
    <select name="出生" size="1" id="出生">
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>1989</option>
      <option>1988</option>
      <option>1987</option>
      <option>1986</option>
      <option>1985</option>
      <option>1984</option>
    </select>
    </label>
    年
    <label>
    <select name="月" size="1" id="月">
      <option>12</option>
      <option>11</option>
      <option>10</option>
      <option>09</option>
      <option>08</option>
      <option>07</option>
      <option>06</option>
      <option>05</option>
      <option>04</option>
      <option>03</option>
      <option>02</option>
      <option>01</option>
    </select>
    </label>
    月
    <label>
    <select name="日" size="1" id="日">
      <option>31</option>
      <option>30</option>
      <option>29</option>
      <option>28</option>
      <option>27</option>
      <option>26</option>
      <option>25</option>
      <option>24</option>
      <option>23</option>
      <option>22</option>
      <option>21</option>
      <option>20</option>
      <option>19</option>
      <option>18</option>
      <option>17</option>
      <option>16</option>
      <option>15</option>
      <option>14</option>
      <option>13</option>
      <option>12</option>
      <option>11</option>
      <option>10</option>
      <option>09</option>
      <option>08</option>
      <option>07</option>
      <option>06</option>
      <option>05</option>
      <option>04</option>
      <option>03</option>
      <option>02</option>
      <option>01</option>
    </select>
    </label>
    日
    </form>   
    <form id="form5" name="form5" method="post" action="">
      <label></label>
      <p>性别：
        <label>
        <input type="radio" name="radio" id="radio" value="男" />
        </label>
         男
         <label>
         <input type="radio" name="radio2" id="radio2" value="女" />
         </label>
      女</p>
    </form>   
    <form id="form6" name="form6" method="post" action="">
      <label>
        <input type="submit" name="button" id="button" value="提交" />
        </label>
      <label>
       <input type="submit" name="button2" id="button2" value="重设" />
      </label>
    </form>
    <p>&nbsp; </p></td>
  </tr>
</table>

<div id="search-box"> 
<TextBox ID="txtSearch" runat="server" class="searchTextBox" /> 
<Button ID="btnSubmit" runat="server" class="submitButton" Text="Search" /> 
</div> 
<input name="txtSearch" id="txtSearch" class="searchTextBox" type="text"> 
<input name="btnSubmit" value="Search" id="btnSubmit" type="submit"> 



</body>
</html>

