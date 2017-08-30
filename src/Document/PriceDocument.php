<?php

declare(strict_types=1);

namespace Sylius\ElasticSearchPlugin\Document;

use ONGR\ElasticsearchBundle\Annotation as ElasticSearch;

/**
 * @ElasticSearch\Object
 */
class PriceDocument
{
    /**
     * @var int
     *
     * @ElasticSearch\Property(type="integer")
     */
    private $amount;

    /**
     * @var int
     *
     * @ElasticSearch\Property(type="integer")
     */
    private $original = 0;

    /**
     * @var string
     *
     * @ElasticSearch\Property(type="keyword")
     */
    private $currency;

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getOriginal(): int
    {
        return $this->original;
    }

    /**
     * @param int $original
     */
    public function setOriginal(int $original = 0): void
    {
        $this->original = $original;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}
