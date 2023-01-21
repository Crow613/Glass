
CREATE TABLE `glass`.`users`
(
    `id`       INT          NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `surname`  VARCHAR(255) NOT NULL,
    `login`    VARCHAR(255) NOT NULL,
    `email`    VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE (`login`),
    UNIQUE (`email`)
) ENGINE = InnoDB;