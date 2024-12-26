<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FirewallStatusVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FirewallStatusVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableEipCount  可防护eip数量
    * beyondMaxCount  是否超出eip数量限制
    * eipProtectedSelf  已防护eip数量
    * eipTotal  eip总数
    * eipUnProtected  未防护eip数量
    * objectId  防护对象id
    * status  是否开启新增eip自动防护，1；是，0：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availableEipCount' => 'int',
            'beyondMaxCount' => 'bool',
            'eipProtectedSelf' => 'int',
            'eipTotal' => 'int',
            'eipUnProtected' => 'int',
            'objectId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availableEipCount  可防护eip数量
    * beyondMaxCount  是否超出eip数量限制
    * eipProtectedSelf  已防护eip数量
    * eipTotal  eip总数
    * eipUnProtected  未防护eip数量
    * objectId  防护对象id
    * status  是否开启新增eip自动防护，1；是，0：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availableEipCount' => 'int32',
        'beyondMaxCount' => null,
        'eipProtectedSelf' => 'int32',
        'eipTotal' => 'int32',
        'eipUnProtected' => 'int32',
        'objectId' => null,
        'status' => 'int32'
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
    * availableEipCount  可防护eip数量
    * beyondMaxCount  是否超出eip数量限制
    * eipProtectedSelf  已防护eip数量
    * eipTotal  eip总数
    * eipUnProtected  未防护eip数量
    * objectId  防护对象id
    * status  是否开启新增eip自动防护，1；是，0：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availableEipCount' => 'available_eip_count',
            'beyondMaxCount' => 'beyond_max_count',
            'eipProtectedSelf' => 'eip_protected_self',
            'eipTotal' => 'eip_total',
            'eipUnProtected' => 'eip_un_protected',
            'objectId' => 'object_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availableEipCount  可防护eip数量
    * beyondMaxCount  是否超出eip数量限制
    * eipProtectedSelf  已防护eip数量
    * eipTotal  eip总数
    * eipUnProtected  未防护eip数量
    * objectId  防护对象id
    * status  是否开启新增eip自动防护，1；是，0：否
    *
    * @var string[]
    */
    protected static $setters = [
            'availableEipCount' => 'setAvailableEipCount',
            'beyondMaxCount' => 'setBeyondMaxCount',
            'eipProtectedSelf' => 'setEipProtectedSelf',
            'eipTotal' => 'setEipTotal',
            'eipUnProtected' => 'setEipUnProtected',
            'objectId' => 'setObjectId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availableEipCount  可防护eip数量
    * beyondMaxCount  是否超出eip数量限制
    * eipProtectedSelf  已防护eip数量
    * eipTotal  eip总数
    * eipUnProtected  未防护eip数量
    * objectId  防护对象id
    * status  是否开启新增eip自动防护，1；是，0：否
    *
    * @var string[]
    */
    protected static $getters = [
            'availableEipCount' => 'getAvailableEipCount',
            'beyondMaxCount' => 'getBeyondMaxCount',
            'eipProtectedSelf' => 'getEipProtectedSelf',
            'eipTotal' => 'getEipTotal',
            'eipUnProtected' => 'getEipUnProtected',
            'objectId' => 'getObjectId',
            'status' => 'getStatus'
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
        $this->container['availableEipCount'] = isset($data['availableEipCount']) ? $data['availableEipCount'] : null;
        $this->container['beyondMaxCount'] = isset($data['beyondMaxCount']) ? $data['beyondMaxCount'] : null;
        $this->container['eipProtectedSelf'] = isset($data['eipProtectedSelf']) ? $data['eipProtectedSelf'] : null;
        $this->container['eipTotal'] = isset($data['eipTotal']) ? $data['eipTotal'] : null;
        $this->container['eipUnProtected'] = isset($data['eipUnProtected']) ? $data['eipUnProtected'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets availableEipCount
    *  可防护eip数量
    *
    * @return int|null
    */
    public function getAvailableEipCount()
    {
        return $this->container['availableEipCount'];
    }

    /**
    * Sets availableEipCount
    *
    * @param int|null $availableEipCount 可防护eip数量
    *
    * @return $this
    */
    public function setAvailableEipCount($availableEipCount)
    {
        $this->container['availableEipCount'] = $availableEipCount;
        return $this;
    }

    /**
    * Gets beyondMaxCount
    *  是否超出eip数量限制
    *
    * @return bool|null
    */
    public function getBeyondMaxCount()
    {
        return $this->container['beyondMaxCount'];
    }

    /**
    * Sets beyondMaxCount
    *
    * @param bool|null $beyondMaxCount 是否超出eip数量限制
    *
    * @return $this
    */
    public function setBeyondMaxCount($beyondMaxCount)
    {
        $this->container['beyondMaxCount'] = $beyondMaxCount;
        return $this;
    }

    /**
    * Gets eipProtectedSelf
    *  已防护eip数量
    *
    * @return int|null
    */
    public function getEipProtectedSelf()
    {
        return $this->container['eipProtectedSelf'];
    }

    /**
    * Sets eipProtectedSelf
    *
    * @param int|null $eipProtectedSelf 已防护eip数量
    *
    * @return $this
    */
    public function setEipProtectedSelf($eipProtectedSelf)
    {
        $this->container['eipProtectedSelf'] = $eipProtectedSelf;
        return $this;
    }

    /**
    * Gets eipTotal
    *  eip总数
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
    * @param int|null $eipTotal eip总数
    *
    * @return $this
    */
    public function setEipTotal($eipTotal)
    {
        $this->container['eipTotal'] = $eipTotal;
        return $this;
    }

    /**
    * Gets eipUnProtected
    *  未防护eip数量
    *
    * @return int|null
    */
    public function getEipUnProtected()
    {
        return $this->container['eipUnProtected'];
    }

    /**
    * Sets eipUnProtected
    *
    * @param int|null $eipUnProtected 未防护eip数量
    *
    * @return $this
    */
    public function setEipUnProtected($eipUnProtected)
    {
        $this->container['eipUnProtected'] = $eipUnProtected;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象id
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
    * @param string|null $objectId 防护对象id
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets status
    *  是否开启新增eip自动防护，1；是，0：否
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 是否开启新增eip自动防护，1；是，0：否
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

