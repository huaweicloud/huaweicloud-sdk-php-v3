<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingPolicyV2MetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingPolicyV2MetaData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metadataBandwidthShareType  伸缩带宽策略中带宽对应的共享类型
    * metadataEipId  伸缩带宽策略中带宽对应的EIP的ID
    * metadataEipAddress  伸缩带宽策略中带宽对应的EIP地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metadataBandwidthShareType' => 'string',
            'metadataEipId' => 'string',
            'metadataEipAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metadataBandwidthShareType  伸缩带宽策略中带宽对应的共享类型
    * metadataEipId  伸缩带宽策略中带宽对应的EIP的ID
    * metadataEipAddress  伸缩带宽策略中带宽对应的EIP地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metadataBandwidthShareType' => null,
        'metadataEipId' => null,
        'metadataEipAddress' => null
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
    * metadataBandwidthShareType  伸缩带宽策略中带宽对应的共享类型
    * metadataEipId  伸缩带宽策略中带宽对应的EIP的ID
    * metadataEipAddress  伸缩带宽策略中带宽对应的EIP地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metadataBandwidthShareType' => 'metadata_bandwidth_share_type',
            'metadataEipId' => 'metadata_eip_id',
            'metadataEipAddress' => 'metadata_eip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metadataBandwidthShareType  伸缩带宽策略中带宽对应的共享类型
    * metadataEipId  伸缩带宽策略中带宽对应的EIP的ID
    * metadataEipAddress  伸缩带宽策略中带宽对应的EIP地址
    *
    * @var string[]
    */
    protected static $setters = [
            'metadataBandwidthShareType' => 'setMetadataBandwidthShareType',
            'metadataEipId' => 'setMetadataEipId',
            'metadataEipAddress' => 'setMetadataEipAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metadataBandwidthShareType  伸缩带宽策略中带宽对应的共享类型
    * metadataEipId  伸缩带宽策略中带宽对应的EIP的ID
    * metadataEipAddress  伸缩带宽策略中带宽对应的EIP地址
    *
    * @var string[]
    */
    protected static $getters = [
            'metadataBandwidthShareType' => 'getMetadataBandwidthShareType',
            'metadataEipId' => 'getMetadataEipId',
            'metadataEipAddress' => 'getMetadataEipAddress'
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
        $this->container['metadataBandwidthShareType'] = isset($data['metadataBandwidthShareType']) ? $data['metadataBandwidthShareType'] : null;
        $this->container['metadataEipId'] = isset($data['metadataEipId']) ? $data['metadataEipId'] : null;
        $this->container['metadataEipAddress'] = isset($data['metadataEipAddress']) ? $data['metadataEipAddress'] : null;
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
    * Gets metadataBandwidthShareType
    *  伸缩带宽策略中带宽对应的共享类型
    *
    * @return string|null
    */
    public function getMetadataBandwidthShareType()
    {
        return $this->container['metadataBandwidthShareType'];
    }

    /**
    * Sets metadataBandwidthShareType
    *
    * @param string|null $metadataBandwidthShareType 伸缩带宽策略中带宽对应的共享类型
    *
    * @return $this
    */
    public function setMetadataBandwidthShareType($metadataBandwidthShareType)
    {
        $this->container['metadataBandwidthShareType'] = $metadataBandwidthShareType;
        return $this;
    }

    /**
    * Gets metadataEipId
    *  伸缩带宽策略中带宽对应的EIP的ID
    *
    * @return string|null
    */
    public function getMetadataEipId()
    {
        return $this->container['metadataEipId'];
    }

    /**
    * Sets metadataEipId
    *
    * @param string|null $metadataEipId 伸缩带宽策略中带宽对应的EIP的ID
    *
    * @return $this
    */
    public function setMetadataEipId($metadataEipId)
    {
        $this->container['metadataEipId'] = $metadataEipId;
        return $this;
    }

    /**
    * Gets metadataEipAddress
    *  伸缩带宽策略中带宽对应的EIP地址
    *
    * @return string|null
    */
    public function getMetadataEipAddress()
    {
        return $this->container['metadataEipAddress'];
    }

    /**
    * Sets metadataEipAddress
    *
    * @param string|null $metadataEipAddress 伸缩带宽策略中带宽对应的EIP地址
    *
    * @return $this
    */
    public function setMetadataEipAddress($metadataEipAddress)
    {
        $this->container['metadataEipAddress'] = $metadataEipAddress;
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

