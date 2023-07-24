drop table finance_db.money_in
drop table finance_db.money_out
drop table finance_db.category

CREATE TABLE finance_db.category (
                                     id int auto_increment NOT NULL,
                                     description varchar(100) NOT NULL,
                                     created_at timestamp NULL DEFAULT NULL,
                                     updated_at timestamp NULL DEFAULT NULL,
                                     user_id bigint(20) unsigned  NOT NULL,
                                     PRIMARY KEY (id),
                                     FOREIGN KEY (user_id) REFERENCES finance_db.users(id)
)
    ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;


CREATE TABLE finance_db.money_in (
                                     id int auto_increment NOT NULL,
                                     date_in TIMESTAMP NOT NULL,
                                     amount DECIMAL NOT NULL,
                                     category_id INT NOT NULL,
                                     user_id bigint(20) unsigned  NOT NULL,
                                     description varchar(100) NOT NULL,
                                     created_at timestamp NULL DEFAULT NULL,
                                     updated_at timestamp NULL DEFAULT NULL,
                                     PRIMARY KEY(id),
                                     FOREIGN KEY (user_id) REFERENCES finance_db.users(id),
                                     FOREIGN KEY (category_id) REFERENCES finance_db.category(id)
)
    ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;


CREATE TABLE finance_db.money_out (
                                      id int auto_increment NOT NULL,
                                      date_out TIMESTAMP NOT NULL,
                                      amount DECIMAL NOT NULL,
                                      category_id INT NOT NULL,
                                      user_id bigint(20) unsigned  NOT NULL,
                                      description varchar(100) NOT NULL,
                                      created_at timestamp NULL DEFAULT NULL,
                                      updated_at timestamp NULL DEFAULT NULL,
                                      PRIMARY KEY(id),
                                      FOREIGN KEY (user_id) REFERENCES finance_db.users(id),
                                      FOREIGN KEY (category_id) REFERENCES finance_db.category(id)
)
    ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;
