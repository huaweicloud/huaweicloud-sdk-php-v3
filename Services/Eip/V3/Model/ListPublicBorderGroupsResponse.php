<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicBorderGroupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicBorderGroupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicBorderGroups  功能说明：公共池分组对象
    * requestId  本次请求的编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicBorderGroups' => '\HuaweiCloud\SDK\Eip\V3\Model\CommonPoolsWithBorderGroupDict[]',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicBorderGroups  功能说明：公共池分组对象
    * requestId  本次请求的编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicBorderGroups' => null,
        'requestId' => null
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
    * publicBorderGroups  功能说明：公共池分组对象
    * requestId  本次请求的编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicBorderGroups' => 'public_border_groups',
            'requestId' => 'request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicBorderGroups  功能说明：公共池分组对象
    * requestId  本次请求的编号
    *
    * @var string[]
    */
    protected static $setters = [
            'publicBorderGroups' => 'setPublicBorderGroups',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicBorderGroups  功能说明：公共池分组对象
    * requestId  本次请求的编号
    *
    * @var string[]
    */
    protected static $getters = [
            'publicBorderGroups' => 'getPublicBorderGroups',
            'requestId' => 'getRequestId'
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
        $this->container['publicBorderGroups'] = isset($data['publicBorderGroups']) ? $data['publicBorderGroups'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['requestId'])) {
                $invalidProperties[] = "invalid value for 'requestId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
    * Gets publicBorderGroups
    *  功能说明：公共池分组对象
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\CommonPoolsWithBorderGroupDict[]|null
    */
    public function getPublicBorderGroups()
    {
        return $this->container['publicBorderGroups'];
    }

    /**
    * Sets publicBorderGroups
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\CommonPoolsWithBorderGroupDict[]|null $publicBorderGroups 功能说明：公共池分组对象
    *
    * @return $this
    */
    public function setPublicBorderGroups($publicBorderGroups)
    {
        $this->container['publicBorderGroups'] = $publicBorderGroups;
        return $this;
    }

    /**
    * Gets requestId
    *  本次请求的编号
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 本次请求的编号
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
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

