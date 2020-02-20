<?php

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsInvitePostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ConversationsInvitePostResponsedefault' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsInvitePostResponsedefault' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefault();
        if (property_exists($data, 'error') && null !== $data->{'error'}) {
            $object->setError($data->{'error'});
        } elseif (property_exists($data, 'error') && null === $data->{'error'}) {
            $object->setError(null);
        }
        if (property_exists($data, 'errors') && null !== $data->{'errors'}) {
            $values = [];
            foreach ($data->{'errors'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ConversationsInvitePostResponsedefaultErrorsItem', 'json', $context);
            }
            $object->setErrors($values);
        } elseif (property_exists($data, 'errors') && null === $data->{'errors'}) {
            $object->setErrors(null);
        }
        if (property_exists($data, 'needed') && null !== $data->{'needed'}) {
            $object->setNeeded($data->{'needed'});
        } elseif (property_exists($data, 'needed') && null === $data->{'needed'}) {
            $object->setNeeded(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'provided') && null !== $data->{'provided'}) {
            $object->setProvided($data->{'provided'});
        } elseif (property_exists($data, 'provided') && null === $data->{'provided'}) {
            $object->setProvided(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getError()) {
            $data->{'error'} = $object->getError();
        } else {
            $data->{'error'} = null;
        }
        if (null !== $object->getErrors()) {
            $values = [];
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'errors'} = $values;
        } else {
            $data->{'errors'} = null;
        }
        if (null !== $object->getNeeded()) {
            $data->{'needed'} = $object->getNeeded();
        } else {
            $data->{'needed'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getProvided()) {
            $data->{'provided'} = $object->getProvided();
        } else {
            $data->{'provided'} = null;
        }

        return $data;
    }
}
