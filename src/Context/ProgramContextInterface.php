<?php

declare(strict_types=1);

namespace Setono\SyliusPartnerAdsPlugin\Context;

use Setono\SyliusPartnerAdsPlugin\Model\ProgramInterface;

interface ProgramContextInterface
{
    /**
     * Returns the program enabled for the active channel
     *
     * @return ProgramInterface|null
     */
    public function getProgram(): ?ProgramInterface;
}
