SELECT id, MAX(amount) FROM `payments` WHERE `amount` != (SELECT MAX(amount) FROM `payments` WHERE `amount`)