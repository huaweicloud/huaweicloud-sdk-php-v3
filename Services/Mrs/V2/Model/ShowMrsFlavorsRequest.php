<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMrsFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMrsFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionName  MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    * availabilityZone  可用区id，用于查询指定可用区的可用规格
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionName' => 'string',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionName  MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    * availabilityZone  可用区id，用于查询指定可用区的可用规格
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionName' => null,
        'availabilityZone' => null
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
    * versionName  MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    * availabilityZone  可用区id，用于查询指定可用区的可用规格
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionName' => 'version_name',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionName  MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    * availabilityZone  可用区id，用于查询指定可用区的可用规格
    *
    * @var string[]
    */
    protected static $setters = [
            'versionName' => 'setVersionName',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionName  MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    * availabilityZone  可用区id，用于查询指定可用区的可用规格
    *
    * @var string[]
    */
    protected static $getters = [
            'versionName' => 'getVersionName',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['versionName'] === null) {
            $invalidProperties[] = "'versionName' can't be null";
        }
            if ((mb_strlen($this->container['versionName']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['versionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 1.";
            }
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
    * Gets versionName
    *  MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    *
    * @return string
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string $versionName MRS集群版本，不支持多版本查询 ，例如 MRS%203.1.5.1
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区id，用于查询指定可用区的可用规格
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 可用区id，用于查询指定可用区的可用规格
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

