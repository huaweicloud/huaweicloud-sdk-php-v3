<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestMuteReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestMuteReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isMute  - 0: 取消静音 - 1: 静音
    * allowUnmuteByOneself  是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isMute' => 'int',
            'allowUnmuteByOneself' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isMute  - 0: 取消静音 - 1: 静音
    * allowUnmuteByOneself  是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isMute' => 'int32',
        'allowUnmuteByOneself' => 'int32'
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
    * isMute  - 0: 取消静音 - 1: 静音
    * allowUnmuteByOneself  是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isMute' => 'isMute',
            'allowUnmuteByOneself' => 'allowUnmuteByOneself'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isMute  - 0: 取消静音 - 1: 静音
    * allowUnmuteByOneself  是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @var string[]
    */
    protected static $setters = [
            'isMute' => 'setIsMute',
            'allowUnmuteByOneself' => 'setAllowUnmuteByOneself'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isMute  - 0: 取消静音 - 1: 静音
    * allowUnmuteByOneself  是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @var string[]
    */
    protected static $getters = [
            'isMute' => 'getIsMute',
            'allowUnmuteByOneself' => 'getAllowUnmuteByOneself'
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
        $this->container['isMute'] = isset($data['isMute']) ? $data['isMute'] : null;
        $this->container['allowUnmuteByOneself'] = isset($data['allowUnmuteByOneself']) ? $data['allowUnmuteByOneself'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isMute'] === null) {
            $invalidProperties[] = "'isMute' can't be null";
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
    * Gets isMute
    *  - 0: 取消静音 - 1: 静音
    *
    * @return int
    */
    public function getIsMute()
    {
        return $this->container['isMute'];
    }

    /**
    * Sets isMute
    *
    * @param int $isMute - 0: 取消静音 - 1: 静音
    *
    * @return $this
    */
    public function setIsMute($isMute)
    {
        $this->container['isMute'] = $isMute;
        return $this;
    }

    /**
    * Gets allowUnmuteByOneself
    *  是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @return int|null
    */
    public function getAllowUnmuteByOneself()
    {
        return $this->container['allowUnmuteByOneself'];
    }

    /**
    * Sets allowUnmuteByOneself
    *
    * @param int|null $allowUnmuteByOneself 是否允许自己解除静音（仅静音时有效），默认为允许。 - 0: 不允许 - 1: 允许
    *
    * @return $this
    */
    public function setAllowUnmuteByOneself($allowUnmuteByOneself)
    {
        $this->container['allowUnmuteByOneself'] = $allowUnmuteByOneself;
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

