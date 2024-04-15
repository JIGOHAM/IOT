-- Création de la table des modules IoT
CREATE TABLE modules (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    description TEXT,
    etat TEXT NOT NULL DEFAULT 'fonctionnel',
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Création de la table des mesures
CREATE TABLE mesures (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    module_id INTEGER NOT NULL,
    valeur_mesuree REAL NOT NULL,
    date_mesure TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (module_id) REFERENCES modules(id)
);

-- Création de la table de l'historique
CREATE TABLE historique (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    mesure_id INTEGER NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (mesure_id) REFERENCES mesures(id)
);
