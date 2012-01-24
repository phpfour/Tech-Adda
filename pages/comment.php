<?php

if (!empty($_POST)) {
    App::getRepository('Comment')->create($_POST);
    header('Location: ' . ViewHelper::url('?page=talk&id=' . $_POST['talk_id'], true));
} else {
    header('Location: ' . ViewHelper::url('', true));
}