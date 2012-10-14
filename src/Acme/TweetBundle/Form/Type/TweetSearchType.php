<?php
// src/Acme/TweetBundle/Form/Type/TweetSearchType.php
namespace Acme\TweetBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TweetSearchType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('search_word', null, array('max_length' => 50, 'label' => ' ',));
  }

  public function getName()
  {
    return 'tweet_search';
  }

public function intention(array $options)
{
  return array(
      'data_class' => 'Acme\TweetBundle\Entity\SearchWord',
//    'validation_groups' => array('search_word_rule'),
      'csrf_protection' => true,
      'csrf_field_name' => '_token',
      // a unique key to help generate the secret token
      'intention'       => 'search_word_item',
      );
  }
}
