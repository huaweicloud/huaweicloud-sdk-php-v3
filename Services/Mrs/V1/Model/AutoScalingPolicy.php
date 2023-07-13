<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoScalingPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoScalingPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoScalingEnable  当前自动伸缩规则是否开启。
    * minCapacity  指定该节点组的最小保留节点数。  取值范围：[0～500]
    * maxCapacity  指定该节点组的最大节点数。  取值范围：[0～500]
    * resourcesPlans  资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * rules  自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * execScripts  弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoScalingEnable' => 'bool',
            'minCapacity' => 'int',
            'maxCapacity' => 'int',
            'resourcesPlans' => '\HuaweiCloud\SDK\Mrs\V1\Model\ResourcesPlan[]',
            'rules' => '\HuaweiCloud\SDK\Mrs\V1\Model\Rule[]',
            'execScripts' => '\HuaweiCloud\SDK\Mrs\V1\Model\ScaleScript[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoScalingEnable  当前自动伸缩规则是否开启。
    * minCapacity  指定该节点组的最小保留节点数。  取值范围：[0～500]
    * maxCapacity  指定该节点组的最大节点数。  取值范围：[0～500]
    * resourcesPlans  资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * rules  自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * execScripts  弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoScalingEnable' => null,
        'minCapacity' => 'int32',
        'maxCapacity' => 'int32',
        'resourcesPlans' => null,
        'rules' => null,
        'execScripts' => null
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
    * autoScalingEnable  当前自动伸缩规则是否开启。
    * minCapacity  指定该节点组的最小保留节点数。  取值范围：[0～500]
    * maxCapacity  指定该节点组的最大节点数。  取值范围：[0～500]
    * resourcesPlans  资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * rules  自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * execScripts  弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoScalingEnable' => 'auto_scaling_enable',
            'minCapacity' => 'min_capacity',
            'maxCapacity' => 'max_capacity',
            'resourcesPlans' => 'resources_plans',
            'rules' => 'rules',
            'execScripts' => 'exec_scripts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoScalingEnable  当前自动伸缩规则是否开启。
    * minCapacity  指定该节点组的最小保留节点数。  取值范围：[0～500]
    * maxCapacity  指定该节点组的最大节点数。  取值范围：[0～500]
    * resourcesPlans  资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * rules  自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * execScripts  弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoScalingEnable' => 'setAutoScalingEnable',
            'minCapacity' => 'setMinCapacity',
            'maxCapacity' => 'setMaxCapacity',
            'resourcesPlans' => 'setResourcesPlans',
            'rules' => 'setRules',
            'execScripts' => 'setExecScripts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoScalingEnable  当前自动伸缩规则是否开启。
    * minCapacity  指定该节点组的最小保留节点数。  取值范围：[0～500]
    * maxCapacity  指定该节点组的最大节点数。  取值范围：[0～500]
    * resourcesPlans  资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * rules  自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    * execScripts  弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoScalingEnable' => 'getAutoScalingEnable',
            'minCapacity' => 'getMinCapacity',
            'maxCapacity' => 'getMaxCapacity',
            'resourcesPlans' => 'getResourcesPlans',
            'rules' => 'getRules',
            'execScripts' => 'getExecScripts'
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
        $this->container['autoScalingEnable'] = isset($data['autoScalingEnable']) ? $data['autoScalingEnable'] : null;
        $this->container['minCapacity'] = isset($data['minCapacity']) ? $data['minCapacity'] : null;
        $this->container['maxCapacity'] = isset($data['maxCapacity']) ? $data['maxCapacity'] : null;
        $this->container['resourcesPlans'] = isset($data['resourcesPlans']) ? $data['resourcesPlans'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['execScripts'] = isset($data['execScripts']) ? $data['execScripts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['autoScalingEnable'] === null) {
            $invalidProperties[] = "'autoScalingEnable' can't be null";
        }
        if ($this->container['minCapacity'] === null) {
            $invalidProperties[] = "'minCapacity' can't be null";
        }
            if (($this->container['minCapacity'] > 500)) {
                $invalidProperties[] = "invalid value for 'minCapacity', must be smaller than or equal to 500.";
            }
            if (($this->container['minCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'minCapacity', must be bigger than or equal to 0.";
            }
        if ($this->container['maxCapacity'] === null) {
            $invalidProperties[] = "'maxCapacity' can't be null";
        }
            if (($this->container['maxCapacity'] > 500)) {
                $invalidProperties[] = "invalid value for 'maxCapacity', must be smaller than or equal to 500.";
            }
            if (($this->container['maxCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxCapacity', must be bigger than or equal to 0.";
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
    * Gets autoScalingEnable
    *  当前自动伸缩规则是否开启。
    *
    * @return bool
    */
    public function getAutoScalingEnable()
    {
        return $this->container['autoScalingEnable'];
    }

    /**
    * Sets autoScalingEnable
    *
    * @param bool $autoScalingEnable 当前自动伸缩规则是否开启。
    *
    * @return $this
    */
    public function setAutoScalingEnable($autoScalingEnable)
    {
        $this->container['autoScalingEnable'] = $autoScalingEnable;
        return $this;
    }

    /**
    * Gets minCapacity
    *  指定该节点组的最小保留节点数。  取值范围：[0～500]
    *
    * @return int
    */
    public function getMinCapacity()
    {
        return $this->container['minCapacity'];
    }

    /**
    * Sets minCapacity
    *
    * @param int $minCapacity 指定该节点组的最小保留节点数。  取值范围：[0～500]
    *
    * @return $this
    */
    public function setMinCapacity($minCapacity)
    {
        $this->container['minCapacity'] = $minCapacity;
        return $this;
    }

    /**
    * Gets maxCapacity
    *  指定该节点组的最大节点数。  取值范围：[0～500]
    *
    * @return int
    */
    public function getMaxCapacity()
    {
        return $this->container['maxCapacity'];
    }

    /**
    * Sets maxCapacity
    *
    * @param int $maxCapacity 指定该节点组的最大节点数。  取值范围：[0～500]
    *
    * @return $this
    */
    public function setMaxCapacity($maxCapacity)
    {
        $this->container['maxCapacity'] = $maxCapacity;
        return $this;
    }

    /**
    * Gets resourcesPlans
    *  资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\ResourcesPlan[]|null
    */
    public function getResourcesPlans()
    {
        return $this->container['resourcesPlans'];
    }

    /**
    * Sets resourcesPlans
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\ResourcesPlan[]|null $resourcesPlans 资源计划列表。若该参数为空表示不启用资源计划。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    *
    * @return $this
    */
    public function setResourcesPlans($resourcesPlans)
    {
        $this->container['resourcesPlans'] = $resourcesPlans;
        return $this;
    }

    /**
    * Gets rules
    *  自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\Rule[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\Rule[]|null $rules 自动伸缩的规则列表。  当启用弹性伸缩时，资源计划与自动伸缩规则需至少配置其中一种。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets execScripts
    *  弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\ScaleScript[]|null
    */
    public function getExecScripts()
    {
        return $this->container['execScripts'];
    }

    /**
    * Sets execScripts
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\ScaleScript[]|null $execScripts 弹性伸缩自定义自动化脚本列表。若该参数为空表示不启用自动化脚本。
    *
    * @return $this
    */
    public function setExecScripts($execScripts)
    {
        $this->container['execScripts'] = $execScripts;
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

