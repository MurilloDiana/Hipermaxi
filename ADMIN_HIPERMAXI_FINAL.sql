USE DEMO
DROP DATABASE ADMIN_HIPERMAXI
CREATE DATABASE ADMIN_HIPERMAXI;
USE ADMIN_HIPERMAXI;
GO
CREATE TABLE EMPLEADO(
    CODIGO INT IDENTITY(100,1) not null,
    NOMBRE VARCHAR(50) NOT NULL,
    FECHA_NAC DATE NOT NULL,
    GENERO VARCHAR(2)NOT NULL,
    CI TINYINT NOT NULL,
    EMAIL VARCHAR(100) NOT NULL,
    TELEFONO TINYINT NOT NULL,
    DIRECCION VARCHAR(100) NOT NULL,
    FECHA_ING DATE NOT NULL,
    AREA VARCHAR(100),
    ANTIGUEDAD TINYINT,
    USUARIO INT NOT NULL,
    CONTRASEÑA VARCHAR NOT NULL,
    NIVEL TINYINT NOT NULL, /*1=RH;2=ADM;3=TRAB*/
    PRIMARY KEY (CODIGO)
);
GO

CREATE TABLE JORNADA_LABORAL(
ID INT NOT NULL,
HORA_ENTRADA TIME NOT NULL,
HORA_SALIDA TIME NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE TRABAJA(
ID_JORNADA INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_JORNADA,COD_EMP),
FOREIGN KEY(ID_JORNADA)REFERENCES JORNADA_LABORAL(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE HORARIO(
ID INT NOT NULL,
HORA_INGRESO TIME NOT NULL,
HORA_SALIDA TIME NOT NULL,
TURNO VARCHAR(100)NOT NULL,
DIA_LIBRE VARCHAR(15)NOT NULL,
COD_ADM INT NOT NULL,
PRIMARY KEY(ID),
FOREIGN KEY (COD_ADM)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE CUMPLE(
ID_HORARIO INT NOT NULL,
ID_JORNADA INT NOT NULL,
PRIMARY KEY(ID_HORARIO,ID_JORNADA),
FOREIGN KEY(ID_HORARIO)REFERENCES HORARIO(ID),
FOREIGN KEY(ID_JORNADA)REFERENCES JORNADA_LABORAL(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE PERTENECE(
ID_HORARIO INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_HORARIO,COD_EMP),
FOREIGN KEY(ID_HORARIO)REFERENCES HORARIO(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE CONTRATO(
ID INT NOT NULL,
TIPO VARCHAR(100) NOT NULL,
FECHA DATE NOT NULL,
COD_RH INT NOT NULL,
PRIMARY KEY(ID),
FOREIGN KEY(COD_RH)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE TIENE(
ID_CONTRATO INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_CONTRATO,COD_EMP),
FOREIGN KEY(ID_CONTRATO)REFERENCES CONTRATO(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE DESVINCULACION(
ID INT NOT NULL,
MOTIVO VARCHAR(250)NOT NULL,
FECHA DATE NOT NULL,
TIEMPO_SERV VARCHAR(50)NOT NULL,
FINIQUITO INT,
TIPO_DESPIDO INT,/*1*/
TIPO_RENUNCIA INT,/*2*/
COD_RH INT NOT NULL,
PRIMARY KEY(ID),
FOREIGN KEY(COD_RH)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE INFORMA(
ID_DESVINCULACION INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_DESVINCULACION,COD_EMP),
FOREIGN KEY(ID_DESVINCULACION)REFERENCES DESVINCULACION(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE FALTA_INJUSTIFICADA(
ID INT NOT NULL,
ASUNTO VARCHAR(150)NOT NULL,
FECHA DATE NOT NULL,
DESCUENTO INT NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE MEMORANDO(
ID INT NOT NULL,
FECHA DATE NOT NULL,
DESCRIPCION VARCHAR(200)NOT NULL,
COD_ADM INT NOT NULL,
ID_FALTAINJU INT NOT NULL,
PRIMARY KEY(ID),
FOREIGN KEY (COD_ADM)REFERENCES EMPLEADO(CODIGO),
FOREIGN KEY(ID_FALTAINJU)REFERENCES FALTA_INJUSTIFICADA(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE ENTREGA(
ID_MEMORANDO INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_MEMORANDO),
FOREIGN KEY(ID_MEMORANDO)REFERENCES MEMORANDO(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE FALTA_JUSTIFICADA(
ID INT NOT NULL,
MOTIVO VARCHAR(250) NOT NULL,
FECHA DATE NOT NULL,
COMPROBANTE VARCHAR(150) NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE PAGO_ADICIONAL(
ID INT NOT NULL,
HORAS_EXTRA TIME,
PAGO_EXTRA INT,
PAGO_ANTIGUEDAD INT,
FECHA_FERIADO DATE,
PAGO_FERIADO INT,
PRIMARY KEY(ID)
);
CREATE TABLE INGRESO(
ID INT NOT NULL,
TOTAL_SUELDO INT NOT NULL,
ID_PAGOADC INT,
PRIMARY KEY(ID),
FOREIGN KEY(ID_PAGOADC)REFERENCES PAGO_ADICIONAL(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE RETRASO(
ID INT NOT NULL,
TIEMPO TIME NOT NULL,
FECHA DATE NOT NULL,
DESCUENTO INT NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE DESCUENTO(
ID INT NOT NULL,
AFP INT NOT NULL,
TOTAL_DESCUENTO INT NOT NULL,
ID_RETRASO INT,
ID_FALTAINJU INT,
PRIMARY KEY(ID),
FOREIGN KEY(ID_RETRASO)REFERENCES RETRASO(ID),
FOREIGN KEY(ID_FALTAINJU)REFERENCES FALTA_INJUSTIFICADA(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE BOLETA_PAGO(
ID INT NOT NULL,
FECHA_EMISION DATE NOT NULL,
FECHA_RECIBIDO DATE NOT NULL,
DIAS_TRABAJADO INT NOT NULL,
TOTAL INT NOT NULL,
ID_ING INT NOT NULL,
ID_DESC INT NOT NULL,
COD_RH INT NOT NULL,
PRIMARY KEY(ID),
FOREIGN KEY(ID_ING)REFERENCES INGRESO(ID),
FOREIGN KEY(ID_DESC)REFERENCES DESCUENTO(ID),
FOREIGN KEY(COD_RH)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE RECIBE(
ID_BOLETA INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_BOLETA,COD_EMP),
FOREIGN KEY(ID_BOLETA)REFERENCES BOLETA_PAGO(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE VACACION(
ID INT NOT NULL,
FECHA_INI DATE NOT NULL,
FECH_FIN DATE NOT NULL,
DIAS INT NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE PERMISO(
ID INT NOT NULL,
FECHA_INI DATE NOT NULL,
FECHA_FIN DATE NOT NULL,
ASUNTO VARCHAR(250)NOT NULL,
DIAS INT NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE PIDE(
ID_PERMISO INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_PERMISO,COD_EMP),
FOREIGN KEY(ID_PERMISO)REFERENCES PERMISO(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE SOLICITA(
ID_VACACION INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_VACACION,COD_EMP),
FOREIGN KEY(ID_VACACION)REFERENCES VACACION(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE ASISTENCIA(
ID INT NOT NULL,
FECHA DATE NOT NULL,
TOTAL_DIAS INT NOT NULL,
PRIMARY KEY(ID)
);
CREATE TABLE MARCA(
ID_ASISTENCIA INT NOT NULL,
COD_EMP INT NOT NULL,
PRIMARY KEY(ID_ASISTENCIA,COD_EMP),
FOREIGN KEY(ID_ASISTENCIA)REFERENCES ASISTENCIA(ID),
FOREIGN KEY(COD_EMP)REFERENCES EMPLEADO(CODIGO)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE REGISTRA(
ID_ASISTENCIA INT NOT NULL,
ID_JORNADA INT NOT NULL,
PRIMARY KEY(ID_ASISTENCIA,ID_JORNADA),
FOREIGN KEY(ID_ASISTENCIA)REFERENCES ASISTENCIA(ID),
FOREIGN KEY(ID_JORNADA)REFERENCES JORNADA_LABORAL(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE REGISTRO_FI(
ID_FALTAINJ INT NOT NULL,
ID_ASISTENCIA INT NOT NULL,
PRIMARY KEY(ID_FALTAINJ,ID_ASISTENCIA),
FOREIGN KEY(ID_FALTAINJ)REFERENCES FALTA_INJUSTIFICADA(ID),
FOREIGN KEY(ID_ASISTENCIA)REFERENCES ASISTENCIA(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE REGISTRO_FJ(
ID_FALTAJUS INT NOT NULL,
ID_ASISTENCIA INT NOT NULL,
PRIMARY KEY(ID_FALTAJUS,ID_ASISTENCIA),
FOREIGN KEY(ID_FALTAJUS)REFERENCES FALTA_JUSTIFICADA(ID),
FOREIGN KEY(ID_ASISTENCIA)REFERENCES ASISTENCIA(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
CREATE TABLE REGISTRO_RT(
ID_RETRASO INT NOT NULL,
ID_ASISTENCIA INT NOT NULL,
PRIMARY KEY(ID_RETRASO,ID_ASISTENCIA),
FOREIGN KEY(ID_RETRASO)REFERENCES RETRASO(ID),
FOREIGN KEY(ID_ASISTENCIA)REFERENCES ASISTENCIA(ID)
ON UPDATE CASCADE
ON DELETE CASCADE
);
/*RRHH*/
INSERT INTO EMPLEADO VALUES(1001,'RENE BURGOA','1998/05/13','M',15978644,'renebru@gmail.com',78958461,'calle Ranchito','2021/10/15',NULL,'1 AÑO',101001,'Rh1001',1);
select * from EMPLEADO
/*ADMIN*/
INSERT INTO EMPLEADO VALUES(2001,'ALBERTO MURRILO','1996/01/08','M',16900641,'albrMurillo@gmail.com',70075184,'calle 9 av Apojeosin limite','2015/10/15',NULL,'2 AÑO',202001,'Adm2001',NULL,2,NULL);
INSERT INTO EMPLEADO VALUES(2002,'JORGE CARI','1995/10/02','M',13959642,'jorgecs@gmail.com',78005974,'Barrio flor c#1','2016/10/15',NULL,'3 AÑO',202002,'Adm2002',NULL,2,NULL);
/*TRABAJADOR*/
INSERT INTO EMPLEADO VALUES(3001,'RICARDO GEM','1998/02/22','M',15789645,'gemric@gmail.com',78715454,'calle 2 Av Banzer','2019/10/15','EMBUTIDOS','3 AÑO',303001,'Emp3001',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3002,'ROBERTO PEÑA','1999/01/12','M',15578966,'robertp@gmail.com',7512454,'calle 0 barrio El Apojeo','2019/10/15','PANADERIA','3 AÑO',303002,'Emp3002',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3003,'JOSE GALVAN','1999/11/20','M',78941538,'joseglv@gmail.com',73202454,'calle 7 barrio josesito','2019/10/15','CAJERO','3 AÑO',303003,'Emp3003',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3004,'DANIEL CORTILLO','2000/09/08','M',11259845,'dancor@gmail.com',77905454,'barrio ETM c#5','2019/10/15','REPONEDOR','3 AÑO',303004,'Emp3004',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3005,'ALEJANDRA TERRAZAS','2003/06/05','F',35698744,'aletr@gmail.com',71202454,'calle 1 Av chanchito','2020/11/05','ATENCION AL CLIENTE','2 AÑO',303005,'Emp3005',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3006,'BISMAR ANTELOR','2002/05/23','M',89455612,'bisant@gmail.com',70335454,'calle S/N av Atp','2020/11/05','CAJERO','2 AÑO',303006,'Emp3006',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3007,'GABRIELA ANTERLO','2001/03/15','F',11865712,'gabiant@gmail.com',75002454,'calle 1 Av el Ranchito c#0','2020/11/05','PANADERIA','2 AÑO',303007,'Emp3007',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3008,'MAITE TORREZ','1999/12/11','F',45978401,'maitrrez@gmail.com',77005454,'calle 2 av El Apojeo c#3','2021/03/08','LIMPIEZA','1 AÑO',303008,'Emp3008',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3009,'PAOLA GARCIA','1998/11/17','F',15048746,'pao_cia@gmail.com',68202454,'Av el Ranchito c#2','2021/03/08','SEGURIDAD','1 AÑO',303009,'Emp3009',NULL,NULL,3);
INSERT INTO EMPLEADO VALUES(3010,'RUTH COLQUE','1999/01/09','F',15688740,'rut_col@gmail.com',78200123,'av.Bolivar calle 5','2021/03/08','CAJERO','1 AÑO',303010,'Emp3010',NULL,NULL,3);

SELECT *FROM EMPLEADO;

INSERT INTO HORARIO VALUES(1,'7:00','15:00','MAÑANA','LUN',2001);
INSERT INTO HORARIO VALUES(2,'7:00','15:00','MAÑANA','MAR',2001);
INSERT INTO HORARIO VALUES(3,'7:00','15:00','MAÑANA','MIE',2001);
INSERT INTO HORARIO VALUES(4,'7:00','15:00','MAÑANA','JUE',2001);
INSERT INTO HORARIO VALUES(5,'7:00','15:00','MAÑANA','VIE',2001);
INSERT INTO HORARIO VALUES(6,'7:00','15:00','MAÑANA','SAB',2001);
INSERT INTO HORARIO VALUES(7,'7:00','15:00','MAÑANA','DOM',2001);
INSERT INTO HORARIO VALUES(8,'15:00','22:00','TARDE','JUE',2002);
INSERT INTO HORARIO VALUES(9,'15:00','22:00','TARDE','VIE',2002);
INSERT INTO HORARIO VALUES(10,'15:00','22:00','TARDE','LUN',2002);

SELECT *FROM HORARIO;

INSERT INTO PERTENECE VALUES(1,3001);
INSERT INTO PERTENECE VALUES(2,3002);
INSERT INTO PERTENECE VALUES(3,3003);
INSERT INTO PERTENECE VALUES(4,3004);
INSERT INTO PERTENECE VALUES(5,3005);
INSERT INTO PERTENECE VALUES(6,3006);
INSERT INTO PERTENECE VALUES(7,3007);
INSERT INTO PERTENECE VALUES(8,3008);
INSERT INTO PERTENECE VALUES(9,3009);
INSERT INTO PERTENECE VALUES(10,3010);
SELECT *FROM PERTENECE;

INSERT INTO JORNADA_LABORAL VALUES(1,'7:00','15:05');
INSERT INTO JORNADA_LABORAL VALUES(2,'7:05','15:06');
INSERT INTO JORNADA_LABORAL VALUES(3,'7:10','15:07');
INSERT INTO JORNADA_LABORAL VALUES(4,'7:03','15:08');
INSERT INTO JORNADA_LABORAL VALUES(5,'7:02','15:15');
INSERT INTO JORNADA_LABORAL VALUES(6,'7:10','15:25');
INSERT INTO JORNADA_LABORAL VALUES(7,'7:09','15:15');
INSERT INTO JORNADA_LABORAL VALUES(8,'15:03','22:05');
SELECT *FROM JORNADA_LABORAL;

INSERT INTO TRABAJA VALUES(1,3001);
INSERT INTO TRABAJA VALUES(2,3002);
INSERT INTO TRABAJA VALUES(3,3003);
INSERT INTO TRABAJA VALUES(4,3004);
INSERT INTO TRABAJA VALUES(5,3005);
INSERT INTO TRABAJA VALUES(6,3006);
INSERT INTO TRABAJA VALUES(7,3007);
INSERT INTO TRABAJA VALUES(8,3008);
SELECT *FROM TRABAJA;

INSERT INTO CUMPLE VALUES(1,1);
INSERT INTO CUMPLE VALUES(2,2);
INSERT INTO CUMPLE VALUES(3,3);
INSERT INTO CUMPLE VALUES(4,4);
INSERT INTO CUMPLE VALUES(5,5);
INSERT INTO CUMPLE VALUES(6,6);
INSERT INTO CUMPLE VALUES(7,7);
INSERT INTO CUMPLE VALUES(8,8);
SELECT * FROM CUMPLE;

INSERT INTO CONTRATO VALUES(1,'PERMANENTE','2019/05/13',1001);
INSERT INTO CONTRATO VALUES(2,'PERMANENTE','2019/06/15',1001);
INSERT INTO CONTRATO VALUES(3,'PERMANENTE','2019/08/01',1001);
INSERT INTO CONTRATO VALUES(4,'TEMPORAL','2021/09/03',1001);
INSERT INTO CONTRATO VALUES(5,'TEMPORAL','2021/10/23',1001);
INSERT INTO CONTRATO VALUES(6,'TEMPORAL','2022/03/09',1001);
INSERT INTO CONTRATO VALUES(7,'PERMANENTE','2022/05/11',1001);
INSERT INTO CONTRATO VALUES(8,'TEMPORAL','2022/02/23',1001);
INSERT INTO CONTRATO VALUES(9,'PERMANENTE','2022/10/07',1001);
INSERT INTO CONTRATO VALUES(10,'TEMPORAL','2022/05/19',1001);
SELECT *FROM CONTRATO;

INSERT INTO TIENE VALUES(1,3001);
INSERT INTO TIENE VALUES(2,3002);
INSERT INTO TIENE VALUES(3,3003);
INSERT INTO TIENE VALUES(4,3004);
INSERT INTO TIENE VALUES(5,3005);
INSERT INTO TIENE VALUES(6,3006);
INSERT INTO TIENE VALUES(7,3007);
INSERT INTO TIENE VALUES(8,3008);
INSERT INTO TIENE VALUES(9,3009);
INSERT INTO TIENE VALUES(10,3010);
SELECT *FROM TIENE;

INSERT INTO DESVINCULACION VALUES(1,'DEMASIADAS FALTAS','2021/05/15','2 AÑOS',4400,1,NULL,1001);
INSERT INTO DESVINCULACION VALUES(2,'DEMASIADAS FALTAS','2020/06/08','2 AÑOS',4400,1,NULL,1001);
INSERT INTO DESVINCULACION VALUES(3,'SIN TIEMPO DISPONIBLE','2021/06/11','3 AÑOS',NULL,NULL,2,1001);
SELECT *FROM DESVINCULACION;

INSERT INTO INFORMA VALUES(1,3009);
INSERT INTO INFORMA VALUES(2,3010);
INSERT INTO INFORMA VALUES(3,3001);
SELECT *FROM INFORMA;

INSERT INTO FALTA_INJUSTIFICADA VALUES(1,'BLOQUEO DE CARRETERA','2020/10/01',140);
INSERT INTO FALTA_INJUSTIFICADA VALUES(2,'NO HABIA TRANSPORTE PUBLICO','2020/09/11',140);
SELECT *FROM FALTA_INJUSTIFICADA;

INSERT INTO MEMORANDO VALUES(1,'2020/09/13','FALTA INJUSTIFICADA',2001,1);
INSERT INTO MEMORANDO VALUES(2,'2020/10/03','FALTA INJUSTIFICADA',2001,2);
SELECT *FROM MEMORANDO;

INSERT INTO ENTREGA VALUES(1,3009);
INSERT INTO ENTREGA VALUES(2,3010);
SELECT *FROM ENTREGA;

INSERT INTO FALTA_JUSTIFICADA VALUES(1,'ANALISIS MEDICOS','2021/05/19','NOTA MEDICA');
INSERT INTO FALTA_JUSTIFICADA VALUES(2,'CONSULTA MEDICA','2021/08/25','FICHA DE RESERVA');
SELECT *FROM FALTA_JUSTIFICADA;

INSERT INTO PAGO_ADICIONAL VALUES(1,NULL,NULL,500,NULL,NULL);
INSERT INTO PAGO_ADICIONAL VALUES(2,'02:00',100,NULL,NULL,NULL);
INSERT INTO PAGO_ADICIONAL VALUES(3,NULL,NULL,NULL,'2021/05/01',100);
SELECT *FROM PAGO_ADICIONAL;

INSERT INTO INGRESO VALUES(1,2600,1);
INSERT INTO INGRESO VALUES(2,2200,2);
INSERT INTO INGRESO VALUES(3,2200,3);
INSERT INTO INGRESO VALUES(4,2100,3);
SELECT *FROM INGRESO;

INSERT INTO RETRASO VALUES(1,'0:30','2021/05/16',70);
INSERT INTO RETRASO VALUES(2,'0:45','2021/08/01',70);
SELECT *FROM RETRASO;

INSERT INTO DESCUENTO VALUES(1,150,290,NULL,1);
INSERT INTO DESCUENTO VALUES(2,150,290,NULL,2);
INSERT INTO DESCUENTO VALUES(3,150,220,1,NULL);
INSERT INTO DESCUENTO VALUES(4,150,220,2,NULL);
SELECT *FROM DESCUENTO;

INSERT INTO BOLETA_PAGO VALUES(1,'2021/05/13','2021/05/15',25,2310,1,1,1001);
INSERT INTO BOLETA_PAGO VALUES(2,'2021/05/13','2021/05/16',27,1910,2,2,1001);
INSERT INTO BOLETA_PAGO VALUES(3,'2021/05/13','2021/05/17',29,1980,3,3,1001);
INSERT INTO BOLETA_PAGO VALUES(4,'2021/05/13','2021/05/19',26,1880,4,4,1001);
SELECT *FROM BOLETA_PAGO;

INSERT INTO RECIBE VALUES(1,3006);
INSERT INTO RECIBE VALUES(2,3002);
INSERT INTO RECIBE VALUES(3,3003);
INSERT INTO RECIBE VALUES(4,3004);
SELECT *FROM RECIBE;

INSERT INTO VACACION VALUES(1,'2020/05/10','2020/06/10',30);
INSERT INTO VACACION VALUES(2,'2020/08/11','2020/08/26',15);
SELECT *FROM VACACION;

INSERT INTO PERMISO VALUES(1,'2021/04/11','2021/04/21','COVID-19',20);
INSERT INTO PERMISO VALUES(2,'2022/02/05','2022/02/15','DENGUE',10);
SELECT *FROM PERMISO;

INSERT INTO PIDE VALUES(1,2002);
INSERT INTO PIDE VALUES(2,3002);
SELECT *FROM PIDE;

INSERT INTO SOLICITA VALUES(1,1001);
INSERT INTO SOLICITA VALUES(2,3004);
SELECT *FROM SOLICITA;

INSERT INTO ASISTENCIA VALUES(1,'2020/05/13',15);
INSERT INTO ASISTENCIA VALUES(2,'2020/05/14',16);
INSERT INTO ASISTENCIA VALUES(3,'2020/05/15',17);
INSERT INTO ASISTENCIA VALUES(4,'2020/05/16',18);
SELECT *FROM ASISTENCIA;

INSERT INTO MARCA VALUES(1,3001);
INSERT INTO MARCA VALUES(1,3002);
INSERT INTO MARCA VALUES(1,3003);
INSERT INTO MARCA VALUES(2,3003);
INSERT INTO MARCA VALUES(2,3004);
INSERT INTO MARCA VALUES(2,3005);
SELECT *FROM MARCA;

INSERT INTO REGISTRA VALUES(1,1);
INSERT INTO REGISTRA VALUES(1,2);
INSERT INTO REGISTRA VALUES(2,3);
INSERT INTO REGISTRA VALUES(2,4);
INSERT INTO REGISTRA VALUES(3,5);
INSERT INTO REGISTRA VALUES(3,6);
INSERT INTO REGISTRA VALUES(4,7);
INSERT INTO REGISTRA VALUES(4,8);
SELECT *FROM REGISTRA;

INSERT INTO REGISTRO_FI VALUES(1,3);
INSERT INTO REGISTRO_FI VALUES(2,4);
SELECT *FROM REGISTRO_FI;

INSERT INTO REGISTRO_FJ VALUES(1,2);
INSERT INTO REGISTRO_FJ VALUES(2,3);
SELECT *FROM REGISTRO_FJ;

INSERT INTO REGISTRO_RT VALUES(1,1);
INSERT INTO REGISTRO_RT VALUES(2,1);
SELECT *FROM REGISTRO_RT;
