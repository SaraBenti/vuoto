CREATE TABLE `utenti` (
`ute_id` int(11) NOT NULL,
`ute_nome` varchar(50) NOT NULL,
`ute_cognome` varchar(50) NOT NULL,
`ute_email` varchar(150) NOT NULL,
`ute_password` varchar(20) NOT NULL,
`ute_icona` varchar(100) DEFAULT NULL,
`ute_cv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;