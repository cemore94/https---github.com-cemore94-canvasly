create table Product(
	 idProduct int(11) primary key auto_increment,
	 checkout_token varchar(36),
	 title varchar(30),
	 tagLine varchar(100),
	 message varchar(200),
	 longitude varchar(20),
	 latitude varchar(20),
	 styleMap varchar(100),
	 chooseStyle varchar(8),
	 chooseFrame varchar(8),
	 chooseSize varchar(8)
 );
 
 create table Rating(
	idRating int(11) primary key auto_increment,
    stars int default 5,
    name varchar(80),
    review varchar(800),
    photo varchar(200)
 )