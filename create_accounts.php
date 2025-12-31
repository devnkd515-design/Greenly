<?php
require 'includes/db.php';

echo "<h2>Creating Admin & Gardener Accounts...</h2>";

// Admin Account
$admin_email = 'admin@greenly.com';
$admin_password = 'admin123';
$admin_hash = password_hash($admin_password, PASSWORD_DEFAULT);

// Check if admin exists
$check = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$check->execute([$admin_email]);
if (!$check->fetch()) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->execute(['Admin User', $admin_email, $admin_hash, 'admin']);
    echo "<p>✅ Admin account created!</p>";
} else {
    echo "<p>⚠️ Admin already exists</p>";
}

// Gardener Account (in users table with gardener role)
$gardener_email = 'gardener@greenly.com';
$gardener_password = 'gardener123';
$gardener_hash = password_hash($gardener_password, PASSWORD_DEFAULT);

$check2 = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$check2->execute([$gardener_email]);
if (!$check2->fetch()) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->execute(['Gardener User', $gardener_email, $gardener_hash, 'gardener']);
    echo "<p>✅ Gardener account created!</p>";
} else {
    echo "<p>⚠️ Gardener already exists</p>";
}

// Also add to gardeners table
$check3 = $pdo->prepare("SELECT * FROM gardeners WHERE email = ?");
$check3->execute([$gardener_email]);
if (!$check3->fetch()) {
    $stmt = $pdo->prepare("INSERT INTO gardeners (name, email, password, experience, rating, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(['Gardener User', $gardener_email, $gardener_hash, '5 Years', 4.8, 'available']);
    echo "<p>✅ Added to gardeners table!</p>";
}

echo "<hr>";
echo "<h3>📋 Login Credentials:</h3>";
echo "<table border='1' cellpadding='15' style='border-collapse: collapse;'>";
echo "<tr style='background: #e8f5e9;'><th>Role</th><th>Email</th><th>Password</th></tr>";
echo "<tr><td><strong>🔑 Admin</strong></td><td>admin@greenly.com</td><td>admin123</td></tr>";
echo "<tr><td><strong>🌿 Gardener</strong></td><td>gardener@greenly.com</td><td>gardener123</td></tr>";
echo "<tr><td><strong>👤 Test User</strong></td><td>test@greenly.com</td><td>test123</td></tr>";
echo "</table>";

echo "<p style='color:green; margin-top:20px;'><strong>✅ All accounts ready!</strong></p>";
?>
