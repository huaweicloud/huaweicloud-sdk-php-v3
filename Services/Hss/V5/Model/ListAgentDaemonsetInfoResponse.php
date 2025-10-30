<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentDaemonsetInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentDaemonsetInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataList  **参数解释**: 数据列表 **取值范围**: 取值0-200
    * totalNum  **参数解释** 已接入集群总数 **取值范围** 取值0-65535
    * upgradefulNum  **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    * errRunningNum  **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    * errAccessNum  **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponse[]',
            'totalNum' => 'int',
            'upgradefulNum' => 'int',
            'errRunningNum' => 'int',
            'errAccessNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataList  **参数解释**: 数据列表 **取值范围**: 取值0-200
    * totalNum  **参数解释** 已接入集群总数 **取值范围** 取值0-65535
    * upgradefulNum  **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    * errRunningNum  **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    * errAccessNum  **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataList' => null,
        'totalNum' => null,
        'upgradefulNum' => null,
        'errRunningNum' => null,
        'errAccessNum' => null
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
    * dataList  **参数解释**: 数据列表 **取值范围**: 取值0-200
    * totalNum  **参数解释** 已接入集群总数 **取值范围** 取值0-65535
    * upgradefulNum  **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    * errRunningNum  **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    * errAccessNum  **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataList' => 'data_list',
            'totalNum' => 'total_num',
            'upgradefulNum' => 'upgradeful_num',
            'errRunningNum' => 'err_running_num',
            'errAccessNum' => 'err_access_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataList  **参数解释**: 数据列表 **取值范围**: 取值0-200
    * totalNum  **参数解释** 已接入集群总数 **取值范围** 取值0-65535
    * upgradefulNum  **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    * errRunningNum  **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    * errAccessNum  **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $setters = [
            'dataList' => 'setDataList',
            'totalNum' => 'setTotalNum',
            'upgradefulNum' => 'setUpgradefulNum',
            'errRunningNum' => 'setErrRunningNum',
            'errAccessNum' => 'setErrAccessNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataList  **参数解释**: 数据列表 **取值范围**: 取值0-200
    * totalNum  **参数解释** 已接入集群总数 **取值范围** 取值0-65535
    * upgradefulNum  **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    * errRunningNum  **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    * errAccessNum  **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $getters = [
            'dataList' => 'getDataList',
            'totalNum' => 'getTotalNum',
            'upgradefulNum' => 'getUpgradefulNum',
            'errRunningNum' => 'getErrRunningNum',
            'errAccessNum' => 'getErrAccessNum'
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
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['upgradefulNum'] = isset($data['upgradefulNum']) ? $data['upgradefulNum'] : null;
        $this->container['errRunningNum'] = isset($data['errRunningNum']) ? $data['errRunningNum'] : null;
        $this->container['errAccessNum'] = isset($data['errAccessNum']) ? $data['errAccessNum'] : null;
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
            if (!is_null($this->container['upgradefulNum']) && ($this->container['upgradefulNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'upgradefulNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['upgradefulNum']) && ($this->container['upgradefulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'upgradefulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errRunningNum']) && ($this->container['errRunningNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'errRunningNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['errRunningNum']) && ($this->container['errRunningNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'errRunningNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errAccessNum']) && ($this->container['errAccessNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'errAccessNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['errAccessNum']) && ($this->container['errAccessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'errAccessNum', must be bigger than or equal to 0.";
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
    * Gets dataList
    *  **参数解释**: 数据列表 **取值范围**: 取值0-200
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponse[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponse[]|null $dataList **参数解释**: 数据列表 **取值范围**: 取值0-200
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释** 已接入集群总数 **取值范围** 取值0-65535
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
    * @param int|null $totalNum **参数解释** 已接入集群总数 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets upgradefulNum
    *  **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getUpgradefulNum()
    {
        return $this->container['upgradefulNum'];
    }

    /**
    * Sets upgradefulNum
    *
    * @param int|null $upgradefulNum **参数解释** 待升级集群总数 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setUpgradefulNum($upgradefulNum)
    {
        $this->container['upgradefulNum'] = $upgradefulNum;
        return $this;
    }

    /**
    * Gets errRunningNum
    *  **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getErrRunningNum()
    {
        return $this->container['errRunningNum'];
    }

    /**
    * Sets errRunningNum
    *
    * @param int|null $errRunningNum **参数解释** 运行异常集群总数 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setErrRunningNum($errRunningNum)
    {
        $this->container['errRunningNum'] = $errRunningNum;
        return $this;
    }

    /**
    * Gets errAccessNum
    *  **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getErrAccessNum()
    {
        return $this->container['errAccessNum'];
    }

    /**
    * Sets errAccessNum
    *
    * @param int|null $errAccessNum **参数解释** 接入异常集群总数 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setErrAccessNum($errAccessNum)
    {
        $this->container['errAccessNum'] = $errAccessNum;
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

