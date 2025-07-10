<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDeployKeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDeployKeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * application  部署使用的SSH密钥的来源
    * canPush  部署使用的SSH密钥是否可以推送代码
    * key  部署使用的SSH密钥
    * keyTitle  部署使用的SSH密钥名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'application' => 'string',
            'canPush' => 'bool',
            'key' => 'string',
            'keyTitle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * application  部署使用的SSH密钥的来源
    * canPush  部署使用的SSH密钥是否可以推送代码
    * key  部署使用的SSH密钥
    * keyTitle  部署使用的SSH密钥名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'application' => null,
        'canPush' => null,
        'key' => null,
        'keyTitle' => null
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
    * application  部署使用的SSH密钥的来源
    * canPush  部署使用的SSH密钥是否可以推送代码
    * key  部署使用的SSH密钥
    * keyTitle  部署使用的SSH密钥名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'application' => 'application',
            'canPush' => 'can_push',
            'key' => 'key',
            'keyTitle' => 'key_title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * application  部署使用的SSH密钥的来源
    * canPush  部署使用的SSH密钥是否可以推送代码
    * key  部署使用的SSH密钥
    * keyTitle  部署使用的SSH密钥名称
    *
    * @var string[]
    */
    protected static $setters = [
            'application' => 'setApplication',
            'canPush' => 'setCanPush',
            'key' => 'setKey',
            'keyTitle' => 'setKeyTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * application  部署使用的SSH密钥的来源
    * canPush  部署使用的SSH密钥是否可以推送代码
    * key  部署使用的SSH密钥
    * keyTitle  部署使用的SSH密钥名称
    *
    * @var string[]
    */
    protected static $getters = [
            'application' => 'getApplication',
            'canPush' => 'getCanPush',
            'key' => 'getKey',
            'keyTitle' => 'getKeyTitle'
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
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['canPush'] = isset($data['canPush']) ? $data['canPush'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['keyTitle'] = isset($data['keyTitle']) ? $data['keyTitle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['application'] === null) {
            $invalidProperties[] = "'application' can't be null";
        }
        if ($this->container['canPush'] === null) {
            $invalidProperties[] = "'canPush' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['keyTitle'] === null) {
            $invalidProperties[] = "'keyTitle' can't be null";
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
    * Gets application
    *  部署使用的SSH密钥的来源
    *
    * @return string
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param string $application 部署使用的SSH密钥的来源
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
        return $this;
    }

    /**
    * Gets canPush
    *  部署使用的SSH密钥是否可以推送代码
    *
    * @return bool
    */
    public function getCanPush()
    {
        return $this->container['canPush'];
    }

    /**
    * Sets canPush
    *
    * @param bool $canPush 部署使用的SSH密钥是否可以推送代码
    *
    * @return $this
    */
    public function setCanPush($canPush)
    {
        $this->container['canPush'] = $canPush;
        return $this;
    }

    /**
    * Gets key
    *  部署使用的SSH密钥
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 部署使用的SSH密钥
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets keyTitle
    *  部署使用的SSH密钥名称
    *
    * @return string
    */
    public function getKeyTitle()
    {
        return $this->container['keyTitle'];
    }

    /**
    * Sets keyTitle
    *
    * @param string $keyTitle 部署使用的SSH密钥名称
    *
    * @return $this
    */
    public function setKeyTitle($keyTitle)
    {
        $this->container['keyTitle'] = $keyTitle;
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

