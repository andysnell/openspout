<?php

declare(strict_types=1);

namespace OpenSpout\Reader\ODS\Manager;

use OpenSpout\Common\Manager\OptionsManagerAbstract;
use OpenSpout\Reader\Common\Entity\Options;

/**
 * ODS Reader options manager.
 */
final class OptionsManager extends OptionsManagerAbstract
{
    /**
     * {@inheritdoc}
     */
    protected function getSupportedOptions(): array
    {
        return [
            Options::SHOULD_FORMAT_DATES,
            Options::SHOULD_PRESERVE_EMPTY_ROWS,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(): void
    {
        $this->setOption(Options::SHOULD_FORMAT_DATES, false);
        $this->setOption(Options::SHOULD_PRESERVE_EMPTY_ROWS, false);
    }
}
