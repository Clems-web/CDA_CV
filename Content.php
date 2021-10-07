<?php

class Content {

    private ?string $content;


    /**
     * Recipe constructor.

     * @param string $content
     */
    public function __construct(string $content) {
        $this->content = $content;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }



}