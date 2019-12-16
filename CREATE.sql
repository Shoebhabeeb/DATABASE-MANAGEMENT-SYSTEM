create table BANK(
BANK_CODE  INT(4),
BANK_HEADQUARTERS VARCHAR(50),
BANK_NAME VARCHAR(50),
constraint pk_bank_nm primary key (BANK_NAME)
);

create table BRANCH(
BRANCH_CODE  VARCHAR(10),
BRANCH_NAME VARCHAR(50),
MANAGER VARCHAR(50),
ASSETS DECIMAL(30,5),
BANK_NAME VARCHAR(50),
constraint pk_branch_cd primary key (BRANCH_CODE),
constraint fk_bankernm foreign key (BANK_NAME) REFERENCES BANK(BANK_NAME)
);

create table CARDS(
CARD_TYPE varchar(20),
CARD_NO Bigint NOT NULL,
NM_ON_CARD varchar(30),
SECURITY_CODE int,		
EXP_MONTH int,
EXP_YEAR varchar(10),
IS_ACTIVE enum('Y','N'),
constraint pk_cardno primary key (CARD_NO)
);

create table EMPLOYEE(
BANKER_ID  INT,
BANKER_NAME VARCHAR(50),
ADDRESS VARCHAR(50),
BANKER_EMAIL VARCHAR(50),
BRANCH_CODE VARCHAR(10),
constraint pk_bankerid primary key (BANKER_ID),
constraint fk_branchcode foreign key (BRANCH_CODE) REFERENCES BRANCH(BRANCH_CODE)
);

create table CUSTOMER(
CUST_ID Bigint NOT NULL ,
CUST_NAME varchar(50),
CUST_DOB date,
SSN int ,
CUST_OCC varchar(30),		
CUST_EMAIL varchar(50),
CUST_PHONE_NO BigInt,
BANKER_ID int,
constraint fk_bankerid foreign key (BANKER_ID) REFERENCES EMPLOYEE(BANKER_ID),
constraint pk_custid primary key (CUST_ID)
);

create table CARDS_CUSTOMER(
CUST_ID bigint,
CARD_TYPE varchar(20),
CARD_NO Bigint ,
CC_BILLING_POST_CODE int,		
CC_BALANCE decimal(15,5),
CC_LIMIT decimal(15,5),
DB_BALANCE decimal(15,5),
TCC_BALANCE decimal(15,5),
EMI_AMOUNT decimal(15,5),
LC_POINTS int,
LC_AMOUNT decimal(15,5),
CORP_AMOUNT decimal(15,5),
constraint fk_cardno foreign key (CARD_NO) REFERENCES CARDS(CARD_NO),
constraint fk_cards_custid foreign key (CUST_ID) REFERENCES CUSTOMER(CUST_ID)
);



create table ACCOUNT(
ACCT_NO BIGINT NOT NULL,
CATEGORY  VARCHAR(20),
BRANCH_CODE  VARCHAR(10),
BALANCE  DECIMAL(15,5),
CUST_ID  BIGINT,
ACCT_TYPE  VARCHAR(20),
ACCT_OPEN_DATE  DATE,
ACCT_CLOSE_DATE  DATE,
ACCT_MATURITY_DATE  DATE,
AVAIL_BALANCE   DECIMAL(15,5),
INTERESTS_EARNED   VARCHAR(10),
COD_INTEREST_TYPE  VARCHAR(10),
COD_EARLY_WITHDRAWL  DECIMAL(15,5),
MM_TRANSACTION_LIMIT DECIMAL(15,5),
IRA_TYPE VARCHAR(20),
AGE  INT,
CORP_RECURRING_DEPOSIT ENUM('Y','N'),
constraint fk_branchcd foreign key (BRANCH_CODE ) REFERENCES BRANCH(BRANCH_CODE),
constraint pk_acctno primary key (ACCT_NO)
);


create table BENEFITS(
BENEFITS_ID  int,
BENEFITS_TYPE varchar(20),
BenefitS_amount decimal(15,5),
CUST_ID  BIGINT,
Benefits_Date date,
constraint pk_benefitcd primary key (BENEFITS_ID),
constraint fk_bencustid foreign key (CUST_ID) REFERENCES CUSTOMER(CUST_ID)
);

create table ALERTS(
ALERTS_ID int,
ALERTS_TYPE varchar(20),
BenefitS_amount decimal(15,5),
CUST_ID  BIGINT,
Alerts_Timestamp date,
Alerts_status ENUM('R','N'),
constraint pk_alertsid	primary key (ALERTS_ID),
constraint fk_alertscustid foreign key (CUST_ID) REFERENCES CUSTOMER(CUST_ID)
);

create table PENALTIES(
PENALTy_ID  INT(49),
ACCOUNT_NO BIGINT(50),
Penalty_status ENUM('P','N'),
Penalty_Amount DECIMAL(15,5),
Charged_Date date,
constraint pk_penaltyid primary key (PENALTy_ID),
constraint fk_accountno foreign key (ACCOUNT_NO) REFERENCES ACCOUNT(ACCT_NO)
);

create table LOANS(
LOAN_ID INT NOT NULL,
 LOAN_TYPE VARCHAR(20),
 LOAN_AMOUNT DECIMAL(15,5),
 CUST_ID bigint,
constraint fk_ln_custid foreign key (CUST_ID) REFERENCES CUSTOMER(CUST_ID),
constraint pk_loanid primary key (loan_id)
);

create table PERSONAL_LOAN(
PERSONAL_LOAN_ID INT,
CUST_ID bigint,
DATELOANGIVEN DATE,
AMOUNTGIVEN  INT,
INTERESTRATE DECIMAL(15,5),
EMPLOYER_NAME  VARCHAR(50),
EMPLOYEE_NAME VARCHAR(50),
EMPLOYEE_ID VARCHAR(30),
constraint fk_loanid foreign key (PERSONAL_LOAN_ID) REFERENCES LOANS(LOAN_ID),
constraint pk_ln_emp primary key (EMPLOYER_NAME,EMPLOYEE_ID)
);


create table HOME_LOAN(
HOME_LOAN_ID  INT,
CUST_ID bigint,
SALE_DEED  VARCHAR(30),
DATELOANGIVEN  DATE,
AMOUNTGIVEN  DECIMAL(15,5),
INTERESTRATE  DECIMAL(15,5),
constraint fk_homelnid foreign key (HOME_LOAN_ID) REFERENCES LOANS(LOAN_ID),
constraint pk_saledeed primary key (SALE_DEED)
);


create table STUDENT_LOAN(
STUDENT_LOAN_ID INT,
CUST_ID bigint,
STUDENT_ID  VARCHAR(30),
STUDENT_MAIL  VARCHAR(50),
DATELOANGIVEN  DATE,
AMOUNTGIVEN  DECIMAL(15,5),
INTERESTRATE  DECIMAL(15,5),
constraint fk_studentlncd foreign key (STUDENT_LOAN_ID) REFERENCES LOANS(LOAN_ID),
constraint pk_stud_eml_id primary key (STUDENT_ID,STUDENT_MAIL)
);


create table VEHICLE_LOAN(
VEH_LOAN_ID  INT,
CUST_ID bigint,
CHASSIS_NO  VARCHAR(20),
DATELOANGIVEN  DATE,
AMOUNTGIVEN  DECIMAL(15,5),
INTERESTRATE  DECIMAL(15,5),
constraint fk_vehlnid foreign key (VEH_LOAN_ID) REFERENCES LOANS(LOAN_ID),
constraint pk_vehlnid primary key (VEH_LOAN_ID)
);

create table TRANSACTIONS(
Trans_ID  INT(49),
Trans_type varchar(20),
ACCOUNT_NO BIGINT(50),
Transaction_status ENUM('S','N'),
Transaction_Amount DECIMAL(15,5),
Transaction_timestamp date,
Transaction_name varchar(40),
constraint pk_transid primary key (Trans_ID),
constraint fk_transaccountno foreign key (ACCOUNT_NO) REFERENCES ACCOUNT(ACCT_NO)
);

create table USES_BENEFITS(
BENEFITS_ID  INT,
CUST_ID  BIGINT,
constraint fk_usesbenefitid foreign key (BENEFITS_ID) REFERENCES BENEFITS(BENEFITS_ID),
constraint fk_usesbencustid foreign key (CUST_ID) REFERENCES CUSTOMER(CUST_ID)
);

create table GETS_ALERTS(
ALERT_ID  INT,
CUST_ID  BIGINT,
constraint fk_usesalerts foreign key (ALERT_ID) REFERENCES ALERTS(ALERTS_ID),
constraint fk_usesalertscust foreign key (CUST_ID) REFERENCES CUSTOMER(CUST_ID)
);



