<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNumberOfInstancesInDifferentStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNumberOfInstancesInDifferentStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * includeFailure  是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'includeFailure' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * includeFailure  是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'includeFailure' => null
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
    * includeFailure  是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'includeFailure' => 'include_failure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * includeFailure  是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @var string[]
    */
    protected static $setters = [
            'includeFailure' => 'setIncludeFailure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * includeFailure  是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @var string[]
    */
    protected static $getters = [
            'includeFailure' => 'getIncludeFailure'
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
        $this->container['includeFailure'] = isset($data['includeFailure']) ? $data['includeFailure'] : null;
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
    * Gets includeFailure
    *  是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @return string|null
    */
    public function getIncludeFailure()
    {
        return $this->container['includeFailure'];
    }

    /**
    * Sets includeFailure
    *
    * @param string|null $includeFailure 是否返回创建失败的实例数。   - 当参数值为“true”时，返回的统计包括创建失败的实例数。   - 参数值为“false”或者其他值，返回的统计不包括创建失败的实例数。
    *
    * @return $this
    */
    public function setIncludeFailure($includeFailure)
    {
        $this->container['includeFailure'] = $includeFailure;
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

