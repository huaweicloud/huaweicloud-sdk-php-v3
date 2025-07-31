<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListK8sCronJobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListK8sCronJobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  定时任务总量
    * lastUpdateTime  最近更新时间
    * cronjobInfoList  定时任务基本信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'lastUpdateTime' => 'int',
            'cronjobInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\ServerlessCronJobInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  定时任务总量
    * lastUpdateTime  最近更新时间
    * cronjobInfoList  定时任务基本信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int64',
        'lastUpdateTime' => 'int64',
        'cronjobInfoList' => null
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
    * totalNum  定时任务总量
    * lastUpdateTime  最近更新时间
    * cronjobInfoList  定时任务基本信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'lastUpdateTime' => 'last_update_time',
            'cronjobInfoList' => 'cronjob_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  定时任务总量
    * lastUpdateTime  最近更新时间
    * cronjobInfoList  定时任务基本信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'lastUpdateTime' => 'setLastUpdateTime',
            'cronjobInfoList' => 'setCronjobInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  定时任务总量
    * lastUpdateTime  最近更新时间
    * cronjobInfoList  定时任务基本信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'lastUpdateTime' => 'getLastUpdateTime',
            'cronjobInfoList' => 'getCronjobInfoList'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['cronjobInfoList'] = isset($data['cronjobInfoList']) ? $data['cronjobInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  定时任务总量
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 定时任务总量
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最近更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最近更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets cronjobInfoList
    *  定时任务基本信息列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServerlessCronJobInfo[]|null
    */
    public function getCronjobInfoList()
    {
        return $this->container['cronjobInfoList'];
    }

    /**
    * Sets cronjobInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServerlessCronJobInfo[]|null $cronjobInfoList 定时任务基本信息列表
    *
    * @return $this
    */
    public function setCronjobInfoList($cronjobInfoList)
    {
        $this->container['cronjobInfoList'] = $cronjobInfoList;
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

