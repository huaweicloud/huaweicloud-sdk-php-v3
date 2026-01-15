<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResolutionInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResolutionInstances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dnsPublicZoneId  dnsPublicZoneId
    * dnsPublicRecordsetId  dnsPublicRecordsetId
    * dnsPrivateZoneId  dnsPrivateZoneId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dnsPublicZoneId' => '\HuaweiCloud\SDK\Dns\V2\Model\ZoneResolutionInstances',
            'dnsPublicRecordsetId' => '\HuaweiCloud\SDK\Dns\V2\Model\RsetResolutionInstances',
            'dnsPrivateZoneId' => '\HuaweiCloud\SDK\Dns\V2\Model\ZoneResolutionInstances',
            'vpcId' => '\HuaweiCloud\SDK\Dns\V2\Model\VpcResolutionInstances'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dnsPublicZoneId  dnsPublicZoneId
    * dnsPublicRecordsetId  dnsPublicRecordsetId
    * dnsPrivateZoneId  dnsPrivateZoneId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dnsPublicZoneId' => null,
        'dnsPublicRecordsetId' => null,
        'dnsPrivateZoneId' => null,
        'vpcId' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * dnsPublicZoneId  dnsPublicZoneId
    * dnsPublicRecordsetId  dnsPublicRecordsetId
    * dnsPrivateZoneId  dnsPrivateZoneId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dnsPublicZoneId' => 'dns_public_zone_id',
            'dnsPublicRecordsetId' => 'dns_public_recordset_id',
            'dnsPrivateZoneId' => 'dns_private_zone_id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dnsPublicZoneId  dnsPublicZoneId
    * dnsPublicRecordsetId  dnsPublicRecordsetId
    * dnsPrivateZoneId  dnsPrivateZoneId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $setters = [
            'dnsPublicZoneId' => 'setDnsPublicZoneId',
            'dnsPublicRecordsetId' => 'setDnsPublicRecordsetId',
            'dnsPrivateZoneId' => 'setDnsPrivateZoneId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dnsPublicZoneId  dnsPublicZoneId
    * dnsPublicRecordsetId  dnsPublicRecordsetId
    * dnsPrivateZoneId  dnsPrivateZoneId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $getters = [
            'dnsPublicZoneId' => 'getDnsPublicZoneId',
            'dnsPublicRecordsetId' => 'getDnsPublicRecordsetId',
            'dnsPrivateZoneId' => 'getDnsPrivateZoneId',
            'vpcId' => 'getVpcId'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['dnsPublicZoneId'] = isset($data['dnsPublicZoneId']) ? $data['dnsPublicZoneId'] : null;
        $this->container['dnsPublicRecordsetId'] = isset($data['dnsPublicRecordsetId']) ? $data['dnsPublicRecordsetId'] : null;
        $this->container['dnsPrivateZoneId'] = isset($data['dnsPrivateZoneId']) ? $data['dnsPrivateZoneId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets dnsPublicZoneId
    *  dnsPublicZoneId
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\ZoneResolutionInstances|null
    */
    public function getDnsPublicZoneId()
    {
        return $this->container['dnsPublicZoneId'];
    }

    /**
    * Sets dnsPublicZoneId
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\ZoneResolutionInstances|null $dnsPublicZoneId dnsPublicZoneId
    *
    * @return $this
    */
    public function setDnsPublicZoneId($dnsPublicZoneId)
    {
        $this->container['dnsPublicZoneId'] = $dnsPublicZoneId;
        return $this;
    }

    /**
    * Gets dnsPublicRecordsetId
    *  dnsPublicRecordsetId
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\RsetResolutionInstances|null
    */
    public function getDnsPublicRecordsetId()
    {
        return $this->container['dnsPublicRecordsetId'];
    }

    /**
    * Sets dnsPublicRecordsetId
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\RsetResolutionInstances|null $dnsPublicRecordsetId dnsPublicRecordsetId
    *
    * @return $this
    */
    public function setDnsPublicRecordsetId($dnsPublicRecordsetId)
    {
        $this->container['dnsPublicRecordsetId'] = $dnsPublicRecordsetId;
        return $this;
    }

    /**
    * Gets dnsPrivateZoneId
    *  dnsPrivateZoneId
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\ZoneResolutionInstances|null
    */
    public function getDnsPrivateZoneId()
    {
        return $this->container['dnsPrivateZoneId'];
    }

    /**
    * Sets dnsPrivateZoneId
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\ZoneResolutionInstances|null $dnsPrivateZoneId dnsPrivateZoneId
    *
    * @return $this
    */
    public function setDnsPrivateZoneId($dnsPrivateZoneId)
    {
        $this->container['dnsPrivateZoneId'] = $dnsPrivateZoneId;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpcId
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\VpcResolutionInstances|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\VpcResolutionInstances|null $vpcId vpcId
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

