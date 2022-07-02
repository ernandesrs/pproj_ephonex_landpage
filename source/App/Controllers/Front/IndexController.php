<?php

namespace App\Controllers\Front;

class IndexController extends FrontController
{
    /**
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    /**
     * @return void
     */
    public function index(): void
    {
        $this->view("front/index", [
            "siteSettings" => (object) [
                "logo" => "/images/front/ephonex_logo.svg",
                "favicon" => null,
                "name" => app_name(),
                "slogan" => "Lorem ipsum dolor sit",
                "description" => "",
            ],
            "banner" => (object) [
                "title" => "<span class='text-primary'>Eleve sua experiência</span> <span class='text-secondary'>para outro nível</span>",
                "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum accumsan tincidunt.",
                "links" => [
                    (object) [
                        "style" => "btn-outline-primary",
                        "icon" => null,
                        "text" => "Conhecer",
                        "title" => null,
                        "url" => "#",
                        "target" => "_self"
                    ],
                    (object) [
                        "style" => "btn-primary",
                        "icon" => "arrowRight",
                        "text" => "Comprar",
                        "title" => null,
                        "url" => "#",
                        "target" => "_self"
                    ],
                ],
                "images" => [
                    (object) [
                        "name" => "01",
                        "path" => "/images/front/image_01.png",
                        "class" => "top",
                        "id" => "banner-image-one",
                    ],
                    (object) [
                        "name" => "02",
                        "path" => "/images/front/image_02.png",
                        "class" => "overshadowed",
                        "id" => "banner-image-two",
                    ],
                    (object) [
                        "name" => "03",
                        "path" => "/images/front/image_03.png",
                        "class" => "bottom",
                        "id" => "banner-image-three",
                    ],
                ],
            ]
        ])->seo("Bem vindo ao front do site")->render();
    }

    /**
     * @return void
     */
    public function error(): void
    {
        $this->view("error", ["errorCode" => filter_input(INPUT_GET, "err", FILTER_VALIDATE_INT) ?? 404])
            ->render();
    }
}
