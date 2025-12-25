<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_accounts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  账号ID
    * lastLogDate  最近接入时间
    * logCount  最近一小时接入数量
    * name  账号名称
    * processStatus  接入状态
    * sinkMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'lastLogDate' => 'float',
            'logCount' => 'string',
            'name' => 'string',
            'processStatus' => 'string',
            'sinkMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  账号ID
    * lastLogDate  最近接入时间
    * logCount  最近一小时接入数量
    * name  账号名称
    * processStatus  接入状态
    * sinkMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'lastLogDate' => null,
        'logCount' => null,
        'name' => null,
        'processStatus' => null,
        'sinkMsg' => null
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
    * accountId  账号ID
    * lastLogDate  最近接入时间
    * logCount  最近一小时接入数量
    * name  账号名称
    * processStatus  接入状态
    * sinkMsg  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'lastLogDate' => 'last_log_date',
            'logCount' => 'log_count',
            'name' => 'name',
            'processStatus' => 'process_status',
            'sinkMsg' => 'sink_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  账号ID
    * lastLogDate  最近接入时间
    * logCount  最近一小时接入数量
    * name  账号名称
    * processStatus  接入状态
    * sinkMsg  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'lastLogDate' => 'setLastLogDate',
            'logCount' => 'setLogCount',
            'name' => 'setName',
            'processStatus' => 'setProcessStatus',
            'sinkMsg' => 'setSinkMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  账号ID
    * lastLogDate  最近接入时间
    * logCount  最近一小时接入数量
    * name  账号名称
    * processStatus  接入状态
    * sinkMsg  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'lastLogDate' => 'getLastLogDate',
            'logCount' => 'getLogCount',
            'name' => 'getName',
            'processStatus' => 'getProcessStatus',
            'sinkMsg' => 'getSinkMsg'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['lastLogDate'] = isset($data['lastLogDate']) ? $data['lastLogDate'] : null;
        $this->container['logCount'] = isset($data['logCount']) ? $data['logCount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['sinkMsg'] = isset($data['sinkMsg']) ? $data['sinkMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastLogDate']) && ($this->container['lastLogDate'] > 4.9E+12)) {
                $invalidProperties[] = "invalid value for 'lastLogDate', must be smaller than or equal to 4.9E+12.";
            }
            if (!is_null($this->container['lastLogDate']) && ($this->container['lastLogDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastLogDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logCount']) && (mb_strlen($this->container['logCount']) > 32)) {
                $invalidProperties[] = "invalid value for 'logCount', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['logCount']) && (mb_strlen($this->container['logCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'logCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sinkMsg']) && (mb_strlen($this->container['sinkMsg']) > 64)) {
                $invalidProperties[] = "invalid value for 'sinkMsg', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sinkMsg']) && (mb_strlen($this->container['sinkMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'sinkMsg', the character length must be bigger than or equal to 0.";
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
    * Gets accountId
    *  账号ID
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 账号ID
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets lastLogDate
    *  最近接入时间
    *
    * @return float|null
    */
    public function getLastLogDate()
    {
        return $this->container['lastLogDate'];
    }

    /**
    * Sets lastLogDate
    *
    * @param float|null $lastLogDate 最近接入时间
    *
    * @return $this
    */
    public function setLastLogDate($lastLogDate)
    {
        $this->container['lastLogDate'] = $lastLogDate;
        return $this;
    }

    /**
    * Gets logCount
    *  最近一小时接入数量
    *
    * @return string|null
    */
    public function getLogCount()
    {
        return $this->container['logCount'];
    }

    /**
    * Sets logCount
    *
    * @param string|null $logCount 最近一小时接入数量
    *
    * @return $this
    */
    public function setLogCount($logCount)
    {
        $this->container['logCount'] = $logCount;
        return $this;
    }

    /**
    * Gets name
    *  账号名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 账号名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets processStatus
    *  接入状态
    *
    * @return string|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string|null $processStatus 接入状态
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets sinkMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getSinkMsg()
    {
        return $this->container['sinkMsg'];
    }

    /**
    * Sets sinkMsg
    *
    * @param string|null $sinkMsg 错误信息
    *
    * @return $this
    */
    public function setSinkMsg($sinkMsg)
    {
        $this->container['sinkMsg'] = $sinkMsg;
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

