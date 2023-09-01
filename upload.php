<?php
if (isset($_FILES['my_pic'])) {
    if (0 === $_FILES['my_pic']['error']) {
        move_uploaded_file(
            $_FILES['my_pic']['tmp_name'],
            __DIR__ . '/test.png'
        );
    }
}
