<?php

namespace Drupal\eu_funding\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a block with the EU funding disclaimer.
 */
#[Block(
  id: 'eu_funding_disclaimer',
  admin_label: new TranslatableMarkup("EU funding disclaimer"),
  category: new TranslatableMarkup("EU funding"),
)]
class FundingDisclaimer extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $text = $this->t('This project has been funded with the support from the European Commission. The website reflects the views only of the author, and the Commission cannot be held responsible for any use which may be made of the information contained therein.');

    return [
      '#theme' => 'eu_funding_text',
      '#text' => $text,
    ];
  }

}
