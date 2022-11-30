<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipOperateProtectReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipOperateProtectReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象ID
    * status  EIP状态
    * ipInfos  EIP信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'status' => 'int',
            'ipInfos' => '\HuaweiCloud\SDK\Cfw\V1\Model\EipOperateProtectReqIpInfos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象ID
    * status  EIP状态
    * ipInfos  EIP信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'status' => null,
        'ipInfos' => null
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
    * objectId  防护对象ID
    * status  EIP状态
    * ipInfos  EIP信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'status' => 'status',
            'ipInfos' => 'ip_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象ID
    * status  EIP状态
    * ipInfos  EIP信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'status' => 'setStatus',
            'ipInfos' => 'setIpInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象ID
    * status  EIP状态
    * ipInfos  EIP信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'status' => 'getStatus',
            'ipInfos' => 'getIpInfos'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ipInfos'] = isset($data['ipInfos']) ? $data['ipInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if ((mb_strlen($this->container['objectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'objectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['objectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'objectId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if (($this->container['status'] > 1)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 1.";
            }
            if (($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
        if ($this->container['ipInfos'] === null) {
            $invalidProperties[] = "'ipInfos' can't be null";
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
    *  防护对象ID
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象ID
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
    *  EIP状态
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status EIP状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ipInfos
    *  EIP信息列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\EipOperateProtectReqIpInfos[]
    */
    public function getIpInfos()
    {
        return $this->container['ipInfos'];
    }

    /**
    * Sets ipInfos
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\EipOperateProtectReqIpInfos[] $ipInfos EIP信息列表
    *
    * @return $this
    */
    public function setIpInfos($ipInfos)
    {
        $this->container['ipInfos'] = $ipInfos;
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

