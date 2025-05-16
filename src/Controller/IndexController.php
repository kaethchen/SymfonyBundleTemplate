//
//  IndexController.php
//  SymfonyBundleTemplate
//
//  Created by Alexandra Göttlicher
//

<?php
declare(strict_types = 1);

namespace Template\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController {
    /**
     * Renders the index page.
     *
     * @return Response The index page
     */
    public function index(): Response {
        return new Response($this->twig->render('@TemplateHome/index/index.html.twig'));
    }
}
