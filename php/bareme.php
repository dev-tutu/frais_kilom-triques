<?php

    class BaremeManager extends Database {
        public function getFormule($vehicule, $cv, $km) {
            try {
                $indice_km = $this->getIndiceKM($vehicule, $km);

                $sql = "SELECT formule FROM bareme WHERE vehicule = ? AND cv = ? AND km = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$vehicule, $cv, $indice_km]);

                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    return str_replace("d", $km, $row['formule']);
                } else {
                    return null;
                }
            } catch (PDOException $e) {
                // Gérer l'erreur de la base de données
                throw new Exception("Erreur de base de données: " . $e->getMessage());
            } catch (Exception $e) {
                // Gérer toute autre exception
                throw new Exception("Une erreur est survenue: " . $e->getMessage());
            }
        }

        private function getIndiceKM($vehicule, $km) {
            if ($vehicule == 'voiture') {
                if ($km <= 5000) {
                    return 0;
                } elseif ($km <= 20000) {
                    return 5000;
                } else {
                    return 20000;
                }
            } else {
                if ($km <= 3000) {
                    return 0;
                } elseif ($km <= 6000) {
                    return 3000;
                } else {
                    return 6000;
                }
            }
        }
    }

?>
