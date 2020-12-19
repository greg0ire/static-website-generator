<?php

declare(strict_types=1);

namespace Doctrine\StaticWebsiteGenerator;

class Site
{
    private string $title;

    private string $subtitle;

    private string $url;

    /** @var string[] */
    private array $keywords;

    private string $description;

    private string $env;

    private string $googleAnalyticsTrackingId;

    /**
     * @param string[] $keywords
     */
    public function __construct(
        string $title,
        string $subtitle,
        string $url,
        array $keywords,
        string $description,
        string $env,
        string $googleAnalyticsTrackingId
    ) {
        $this->title                     = $title;
        $this->subtitle                  = $subtitle;
        $this->url                       = $url;
        $this->keywords                  = $keywords;
        $this->description               = $description;
        $this->env                       = $env;
        $this->googleAnalyticsTrackingId = $googleAnalyticsTrackingId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string[]
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getEnv(): string
    {
        return $this->env;
    }

    public function googleAnalyticsTrackingId(): string
    {
        return $this->googleAnalyticsTrackingId;
    }
}
