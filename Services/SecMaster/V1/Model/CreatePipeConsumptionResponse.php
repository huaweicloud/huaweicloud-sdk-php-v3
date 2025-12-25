<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePipeConsumptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePipeConsumptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessPoint  访问点地址
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  管道状态
    * subscription  订阅ID
    * type  管道类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessPoint' => 'string',
            'dataspaceId' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'status' => 'string',
            'subscription' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessPoint  访问点地址
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  管道状态
    * subscription  订阅ID
    * type  管道类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessPoint' => null,
        'dataspaceId' => null,
        'pipeId' => null,
        'pipeName' => null,
        'status' => null,
        'subscription' => null,
        'type' => null
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
    * accessPoint  访问点地址
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  管道状态
    * subscription  订阅ID
    * type  管道类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessPoint' => 'access_point',
            'dataspaceId' => 'dataspace_id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'status' => 'status',
            'subscription' => 'subscription',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessPoint  访问点地址
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  管道状态
    * subscription  订阅ID
    * type  管道类型
    *
    * @var string[]
    */
    protected static $setters = [
            'accessPoint' => 'setAccessPoint',
            'dataspaceId' => 'setDataspaceId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'status' => 'setStatus',
            'subscription' => 'setSubscription',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessPoint  访问点地址
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  管道状态
    * subscription  订阅ID
    * type  管道类型
    *
    * @var string[]
    */
    protected static $getters = [
            'accessPoint' => 'getAccessPoint',
            'dataspaceId' => 'getDataspaceId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'status' => 'getStatus',
            'subscription' => 'getSubscription',
            'type' => 'getType'
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
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    const TYPE_INTRANET = 'intranet';
    const TYPE_INTERNET = 'internet';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INTRANET,
            self::TYPE_INTERNET,
        ];
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
        $this->container['accessPoint'] = isset($data['accessPoint']) ? $data['accessPoint'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets accessPoint
    *  访问点地址
    *
    * @return string|null
    */
    public function getAccessPoint()
    {
        return $this->container['accessPoint'];
    }

    /**
    * Sets accessPoint
    *
    * @param string|null $accessPoint 访问点地址
    *
    * @return $this
    */
    public function setAccessPoint($accessPoint)
    {
        $this->container['accessPoint'] = $accessPoint;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets pipeName
    *  管道名称
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets status
    *  管道状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 管道状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subscription
    *  订阅ID
    *
    * @return string|null
    */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
    * Sets subscription
    *
    * @param string|null $subscription 订阅ID
    *
    * @return $this
    */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;
        return $this;
    }

    /**
    * Gets type
    *  管道类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 管道类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

