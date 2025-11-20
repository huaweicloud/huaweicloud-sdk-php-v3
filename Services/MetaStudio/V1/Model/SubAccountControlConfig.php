<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubAccountControlConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubAccountControlConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * separatelyControlled  子账号业务是否单独控制。
    * subAccountType  子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'separatelyControlled' => 'bool',
            'subAccountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * separatelyControlled  子账号业务是否单独控制。
    * subAccountType  子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'separatelyControlled' => null,
        'subAccountType' => null
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
    * separatelyControlled  子账号业务是否单独控制。
    * subAccountType  子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'separatelyControlled' => 'separately_controlled',
            'subAccountType' => 'sub_account_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * separatelyControlled  子账号业务是否单独控制。
    * subAccountType  子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @var string[]
    */
    protected static $setters = [
            'separatelyControlled' => 'setSeparatelyControlled',
            'subAccountType' => 'setSubAccountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * separatelyControlled  子账号业务是否单独控制。
    * subAccountType  子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @var string[]
    */
    protected static $getters = [
            'separatelyControlled' => 'getSeparatelyControlled',
            'subAccountType' => 'getSubAccountType'
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
        $this->container['separatelyControlled'] = isset($data['separatelyControlled']) ? $data['separatelyControlled'] : null;
        $this->container['subAccountType'] = isset($data['subAccountType']) ? $data['subAccountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subAccountType']) && (mb_strlen($this->container['subAccountType']) > 16)) {
                $invalidProperties[] = "invalid value for 'subAccountType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['subAccountType']) && (mb_strlen($this->container['subAccountType']) < 1)) {
                $invalidProperties[] = "invalid value for 'subAccountType', the character length must be bigger than or equal to 1.";
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
    * Gets separatelyControlled
    *  子账号业务是否单独控制。
    *
    * @return bool|null
    */
    public function getSeparatelyControlled()
    {
        return $this->container['separatelyControlled'];
    }

    /**
    * Sets separatelyControlled
    *
    * @param bool|null $separatelyControlled 子账号业务是否单独控制。
    *
    * @return $this
    */
    public function setSeparatelyControlled($separatelyControlled)
    {
        $this->container['separatelyControlled'] = $separatelyControlled;
        return $this;
    }

    /**
    * Gets subAccountType
    *  子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @return string|null
    */
    public function getSubAccountType()
    {
        return $this->container['subAccountType'];
    }

    /**
    * Sets subAccountType
    *
    * @param string|null $subAccountType 子账号类型。 * IAM_USER: 使用调用者IAM user id填充 X-App-UserId。如果请求中携带X-App-UserId，也会被忽略替换。
    *
    * @return $this
    */
    public function setSubAccountType($subAccountType)
    {
        $this->container['subAccountType'] = $subAccountType;
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

