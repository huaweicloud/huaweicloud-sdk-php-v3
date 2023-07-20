<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareConfigurationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareConfigurationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceConfigurationId  需要进行比较的源参数模板ID。
    * targetConfigurationId  需要进行比较的目标参数模板ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceConfigurationId' => 'string',
            'targetConfigurationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceConfigurationId  需要进行比较的源参数模板ID。
    * targetConfigurationId  需要进行比较的目标参数模板ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceConfigurationId' => null,
        'targetConfigurationId' => null
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
    * sourceConfigurationId  需要进行比较的源参数模板ID。
    * targetConfigurationId  需要进行比较的目标参数模板ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceConfigurationId' => 'source_configuration_id',
            'targetConfigurationId' => 'target_configuration_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceConfigurationId  需要进行比较的源参数模板ID。
    * targetConfigurationId  需要进行比较的目标参数模板ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceConfigurationId' => 'setSourceConfigurationId',
            'targetConfigurationId' => 'setTargetConfigurationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceConfigurationId  需要进行比较的源参数模板ID。
    * targetConfigurationId  需要进行比较的目标参数模板ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceConfigurationId' => 'getSourceConfigurationId',
            'targetConfigurationId' => 'getTargetConfigurationId'
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
        $this->container['sourceConfigurationId'] = isset($data['sourceConfigurationId']) ? $data['sourceConfigurationId'] : null;
        $this->container['targetConfigurationId'] = isset($data['targetConfigurationId']) ? $data['targetConfigurationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceConfigurationId'] === null) {
            $invalidProperties[] = "'sourceConfigurationId' can't be null";
        }
        if ($this->container['targetConfigurationId'] === null) {
            $invalidProperties[] = "'targetConfigurationId' can't be null";
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
    * Gets sourceConfigurationId
    *  需要进行比较的源参数模板ID。
    *
    * @return string
    */
    public function getSourceConfigurationId()
    {
        return $this->container['sourceConfigurationId'];
    }

    /**
    * Sets sourceConfigurationId
    *
    * @param string $sourceConfigurationId 需要进行比较的源参数模板ID。
    *
    * @return $this
    */
    public function setSourceConfigurationId($sourceConfigurationId)
    {
        $this->container['sourceConfigurationId'] = $sourceConfigurationId;
        return $this;
    }

    /**
    * Gets targetConfigurationId
    *  需要进行比较的目标参数模板ID。
    *
    * @return string
    */
    public function getTargetConfigurationId()
    {
        return $this->container['targetConfigurationId'];
    }

    /**
    * Sets targetConfigurationId
    *
    * @param string $targetConfigurationId 需要进行比较的目标参数模板ID。
    *
    * @return $this
    */
    public function setTargetConfigurationId($targetConfigurationId)
    {
        $this->container['targetConfigurationId'] = $targetConfigurationId;
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

