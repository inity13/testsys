CREATE TABLE `Test_cases` (
	`TestName` varchar(256) NOT NULL,
	`Description` varchar(1080) NOT NULL,
	`Created` TIMESTAMP NOT NULL UNIQUE,
	`ID` INT(255) NOT NULL AUTO_INCREMENT UNIQUE,
	PRIMARY KEY (`ID`)
);


CREATE TABLE `Test_run_log` (
	`LogID` INT (255) NOT NULL AUTO_INCREMENT UNIQUE,
	`Passed` INT(10) NOT NULL, --not null vittuun että voi hakea NULLin perusteella läpäisemättömät
	`NotPassed` INT(10) NOT NULL, --not null vittuun
	`NotesFromTest` varchar(256) NOT NULL,
	`Time` TIMESTAMP NOT NULL,
	`TestID` INT(255) NOT NULL,
	`TestReason` varchar(256) NOT NULL
);


ALTER TABLE `Test_run_log` ADD CONSTRAINT `Test_run_log_fk0` FOREIGN KEY (`Passed`) REFERENCES `Test_cases`(`TestName`);

ALTER TABLE `Test_run_log` ADD CONSTRAINT `Test_run_log_fk1` FOREIGN KEY (`NotPassed`) REFERENCES `Test_cases`(`TestName`);

ALTER TABLE `Test_run_log` ADD CONSTRAINT `Test_run_log_fk2` FOREIGN KEY (`NotesFromTest`) REFERENCES `Test_cases`(`TestName`);

ALTER TABLE `Test_run_log` ADD CONSTRAINT `Test_run_log_fk3` FOREIGN KEY (`Time`) REFERENCES `Test_cases`(`TestName`);

ALTER TABLE `Test_run_log` ADD CONSTRAINT `Test_run_log_fk4` FOREIGN KEY (`TestID`) REFERENCES `Test_cases`(`TestName`);


/*
--Test INSERTS

INSERT INTO `test_cases` (`TestName`, `Description`, `Created`, `ID`) 
VALUES ('EkaCase', 'Tässä testataan testauksen testausta', CURRENT_TIMESTAMP, NULL)


INSERT INTO `test_cases` (`TestName`, `Description`, `Created`, `ID`) 
VALUES ('TokaCase', 'Tässä testataan testauksen testausta numerolla kaksi', CURRENT_TIMESTAMP, NULL)

--Test INSERTS

*/
