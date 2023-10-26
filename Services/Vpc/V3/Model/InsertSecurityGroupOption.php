<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsertSecurityGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsertSecurityGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * index  安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityGroups' => 'string[]',
            'index' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * index  安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityGroups' => null,
        'index' => 'int32'
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
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * index  安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityGroups' => 'security_groups',
            'index' => 'index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * index  安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @var string[]
    */
    protected static $setters = [
            'securityGroups' => 'setSecurityGroups',
            'index' => 'setIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * index  安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @var string[]
    */
    protected static $getters = [
            'securityGroups' => 'getSecurityGroups',
            'index' => 'getIndex'
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
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
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
    * Gets securityGroups
    *  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    *
    * @return string[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[] $securityGroups 功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets index
    *  安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 安全组插入的位置，从0开始计数。 举例： 1. 要插入到已关联安全组列表的首位，index=0； 2. 要插入到已关联安全组列表的第n个安全组后面，index=n。 默认插入到端口已关联的安全组列表末尾。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
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

