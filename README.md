# web
1. Before opening this project, I assume that you have set up xampp to serve this project
2. After that you will create New Database and configure it inside "\Admin\Controller\Body_DB.php" 
3. I suggest you create some tables



	CREATE TABLE add_min(
		admin_Name varchar(30) NOT NULL,
		admin_pass varchar(15) NOT NULL,
		UNIQUE (admin_Name),
	);



	CREATE TABLE client(
		ID INT NOT NULL AUTO_INCREMENT,
		NAME VARCHAR(100) NOT NULL,
		EMAIL VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(20) NOT NULL,
		DATE date DEFAULT GETDATE(),
	);



	CREATE TABLE furniture_product(
		ID INT NOT NULL AUTO_INCREMENT,
		TITLE VARCHAR(50) NOT NULL,
		IMAGE TEXT NOT NULL,
		PRICE DOUBLE NOT NULL,
		QTY INT,
		DISCOUNT DOUBLE,
		WIDTH VARCHAR(20),
		HEIGHT VARCHAR(20),
		UNIQUE(TITLE),
	);


	CREATE TABLE luy_furniture_product(
		ID INT NOT NULL AUTO_INCREMENT,
		IMAGE TEXT NOT NULL,
		TITLE VARCHAR(50),
		PRICE DOUBLE NOT NULL,
		QTY INT,
		DISCOUNT DOUBLE,
		DATE date DEFAULT GETDATE(),
		WIDTH VARCHAR(20),
		HEIGHT VARCHAR(20),
		UNIQUE(TITLE),
	);



	CREATE TABLE ordered(
		ID INT,
		TITLE VARCHAR(50) NOT NULL,
		IMAGE TEXT NOT NULL,
		PRICE DOUBLE NOT NULL,
		QTY INT,
		TOTAL DOUBLE NOT NULL,
		UNIQUE(TITLE),
	);

4. After creating some tables I need you to serve this "127.0.0.1\boran-store\Admin\html\Admin_index.php" and insert some products first
5. Then serve this "127.0.0.1\boran-store\Client\IndexPHP\Client_index.php" to view our Client page



thank you for viewing our job.
	
