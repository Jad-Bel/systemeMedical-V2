<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système Médical Simple</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6">Système Médical Simple</h1>

        <!-- Form to add a patient -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Ajouter un patient</h2>
            <form action="" method="post" class="space-y-4">
                <input type="hidden" name="action" value="addPatient">
                <input type="text" name="nom" placeholder="Nom" required class="w-full p-2 border rounded">
                <input type="text" name="prenom" placeholder="Prénom" required class="w-full p-2 border rounded">
                <input type="number" min="1" max="2" name="role" placeholder="Role_id" required class="w-full p-2 border rounded">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ajouter Patient</button>
            </form>
        </div>

        <!-- Form to add a doctor -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Ajouter un médecin</h2>
            <form action="" method="post" class="space-y-4">
                <input type="hidden" name="action" value="addMedecin">
                <input type="text" name="nom" placeholder="Nom" required class="w-full p-2 border rounded">
                <input type="text" name="prenom" placeholder="Prénom" required class="w-full p-2 border rounded">
                <input type="text" name="specialite" placeholder="Spécialité" required class="w-full p-2 border rounded">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Ajouter Médecin</button>
            </form>
        </div>

        <!-- Form to schedule an appointment -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Prendre un rendez-vous</h2>
            <form action="" method="post" class="space-y-4">
                <input type="hidden" name="action" value="prendreRendezVous">
                <select name="patientIndex" required class="w-full p-2 border rounded">
                    <?php foreach ($patients as $index => $patient): ?>
                        <option value="<?php echo $index; ?>"><?php echo $patient->afficherNomComplet(); ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="date" name="date" required class="w-full p-2 border rounded">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Prendre Rendez-vous</button>
            </form>
        </div>

        <!-- Form for doctor consultation -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Consulter un patient</h2>
            <form action="" method="post" class="space-y-4">
                <input type="hidden" name="action" value="consulterPatient">
                <select name="medecinIndex" required class="w-full p-2 border rounded">
                    <?php foreach ($medecins as $index => $medecin): ?>
                        <option value="<?php echo $index; ?>"><?php echo $medecin->afficherNomComplet(); ?> (<?php echo $medecin->specialite; ?>)</option>
                    <?php endforeach; ?>
                </select>
                <select name="patientIndex" required class="w-full p-2 border rounded">
                    <?php foreach ($patients as $index => $patient): ?>
                        <option value="<?php echo $index; ?>"><?php echo $patient->afficherNomComplet(); ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Consulter Patient</button>
            </form>
        </div>

        <!-- Display consultation message if any -->
        

        <!-- Display list of patients -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Liste des Patients</h2>
            <ul class="list-disc pl-5">
                
            </ul>
        </div>

        <!-- Display list of doctors -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Liste des Médecins</h2>
            <ul class="list-disc pl-5">
                
            </ul>
        </div>
    </div>
</body>
</html>