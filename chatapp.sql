## premiere partie 
CREATE TABLE users (
                       user_id SERIAL PRIMARY KEY,
                       unique_id int NOT NULL,
                       fname varchar(255) NOT NULL,
                       lname varchar(255) NOT NULL,
                       email varchar(255) NOT NULL,
                       password varchar(255) NOT NULL,
                       img varchar(255) NOT NULL,
                       status varchar(255) NOT NULL
)

## deuxieme partie 
CREATE TABLE messages (
    msg_id SERIAL PRIMARY KEY,
    incoming_msg_id int NOT NULL,
    outgoing_msg_id int NOT NULL,
    msg varchar(1000) NOT NULL
);
