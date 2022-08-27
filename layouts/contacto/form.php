<?php 
    require_once './phpCrud/comments_modelo.php';
    $comments = new comments_modelo();
 
    $record_comment = [
        'student_email' => $email,
        'comment' => $_POST['message']
    ];
    $comments->insert($record_comment, $_POST['message'], $email);

?>
<form action="" method="post" class="form_contact">
    <h2 class="form_contact_title"><?= $comments->getMessage()?></h2>
    <div class="user_info">
        <label for="message" class="user_info_title">Mensaje *</label>
        <textarea type="text" id="message" class="message" name="message" required></textarea>
        <input type="submit" value="Enviar Mensaje" id="send_message" class="form_contact_btn">
    </div>
</form>
