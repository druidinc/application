<div class="fade-box"></div>

<div class="section group panel customer_information left">
	<div class="section group title">
		<div class="col span_11_of_12">
	    	Customer Inquiry Form
	    </div>
		<div class="col span_1_of_12 right">
	        <a href="#send" class="close" onclick="closeInquiry()">X</a>
	    </div>	    
    </div>
    <form method="POST">
        {$load_errors}
        <div class="section group panel">
        	<div class="col span_1_of_2">First Name <font color="red">*</font></div>
        	<div class="col span_1_of_2"><input type="text" name="firstname" value="{$firstname}"></div>
    	</div>
    	<div class="section group panel">
        	<div class="col span_1_of_2">Last Name <font color="red">*</font></div>
        	<div class="col span_1_of_2"><input type="text" name="lastname" value="{$lastname}"></div>
    	</div>
    	<div class="section group panel">
        	<div class="col span_1_of_2">Address <font color="red">*</font></div>
        	<div class="col span_1_of_2"><input type="text" name="address" value="{$address}"></div>
    	</div>
    	<div class="section group panel">
        	<div class="col span_1_of_2">Email <font color="red">*</font></div>
        	<div class="col span_1_of_2"><input type="text" name="email" value="{$email}"></div>
    	</div>
    	<div class="section group panel">
        	<div class="col span_1_of_2">Phone <font color="red">*</font></div>
        	<div class="col span_1_of_2"><input type="text" name="phone" value="{$phone}"></div>
    	</div>
    	<div class="section group panel">
        	<div class="col span_1_of_2">Company</div>
        	<div class="col span_1_of_2"><input type="text" name="company" value="{$company}"></div>
    	</div>
    	<div class="section group panel">
        	<div class="col span_1_of_2">Message / Comment <font color="red">*</font></div>
        	<div class="col span_1_of_2"><textarea name="message">{$message}</textarea></div>
            <input type="hidden" name="subject" value="JCA Sage Products Inquiry"/>  
    	</div>
    	<div class="section group panel">
        	<div class="col span_2_of_2 center">
        		<input type="submit" name="submit" value="Submit">
        		<input type="reset" name="reset" value="Reset">
        	</div>
    	</div>
    </form>    
</div>

<!-- <div class="customer_information" name="info">
    <div style="width: auto;height: 25px;">
        <a href="#send" class="close" onclick="closeInquiry()">X</a>
    </div>
    <form method="POST">
        {$load_errors}
        <table >
            <tr>
                <td colspan="2" style="text-align:right">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
 </div> -->