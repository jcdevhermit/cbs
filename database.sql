--  set foreign_key_checks = 0
DROP TABLE customer;
DROP TABLE movies;
DROP TABLE cinemas;
DROP TABLE movies_showing;
DROP TABLE credit_card;
DROP TABLE booking;
DROP TABLE ticket;

CREATE TABLE customer (
	customer_id int(10) auto_increment primary key,
	customer_first_name varchar(255) not null,
	customer_last_name varchar(255) not null,
	customer_email varchar(255) not null,
	customer_username varchar(255) not null,
	customer_password varchar(255) not null,
	customer_contact_no int(20) not null
);

CREATE TABLE movies (
	movie_id int(10) primary key,
	movie_name varchar(255) not null,
	movie_genre varchar(255) not null,
	movie_year date not null,
	movie_synopsis text not null,
	movie_length decimal(2,2) not null
);

CREATE TABLE cinemas(
	cinema_id int(10) primary key,
	cinema_name varchar(255) not null,
	cinema_seat_capacity int(10) not null
);

CREATE TABLE movies_showing (
	movies_showing_id int(10) auto_increment primary key,
	movie_id int(10) not null,
	cinema_id int(10) not null,
	showing_from_data date not null,
	showing_to_date date not null,
	screening_time datetime not null,
	foreign key (cinema_id) references cinemas(cinema_id)
);

CREATE TABLE credit_card (
	credit_card_id int(25) primary key,
	credit_card_holder varchar(100) not null,
	credit_card_number int(25) not null,
	credit_card_type varchar(255) not null,
	exp_date date not null,
	credit_card_code int(3) not null,
	customer_id int(10) auto_increment not null,
	foreign key (customer_id) references customer(customer_id)
);

CREATE TABLE booking (
	booking_id int(10) primary key,
	customer_id int(10) auto_increment not null,
	movie_id int(10)  not null,
	seat_quantity int(10) not null,
	foreign key (customer_id) references customer(customer_id),
	foreign key (movie_id) references movies(movie_id)
);

CREATE TABLE ticket (
	ticket_id int(10) primary key,
	ticket_price float(5,2) not null,
	movie_id int(10) not null,
	foreign key (movie_id) references movies(movie_id)
);