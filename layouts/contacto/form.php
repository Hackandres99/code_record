<?php 
    require_once './crud/threads_modelo.php';
    $thread = new Thread_modelo();
    
    if(!empty($_POST['thread_title']) && !empty($_POST['thread_comment'])){
        $record_thread = [
            'student_email' => $email,
            'id_subject' => 1,
            'title' => $_POST['thread_title'],
            'comment' => $_POST['thread_comment']
        ];
        $thread->insert($record_thread, null, null);
    }
s
?>
<form action="" method="post" class="form_thread">
    <input type="text" class="title" name="thread_title" required>
    <textarea type="text" class="message" name="thread_comment" required></textarea>
    <input type="submit" value="Publicar" class="thread_btn">
</form>

<?php 
    require_once './crud/comments_modelo.php';
    $thread = new Comment_modelo();
    
    if(!empty($_POST['id_thread']) && !empty($_POST['comment'])){
        $record_comment = [
            'student_email' => $email,
            'id_thread' => $_POST['id_thread'],
            'comment' => $_POST['comment']
        ];
        $thread->insert($record_comment, null, null);
    }

?>

<form action="" method="post" class="form_comment">
    <input type="hidden" name="id_thread" value="<?= $ts['id'] ?>">
    <textarea type="text" class="message" name="comment" required></textarea>
    <input type="submit" value="Publicar" class="comment_btn">
</form>
