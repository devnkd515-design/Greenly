<?php 
include 'includes/db.php';
include 'includes/header.php'; 

if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit;
}

$service_type = isset($_GET['service']) ? $_GET['service'] : '';
$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_type = $_POST['service_type'];
    $date = $_POST['date'];
    $user_id = $_SESSION['user_id'];
    
    // Insert Service Request
    $sql = "INSERT INTO services (user_id, service_type, service_date, service_status) VALUES (:user_id, :service_type, :date, 'pending')";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':service_type', $service_type);
    $stmt->bindParam(':date', $date);
    
    if ($stmt->execute()) {
        $msg = "Service booked successfully! A gardener will be assigned soon.";
    } else {
        $msg = "Error booking service.";
    }
}
?>

<div class="container section-padding">
    <div class="auth-box" style="margin: 0 auto;">
        <h2>Book a Service</h2>
        <?php if($msg): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label>Service Type</label>
                <select name="service_type" required>
                    <option value="maintenance" <?php echo $service_type == 'maintenance' ? 'selected' : ''; ?>>Plant Care & Maintenance</option>
                    <option value="design" <?php echo $service_type == 'design' ? 'selected' : ''; ?>>Garden Design</option>
                    <option value="seasonal" <?php echo $service_type == 'seasonal' ? 'selected' : ''; ?>>Seasonal Updates</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Preferred Date</label>
                <input type="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">Confirm Booking</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
