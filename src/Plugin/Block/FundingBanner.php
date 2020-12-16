<?php

namespace Drupal\eu_funding\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

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
    $module_handler = \Drupal::service('module_handler');
    $module_path = $module_handler->getModule('eu_funding')->getPath();

    $banner_dir = $module_path . '/img';

    $banner_default = 'eu_flag_co_funded.png';
    $banner_high_contrast = 'eu_flag_co_funded_hc.png';

    if ($this->configuration['high_contrast'] == 1) {
      $banner = $banner_dir . '/' . $banner_high_contrast;
    } else {
      $banner = $banner_dir . '/' . $banner_default;
    }

    $banner_alt = $this->t('Co-funded by the Erasmus+ Programme of the European Union');

    return [
      '#theme' => 'eu_funding_banner',
      '#banner' => $banner,
      '#alttext' => $banner_alt,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $form['high_contrast'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('High contrast'),
      '#description' => $this->t('Check this option is the banner will be placed over a dark background.'),
      '#default_value' => isset($this->configuration['high_contrast']) ? $this->configuration['high_contrast'] : 0,
      '#return_value' => 1,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();
    $this->configuration['high_contrast'] = $values['high_contrast'];
  }

}
