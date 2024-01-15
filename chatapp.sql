CREATE TABLE users (
                       users SERIAL PRIMARY KEY,
                       unique_id int NOT NULL,
                       fname varchar(255) NOT NULL,
                       lname varchar(255) NOT NULL,
                       email varchar(255) NOT NULL,
                       password varchar(255) NOT NULL,
                       img varchar(255) NOT NULL,
                       status varchar(255) NOT NULL
)

CREATE TABLE messages (
                       messages SERIAL PRIMARY KEY,
                       msg_id int NOT NULL,
                       incoming_msg_id NOT NULL,
                       outgoing_msg_id NOT NULL,
                       msg varchar(1000) NOT NULL,

)