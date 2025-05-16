//
//  AbstractController.php
//  SymfonyBundleTemplate
//
//  Created by Alexandra Göttlicher
//

<?php
declare(strict_types = 1);

namespace Template\HomeBundle\Controller;

use Twig\Environment as Twig;

class AbstractController {
    protected Twig $twig;

    /**
     * @param  Twig $twig
     *
     * @return static
     */
    public function setTwig(Twig $environment): static {
        $this->twig = $environment;
        return $this;
    }

    /**
     * @return Twig
     */
    public function getTwig(): Twig {
        return $this->twig;
    }
}
