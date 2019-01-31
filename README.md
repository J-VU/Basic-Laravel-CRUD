Crudv1: Basic Laravel (MVC) & Bootstrap4 demonstrating basic functionality: create/ read/ update/ delete web application.
-----------------------------------------------------------------------------------------------------------------------------
There are others ways to go about this. This is a learning process. This is how I do it.


Requirements:
-xamp ( https://www.apachefriends.org/download.html )
-windows vhost
-node.js ( https://nodejs.org/en/download/ ) *not required unless editing*

*Based on default install configurations & directories*

Files that need to be edited

1.	C:\xampp\apache\conf\extra\httpd-vhosts.conf
2.	C:\Windows\System32\drivers\etc\hosts
3.	Add sample database file to database, or create your own.


Step 1. file to edit: "httpd-vhosts.conf"
	Add virtual host to your file, code sample below. (your root & directory are where you choose to place your files)


	<VirtualHost *:80>
  		DocumentRoot "C:\Users\username\Desktop\.com.crud.com\crud\public"
  		ServerName crud.test
  		<Directory "C:\Users\username\Desktop\.com.crud.com\crud\public">
   	 		Require all granted
			AllowOverride All    
    	  	</Directory>
	</VirtualHost>


Step 2. file to edit "hosts" ( notepad )
	Add domain to local host, add code below to bottom of file.	

	127.0.0.1 crud.test

Step 3. Import crud_v1.sql to your local database.
Step 4. Run Xamp's Apache and MySQL servers.
Step 5. Run "crud.test" in your choice of web-browser ( chrome )

*Issues:
	-Image upload
	-Account Recovery
