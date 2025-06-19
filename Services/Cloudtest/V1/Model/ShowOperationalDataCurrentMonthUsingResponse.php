<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOperationalDataCurrentMonthUsingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOperationalDataCurrentMonthUsingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertSuccessRate  告警成功比率，恒为1
    * runningTasks  正在运行的任务个数
    * totalAlerts  总告警数
    * totalDays  总运行天数
    * totalRuns  总运行个数
    * totalTasks  总任务个数
    * workItemCount  工作项个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertSuccessRate' => 'int',
            'runningTasks' => 'int',
            'totalAlerts' => 'int',
            'totalDays' => 'int',
            'totalRuns' => 'int',
            'totalTasks' => 'int',
            'workItemCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertSuccessRate  告警成功比率，恒为1
    * runningTasks  正在运行的任务个数
    * totalAlerts  总告警数
    * totalDays  总运行天数
    * totalRuns  总运行个数
    * totalTasks  总任务个数
    * workItemCount  工作项个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertSuccessRate' => 'int32',
        'runningTasks' => 'int32',
        'totalAlerts' => 'int32',
        'totalDays' => 'int32',
        'totalRuns' => 'int64',
        'totalTasks' => 'int32',
        'workItemCount' => 'int32'
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
    * alertSuccessRate  告警成功比率，恒为1
    * runningTasks  正在运行的任务个数
    * totalAlerts  总告警数
    * totalDays  总运行天数
    * totalRuns  总运行个数
    * totalTasks  总任务个数
    * workItemCount  工作项个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertSuccessRate' => 'alert_success_rate',
            'runningTasks' => 'running_tasks',
            'totalAlerts' => 'total_alerts',
            'totalDays' => 'total_days',
            'totalRuns' => 'total_runs',
            'totalTasks' => 'total_tasks',
            'workItemCount' => 'work_item_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertSuccessRate  告警成功比率，恒为1
    * runningTasks  正在运行的任务个数
    * totalAlerts  总告警数
    * totalDays  总运行天数
    * totalRuns  总运行个数
    * totalTasks  总任务个数
    * workItemCount  工作项个数
    *
    * @var string[]
    */
    protected static $setters = [
            'alertSuccessRate' => 'setAlertSuccessRate',
            'runningTasks' => 'setRunningTasks',
            'totalAlerts' => 'setTotalAlerts',
            'totalDays' => 'setTotalDays',
            'totalRuns' => 'setTotalRuns',
            'totalTasks' => 'setTotalTasks',
            'workItemCount' => 'setWorkItemCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertSuccessRate  告警成功比率，恒为1
    * runningTasks  正在运行的任务个数
    * totalAlerts  总告警数
    * totalDays  总运行天数
    * totalRuns  总运行个数
    * totalTasks  总任务个数
    * workItemCount  工作项个数
    *
    * @var string[]
    */
    protected static $getters = [
            'alertSuccessRate' => 'getAlertSuccessRate',
            'runningTasks' => 'getRunningTasks',
            'totalAlerts' => 'getTotalAlerts',
            'totalDays' => 'getTotalDays',
            'totalRuns' => 'getTotalRuns',
            'totalTasks' => 'getTotalTasks',
            'workItemCount' => 'getWorkItemCount'
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
        $this->container['alertSuccessRate'] = isset($data['alertSuccessRate']) ? $data['alertSuccessRate'] : null;
        $this->container['runningTasks'] = isset($data['runningTasks']) ? $data['runningTasks'] : null;
        $this->container['totalAlerts'] = isset($data['totalAlerts']) ? $data['totalAlerts'] : null;
        $this->container['totalDays'] = isset($data['totalDays']) ? $data['totalDays'] : null;
        $this->container['totalRuns'] = isset($data['totalRuns']) ? $data['totalRuns'] : null;
        $this->container['totalTasks'] = isset($data['totalTasks']) ? $data['totalTasks'] : null;
        $this->container['workItemCount'] = isset($data['workItemCount']) ? $data['workItemCount'] : null;
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
    * Gets alertSuccessRate
    *  告警成功比率，恒为1
    *
    * @return int|null
    */
    public function getAlertSuccessRate()
    {
        return $this->container['alertSuccessRate'];
    }

    /**
    * Sets alertSuccessRate
    *
    * @param int|null $alertSuccessRate 告警成功比率，恒为1
    *
    * @return $this
    */
    public function setAlertSuccessRate($alertSuccessRate)
    {
        $this->container['alertSuccessRate'] = $alertSuccessRate;
        return $this;
    }

    /**
    * Gets runningTasks
    *  正在运行的任务个数
    *
    * @return int|null
    */
    public function getRunningTasks()
    {
        return $this->container['runningTasks'];
    }

    /**
    * Sets runningTasks
    *
    * @param int|null $runningTasks 正在运行的任务个数
    *
    * @return $this
    */
    public function setRunningTasks($runningTasks)
    {
        $this->container['runningTasks'] = $runningTasks;
        return $this;
    }

    /**
    * Gets totalAlerts
    *  总告警数
    *
    * @return int|null
    */
    public function getTotalAlerts()
    {
        return $this->container['totalAlerts'];
    }

    /**
    * Sets totalAlerts
    *
    * @param int|null $totalAlerts 总告警数
    *
    * @return $this
    */
    public function setTotalAlerts($totalAlerts)
    {
        $this->container['totalAlerts'] = $totalAlerts;
        return $this;
    }

    /**
    * Gets totalDays
    *  总运行天数
    *
    * @return int|null
    */
    public function getTotalDays()
    {
        return $this->container['totalDays'];
    }

    /**
    * Sets totalDays
    *
    * @param int|null $totalDays 总运行天数
    *
    * @return $this
    */
    public function setTotalDays($totalDays)
    {
        $this->container['totalDays'] = $totalDays;
        return $this;
    }

    /**
    * Gets totalRuns
    *  总运行个数
    *
    * @return int|null
    */
    public function getTotalRuns()
    {
        return $this->container['totalRuns'];
    }

    /**
    * Sets totalRuns
    *
    * @param int|null $totalRuns 总运行个数
    *
    * @return $this
    */
    public function setTotalRuns($totalRuns)
    {
        $this->container['totalRuns'] = $totalRuns;
        return $this;
    }

    /**
    * Gets totalTasks
    *  总任务个数
    *
    * @return int|null
    */
    public function getTotalTasks()
    {
        return $this->container['totalTasks'];
    }

    /**
    * Sets totalTasks
    *
    * @param int|null $totalTasks 总任务个数
    *
    * @return $this
    */
    public function setTotalTasks($totalTasks)
    {
        $this->container['totalTasks'] = $totalTasks;
        return $this;
    }

    /**
    * Gets workItemCount
    *  工作项个数
    *
    * @return int|null
    */
    public function getWorkItemCount()
    {
        return $this->container['workItemCount'];
    }

    /**
    * Sets workItemCount
    *
    * @param int|null $workItemCount 工作项个数
    *
    * @return $this
    */
    public function setWorkItemCount($workItemCount)
    {
        $this->container['workItemCount'] = $workItemCount;
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

