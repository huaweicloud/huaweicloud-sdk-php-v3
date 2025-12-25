<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisableDataConsumptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisableDataConsumptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  实时消费的开关状态；enable-开启，disable-关闭
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * pipeName  数据管道名称
    * subscriptionName  订阅名称
    * tableId  table表id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'accessPoint' => 'string',
            'pipeName' => 'string',
            'subscriptionName' => 'string',
            'tableId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  实时消费的开关状态；enable-开启，disable-关闭
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * pipeName  数据管道名称
    * subscriptionName  订阅名称
    * tableId  table表id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'accessPoint' => null,
        'pipeName' => null,
        'subscriptionName' => null,
        'tableId' => null
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
    * status  实时消费的开关状态；enable-开启，disable-关闭
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * pipeName  数据管道名称
    * subscriptionName  订阅名称
    * tableId  table表id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'accessPoint' => 'access_point',
            'pipeName' => 'pipe_name',
            'subscriptionName' => 'subscription_name',
            'tableId' => 'table_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  实时消费的开关状态；enable-开启，disable-关闭
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * pipeName  数据管道名称
    * subscriptionName  订阅名称
    * tableId  table表id
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'accessPoint' => 'setAccessPoint',
            'pipeName' => 'setPipeName',
            'subscriptionName' => 'setSubscriptionName',
            'tableId' => 'setTableId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  实时消费的开关状态；enable-开启，disable-关闭
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * pipeName  数据管道名称
    * subscriptionName  订阅名称
    * tableId  table表id
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'accessPoint' => 'getAccessPoint',
            'pipeName' => 'getPipeName',
            'subscriptionName' => 'getSubscriptionName',
            'tableId' => 'getTableId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['accessPoint'] = isset($data['accessPoint']) ? $data['accessPoint'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['subscriptionName'] = isset($data['subscriptionName']) ? $data['subscriptionName'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['accessPoint']) && (mb_strlen($this->container['accessPoint']) > 255)) {
                $invalidProperties[] = "invalid value for 'accessPoint', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['accessPoint']) && (mb_strlen($this->container['accessPoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessPoint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 5)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['subscriptionName']) && (mb_strlen($this->container['subscriptionName']) > 63)) {
                $invalidProperties[] = "invalid value for 'subscriptionName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['subscriptionName']) && (mb_strlen($this->container['subscriptionName']) < 5)) {
                $invalidProperties[] = "invalid value for 'subscriptionName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 0.";
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
    * Gets status
    *  实时消费的开关状态；enable-开启，disable-关闭
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
    * @param string|null $status 实时消费的开关状态；enable-开启，disable-关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets accessPoint
    *  接入点域名信息(格式：{dataspace}.{endpoint})
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
    * @param string|null $accessPoint 接入点域名信息(格式：{dataspace}.{endpoint})
    *
    * @return $this
    */
    public function setAccessPoint($accessPoint)
    {
        $this->container['accessPoint'] = $accessPoint;
        return $this;
    }

    /**
    * Gets pipeName
    *  数据管道名称
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
    * @param string|null $pipeName 数据管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets subscriptionName
    *  订阅名称
    *
    * @return string|null
    */
    public function getSubscriptionName()
    {
        return $this->container['subscriptionName'];
    }

    /**
    * Sets subscriptionName
    *
    * @param string|null $subscriptionName 订阅名称
    *
    * @return $this
    */
    public function setSubscriptionName($subscriptionName)
    {
        $this->container['subscriptionName'] = $subscriptionName;
        return $this;
    }

    /**
    * Gets tableId
    *  table表id
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId table表id
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
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

