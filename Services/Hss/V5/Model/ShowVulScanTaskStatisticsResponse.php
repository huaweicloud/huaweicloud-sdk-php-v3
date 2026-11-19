<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulScanTaskStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulScanTaskStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanTaskCount  **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    * runningScanTaskCount  **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * lastScanTask  lastScanTask
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanTaskCount' => 'int',
            'runningScanTaskCount' => 'int',
            'lastScanTask' => '\HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskStatisticsResponseInfoLastScanTask'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanTaskCount  **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    * runningScanTaskCount  **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * lastScanTask  lastScanTask
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanTaskCount' => 'int32',
        'runningScanTaskCount' => 'int32',
        'lastScanTask' => null
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
    * scanTaskCount  **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    * runningScanTaskCount  **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * lastScanTask  lastScanTask
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanTaskCount' => 'scan_task_count',
            'runningScanTaskCount' => 'running_scan_task_count',
            'lastScanTask' => 'last_scan_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanTaskCount  **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    * runningScanTaskCount  **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * lastScanTask  lastScanTask
    *
    * @var string[]
    */
    protected static $setters = [
            'scanTaskCount' => 'setScanTaskCount',
            'runningScanTaskCount' => 'setRunningScanTaskCount',
            'lastScanTask' => 'setLastScanTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanTaskCount  **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    * runningScanTaskCount  **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * lastScanTask  lastScanTask
    *
    * @var string[]
    */
    protected static $getters = [
            'scanTaskCount' => 'getScanTaskCount',
            'runningScanTaskCount' => 'getRunningScanTaskCount',
            'lastScanTask' => 'getLastScanTask'
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
        $this->container['scanTaskCount'] = isset($data['scanTaskCount']) ? $data['scanTaskCount'] : null;
        $this->container['runningScanTaskCount'] = isset($data['runningScanTaskCount']) ? $data['runningScanTaskCount'] : null;
        $this->container['lastScanTask'] = isset($data['lastScanTask']) ? $data['lastScanTask'] : null;
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
    * Gets scanTaskCount
    *  **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getScanTaskCount()
    {
        return $this->container['scanTaskCount'];
    }

    /**
    * Sets scanTaskCount
    *
    * @param int|null $scanTaskCount **参数解释**: 漏洞扫描任务总次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setScanTaskCount($scanTaskCount)
    {
        $this->container['scanTaskCount'] = $scanTaskCount;
        return $this;
    }

    /**
    * Gets runningScanTaskCount
    *  **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRunningScanTaskCount()
    {
        return $this->container['runningScanTaskCount'];
    }

    /**
    * Sets runningScanTaskCount
    *
    * @param int|null $runningScanTaskCount **参数解释**: 进行中的漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRunningScanTaskCount($runningScanTaskCount)
    {
        $this->container['runningScanTaskCount'] = $runningScanTaskCount;
        return $this;
    }

    /**
    * Gets lastScanTask
    *  lastScanTask
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskStatisticsResponseInfoLastScanTask|null
    */
    public function getLastScanTask()
    {
        return $this->container['lastScanTask'];
    }

    /**
    * Sets lastScanTask
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskStatisticsResponseInfoLastScanTask|null $lastScanTask lastScanTask
    *
    * @return $this
    */
    public function setLastScanTask($lastScanTask)
    {
        $this->container['lastScanTask'] = $lastScanTask;
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

