CREATE DATABASE DB_PEDIDOS;

CREATE TABLE CLIENTE(
    CEDULA INT,
    NOMBREAPELLIDO VARCHAR(50),
    TELEFONO VARCHAR(11),
    PRIMARY KEY(CEDULA)
);

CREATE TABLE PEDIDO(
    ID INT AUTOINCREMENT,
    CLIENTECEDULA INT,
    FECHA DATE,
    TOTAL INT,
    ESTADO VARCHAR(15),
    PRIMARY KEY(ID)
);

ALTER TABLE PEDIDO ADD CONSTRAINT FOREIGN KEY(CLIENTECEDULA) REFERENCES CLIENTE(CEDULA);

CREATE TABLE PRODUCTO(
    ID INT AUTOINCREMENT,
    DESCRIPCION VARCHAR(200),
    PRECIO INT,
    PRIMARY KEY(ID)
);

CREATE TABLE PEDIDODETALLE(
    PEDIDOID INT,
    PRODUCTOID INT,
    CANTIDAD INT,
    TOTALPARCIAL INT,
    PRIMARY KEY(PEDIDOID, PRODUCTOID)
);

ALTER TABLE PEDIDODETALLE ADD CONSTRAINT FOREIGN KEY(PEDIDOID) REFERENCES PEDIDO(ID);

ALTER TABLE PEDIDODETALLE ADD CONSTRAINT FOREIGN KEY(PRODUCTOID) REFERENCES PRODUCTO(ID);