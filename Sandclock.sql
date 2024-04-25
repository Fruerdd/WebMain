CREATE TABLE `rooms` (
     `room_id` int UNSIGNED NOT NULL,
     `type_of_room` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
     `hotel_floor` int(100) UNSIGNED NOT NULL,
     `room_number` int(100) UNSIGNED NOT NULL,
     `capacity` int(100) UNSIGNED NOT NULL,
     `size` int(100) UNSIGNED NOT NULL,
     `price` int(100) UNSIGNED NOT NULL,
     `room_advantage` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
     `view` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
     `addtional_services` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
     PRIMARY KEY(`room_id`)
);

CREATE TABLE `dates` (
     `date_id` int UNSIGNED NOT NULL,
     `date_of_arrival` date NOT NULL,
     `date_of_departure` date NOT NULL,
     `duration` int(100) UNSIGNED NOT NULL,
     PRIMARY KEY(`date_id`)
);

CREATE TABLE `people` (
      `person_id` int UNSIGNED NOT NULL,
      `first_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `last_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `phone_number` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `city` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `date_of_birth` date NOT NULL,
      `account` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
      PRIMARY KEY(`person_id`)
);

CREATE TABLE `reservations` (
    `res_id` int UNSIGNED NOT NULL,
    `number_of_customers` int(100) NOT NULL,
    `customer_id` int UNSIGNED NOT NULL,
    `employee_id` int UNSIGNED NOT NULL,
    `date_id` int UNSIGNED NOT NULL,
    `room_id` int UNSIGNED NOT NULL,
    PRIMARY KEY(`res_id`),
    CONSTRAINT fk_customers FOREIGN KEY (customer_id) REFERENCES people (person_id),
    CONSTRAINT fk_employees FOREIGN KEY (employee_id) REFERENCES people (person_id),
    CONSTRAINT fk_dates FOREIGN KEY (date_id) REFERENCES dates (date_id),
    CONSTRAINT fk_rooms FOREIGN KEY (room_id) REFERENCES rooms (room_id)
);