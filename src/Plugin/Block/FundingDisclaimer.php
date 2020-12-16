<?php

namespace Drupal\eu_funding\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with the EU funding disclaimer
 *
 * @Block(
 *   id = "eu_funding_disclaimer",
 *   admin_label = @Translation("EU funding disclaimer"),
 *   category = @Translation("EU funding"),
 * )
 */
class FundingDisclaimer extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('This project has been funded with the support from the European Commission. The website reflects the views only of the author, and the Commission cannot be held responsible for any use which may be made of the information contained therein.'),
    ];
  }

}
