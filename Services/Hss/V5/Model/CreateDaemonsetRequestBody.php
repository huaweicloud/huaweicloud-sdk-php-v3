<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDaemonsetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDaemonsetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'autoUpgrade' => 'bool',
            'runtimeInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]',
            'scheduleInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateDaemonsetRequestBodyScheduleInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'autoUpgrade' => null,
        'runtimeInfo' => null,
        'scheduleInfo' => null
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
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'autoUpgrade' => 'auto_upgrade',
            'runtimeInfo' => 'runtime_info',
            'scheduleInfo' => 'schedule_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'autoUpgrade' => 'setAutoUpgrade',
            'runtimeInfo' => 'setRuntimeInfo',
            'scheduleInfo' => 'setScheduleInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'autoUpgrade' => 'getAutoUpgrade',
            'runtimeInfo' => 'getRuntimeInfo',
            'scheduleInfo' => 'getScheduleInfo'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['autoUpgrade'] = isset($data['autoUpgrade']) ? $data['autoUpgrade'] : null;
        $this->container['runtimeInfo'] = isset($data['runtimeInfo']) ? $data['runtimeInfo'] : null;
        $this->container['scheduleInfo'] = isset($data['scheduleInfo']) ? $data['scheduleInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
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
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets autoUpgrade
    *  开启agent自动升级
    *
    * @return bool|null
    */
    public function getAutoUpgrade()
    {
        return $this->container['autoUpgrade'];
    }

    /**
    * Sets autoUpgrade
    *
    * @param bool|null $autoUpgrade 开启agent自动升级
    *
    * @return $this
    */
    public function setAutoUpgrade($autoUpgrade)
    {
        $this->container['autoUpgrade'] = $autoUpgrade;
        return $this;
    }

    /**
    * Gets runtimeInfo
    *  容器运行时配置
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]|null
    */
    public function getRuntimeInfo()
    {
        return $this->container['runtimeInfo'];
    }

    /**
    * Sets runtimeInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]|null $runtimeInfo 容器运行时配置
    *
    * @return $this
    */
    public function setRuntimeInfo($runtimeInfo)
    {
        $this->container['runtimeInfo'] = $runtimeInfo;
        return $this;
    }

    /**
    * Gets scheduleInfo
    *  scheduleInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateDaemonsetRequestBodyScheduleInfo|null
    */
    public function getScheduleInfo()
    {
        return $this->container['scheduleInfo'];
    }

    /**
    * Sets scheduleInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateDaemonsetRequestBodyScheduleInfo|null $scheduleInfo scheduleInfo
    *
    * @return $this
    */
    public function setScheduleInfo($scheduleInfo)
    {
        $this->container['scheduleInfo'] = $scheduleInfo;
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

