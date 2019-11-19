<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
  <head>
    <meta charset="UTF-8">
    <title>SPP</title>
  </head>
  <body>
  <div class="background">
    <div class="widget-container">
       <div class="top-nav">
         <div class="left-nav">
           <input class="btn_tab_menu active" onclick='openMethod(sppFormTwo, sppForm, this)' type="submit" value="K.KARTI İLE ÖDEME">
         </div>
         <div class="right-nav">
            <a href="#" id="close-x" class="close-x">
                X
              </a>
          <input class="btn_tab_menu" onclick='openMethod(sppForm, sppFormTwo, this)' type="submit" value="DİĞER ÖDEME">
        </div>
   </div>

   <div id="form_error">
    <!-- <input class="btn_err_style" type="reset" value="HATA KODU"> -->
   </div>
   <h1> Toplam: <b id="spp-total-amount"></b> ₺</h1>     
   <form novalidate action="<?php echo $order->get_checkout_payment_url(true);?>" autocomplete="on" method="POST" id="spp-form" action="#">
     <div class="inputs">
       <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE5cHgiIGhlaWdodD0iMjBweCIgdmlld0JveD0iMCAwIDE5IDIwIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+Q29tYmluZWQgU2hhcGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPgogICAgICAgIDxwYXRoIGQ9Ik0xLDE4LjYyNjQ2NDggQzEsMTguNjI2NDY0OCAxLjU1MTkzNDUzLDEzLjA3MzM4ODQgNi4yMDg3NTAyOCwxMS4xMDcxOTQzIEM0LjcwNjUwODA2LDEwLjEyNTMzMjkgMy43MTM4NjcxOSw4LjQyODU4ODMxIDMuNzEzODY3MTksNi41IEMzLjcxMzg2NzE5LDMuNDYyNDMzODggNi4xNzYzMDEwNiwxIDkuMjEzODY3MTksMSBDMTIuMjUxNDMzMywxIDE0LjcxMzg2NzIsMy40NjI0MzM4OCAxNC43MTM4NjcyLDYuNSBDMTQuNzEzODY3Miw4LjI2MTMyMDQzIDEzLjg4NTk0NDQsOS44MjkyNjkxMyAxMi41OTgwNDA3LDEwLjgzNTkwNDIgQzE3LjgzODUwNTgsMTIuNTM1NzE4NiAxNy44ODM1MTA2LDE4Ljk1ODAwNzggMTcuODgzNTEwNiwxOC45NTgwMDc4IEw2LjY5MTQwNjI1LDE4Ljk1ODAwNzgiIGlkPSJDb21iaW5lZC1TaGFwZSIgc3Ryb2tlPSIjQUI5MkE1IiBzdHJva2Utd2lkdGg9IjIiPjwvcGF0aD4KICAgIDwvZz4KPC9zdmc+" />
       </div>
       <input type="text" name="cc_name" value="<?php echo Etictools::getValue('cc_name') ?>" autofocus placeholder="Kart Sahibinin Adı">
       <div class="card-icon">
         <img id="card-icons" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjIxcHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDIxIDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+Y2FyZDwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJjYXJkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxLjAwMDAwMCwgMS4wMDAwMDApIiBzdHJva2U9IiNBQTkxQTQiIHN0cm9rZS13aWR0aD0iMiI+CiAgICAgICAgICAgIDxwb2x5bGluZSBpZD0iUmVjdGFuZ2xlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHBvaW50cz0iMCAxNiAwIDAgMTkgMCAxOSAxNCA2LjAxNjgyMTI5IDE0Ij48L3BvbHlsaW5lPgogICAgICAgICAgICA8cGF0aCBkPSJNMC4wMzI3MTQ4NDM4LDUuNTgyMjc1MzkgTDE4LjE5NTE3NTksNS41ODIyNzUzOSIgaWQ9IlBhdGgtMiI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+" />
       </div>
       <input type="tel" value="<?php if (Etictools::getValue('cc_number')): ?><?php echo Etictools::getValue('cc_number') ?><?php endif; ?>" id="ccnumber" onkeypress="return isNumber(event)" onkeyup='keyup(), inputCheck(inputCcNumber,inputMonth,19)' maxlength="19" name="cc_number" placeholder="Kart Numarası">
       <div class="left-input">
       <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjIxcHgiIGhlaWdodD0iMjJweCIgdmlld0JveD0iMCAwIDIxIDIyIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+R3JvdXA8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPgogICAgICAgIDxnIGlkPSJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS4wMDAwMDAsIDEuMDAwMDAwKSIgc3Ryb2tlPSIjQUE5MUE2IiBzdHJva2Utd2lkdGg9IjIiPgogICAgICAgICAgICA8cG9seWxpbmUgaWQ9IlJlY3RhbmdsZS0yIiBwb2ludHM9IjE1LjE5MTQwNjIgMiAxOSAyIDE5IDIwIDAgMjAgMCAyIDAgMiA0LjE2MzMzMDA4IDIiPjwvcG9seWxpbmU+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMiwwIEwxMiw1LjkwMjczMzk2IiBpZD0iUGF0aC0zIj48L3BhdGg+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik03LDAgTDcsNS45MDI3MzM5NiIgaWQ9IlBhdGgtMy1Db3B5Ij48L3BhdGg+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" />
       </div>
         <input class="last month" value="<?php echo Etictools::getValue('cc_expiry') ?>" name="cc_expiry" type="tel" id="month" maxlength="2" onkeypress="return isNumber(event)" onkeyup='inputCheck(inputMonth,inputYears,2), limiterMonth(this)' placeholder="AA">
         <span class="slash">/</span>
         <!-- value birleştirilecek name ve value -->
         <input class="last year" value="<?php echo Etictools::getValue('cc_expiry') ?>" name="cc_expiry" type="tel" id="years" maxlength="2" onkeypress="return isNumber(event)" onkeyup='inputCheck(inputYears,inputCvc,2), limiterYears(this)' placeholder="YY">
       </div>
       <div class="right-input">
         <div class="card-icon">
         <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjIxcHgiIGhlaWdodD0iMjNweCIgdmlld0JveD0iMCAwIDIxIDIzIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+R3JvdXAgMjwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJHcm91cC0yIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxLjAwMDAwMCwgMS4wMDAwMDApIiBzdHJva2U9IiNBQTkyQTIiIHN0cm9rZS13aWR0aD0iMiI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNSw2IEMxNSwyLjY4NjI5MTUgMTIuMzEzNzA4NSwwIDksMCBDNS42ODYyOTE1LDAgMywyLjY4NjI5MTUgMyw2IiBpZD0iT3ZhbC0yIj48L3BhdGg+CiAgICAgICAgICAgIDxwb2x5bGluZSBpZD0iUmVjdGFuZ2xlLTMiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgcG9pbnRzPSIwIDIxIDAgNyAwIDcgMTkgNyAxOSAyMSA2LjA0MzIxMjg5IDIxIj48L3BvbHlsaW5lPgogICAgICAgICAgICA8Y2lyY2xlIGlkPSJPdmFsIiBjeD0iMTAiIGN5PSIxNCIgcj0iMiI+PC9jaXJjbGU+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" />
       </div>
         <input class="last" <?php echo Etictools::getValue('cc_cvv') ?> name="cc_name" id="cvc" onkeypress='return isNumber(event)' type="tel" maxlength="3" placeholder="CVC">
       </div>
     </div>
     <div class="loader loader--style2" id="installment-loading" title="loading">
      <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
        <animateTransform attributeType="xml"
          attributeName="transform"
          type="rotate"
          from="0 25 25"
          to="360 25 25"
          dur="0.6s"
          repeatCount="indefinite"/>
        </path>
      </svg>
    </div>
     <div id="add">
        <table id="installment-table">
            <tr id="installment-titles">
              <th>TAKSİT</th>
              <th>T.TUTARI</th>
              <th>TUTAR</th>
            </tr>
          </table>
            <!-- <tr>
              <td><label class="input-radio-button">5 TAKSİT
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label></td>
              <td>1 x 449,00₺</td>
              <td>449,00₺</td>
            </tr> -->
          
     </div>
    
    
     <input class="btn_style" name="sanalpospro_submit" type="submit" value="ÖDEMEYİ ONAYLA">
    </form>
    <div style="display: none;" id="spp-form-two">
      <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, beatae! Impedit ratione error voluptate obcaecati. Delectus suscipit quod, laboriosam pariatur modi, labore dolor atque numquam sapiente ullam, a facilis eligendi?</h1>
    </div>
  </div>
</div>
</body>
</html>
<!-- partial -->

  <script  src="./script.js"></script>
  <script  src="./fetch-jsonp.js"></script>
  <script>
    var protrccname = 'Your Name';
    var currency_sign = "&#8378;";
    var card = new Array();
    var cards = new Array();
    var sanalposprouri = "https://www.nordia.com.tr/wp-content/plugins/sanalpospro/";
    var defaultins = "449.00";
    
	    cards ['axess'] = new Array();
						    cards["axess"]["1"] = "449.00";
								    cards["axess"]["3"] = "471.54";
								    cards["axess"]["6"] = "491.74";
				    cards ['bonus'] = new Array();
						    cards["bonus"]["1"] = "449.00";
								    cards["bonus"]["3"] = "471.54";
								    cards["bonus"]["6"] = "491.74";
				    cards ['maximum'] = new Array();
						    cards["maximum"]["1"] = "449.00";
								    cards["maximum"]["3"] = "471.54";
								    cards["maximum"]["6"] = "491.74";
				    cards ['cardfinans'] = new Array();
						    cards["cardfinans"]["1"] = "449.00";
								    cards["cardfinans"]["3"] = "471.54";
								    cards["cardfinans"]["6"] = "491.74";
				    cards ['world'] = new Array();
						    cards["world"]["1"] = "449.00";
								    cards["world"]["3"] = "471.54";
								    cards["world"]["6"] = "491.74";
				    cards ['paraf'] = new Array();
						    cards["paraf"]["1"] = "449.00";
								    cards["paraf"]["3"] = "471.54";
								    cards["paraf"]["6"] = "491.74";
				    cards ['advantage'] = new Array();
						    cards["advantage"]["1"] = "449.00";
								    cards["advantage"]["3"] = "471.54";
								    cards["advantage"]["6"] = "491.74";
				    cards ['combo'] = new Array();
						    cards["combo"]["1"] = "449.00";
								    cards["combo"]["3"] = "471.54";
                    cards["combo"]["6"] = "491.74";
			</script>


</body>
</html>
