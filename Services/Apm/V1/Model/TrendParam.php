<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * viewConfig  viewConfig
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'viewConfig' => '\HuaweiCloud\SDK\Apm\V1\Model\TrendView',
            'instanceId' => 'int',
            'monitorItemId' => 'int',
            'envId' => 'int',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * viewConfig  viewConfig
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'viewConfig' => null,
        'instanceId' => 'int64',
        'monitorItemId' => 'int64',
        'envId' => 'int64',
        'startTime' => null,
        'endTime' => null
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
    * viewConfig  viewConfig
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'viewConfig' => 'view_config',
            'instanceId' => 'instance_id',
            'monitorItemId' => 'monitor_item_id',
            'envId' => 'env_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * viewConfig  viewConfig
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'viewConfig' => 'setViewConfig',
            'instanceId' => 'setInstanceId',
            'monitorItemId' => 'setMonitorItemId',
            'envId' => 'setEnvId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * viewConfig  viewConfig
    * instanceId  实例id。
    * monitorItemId  监控项id。
    * envId  环境id。
    * startTime  开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'viewConfig' => 'getViewConfig',
            'instanceId' => 'getInstanceId',
            'monitorItemId' => 'getMonitorItemId',
            'envId' => 'getEnvId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['viewConfig'] = isset($data['viewConfig']) ? $data['viewConfig'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['viewConfig'] === null) {
            $invalidProperties[] = "'viewConfig' can't be null";
        }
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets viewConfig
    *  viewConfig
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TrendView
    */
    public function getViewConfig()
    {
        return $this->container['viewConfig'];
    }

    /**
    * Sets viewConfig
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TrendView $viewConfig viewConfig
    *
    * @return $this
    */
    public function setViewConfig($viewConfig)
    {
        $this->container['viewConfig'] = $viewConfig;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets monitorItemId
    *  监控项id。
    *
    * @return int|null
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int|null $monitorItemId 监控项id。
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

