<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipCountRespData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipCountRespData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * eipTotal  EIP总数
    * eipProtected  EIP防护数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'eipTotal' => 'int',
            'eipProtected' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * eipTotal  EIP总数
    * eipProtected  EIP防护数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'eipTotal' => 'int32',
        'eipProtected' => 'int32'
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
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * eipTotal  EIP总数
    * eipProtected  EIP防护数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'eipTotal' => 'eip_total',
            'eipProtected' => 'eip_protected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * eipTotal  EIP总数
    * eipProtected  EIP防护数
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'eipTotal' => 'setEipTotal',
            'eipProtected' => 'setEipProtected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * eipTotal  EIP总数
    * eipProtected  EIP防护数
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'eipTotal' => 'getEipTotal',
            'eipProtected' => 'getEipProtected'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['eipTotal'] = isset($data['eipTotal']) ? $data['eipTotal'] : null;
        $this->container['eipProtected'] = isset($data['eipProtected']) ? $data['eipProtected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['objectId']) && (mb_strlen($this->container['objectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'objectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['objectId']) && (mb_strlen($this->container['objectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'objectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['objectId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['eipTotal']) && ($this->container['eipTotal'] < 0)) {
                $invalidProperties[] = "invalid value for 'eipTotal', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eipProtected']) && ($this->container['eipProtected'] < 0)) {
                $invalidProperties[] = "invalid value for 'eipProtected', must be bigger than or equal to 0.";
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
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets eipTotal
    *  EIP总数
    *
    * @return int|null
    */
    public function getEipTotal()
    {
        return $this->container['eipTotal'];
    }

    /**
    * Sets eipTotal
    *
    * @param int|null $eipTotal EIP总数
    *
    * @return $this
    */
    public function setEipTotal($eipTotal)
    {
        $this->container['eipTotal'] = $eipTotal;
        return $this;
    }

    /**
    * Gets eipProtected
    *  EIP防护数
    *
    * @return int|null
    */
    public function getEipProtected()
    {
        return $this->container['eipProtected'];
    }

    /**
    * Sets eipProtected
    *
    * @param int|null $eipProtected EIP防护数
    *
    * @return $this
    */
    public function setEipProtected($eipProtected)
    {
        $this->container['eipProtected'] = $eipProtected;
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

