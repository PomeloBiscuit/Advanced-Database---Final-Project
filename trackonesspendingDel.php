<?php
if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM tksg WHERE prikey = :id");
        $stmt->execute([':id' => $_GET['id']]);
        header("Location: index.php?Act=280");
        exit();
    } catch (PDOException $e) {
        echo "<p>錯誤：" . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>無效的 ID！</p>";
}
?>
