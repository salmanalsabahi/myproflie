<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "salmanalsabahi775@gmail.com"; // استبدل هذا ببريدك الإلكتروني
    $subject = "رسالة من نموذج التواصل";
    $body = "الاسم الأول: $first_name\nالاسم الثاني: $last_name\nرقم الهاتف: $phone\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "عذراً، حدث خطأ أثناء إرسال الرسالة.";
    }
} else {
    echo "يرجى إرسال النموذج.";
}
?>