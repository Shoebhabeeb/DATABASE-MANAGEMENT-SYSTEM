Functional Requirements:
1.The system shall provide an option to view the account details.
	Select * from account where acct_no =’ $acct_no’.
2.The system shall provide an option for the customer to view the transactional details.
SELECT * FROM `transactions` where Sender_accnum = '$value' OR Receiver_accnum = '$value' ORDER BY ID DESC;"
3. The system shall provide an option to transfer the money from accounts.
	UPDATE account SET avail_balance = '$remaing' WHERE acct_no = '$value'";
	UPDATE account SET avail_balance = '$add' WHERE acct_no = '$accnum'";
	INSERT INTO `transactionhistory`(`Sender_accnum`, `Receiver_accnum`, `amount`) VALUES ('$value', '$accnum',$amount)";
4.The system shall provide an option to manage the customer’s personal details.
         UPDATE account SET name='$name', phone= '$phone', email='$email',email='$email' WHERE acct_no='$value';"'
5.The system shall validate the amount available in the user’s account before releasing funds to the user.
  	UPDATE account SET balance = 'balance-amount' WHERE acct_No = '$value'
6.The system shall allow the user to check loan details.
	SELECT * FROM loans where cust_id = $custid
7.The system shall allow the user to check card details.
	SELECT * FROM loans where cust_id = $custid
8.The system shall allow admin to remove loan
	    DELETE FROM loan WHERE ID = '$id'
9.The system shall update the user’s account upon transfer of funds.
	UPDATE account SET avail_balance = '$remaing' WHERE acct_no = '$value'";
	UPDATE account SET avail_balance = '$add' WHERE acct_no = '$accnum'";
10.The system enables the banker to add a customer
    Insert into account(name,phone,address,accnumber,username,password,email,ssn) values  ('$name','$phonenumber','$address','$accountNum','$username','$password','$mail',$ssn);