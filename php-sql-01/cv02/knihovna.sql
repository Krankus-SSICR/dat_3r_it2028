CREATE TABLE knihovna (
-- tento příkaz vytvoří tabulku s názvem knihovna
    id INT PRIMARY KEY AUTO_INCREMENT,
    -- vytvoří sloupec (atribut) id s datovým typem číslo
    -- nastaví tento sloupec jako primární klíč
    autor TEXT,
    -- sloupec autor datový typ text
    nazev_knihy VARCHAR(300),
    -- datový typ text max. 300 znaků
    zanr ENUM('Historický', 'Komedie', 'Fantasy')
    -- datový typ ENUM lze uložit pouze konkrétní hodnoty
);