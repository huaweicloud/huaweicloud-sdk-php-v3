<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartKibanaPublicReqElbWhitelist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartKibanaPublicReqElbWhitelist';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableWhiteList  是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    * whiteList  白名单。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableWhiteList' => 'bool',
            'whiteList' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableWhiteList  是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    * whiteList  白名单。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableWhiteList' => null,
        'whiteList' => null
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
    * enableWhiteList  是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    * whiteList  白名单。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableWhiteList' => 'enable_white_list',
            'whiteList' => 'white_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableWhiteList  是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    * whiteList  白名单。
    *
    * @var string[]
    */
    protected static $setters = [
            'enableWhiteList' => 'setEnableWhiteList',
            'whiteList' => 'setWhiteList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableWhiteList  是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    * whiteList  白名单。
    *
    * @var string[]
    */
    protected static $getters = [
            'enableWhiteList' => 'getEnableWhiteList',
            'whiteList' => 'getWhiteList'
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
        $this->container['enableWhiteList'] = isset($data['enableWhiteList']) ? $data['enableWhiteList'] : null;
        $this->container['whiteList'] = isset($data['whiteList']) ? $data['whiteList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableWhiteList'] === null) {
            $invalidProperties[] = "'enableWhiteList' can't be null";
        }
        if ($this->container['whiteList'] === null) {
            $invalidProperties[] = "'whiteList' can't be null";
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
    * Gets enableWhiteList
    *  是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    *
    * @return bool
    */
    public function getEnableWhiteList()
    {
        return $this->container['enableWhiteList'];
    }

    /**
    * Sets enableWhiteList
    *
    * @param bool $enableWhiteList 是否开启白名单。 - true: 开启白名单。 - false: 关闭白名单。
    *
    * @return $this
    */
    public function setEnableWhiteList($enableWhiteList)
    {
        $this->container['enableWhiteList'] = $enableWhiteList;
        return $this;
    }

    /**
    * Gets whiteList
    *  白名单。
    *
    * @return string
    */
    public function getWhiteList()
    {
        return $this->container['whiteList'];
    }

    /**
    * Sets whiteList
    *
    * @param string $whiteList 白名单。
    *
    * @return $this
    */
    public function setWhiteList($whiteList)
    {
        $this->container['whiteList'] = $whiteList;
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

