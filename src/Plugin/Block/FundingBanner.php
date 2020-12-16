<?php

namespace Drupal\eu_funding\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with the EU funding banner
 *
 * @Block(
 *   id = "eu_funding_banner",
 *   admin_label = @Translation("EU funding banner"),
 *   category = @Translation("EU funding"),
 * )
 */
class FundingBanner extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Co-funded by the Erasmus+ Programme of the European Union'),
    ];
  }

}
