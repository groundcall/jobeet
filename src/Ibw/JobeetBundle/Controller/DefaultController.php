<?php

namespace Ibw\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('IbwJobeetBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('IbwJobeetBundle:Default:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
        ));
    }

    public function changeLanguageAction() {
        $request = $this->getRequest();
        $language = $this->getRequest()->get('language');
        $referer = $request->headers->get('referer');
        $locales = implode('|', $this->getLocales());
        $url = preg_replace('/\/(' . $locales . ')\//', '/' . $language . '/', $referer, 1);
        return $this->redirect($url);

//       Original code:
//        $language = $this->getRequest()->get('language');
//        return $this->redirect($this->generateUrl('ibw_jobeet_homepage', array('_locale' => $language)));
//    End
    }

    private function getLocales() {
        return array('fr', 'en');
    }

}
