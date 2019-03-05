

CREATE TABLE CREDIT_CARD (
	credit_card_id int(25) primary key,
	credit_card_holder varchar(100) not null,
	credit_card_number int(25) not null
	credit_card_type varchar not null,
	exp_date date not null,
	credit_card_code int(3) not null,
	customer_id int(10) not null,
	foreign key customer_id references customer(customer_id)
);

CREATE TABLE BOOKING (
	booking_id int(10) primary key,
	customer_id int(10) not null,
	movie_id int(10) not null,
	seat_quantity int(10) not null,
	foreign key customer_id references customer(customer_id),
	foreign key movie_id references movies(movie_id)
);

CREATE TABLE TICKET (
	ticket_id int(10) primary key,
	ticket_price float(5,2) not null
);