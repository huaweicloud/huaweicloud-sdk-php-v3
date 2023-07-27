<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L7rulesInStatusResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L7rulesInStatusResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
    * id  转发规则ID
    * provisioningStatus  转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'id' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
    * id  转发规则ID
    * provisioningStatus  转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'provisioningStatus' => null
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
    * type  转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
    * id  转发规则ID
    * provisioningStatus  转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'id' => 'id',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
    * id  转发规则ID
    * provisioningStatus  转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'id' => 'setId',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
    * id  转发规则ID
    * provisioningStatus  转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'id' => 'getId',
            'provisioningStatus' => 'getProvisioningStatus'
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
    const TYPE_PATH = 'PATH';
    const TYPE_HOST_NAME = 'HOST_NAME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PATH,
            self::TYPE_HOST_NAME,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
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
    *  转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
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
    * @param string $type 转发规则的匹配内容。PATH：匹配请求中的路径；HOST_NAME：匹配请求中的域名
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  转发规则ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 转发规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus 转发规则的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
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

