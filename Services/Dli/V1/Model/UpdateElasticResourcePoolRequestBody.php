<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateElasticResourcePoolRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateElasticResourcePoolRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述信息。长度限制：256个字符以内。
    * maxCu  弹性资源池的最大CU数
    * minCu  弹性资源池的最小CU数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'maxCu' => 'int',
            'minCu' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述信息。长度限制：256个字符以内。
    * maxCu  弹性资源池的最大CU数
    * minCu  弹性资源池的最小CU数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'maxCu' => 'int32',
        'minCu' => 'int32'
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
    * description  描述信息。长度限制：256个字符以内。
    * maxCu  弹性资源池的最大CU数
    * minCu  弹性资源池的最小CU数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'maxCu' => 'max_cu',
            'minCu' => 'min_cu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述信息。长度限制：256个字符以内。
    * maxCu  弹性资源池的最大CU数
    * minCu  弹性资源池的最小CU数
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'maxCu' => 'setMaxCu',
            'minCu' => 'setMinCu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述信息。长度限制：256个字符以内。
    * maxCu  弹性资源池的最大CU数
    * minCu  弹性资源池的最小CU数
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'maxCu' => 'getMaxCu',
            'minCu' => 'getMinCu'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maxCu'] = isset($data['maxCu']) ? $data['maxCu'] : null;
        $this->container['minCu'] = isset($data['minCu']) ? $data['minCu'] : null;
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
    * Gets description
    *  描述信息。长度限制：256个字符以内。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息。长度限制：256个字符以内。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets maxCu
    *  弹性资源池的最大CU数
    *
    * @return int|null
    */
    public function getMaxCu()
    {
        return $this->container['maxCu'];
    }

    /**
    * Sets maxCu
    *
    * @param int|null $maxCu 弹性资源池的最大CU数
    *
    * @return $this
    */
    public function setMaxCu($maxCu)
    {
        $this->container['maxCu'] = $maxCu;
        return $this;
    }

    /**
    * Gets minCu
    *  弹性资源池的最小CU数
    *
    * @return int|null
    */
    public function getMinCu()
    {
        return $this->container['minCu'];
    }

    /**
    * Sets minCu
    *
    * @param int|null $minCu 弹性资源池的最小CU数
    *
    * @return $this
    */
    public function setMinCu($minCu)
    {
        $this->container['minCu'] = $minCu;
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

