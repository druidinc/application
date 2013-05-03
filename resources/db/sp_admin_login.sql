DELIMITER //

CREATE
    /*[DEFINER = { user | CURRENT_USER }]*/
    PROCEDURE sp_admin_login(IN username TEXT, IN password TEXT)
    /*LANGUAGE SQL
    | [NOT] DETERMINISTIC
    | { CONTAINS SQL | NO SQL | READS SQL DATA | MODIFIES SQL DATA }
    | SQL SECURITY { DEFINER | INVOKER }
    | COMMENT 'string'*/
    BEGIN
	SELECT *
	FROM admin_user
	INNER JOIN user
		ON user.id = admin_user.user_id
	WHERE admin_user.username= username
	AND	admin_user.password= password
	
    END

DELIMITER ;