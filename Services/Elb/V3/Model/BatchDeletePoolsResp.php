<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeletePoolsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeletePoolsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  被删除的后端服务器组id。
    * retStatus  对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    * retCode  错误码，删除失败时返回此字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'retStatus' => 'string',
            'retCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  被删除的后端服务器组id。
    * retStatus  对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    * retCode  错误码，删除失败时返回此字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'retStatus' => null,
        'retCode' => null
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
    * id  被删除的后端服务器组id。
    * retStatus  对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    * retCode  错误码，删除失败时返回此字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'retStatus' => 'ret_status',
            'retCode' => 'ret_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  被删除的后端服务器组id。
    * retStatus  对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    * retCode  错误码，删除失败时返回此字段
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'retStatus' => 'setRetStatus',
            'retCode' => 'setRetCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  被删除的后端服务器组id。
    * retStatus  对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    * retCode  错误码，删除失败时返回此字段
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'retStatus' => 'getRetStatus',
            'retCode' => 'getRetCode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['retStatus'] = isset($data['retStatus']) ? $data['retStatus'] : null;
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['retStatus'] === null) {
            $invalidProperties[] = "'retStatus' can't be null";
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
    * Gets id
    *  被删除的后端服务器组id。
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
    * @param string $id 被删除的后端服务器组id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets retStatus
    *  对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    *
    * @return string
    */
    public function getRetStatus()
    {
        return $this->container['retStatus'];
    }

    /**
    * Sets retStatus
    *
    * @param string $retStatus 对应id的后端服务器组删除后的结果，not found表示后端服务器组不存在，successful表示删除成功
    *
    * @return $this
    */
    public function setRetStatus($retStatus)
    {
        $this->container['retStatus'] = $retStatus;
        return $this;
    }

    /**
    * Gets retCode
    *  错误码，删除失败时返回此字段
    *
    * @return string|null
    */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
    * Sets retCode
    *
    * @param string|null $retCode 错误码，删除失败时返回此字段
    *
    * @return $this
    */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;
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

