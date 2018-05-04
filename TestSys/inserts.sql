--Regressiotestien INSERTit


--ID = 1 
INSERT INTO `test_cases` 
(`TestName`, `Description`, `Created`, `ID`) 
VALUES 
('Tuotteen Muutos', 
'Vaihda asiakkaan tuote ja tarkista, että se menee MDB:stä Probiliin, sekä päivämäärät pysyvät oikeina',
CURRENT_TIMESTAMP, 
NULL)

--ID = 2
INSERT INTO `test_cases` 
(`TestName`, `Description`, `Created`, `ID`) 
VALUES 
('Asiakkaan muutto',
'Muuta asiakas uuteen käyttöpaikkaan ja tarkista, että kaikki on kuten pitääkin, ilmaiset kaudet pysyvät ja tuotteet oikein yms.', 
CURRENT_TIMESTAMP,
NULL)

--ID= 3
INSERT INTO `test_cases` 
(`TestName`, `Description`, `Created`, `ID`) 
VALUES 
('VAP tuotteen rekisteröinti',
'Rekisteröi asiakkaalle VAP tuote ja katso, että ilmaiset kaudet menevät oikein ja tuote siirtyy laskutusjärjestelmään', 
CURRENT_TIMESTAMP,
NULL)
--

--Lokin INSERTit

--uusi, läpäisty VAP menee oikein
INSERT INTO 
`test_run_log` 
(`LogID`, 
`Passed`, 
`NotPassed`, 
`NotesFromTest`, 
`Time`, 
`TestID`, 
`TestReason`) 
VALUES 
(NULL, 
'1', '0', 
'VAP rekisteröityy oikein, ei ongelmia', 
CURRENT_TIMESTAMP,
'3', 
'VAPpien logiikkaa muutettu MDB:ssä');

--uusi, ei läpäisty tuotemuutosta koska yllä oleva muutos tehty
INSERT INTO `test_run_log` 
(`LogID`, `Passed`, `NotPassed`, `NotesFromTest`, `Time`, `TestID`, `TestReason`) 
VALUES 
(NULL, '0', '1', 'Tuote muuttaa päivämäärät vääriksi kun liikkuu laskutusjärjestelmään', CURRENT_TIMESTAMP, '2', 'VAP logiikkaa muutettu');

--uusi, läpäisty, ongelma korjattu
INSERT INTO `test_run_log` 
(`LogID`, `Passed`, `NotPassed`, `NotesFromTest`, `Time`, `TestID`, `TestReason`) 
VALUES 
(NULL, '1', '0', 'Logiikka ongelmat korjattu tuotteiden kanssa', CURRENT_TIMESTAMP, '2', 'VAP logiikkaa muutettu');

--uusi ei läpäisty, mdb upgrade
INSERT INTO 
`test_run_log` (`LogID`, `Passed`, `NotPassed`, `NotesFromTest`, `Time`, `TestID`, `TestReason`) 
VALUES 
(NULL, '0', '1', 'Muutto nappula on rikki, ei voi edes yrittää', CURRENT_TIMESTAMP, '2', 'MDB upgrade');

--uusi, ei läpäise vieläkään.
INSERT INTO 
`test_run_log` (`LogID`, `Passed`, `NotPassed`, `NotesFromTest`, `Time`, `TestID`, `TestReason`) 
VALUES 
(NULL, '0', '1', 'Tuotemuuttujat eivät siirry muuton yhteydessä', CURRENT_TIMESTAMP, '2', 'MDB upgrade');

--uusi, nyt muutto toimii!
INSERT INTO 
`test_run_log` (`LogID`, `Passed`, `NotPassed`, `NotesFromTest`, `Time`, `TestID`, `TestReason`) 
VALUES 
(NULL, '1', '0', 'Nyt menee kaikki muuton kohdalla oikein upgraden jälkeen!!', CURRENT_TIMESTAMP, '2', 'MDB upgrade');





