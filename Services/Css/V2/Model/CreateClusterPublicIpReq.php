<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterPublicIpReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterPublicIpReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eip  eip
    * elbWhiteListReq  elbWhiteListReq
    * publicBindType  是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    * eipId  弹性公网IP的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eip' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicEip',
            'elbWhiteListReq' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterElbWhiteList',
            'publicBindType' => 'string',
            'eipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eip  eip
    * elbWhiteListReq  elbWhiteListReq
    * publicBindType  是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    * eipId  弹性公网IP的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eip' => null,
        'elbWhiteListReq' => null,
        'publicBindType' => null,
        'eipId' => null
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
    * eip  eip
    * elbWhiteListReq  elbWhiteListReq
    * publicBindType  是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    * eipId  弹性公网IP的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eip' => 'eip',
            'elbWhiteListReq' => 'elbWhiteListReq',
            'publicBindType' => 'publicBindType',
            'eipId' => 'eipId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eip  eip
    * elbWhiteListReq  elbWhiteListReq
    * publicBindType  是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    * eipId  弹性公网IP的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'eip' => 'setEip',
            'elbWhiteListReq' => 'setElbWhiteListReq',
            'publicBindType' => 'setPublicBindType',
            'eipId' => 'setEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eip  eip
    * elbWhiteListReq  elbWhiteListReq
    * publicBindType  是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    * eipId  弹性公网IP的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'eip' => 'getEip',
            'elbWhiteListReq' => 'getElbWhiteListReq',
            'publicBindType' => 'getPublicBindType',
            'eipId' => 'getEipId'
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
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['elbWhiteListReq'] = isset($data['elbWhiteListReq']) ? $data['elbWhiteListReq'] : null;
        $this->container['publicBindType'] = isset($data['publicBindType']) ? $data['publicBindType'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eip'] === null) {
            $invalidProperties[] = "'eip' can't be null";
        }
        if ($this->container['publicBindType'] === null) {
            $invalidProperties[] = "'publicBindType' can't be null";
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
    * Gets eip
    *  eip
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicEip
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicEip $eip eip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets elbWhiteListReq
    *  elbWhiteListReq
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterElbWhiteList|null
    */
    public function getElbWhiteListReq()
    {
        return $this->container['elbWhiteListReq'];
    }

    /**
    * Sets elbWhiteListReq
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterElbWhiteList|null $elbWhiteListReq elbWhiteListReq
    *
    * @return $this
    */
    public function setElbWhiteListReq($elbWhiteListReq)
    {
        $this->container['elbWhiteListReq'] = $elbWhiteListReq;
        return $this;
    }

    /**
    * Gets publicBindType
    *  是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    *
    * @return string
    */
    public function getPublicBindType()
    {
        return $this->container['publicBindType'];
    }

    /**
    * Sets publicBindType
    *
    * @param string $publicBindType 是否自动绑定弹性公网IP。当前仅支持auto_assign为自动分配参数。
    *
    * @return $this
    */
    public function setPublicBindType($publicBindType)
    {
        $this->container['publicBindType'] = $publicBindType;
        return $this;
    }

    /**
    * Gets eipId
    *  弹性公网IP的ID。
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId 弹性公网IP的ID。
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
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

