<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateScalingConfigOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateScalingConfigOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingConfigurationName  伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    * instanceConfig  instanceConfig
    * sourceScalingConfigurationId  源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingConfigurationName' => 'string',
            'instanceConfig' => '\HuaweiCloud\SDK\_As\V1\Model\InstanceConfig',
            'sourceScalingConfigurationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingConfigurationName  伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    * instanceConfig  instanceConfig
    * sourceScalingConfigurationId  源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingConfigurationName' => null,
        'instanceConfig' => null,
        'sourceScalingConfigurationId' => null
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
    * scalingConfigurationName  伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    * instanceConfig  instanceConfig
    * sourceScalingConfigurationId  源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingConfigurationName' => 'scaling_configuration_name',
            'instanceConfig' => 'instance_config',
            'sourceScalingConfigurationId' => 'source_scaling_configuration_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingConfigurationName  伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    * instanceConfig  instanceConfig
    * sourceScalingConfigurationId  源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingConfigurationName' => 'setScalingConfigurationName',
            'instanceConfig' => 'setInstanceConfig',
            'sourceScalingConfigurationId' => 'setSourceScalingConfigurationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingConfigurationName  伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    * instanceConfig  instanceConfig
    * sourceScalingConfigurationId  源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingConfigurationName' => 'getScalingConfigurationName',
            'instanceConfig' => 'getInstanceConfig',
            'sourceScalingConfigurationId' => 'getSourceScalingConfigurationId'
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
        $this->container['scalingConfigurationName'] = isset($data['scalingConfigurationName']) ? $data['scalingConfigurationName'] : null;
        $this->container['instanceConfig'] = isset($data['instanceConfig']) ? $data['instanceConfig'] : null;
        $this->container['sourceScalingConfigurationId'] = isset($data['sourceScalingConfigurationId']) ? $data['sourceScalingConfigurationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scalingConfigurationName']) && (mb_strlen($this->container['scalingConfigurationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingConfigurationName']) && (mb_strlen($this->container['scalingConfigurationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceScalingConfigurationId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['sourceScalingConfigurationId'])) {
                $invalidProperties[] = "invalid value for 'sourceScalingConfigurationId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets scalingConfigurationName
    *  伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    *
    * @return string|null
    */
    public function getScalingConfigurationName()
    {
        return $this->container['scalingConfigurationName'];
    }

    /**
    * Sets scalingConfigurationName
    *
    * @param string|null $scalingConfigurationName 伸缩配置名称(1-64个字符)，只能包含中文、字母、数字、下划线或中划线。
    *
    * @return $this
    */
    public function setScalingConfigurationName($scalingConfigurationName)
    {
        $this->container['scalingConfigurationName'] = $scalingConfigurationName;
        return $this;
    }

    /**
    * Gets instanceConfig
    *  instanceConfig
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\InstanceConfig|null
    */
    public function getInstanceConfig()
    {
        return $this->container['instanceConfig'];
    }

    /**
    * Sets instanceConfig
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\InstanceConfig|null $instanceConfig instanceConfig
    *
    * @return $this
    */
    public function setInstanceConfig($instanceConfig)
    {
        $this->container['instanceConfig'] = $instanceConfig;
        return $this;
    }

    /**
    * Gets sourceScalingConfigurationId
    *  源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @return string|null
    */
    public function getSourceScalingConfigurationId()
    {
        return $this->container['sourceScalingConfigurationId'];
    }

    /**
    * Sets sourceScalingConfigurationId
    *
    * @param string|null $sourceScalingConfigurationId 源伸缩配置ID，通过该ID查询已有伸缩配置信息与instance_config中参数进行结合，创建新的伸缩配置。 说明：  - 若传入instance_config中的instance_id，则优先使用instance_id相关实例配置创建新的伸缩配置，source_scaling_configuration_id参数不生效。  - 若未传入instance_config中的instance_id，则使用source_scaling_configuration_id与instance_config中的参数相结合创建伸缩配置。         - 若instance_config中的参数值为null，则创建新伸缩配置时该字段不产生修改。         - 若instance_config中的参数值不为null，则创建新伸缩配置时该字段将覆盖原有值，其中值为空时，该字段会被清空。  - 若不指定source_scaling_configuration_id创建伸缩配置，则scaling_configuration_name和instance_config为必选。
    *
    * @return $this
    */
    public function setSourceScalingConfigurationId($sourceScalingConfigurationId)
    {
        $this->container['sourceScalingConfigurationId'] = $sourceScalingConfigurationId;
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

