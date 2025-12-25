<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndicatorBatchOperateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndicatorBatchOperateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successIds  成功ID列表
    * errorIds  失败ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successIds' => 'string[]',
            'errorIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successIds  成功ID列表
    * errorIds  失败ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successIds' => null,
        'errorIds' => null
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
    * successIds  成功ID列表
    * errorIds  失败ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successIds' => 'success_ids',
            'errorIds' => 'error_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successIds  成功ID列表
    * errorIds  失败ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'successIds' => 'setSuccessIds',
            'errorIds' => 'setErrorIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successIds  成功ID列表
    * errorIds  失败ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'successIds' => 'getSuccessIds',
            'errorIds' => 'getErrorIds'
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
        $this->container['successIds'] = isset($data['successIds']) ? $data['successIds'] : null;
        $this->container['errorIds'] = isset($data['errorIds']) ? $data['errorIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['successIds'] === null) {
            $invalidProperties[] = "'successIds' can't be null";
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
    * Gets successIds
    *  成功ID列表
    *
    * @return string[]
    */
    public function getSuccessIds()
    {
        return $this->container['successIds'];
    }

    /**
    * Sets successIds
    *
    * @param string[] $successIds 成功ID列表
    *
    * @return $this
    */
    public function setSuccessIds($successIds)
    {
        $this->container['successIds'] = $successIds;
        return $this;
    }

    /**
    * Gets errorIds
    *  失败ID列表
    *
    * @return string[]|null
    */
    public function getErrorIds()
    {
        return $this->container['errorIds'];
    }

    /**
    * Sets errorIds
    *
    * @param string[]|null $errorIds 失败ID列表
    *
    * @return $this
    */
    public function setErrorIds($errorIds)
    {
        $this->container['errorIds'] = $errorIds;
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

