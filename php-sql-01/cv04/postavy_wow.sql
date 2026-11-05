CREATE TABLE postavy_wow (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jmeno_postavy VARCHAR(100),
    frakce ENUM('Horda', 'Aliance', 'Neutral')
);