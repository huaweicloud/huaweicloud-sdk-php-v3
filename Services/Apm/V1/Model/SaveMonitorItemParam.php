<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SaveMonitorItemParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SaveMonitorItemParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * monitorItemId  监控项id。
    * interval  采集间隔。
    * envId  环境id。
    * configValueList  配置项列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'monitorItemId' => 'int',
            'interval' => 'int',
            'envId' => 'int',
            'configValueList' => '\HuaweiCloud\SDK\Apm\V1\Model\ConfigItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * monitorItemId  监控项id。
    * interval  采集间隔。
    * envId  环境id。
    * configValueList  配置项列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'monitorItemId' => 'int64',
        'interval' => 'int32',
        'envId' => 'int32',
        'configValueList' => null
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
    * monitorItemId  监控项id。
    * interval  采集间隔。
    * envId  环境id。
    * configValueList  配置项列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'monitorItemId' => 'monitor_item_id',
            'interval' => 'interval',
            'envId' => 'env_id',
            'configValueList' => 'config_value_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * monitorItemId  监控项id。
    * interval  采集间隔。
    * envId  环境id。
    * configValueList  配置项列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'monitorItemId' => 'setMonitorItemId',
            'interval' => 'setInterval',
            'envId' => 'setEnvId',
            'configValueList' => 'setConfigValueList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * monitorItemId  监控项id。
    * interval  采集间隔。
    * envId  环境id。
    * configValueList  配置项列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'monitorItemId' => 'getMonitorItemId',
            'interval' => 'getInterval',
            'envId' => 'getEnvId',
            'configValueList' => 'getConfigValueList'
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
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['configValueList'] = isset($data['configValueList']) ? $data['configValueList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['monitorItemId'] === null) {
            $invalidProperties[] = "'monitorItemId' can't be null";
        }
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
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
    * Gets monitorItemId
    *  监控项id。
    *
    * @return int
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int $monitorItemId 监控项id。
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets interval
    *  采集间隔。
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 采集间隔。
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
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
    * Gets configValueList
    *  配置项列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\ConfigItem[]|null
    */
    public function getConfigValueList()
    {
        return $this->container['configValueList'];
    }

    /**
    * Sets configValueList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\ConfigItem[]|null $configValueList 配置项列表。
    *
    * @return $this
    */
    public function setConfigValueList($configValueList)
    {
        $this->container['configValueList'] = $configValueList;
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

