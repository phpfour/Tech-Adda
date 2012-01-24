<?php

try {

    $openid = new LightOpenID('localhost');

    if (!$openid->mode) {
        if ($_GET['page'] == 'login') {
            $openid->identity = 'https://www.google.com/accounts/o8/id';
            $openid->required = array('contact/email');
            header('Location: ' . $openid->authUrl());
        }

?>
    <form action="<?php ViewHelper::url('login') ?>" method="post">
        <button>Login with Google</button>
    </form>

<?php

    } elseif ($openid->mode == 'cancel') {

        $_SESSION['flash']['message'] = 'User has cancelled authentication!';

    } else {

        if ($openid->validate()) {

            $authData = $openid->getAttributes();

            $_SESSION['user']['openid']   = $openid->identity;
            $_SESSION['user']['email']    = $authData['contact/email'];
            $_SESSION['flash']['type']    = 'success';
            $_SESSION['flash']['message'] = '<b>Successfully authenticated!</b>. Welcome ' . $authData['contact/email'];

            $userRepository = App::getRepository('User');

            if (!$userRepository->getUserByEmail($_SESSION['user']['email'])){
                $userRepository->create($_SESSION['user']['email']);
            }

            $user = $userRepository->getUserByEmail($_SESSION['user']['email']);
            $_SESSION['user'] = $user;

        } else {

            $_SESSION['flash']['message'] = 'User was not authenticated!';
            $_SESSION['flash']['type']    = 'error';
        }

        header('Location: ' . ViewHelper::url('', true));

    }

} catch (ErrorException $e) {

    echo $e->getMessage();
    die;
}
