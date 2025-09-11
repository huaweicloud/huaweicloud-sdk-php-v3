<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstancesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstancesResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  实例名称。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * volumeType  存储类型。
    * dataVolumeSize  磁盘大小，单位：GB。
    * version  实例版本信息。
    * mode  部署形态。
    * instanceMode  实例模型，企业版，标准版，基础版。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'instanceId' => 'string',
            'volumeType' => 'string',
            'dataVolumeSize' => 'float',
            'version' => 'string',
            'mode' => 'string',
            'instanceMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  实例名称。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * volumeType  存储类型。
    * dataVolumeSize  磁盘大小，单位：GB。
    * version  实例版本信息。
    * mode  部署形态。
    * instanceMode  实例模型，企业版，标准版，基础版。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'instanceId' => null,
        'volumeType' => null,
        'dataVolumeSize' => null,
        'version' => null,
        'mode' => null,
        'instanceMode' => null
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
    * instanceName  实例名称。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * volumeType  存储类型。
    * dataVolumeSize  磁盘大小，单位：GB。
    * version  实例版本信息。
    * mode  部署形态。
    * instanceMode  实例模型，企业版，标准版，基础版。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'volumeType' => 'volume_type',
            'dataVolumeSize' => 'data_volume_size',
            'version' => 'version',
            'mode' => 'mode',
            'instanceMode' => 'instance_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  实例名称。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * volumeType  存储类型。
    * dataVolumeSize  磁盘大小，单位：GB。
    * version  实例版本信息。
    * mode  部署形态。
    * instanceMode  实例模型，企业版，标准版，基础版。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'volumeType' => 'setVolumeType',
            'dataVolumeSize' => 'setDataVolumeSize',
            'version' => 'setVersion',
            'mode' => 'setMode',
            'instanceMode' => 'setInstanceMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  实例名称。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * volumeType  存储类型。
    * dataVolumeSize  磁盘大小，单位：GB。
    * version  实例版本信息。
    * mode  部署形态。
    * instanceMode  实例模型，企业版，标准版，基础版。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'volumeType' => 'getVolumeType',
            'dataVolumeSize' => 'getDataVolumeSize',
            'version' => 'getVersion',
            'mode' => 'getMode',
            'instanceMode' => 'getInstanceMode'
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
    const MODE_HA = 'Ha';
    const MODE_INDEPENDENT = 'Independent';
    const INSTANCE_MODE_ENTERPRISE = 'enterprise';
    const INSTANCE_MODE_STANDARD = 'standard';
    const INSTANCE_MODE_BASIC = 'basic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_HA,
            self::MODE_INDEPENDENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceModeAllowableValues()
    {
        return [
            self::INSTANCE_MODE_ENTERPRISE,
            self::INSTANCE_MODE_STANDARD,
            self::INSTANCE_MODE_BASIC,
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstanceModeAllowableValues();
                if (!is_null($this->container['instanceMode']) && !in_array($this->container['instanceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets volumeType
    *  存储类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 存储类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  磁盘大小，单位：GB。
    *
    * @return float|null
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param float|null $dataVolumeSize 磁盘大小，单位：GB。
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
        return $this;
    }

    /**
    * Gets version
    *  实例版本信息。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 实例版本信息。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets mode
    *  部署形态。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 部署形态。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets instanceMode
    *  实例模型，企业版，标准版，基础版。
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode 实例模型，企业版，标准版，基础版。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
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

