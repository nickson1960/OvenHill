CREATE TABLE contactus
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    msg text NOT NULL
);

CREATE TABLE bookings
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    bookingdate varchar(255) NOT NULL,
    tableno  integer NOT NULL,
    noofpersons integer NOT NULL
);