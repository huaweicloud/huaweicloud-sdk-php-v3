<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDataTransformationReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDataTransformationReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectInfo  对象信息。
    * transformationInfo  transformationInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\CreateDataCompareDatabaseObject[]',
            'transformationInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\CreateDataCompareTransformationInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectInfo  对象信息。
    * transformationInfo  transformationInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectInfo' => null,
        'transformationInfo' => null
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
    * objectInfo  对象信息。
    * transformationInfo  transformationInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectInfo' => 'object_info',
            'transformationInfo' => 'transformation_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectInfo  对象信息。
    * transformationInfo  transformationInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'objectInfo' => 'setObjectInfo',
            'transformationInfo' => 'setTransformationInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectInfo  对象信息。
    * transformationInfo  transformationInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'objectInfo' => 'getObjectInfo',
            'transformationInfo' => 'getTransformationInfo'
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
        $this->container['objectInfo'] = isset($data['objectInfo']) ? $data['objectInfo'] : null;
        $this->container['transformationInfo'] = isset($data['transformationInfo']) ? $data['transformationInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectInfo'] === null) {
            $invalidProperties[] = "'objectInfo' can't be null";
        }
        if ($this->container['transformationInfo'] === null) {
            $invalidProperties[] = "'transformationInfo' can't be null";
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
    * Gets objectInfo
    *  对象信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CreateDataCompareDatabaseObject[]
    */
    public function getObjectInfo()
    {
        return $this->container['objectInfo'];
    }

    /**
    * Sets objectInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CreateDataCompareDatabaseObject[] $objectInfo 对象信息。
    *
    * @return $this
    */
    public function setObjectInfo($objectInfo)
    {
        $this->container['objectInfo'] = $objectInfo;
        return $this;
    }

    /**
    * Gets transformationInfo
    *  transformationInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CreateDataCompareTransformationInfo
    */
    public function getTransformationInfo()
    {
        return $this->container['transformationInfo'];
    }

    /**
    * Sets transformationInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CreateDataCompareTransformationInfo $transformationInfo transformationInfo
    *
    * @return $this
    */
    public function setTransformationInfo($transformationInfo)
    {
        $this->container['transformationInfo'] = $transformationInfo;
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

