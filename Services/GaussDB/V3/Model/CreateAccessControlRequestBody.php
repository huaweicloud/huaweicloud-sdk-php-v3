<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccessControlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccessControlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
    * ipList  控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'ipList' => '\HuaweiCloud\SDK\GaussDB\V3\Model\AccessControlRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
    * ipList  控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'ipList' => null
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
    * type  访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
    * ipList  控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'ipList' => 'ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
    * ipList  控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'ipList' => 'setIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
    * ipList  控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'ipList' => 'getIpList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
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
        if ($this->container['ipList'] === null) {
            $invalidProperties[] = "'ipList' can't be null";
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
    *  访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
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
    * @param string $type 访问控制方式。 取值： - white：表示白名单。 - black：表示黑名单。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ipList
    *  控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\AccessControlRule[]
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\AccessControlRule[] $ipList 控制访问的IP地址数组，最多可添加300个IP地址或网段。
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
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

