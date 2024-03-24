<?php

    require_once 'BaremeManager.php'; // Assurez-vous d'inclure vos fichiers source
    require_once 'Calculator.php';

    use PHPUnit\Framework\TestCase;

    class BaremeManagerTest extends TestCase {
        public function testGetFormule() {
            // Mock de la classe Database pour éviter les appels réels à la base de données
            $mockDatabase = $this->createMock(Database::class);
            $mockDatabase->method('connect');
            $mockDatabase->method('disconnect');

            // Création d'une instance de BaremeManager avec le mock de Database
            $baremeManager = new BaremeManager($mockDatabase, 'localhost', 'root', '', 'simulateur_km');

            // Test pour la méthode getFormule
            $result = $baremeManager->getFormule('voiture', 3, 10000); // Remplacez les valeurs des arguments selon vos besoins
            $this->assertNotNull($result); // Assurez-vous que le résultat n'est pas null
        }
    }

    class CalculatorTest extends TestCase {
        public function testCalculate() {
            // Test pour la méthode calculate
            $result = Calculator::calculate('(10000*0,316) + 1065'); // Remplacez la formule selon vos besoins
            $this->assertEquals(4225, $result); // Assurez-vous que le résultat est correct
        }
    }
?>
