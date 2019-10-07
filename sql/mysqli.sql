USE dbphp7

CREATE TABLE tb_usuarios (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root', '12345');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET dessenha = 'abcdef' WHERE idusuario = 1;

DELETE FROM tb_usuario WHERE idusuario = 2;

TRUNCATE TABLE tb_usuario;
