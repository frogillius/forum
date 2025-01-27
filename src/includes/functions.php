<?php
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function startSession() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

function redirect($url) {
    header("Location: $url");
    exit();
}

function uploadImage($file) {
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($file["tmp_name"]);

    if ($check === false) {
        return "File is not an image.";
    }

    if (file_exists($targetFile)) {
        return "Sorry, file already exists.";
    }

    if ($file["size"] > 500000) {
        return "Sorry, your file is too large.";
    }

    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return "The file " . htmlspecialchars(basename($file["name"])) . " has been uploaded.";
    } else {
        return "Sorry, there was an error uploading your file.";
    }
}
?>