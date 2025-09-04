<?php

namespace App\Http\Livewire\Global\Widgets;

use Livewire\Component;

class HeaderSlider extends Component
{
    public array $sliderConfig = [
        'direction' => 'horizontal',
        'loop' => true,
        'allowTouchMove' => false,
        'pagination' => ['el' => '.swiper-pagination', 'clickable' => false],
        // 'navigation' => ['nextEl' => '.swiper-button-next', 'prevEl' => '.swiper-button-prev'],
        // 'scrollbar' => ['el' => '.swiper-scrollbar', 'draggable' => true],
        'autoplay' => ['delay' => 4000],
    ];

    public array $config = [
        /*'width' => '1920px',
        'height' => '800px',*/
        'pagination_active' => false,
        'navigation_active' => false,
        'scrollbar_active' => false,
        'image_title_active' => false,
        'image_description_active' => false,
    ];

    public array $slides = [
        [
            'title' => 'Slide 1',
            'description' => 'Beschreibung für Folie 1.',
            'image' => '/images/slider/s1.jpg'
        ],
        [
            'title' => 'Slide 2',
            'description' => 'Beschreibung für Folie 2.',
            'image' => '/images/slider/s2.jpg'
        ],
        [
            'title' => 'Slide 3',
            'description' => 'Beschreibung für Folie 3.',
            'image' => '/images/slider/s3.jpg'
        ],
        [
            'title' => 'Slide 4',
            'description' => 'Beschreibung für Folie 3.',
            'image' => '/images/slider/s4.jpg'
        ],
        [
            'title' => 'Slide 5',
            'description' => 'Beschreibung für Folie 3.',
            'image' => '/images/slider/s5.jpg'
        ],
        [
            'title' => 'Slide 6',
            'description' => 'Beschreibung für Folie 3.',
            'image' => '/images/slider/s6.jpg'
        ],
        [
            'title' => 'Slide 7',
            'description' => 'Beschreibung für Folie 3.',
            'image' => '/images/slider/s7.jpg'
        ]
    ];

    public function render()
    {
        return view('global.livewire.widgets.header-slider');
    }
}
