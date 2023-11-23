<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchIpGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchIpGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    * enabled  true 开启，false 关闭。
    * ipGroups  IP地址组中包含的IP或网段列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'enabled' => 'bool',
            'ipGroups' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\SwitchIpGroupRequestBodyIpGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    * enabled  true 开启，false 关闭。
    * ipGroups  IP地址组中包含的IP或网段列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'enabled' => null,
        'ipGroups' => null
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
    * type  类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    * enabled  true 开启，false 关闭。
    * ipGroups  IP地址组中包含的IP或网段列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'enabled' => 'enabled',
            'ipGroups' => 'ip_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    * enabled  true 开启，false 关闭。
    * ipGroups  IP地址组中包含的IP或网段列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'enabled' => 'setEnabled',
            'ipGroups' => 'setIpGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    * enabled  true 开启，false 关闭。
    * ipGroups  IP地址组中包含的IP或网段列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'enabled' => 'getEnabled',
            'ipGroups' => 'getIpGroups'
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
    const TYPE_WHITE_LIST = 'whiteList';
    const TYPE_BLACK_LIST = 'blackList';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_WHITE_LIST,
            self::TYPE_BLACK_LIST,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['ipGroups'] = isset($data['ipGroups']) ? $data['ipGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['ipGroups'] === null) {
            $invalidProperties[] = "'ipGroups' can't be null";
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
    * Gets type
    *  类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 类型选项，取值： - whiteList：白名单，只允许指定ip或网段访问。 - blackList：黑名单，不允许指定ip或网段访问。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enabled
    *  true 开启，false 关闭。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled true 开启，false 关闭。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets ipGroups
    *  IP地址组中包含的IP或网段列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\SwitchIpGroupRequestBodyIpGroups[]
    */
    public function getIpGroups()
    {
        return $this->container['ipGroups'];
    }

    /**
    * Sets ipGroups
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\SwitchIpGroupRequestBodyIpGroups[] $ipGroups IP地址组中包含的IP或网段列表。
    *
    * @return $this
    */
    public function setIpGroups($ipGroups)
    {
        $this->container['ipGroups'] = $ipGroups;
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

