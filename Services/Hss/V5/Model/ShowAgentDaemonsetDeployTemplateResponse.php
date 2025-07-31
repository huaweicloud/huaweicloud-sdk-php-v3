<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgentDaemonsetDeployTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgentDaemonsetDeployTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isDefault  是否默认模板
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isDefault' => 'bool',
            'runtimeInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]',
            'scheduleInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\DeployTemplateInfoScheduleInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isDefault  是否默认模板
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isDefault' => null,
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
    * isDefault  是否默认模板
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isDefault' => 'is_default',
            'runtimeInfo' => 'runtime_info',
            'scheduleInfo' => 'schedule_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isDefault  是否默认模板
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'isDefault' => 'setIsDefault',
            'runtimeInfo' => 'setRuntimeInfo',
            'scheduleInfo' => 'setScheduleInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isDefault  是否默认模板
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'isDefault' => 'getIsDefault',
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
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
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
    * Gets isDefault
    *  是否默认模板
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否默认模板
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\DeployTemplateInfoScheduleInfo|null
    */
    public function getScheduleInfo()
    {
        return $this->container['scheduleInfo'];
    }

    /**
    * Sets scheduleInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\DeployTemplateInfoScheduleInfo|null $scheduleInfo scheduleInfo
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

