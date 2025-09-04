<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEdgeModuleReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEdgeModuleReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appVersion  边缘应用版本
    * moduleName  边缘模块名称
    * containerSettings  containerSettings
    * desiredState  模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appVersion' => 'string',
            'moduleName' => 'string',
            'containerSettings' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerSettingsReqDTO',
            'desiredState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appVersion  边缘应用版本
    * moduleName  边缘模块名称
    * containerSettings  containerSettings
    * desiredState  模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appVersion' => null,
        'moduleName' => null,
        'containerSettings' => null,
        'desiredState' => null
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
    * appVersion  边缘应用版本
    * moduleName  边缘模块名称
    * containerSettings  containerSettings
    * desiredState  模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appVersion' => 'app_version',
            'moduleName' => 'module_name',
            'containerSettings' => 'container_settings',
            'desiredState' => 'desired_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appVersion  边缘应用版本
    * moduleName  边缘模块名称
    * containerSettings  containerSettings
    * desiredState  模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @var string[]
    */
    protected static $setters = [
            'appVersion' => 'setAppVersion',
            'moduleName' => 'setModuleName',
            'containerSettings' => 'setContainerSettings',
            'desiredState' => 'setDesiredState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appVersion  边缘应用版本
    * moduleName  边缘模块名称
    * containerSettings  containerSettings
    * desiredState  模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @var string[]
    */
    protected static $getters = [
            'appVersion' => 'getAppVersion',
            'moduleName' => 'getModuleName',
            'containerSettings' => 'getContainerSettings',
            'desiredState' => 'getDesiredState'
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
    const DESIRED_STATE_RUNNING = 'RUNNING';
    const DESIRED_STATE_STOPPED = 'STOPPED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDesiredStateAllowableValues()
    {
        return [
            self::DESIRED_STATE_RUNNING,
            self::DESIRED_STATE_STOPPED,
        ];
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
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['containerSettings'] = isset($data['containerSettings']) ? $data['containerSettings'] : null;
        $this->container['desiredState'] = isset($data['desiredState']) ? $data['desiredState'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && !preg_match("/^[A-Za-z0-9-_.]*$/", $this->container['appVersion'])) {
                $invalidProperties[] = "invalid value for 'appVersion', must be conform to the pattern /^[A-Za-z0-9-_.]*$/.";
            }
            if (!is_null($this->container['moduleName']) && (mb_strlen($this->container['moduleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'moduleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['moduleName']) && (mb_strlen($this->container['moduleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['moduleName'])) {
                $invalidProperties[] = "invalid value for 'moduleName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
            $allowedValues = $this->getDesiredStateAllowableValues();
                if (!is_null($this->container['desiredState']) && !in_array($this->container['desiredState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'desiredState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['desiredState']) && (mb_strlen($this->container['desiredState']) > 64)) {
                $invalidProperties[] = "invalid value for 'desiredState', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['desiredState']) && (mb_strlen($this->container['desiredState']) < 0)) {
                $invalidProperties[] = "invalid value for 'desiredState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desiredState']) && !preg_match("/(RUNNING|STOPPED)/", $this->container['desiredState'])) {
                $invalidProperties[] = "invalid value for 'desiredState', must be conform to the pattern /(RUNNING|STOPPED)/.";
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
    * Gets appVersion
    *  边缘应用版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 边缘应用版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets moduleName
    *  边缘模块名称
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 边缘模块名称
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets containerSettings
    *  containerSettings
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerSettingsReqDTO|null
    */
    public function getContainerSettings()
    {
        return $this->container['containerSettings'];
    }

    /**
    * Sets containerSettings
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerSettingsReqDTO|null $containerSettings containerSettings
    *
    * @return $this
    */
    public function setContainerSettings($containerSettings)
    {
        $this->container['containerSettings'] = $containerSettings;
        return $this;
    }

    /**
    * Gets desiredState
    *  模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @return string|null
    */
    public function getDesiredState()
    {
        return $this->container['desiredState'];
    }

    /**
    * Sets desiredState
    *
    * @param string|null $desiredState 模块期望状态: RUNNING(升级后期望模块运行)，STOPPED(升级后期望模块停止)，空值默认继承升级前模块期望状态
    *
    * @return $this
    */
    public function setDesiredState($desiredState)
    {
        $this->container['desiredState'] = $desiredState;
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

