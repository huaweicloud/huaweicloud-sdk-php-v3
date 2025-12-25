<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * csvc  云产品ID
    * datasets  日志数据
    * lastModifiedTime  上次修改时间
    * logAllNum  日志总数量
    * logInNum  接入日志数量
    * logInNumLastOneHour  过去一个小时接入
    * processStatus  状态
    * vendor  云厂商ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountAllNum' => 'float',
            'accountSuccessfulNum' => 'float',
            'csvc' => 'string',
            'datasets' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyDatasets[]',
            'lastModifiedTime' => 'float',
            'logAllNum' => 'float',
            'logInNum' => 'float',
            'logInNumLastOneHour' => 'float',
            'processStatus' => 'string',
            'vendor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * csvc  云产品ID
    * datasets  日志数据
    * lastModifiedTime  上次修改时间
    * logAllNum  日志总数量
    * logInNum  接入日志数量
    * logInNumLastOneHour  过去一个小时接入
    * processStatus  状态
    * vendor  云厂商ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountAllNum' => null,
        'accountSuccessfulNum' => null,
        'csvc' => null,
        'datasets' => null,
        'lastModifiedTime' => null,
        'logAllNum' => null,
        'logInNum' => null,
        'logInNumLastOneHour' => null,
        'processStatus' => null,
        'vendor' => null
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
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * csvc  云产品ID
    * datasets  日志数据
    * lastModifiedTime  上次修改时间
    * logAllNum  日志总数量
    * logInNum  接入日志数量
    * logInNumLastOneHour  过去一个小时接入
    * processStatus  状态
    * vendor  云厂商ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountAllNum' => 'account_all_num',
            'accountSuccessfulNum' => 'account_successful_num',
            'csvc' => 'csvc',
            'datasets' => 'datasets',
            'lastModifiedTime' => 'last_modified_time',
            'logAllNum' => 'log_all_num',
            'logInNum' => 'log_in_num',
            'logInNumLastOneHour' => 'log_in_num_last_one_hour',
            'processStatus' => 'process_status',
            'vendor' => 'vendor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * csvc  云产品ID
    * datasets  日志数据
    * lastModifiedTime  上次修改时间
    * logAllNum  日志总数量
    * logInNum  接入日志数量
    * logInNumLastOneHour  过去一个小时接入
    * processStatus  状态
    * vendor  云厂商ID
    *
    * @var string[]
    */
    protected static $setters = [
            'accountAllNum' => 'setAccountAllNum',
            'accountSuccessfulNum' => 'setAccountSuccessfulNum',
            'csvc' => 'setCsvc',
            'datasets' => 'setDatasets',
            'lastModifiedTime' => 'setLastModifiedTime',
            'logAllNum' => 'setLogAllNum',
            'logInNum' => 'setLogInNum',
            'logInNumLastOneHour' => 'setLogInNumLastOneHour',
            'processStatus' => 'setProcessStatus',
            'vendor' => 'setVendor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountAllNum  接入账号总数量
    * accountSuccessfulNum  成功接入账号数量
    * csvc  云产品ID
    * datasets  日志数据
    * lastModifiedTime  上次修改时间
    * logAllNum  日志总数量
    * logInNum  接入日志数量
    * logInNumLastOneHour  过去一个小时接入
    * processStatus  状态
    * vendor  云厂商ID
    *
    * @var string[]
    */
    protected static $getters = [
            'accountAllNum' => 'getAccountAllNum',
            'accountSuccessfulNum' => 'getAccountSuccessfulNum',
            'csvc' => 'getCsvc',
            'datasets' => 'getDatasets',
            'lastModifiedTime' => 'getLastModifiedTime',
            'logAllNum' => 'getLogAllNum',
            'logInNum' => 'getLogInNum',
            'logInNumLastOneHour' => 'getLogInNumLastOneHour',
            'processStatus' => 'getProcessStatus',
            'vendor' => 'getVendor'
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
        $this->container['accountAllNum'] = isset($data['accountAllNum']) ? $data['accountAllNum'] : null;
        $this->container['accountSuccessfulNum'] = isset($data['accountSuccessfulNum']) ? $data['accountSuccessfulNum'] : null;
        $this->container['csvc'] = isset($data['csvc']) ? $data['csvc'] : null;
        $this->container['datasets'] = isset($data['datasets']) ? $data['datasets'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['logAllNum'] = isset($data['logAllNum']) ? $data['logAllNum'] : null;
        $this->container['logInNum'] = isset($data['logInNum']) ? $data['logInNum'] : null;
        $this->container['logInNumLastOneHour'] = isset($data['logInNumLastOneHour']) ? $data['logInNumLastOneHour'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountAllNum']) && ($this->container['accountAllNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'accountAllNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['accountAllNum']) && ($this->container['accountAllNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accountAllNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accountSuccessfulNum']) && ($this->container['accountSuccessfulNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'accountSuccessfulNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['accountSuccessfulNum']) && ($this->container['accountSuccessfulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accountSuccessfulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) > 64)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) < 0)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastModifiedTime']) && ($this->container['lastModifiedTime'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'lastModifiedTime', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['lastModifiedTime']) && ($this->container['lastModifiedTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastModifiedTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logAllNum']) && ($this->container['logAllNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'logAllNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['logAllNum']) && ($this->container['logAllNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'logAllNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logInNum']) && ($this->container['logInNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'logInNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['logInNum']) && ($this->container['logInNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'logInNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logInNumLastOneHour']) && ($this->container['logInNumLastOneHour'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'logInNumLastOneHour', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['logInNumLastOneHour']) && ($this->container['logInNumLastOneHour'] < 0)) {
                $invalidProperties[] = "invalid value for 'logInNumLastOneHour', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) > 64)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) < 0)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be bigger than or equal to 0.";
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
    * Gets accountAllNum
    *  接入账号总数量
    *
    * @return float|null
    */
    public function getAccountAllNum()
    {
        return $this->container['accountAllNum'];
    }

    /**
    * Sets accountAllNum
    *
    * @param float|null $accountAllNum 接入账号总数量
    *
    * @return $this
    */
    public function setAccountAllNum($accountAllNum)
    {
        $this->container['accountAllNum'] = $accountAllNum;
        return $this;
    }

    /**
    * Gets accountSuccessfulNum
    *  成功接入账号数量
    *
    * @return float|null
    */
    public function getAccountSuccessfulNum()
    {
        return $this->container['accountSuccessfulNum'];
    }

    /**
    * Sets accountSuccessfulNum
    *
    * @param float|null $accountSuccessfulNum 成功接入账号数量
    *
    * @return $this
    */
    public function setAccountSuccessfulNum($accountSuccessfulNum)
    {
        $this->container['accountSuccessfulNum'] = $accountSuccessfulNum;
        return $this;
    }

    /**
    * Gets csvc
    *  云产品ID
    *
    * @return string|null
    */
    public function getCsvc()
    {
        return $this->container['csvc'];
    }

    /**
    * Sets csvc
    *
    * @param string|null $csvc 云产品ID
    *
    * @return $this
    */
    public function setCsvc($csvc)
    {
        $this->container['csvc'] = $csvc;
        return $this;
    }

    /**
    * Gets datasets
    *  日志数据
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyDatasets[]|null
    */
    public function getDatasets()
    {
        return $this->container['datasets'];
    }

    /**
    * Sets datasets
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyDatasets[]|null $datasets 日志数据
    *
    * @return $this
    */
    public function setDatasets($datasets)
    {
        $this->container['datasets'] = $datasets;
        return $this;
    }

    /**
    * Gets lastModifiedTime
    *  上次修改时间
    *
    * @return float|null
    */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
    * Sets lastModifiedTime
    *
    * @param float|null $lastModifiedTime 上次修改时间
    *
    * @return $this
    */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;
        return $this;
    }

    /**
    * Gets logAllNum
    *  日志总数量
    *
    * @return float|null
    */
    public function getLogAllNum()
    {
        return $this->container['logAllNum'];
    }

    /**
    * Sets logAllNum
    *
    * @param float|null $logAllNum 日志总数量
    *
    * @return $this
    */
    public function setLogAllNum($logAllNum)
    {
        $this->container['logAllNum'] = $logAllNum;
        return $this;
    }

    /**
    * Gets logInNum
    *  接入日志数量
    *
    * @return float|null
    */
    public function getLogInNum()
    {
        return $this->container['logInNum'];
    }

    /**
    * Sets logInNum
    *
    * @param float|null $logInNum 接入日志数量
    *
    * @return $this
    */
    public function setLogInNum($logInNum)
    {
        $this->container['logInNum'] = $logInNum;
        return $this;
    }

    /**
    * Gets logInNumLastOneHour
    *  过去一个小时接入
    *
    * @return float|null
    */
    public function getLogInNumLastOneHour()
    {
        return $this->container['logInNumLastOneHour'];
    }

    /**
    * Sets logInNumLastOneHour
    *
    * @param float|null $logInNumLastOneHour 过去一个小时接入
    *
    * @return $this
    */
    public function setLogInNumLastOneHour($logInNumLastOneHour)
    {
        $this->container['logInNumLastOneHour'] = $logInNumLastOneHour;
        return $this;
    }

    /**
    * Gets processStatus
    *  状态
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
    * @param string|null $processStatus 状态
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets vendor
    *  云厂商ID
    *
    * @return string|null
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string|null $vendor 云厂商ID
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
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

