<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Quotas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Quotas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
    * quota  总配额数量。
    * min  最小配额。
    * max  最大配额。
    * used  已使用的配额数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'quota' => 'int',
            'min' => 'int',
            'max' => 'int',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
    * quota  总配额数量。
    * min  最小配额。
    * max  最大配额。
    * used  已使用的配额数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'quota' => 'int32',
        'min' => 'int32',
        'max' => 'int32',
        'used' => 'int32'
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
    * type  配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
    * quota  总配额数量。
    * min  最小配额。
    * max  最大配额。
    * used  已使用的配额数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'quota' => 'quota',
            'min' => 'min',
            'max' => 'max',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
    * quota  总配额数量。
    * min  最小配额。
    * max  最大配额。
    * used  已使用的配额数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'quota' => 'setQuota',
            'min' => 'setMin',
            'max' => 'setMax',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
    * quota  总配额数量。
    * min  最小配额。
    * max  最大配额。
    * used  已使用的配额数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'quota' => 'getQuota',
            'min' => 'getMin',
            'max' => 'getMax',
            'used' => 'getUsed'
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
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
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
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['quota'] === null) {
            $invalidProperties[] = "'quota' can't be null";
        }
        if ($this->container['min'] === null) {
            $invalidProperties[] = "'min' can't be null";
        }
        if ($this->container['max'] === null) {
            $invalidProperties[] = "'max' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
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
    *  配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
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
    * @param string $type 配额类型。resource_share账号创建资源共享的数量，resource_association资源共享关联的资源数量，principal_association资源共享关联的身份数量，permission_association资源共享关联的权限数量，tag_association资源共享关联的标签数量。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets quota
    *  总配额数量。
    *
    * @return int
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int $quota 总配额数量。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets min
    *  最小配额。
    *
    * @return int
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int $min 最小配额。
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  最大配额。
    *
    * @return int
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int $max 最大配额。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets used
    *  已使用的配额数量。
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used 已使用的配额数量。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

