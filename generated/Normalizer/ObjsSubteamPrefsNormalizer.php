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

class ObjsSubteamPrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsSubteamPrefs' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsSubteamPrefs' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsSubteamPrefs();
        if (property_exists($data, 'channels') && null !== $data->{'channels'}) {
            $values = [];
            foreach ($data->{'channels'} as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
        } elseif (property_exists($data, 'channels') && null === $data->{'channels'}) {
            $object->setChannels(null);
        }
        if (property_exists($data, 'groups') && null !== $data->{'groups'}) {
            $values_1 = [];
            foreach ($data->{'groups'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGroups($values_1);
        } elseif (property_exists($data, 'groups') && null === $data->{'groups'}) {
            $object->setGroups(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannels()) {
            $values = [];
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data->{'channels'} = $values;
        } else {
            $data->{'channels'} = null;
        }
        if (null !== $object->getGroups()) {
            $values_1 = [];
            foreach ($object->getGroups() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'groups'} = $values_1;
        } else {
            $data->{'groups'} = null;
        }

        return $data;
    }
}
