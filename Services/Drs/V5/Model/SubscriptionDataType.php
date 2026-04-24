<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionDataType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionDataType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isDmlSubscribed  数据操作语言，取值： true：订阅DML false：不订阅DML
    * isDdlSubscribed  数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isDmlSubscribed' => 'bool',
            'isDdlSubscribed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isDmlSubscribed  数据操作语言，取值： true：订阅DML false：不订阅DML
    * isDdlSubscribed  数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isDmlSubscribed' => null,
        'isDdlSubscribed' => null
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
    * isDmlSubscribed  数据操作语言，取值： true：订阅DML false：不订阅DML
    * isDdlSubscribed  数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isDmlSubscribed' => 'is_dml_subscribed',
            'isDdlSubscribed' => 'is_ddl_subscribed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isDmlSubscribed  数据操作语言，取值： true：订阅DML false：不订阅DML
    * isDdlSubscribed  数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @var string[]
    */
    protected static $setters = [
            'isDmlSubscribed' => 'setIsDmlSubscribed',
            'isDdlSubscribed' => 'setIsDdlSubscribed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isDmlSubscribed  数据操作语言，取值： true：订阅DML false：不订阅DML
    * isDdlSubscribed  数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @var string[]
    */
    protected static $getters = [
            'isDmlSubscribed' => 'getIsDmlSubscribed',
            'isDdlSubscribed' => 'getIsDdlSubscribed'
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
        $this->container['isDmlSubscribed'] = isset($data['isDmlSubscribed']) ? $data['isDmlSubscribed'] : null;
        $this->container['isDdlSubscribed'] = isset($data['isDdlSubscribed']) ? $data['isDdlSubscribed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isDmlSubscribed'] === null) {
            $invalidProperties[] = "'isDmlSubscribed' can't be null";
        }
        if ($this->container['isDdlSubscribed'] === null) {
            $invalidProperties[] = "'isDdlSubscribed' can't be null";
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
    * Gets isDmlSubscribed
    *  数据操作语言，取值： true：订阅DML false：不订阅DML
    *
    * @return bool
    */
    public function getIsDmlSubscribed()
    {
        return $this->container['isDmlSubscribed'];
    }

    /**
    * Sets isDmlSubscribed
    *
    * @param bool $isDmlSubscribed 数据操作语言，取值： true：订阅DML false：不订阅DML
    *
    * @return $this
    */
    public function setIsDmlSubscribed($isDmlSubscribed)
    {
        $this->container['isDmlSubscribed'] = $isDmlSubscribed;
        return $this;
    }

    /**
    * Gets isDdlSubscribed
    *  数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @return bool
    */
    public function getIsDdlSubscribed()
    {
        return $this->container['isDdlSubscribed'];
    }

    /**
    * Sets isDdlSubscribed
    *
    * @param bool $isDdlSubscribed 数据定义语言，取值： true：订阅DDL false：不订阅DDL
    *
    * @return $this
    */
    public function setIsDdlSubscribed($isDdlSubscribed)
    {
        $this->container['isDdlSubscribed'] = $isDdlSubscribed;
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

