
DROP TABLE IF EXISTS Dipendente;
CREATE TABLE Dipendente(
CodiceDipendente VARCHAR(20) PRIMARY KEY,
Nome VARCHAR(20) NOT NULL,
Cognome VARCHAR(20) NOT NULL,
Sesso ENUM('F','M') NOT NULL,
Indirizzo VARCHAR(150) NOT NULL,
DataNascita DATE NOT NULL,
DataAssunzione DATE NOT NULL,
Mansione VARCHAR(20) NOT NULL,
Stipendio DECIMAL(7,2) UNSIGNED NOT NULL,
IBAN VARCHAR(35) NOT NULL,
NumeroTelefono VARCHAR(20) NOT NULL
);

INSERT INTO Dipendente() VALUES
('D01','Federico','Ballarin','M','I01','1996-01-09','2015-10-12','M01','2000.00','3425215896541254','3803803812'),
('D02','Valentina','Bullo','F','I03','1996-10-11','2016-01-12','M02','1800.00','6652215896211254','3247473812'),
('D03','David','Varisco','M','I02','1980-04-07','2015-02-06','M01','2000.00','3654252196541254','3803801214'),
('D04','Alfredo','Bergamasco','M','I05','1970-04-09','2016-08-04','M05','2100.00','9875215896656565','9339653812'),
('D05','Claudia','Scarpa','F','I01','1997-12-02','2017-05-05','M03','1500.00','0000015896541254','3803802145'),
('D06','Gianfranco','Agatea','M','I07','1959-07-12','2014-01-01','M04','3500.00','3656589896541254','5544703812'),
('D07','Jack','Tchamp','M','I09','1991-05-11','2018-04-11','M06','1400.00','8778875896541254','6663803812'),
('D08','Amadio','Verona','M','I05','1996-03-01','2017-06-06','M02','1800.00','1234567896541254','3803888812'),
('D09','Gianni','Marella','M','I08','1978-01-09','2014-10-12','M05','2100.00','3425215896999999','3803803000'),
('D10','Mark','Zuker','M','I10','1996-07-05','2018-02-02','M03','1400.00','3335215896543333','3696369812');

DROP TABLE IF EXISTS Mansione;
CREATE TABLE Mansione(
CodiceMansione VARCHAR(20) PRIMARY KEY,
Descrizione ENUM('caposala','banconiere','cameriere','chef','cuoco','lavapiatti') NOT NULL
);

INSERT INTO Mansione() VALUES
('M01','caposala'),
('M02','banconiere'),
('M03','cameriere'),
('M04','chef'),
('M05','cuoco'),
('M06','lavapiatti');

DROP TABLE IF EXISTS Turno;
CREATE TABLE Turno(
Dipendente VARCHAR(20),
DataInizio DATE,
DataFine DATE NOT NULL,
OraInizio TIME NOT NULL,
OraFine TIME NOT NULL,
PRIMARY KEY(Dipendente, DataInizio),
FOREIGN KEY(Dipendente) REFERENCES Dipendente(CodiceDipendente)
);

INSERT INTO Turno() VALUES
('D01','2018-01-01','2018-01-01','080000','140000'),
('D02','2018-01-03','2018-01-03','090000','150000'),
('D03','2018-01-09','2018-01-09','070000','140000'),
('D07','2018-01-02','2018-01-02','160000','240000'),
('D07','2018-01-12','2018-01-12','150000','220000'),
('D06','2018-01-25','2018-01-25','080000','140000'),
('D09','2018-01-20','2018-01-20','010000','200000'),
('D01','2018-01-08','2018-01-08','080000','140000');


DROP TABLE IF EXISTS Tavolo;
CREATE TABLE Tavolo(
NumeroTavolo TINYINT UNSIGNED PRIMARY KEY,
NumeroPosti TINYINT UNSIGNED NOT NULL,
Descrizione VARCHAR(255) NOT NULL,
Sala ENUM('interna','esterna') NOT NULL
);

INSERT INTO Tavolo() VALUES
('1','4','vicino alla porta di ingresso','interna'),
('2','2','vicino ai bagni','interna'),
('3','6','vicino al bancone','interna'),
('4','4','centro sala','interna'),
('5','4','centro sala','interna'),
('20','6','tavolo riparato','esterna'),
('21','8','esterno vista mare','esterna'),
('60','10','esterno vista mare','esterna'),
('10','4','esterno sala vista fuori','interna');




DROP TABLE IF EXISTS Prenotazione;
CREATE TABLE Prenotazione(
CodicePrenotazione INT PRIMARY KEY AUTO_INCREMENT,
CognomeNome VARCHAR(30) NOT NULL,
Email VARCHAR(40) NOT NULL,
Telefono VARCHAR(15) NOT NULL,
Data DATE NOT NULL,
Ora TIME NOT NULL,
NumeroPersone SMALLINT UNSIGNED NOT NULL,
Nota VARCHAR(255)

);

INSERT INTO Prenotazione() VALUES
(NULL,'Pablo Escobar','pablo@buba.com','0415542228','2018-07-21','123000','4','portano buba'),
(NULL,'Roby Erant','pablo@buba.com','0415542228','2018-07-21','123000','4','portano Andrea');



DROP TABLE IF EXISTS Gruppo;
CREATE TABLE Gruppo(
CodiceGruppo VARCHAR(20) PRIMARY KEY,
Nome VARCHAR(20) NOT NULL
);

INSERT INTO Gruppo() VALUES
('G01','bibite'),
('G02','antipasti'),
('G03','primi'),
('G04','secondi'),
('G05','contorni'),
('G06','piatti freddi'),
('G07','dessert');

DROP TABLE IF EXISTS ElementoMenu;
CREATE TABLE ElementoMenu(
CodiceElemento VARCHAR(20) PRIMARY KEY,
Nome VARCHAR(200) NOT NULL,
Descrizione VARCHAR(255),
Prezzo Decimal(7,2) NOT NULL,
Gruppo VARCHAR(20) NOT NULL,
FOREIGN KEY(Gruppo) REFERENCES Gruppo(CodiceGruppo)
);

INSERT INTO ElementoMenu() VALUES
('E01','Gamberi in salsa rosa','','8.00','G02'),
('E02','Canestrelli, Mazzancolle e Sarde in saore','','11.00','G02'),
('E03','Saltata di vongole e cozze','','11.00','G02'),
('E04','Tris di affumicati, salmone, pesce spada e tonno','','15.00','G02'),
('E05','Centrale di crudi "Le Tegnùe"','','20.00','G02'),
('E06','Carpaccio di crudi "Le Tegnùe"','','20.00','G02'),
('E07','Gran Bollito Misto di pesce "Le Tegnùe"','','20.00','G02'),
('E08','Mix di fritti, olive ascolane, mozzarelle, pepite e verdurine','','9.00','G02'),
('E09','Antipasto misto di affettati con sottaceti','','12.00','G02'),
('E10','Degustazione di formaggi e marmellate','','17.00','G02'),
('E11','Spaghetti alle vongole veraci','','12.00','G03'),
('E12','Tagliolini freschi con Granseola','','14.00','G03'),
('E13','Tagliolini freschi al nero con seppie nostrane','','14.00','G03'),
('E14','Chicche di gnocchi cappesante nostrane e radicchio',' ','14.00','G03'),
('E15','Spaghetti allo scoglio "Le Tegnùe"','','15.00','G03'),
('E16','Spaghetti/penne al pomodoro','','7.00','G03'),
('E17','Spaghetti/penne alla bolognese','','8.00','G03'),
('E18','Spaghetti alla carbonara','','9.00','G03'),
('E19','Penne saporite, datterini, olive tagiasche, pesto alla genovese','','9.00','G03'),
('E20','Frittura mista di pesce','','14.00','G04'),
('E21','Frittura di Anelli di Totano','','14.00','G04'),
('E22','Filetto di branzino al forno con verdure','','13.00','G04'),
('E23','Grigliata mista "Le Tegnùe"','','17.00','G04'),
('E24','Cotoletta di pollo alla milanese con patate fritte','','9.00','G04'),
('E25','Petto di pollo ai ferri con patate fritte','','9.00','G04'),
('E26','Wurstel con patate fritte','','9.00','G04'),
('E27','Prosciutto e melone','','14.00','G04'),
('E28','Tagliata di manzo con patate al forno','','13.00','G04'),
('E29','Patate fritte','','3.50','G05'),
('E30','Insalata mista','','4.00','G05'),
('E31','Verdure al forno','','5.00','G05'),
('E32','Insalatona Pescatora','','10.00','G06'),
('E33','Insalatona Adriatica','','10.00','G06'),
('E34','Insalatona Brasiliana','','10.00','G06'),
('E35','Insalatona Polipo e patate','','15.00','G06'),
('E36','Insalatona "Le Tegnùe"','','15.00','G06'),
('E37','Tiramisù','','4.50','G07'),
('E38','Mousse al caffè','','4.50','G07'),
('E39','Mousse alla menta','','4.50','G07'),
('E40','Mousse al Pan di stelle','','4.50','G07'),
('E41','Mousse allo yogurt con fragole','','4.50','G07'),
('E42','Mousse allo yogurt con melone','','4.50','G07'),
('E43','Cheesecake alle fragole','','4.50','G07'),
('E44','Cheesecake ai lamponi','','4.50','G07');


DROP TABLE IF EXISTS Ordinazione;
CREATE TABLE Ordinazione(
CodiceOrdinazione VARCHAR(20) PRIMARY KEY,
Operatore VARCHAR(20) NOT NULL,
Tavolo TINYINT UNSIGNED NOT NULL,
Data DATE NOT NULL,
Ora TIME NOT NULL,
FOREIGN KEY(Operatore) REFERENCES Dipendente(CodiceDipendente),
FOREIGN KEY(Tavolo) REFERENCES Tavolo(NumeroTavolo)
);

INSERT INTO Ordinazione() VALUES
('O01','D05','1','2018-08-28','124130'),
('O02','D05','60','2018-08-28','125530'),
('O03','D10','1','2018-08-26','134140');

DROP TABLE IF EXISTS DettaglioOrdinazione;
CREATE TABLE DettaglioOrdinazione(
CodiceDettaglio VARCHAR(20) PRIMARY KEY,
Ordinazione VARCHAR(20) NOT NULL,
Elemento VARCHAR(20) NOT NULL,
Quantità SMALLINT UNSIGNED NOT NULL,
Nota VARCHAR(255),

FOREIGN KEY(Elemento) REFERENCES ElementoMenu(CodiceElemento),
FOREIGN KEY(Ordinazione) REFERENCES Ordinazione(CodiceOrdinazione)
);

INSERT INTO DettaglioOrdinazione() VALUES
('DO01','O01','E02','1',''),
('DO02','O01','E01','2','con limone'),
('DO03','O01','E03','1',''),
('DO04','O02','E06','3','ben cotto'),
('DO05','O02','E04','2',''),
('DO06','O03','E07','4',''),
('DO07','O03','E02','3','no capasanta');

DROP TABLE IF EXISTS Pagamento;
CREATE TABLE Pagamento(
CodicePagamento VARCHAR(20) PRIMARY KEY,
Ordinazione VARCHAR(20) NOT NULL,
TipoPagamento ENUM('contanti','elettronico','fattura','bancomat','carta') NOT NULL,
ImportoTotale DECIMAL(7,2) NOT NULL,
Sconto DECIMAL(7,2) NOT NULL,
Dipendente VARCHAR(20) NOT NULL,
FOREIGN KEY(Ordinazione) REFERENCES Ordinazione(CodiceOrdinazione),
FOREIGN KEY(Dipendente) REFERENCES Dipendente(CodiceDipendente)
);

INSERT INTO Pagamento VALUES
('PAY01','O01','contanti','41.00','0','D08'),
('PAY02','O02','elettronico','58.50','6.50','D08'),
('PAY03','O03','bancomat','80.00','0','D02');



