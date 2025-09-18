<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StagePluginsQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StagePluginsQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * useCondition  **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    * compId  **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compName  **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cloudId  **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * strategyId  **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * category  **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publishTab  **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * platform  **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compExtendType  **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deployType  **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'useCondition' => 'string',
            'compId' => 'string',
            'compName' => 'string',
            'cloudId' => 'string',
            'strategyId' => 'string',
            'category' => 'string',
            'publishTab' => 'string',
            'platform' => 'string',
            'compExtendType' => 'string',
            'deployType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * useCondition  **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    * compId  **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compName  **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cloudId  **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * strategyId  **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * category  **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publishTab  **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * platform  **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compExtendType  **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deployType  **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'useCondition' => null,
        'compId' => null,
        'compName' => null,
        'cloudId' => null,
        'strategyId' => null,
        'category' => null,
        'publishTab' => null,
        'platform' => null,
        'compExtendType' => null,
        'deployType' => null
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
    * useCondition  **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    * compId  **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compName  **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cloudId  **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * strategyId  **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * category  **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publishTab  **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * platform  **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compExtendType  **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deployType  **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'useCondition' => 'use_condition',
            'compId' => 'comp_id',
            'compName' => 'comp_name',
            'cloudId' => 'cloud_id',
            'strategyId' => 'strategy_id',
            'category' => 'category',
            'publishTab' => 'publish_tab',
            'platform' => 'platform',
            'compExtendType' => 'comp_extend_type',
            'deployType' => 'deploy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * useCondition  **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    * compId  **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compName  **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cloudId  **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * strategyId  **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * category  **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publishTab  **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * platform  **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compExtendType  **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deployType  **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'useCondition' => 'setUseCondition',
            'compId' => 'setCompId',
            'compName' => 'setCompName',
            'cloudId' => 'setCloudId',
            'strategyId' => 'setStrategyId',
            'category' => 'setCategory',
            'publishTab' => 'setPublishTab',
            'platform' => 'setPlatform',
            'compExtendType' => 'setCompExtendType',
            'deployType' => 'setDeployType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * useCondition  **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    * compId  **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compName  **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cloudId  **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * strategyId  **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * category  **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publishTab  **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * platform  **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * compExtendType  **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deployType  **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'useCondition' => 'getUseCondition',
            'compId' => 'getCompId',
            'compName' => 'getCompName',
            'cloudId' => 'getCloudId',
            'strategyId' => 'getStrategyId',
            'category' => 'getCategory',
            'publishTab' => 'getPublishTab',
            'platform' => 'getPlatform',
            'compExtendType' => 'getCompExtendType',
            'deployType' => 'getDeployType'
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
        $this->container['useCondition'] = isset($data['useCondition']) ? $data['useCondition'] : null;
        $this->container['compId'] = isset($data['compId']) ? $data['compId'] : null;
        $this->container['compName'] = isset($data['compName']) ? $data['compName'] : null;
        $this->container['cloudId'] = isset($data['cloudId']) ? $data['cloudId'] : null;
        $this->container['strategyId'] = isset($data['strategyId']) ? $data['strategyId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['publishTab'] = isset($data['publishTab']) ? $data['publishTab'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['compExtendType'] = isset($data['compExtendType']) ? $data['compExtendType'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
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
    * Gets useCondition
    *  **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getUseCondition()
    {
        return $this->container['useCondition'];
    }

    /**
    * Sets useCondition
    *
    * @param string|null $useCondition **参数解释**： 用于区分插件为流水线可使用/模板可使用。 **约束限制**： 不涉及。 **取值范围**： - pipeline：流水线可使用。 - template：模板可使用。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setUseCondition($useCondition)
    {
        $this->container['useCondition'] = $useCondition;
        return $this;
    }

    /**
    * Gets compId
    *  **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCompId()
    {
        return $this->container['compId'];
    }

    /**
    * Sets compId
    *
    * @param string|null $compId **参数解释**： 微服务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCompId($compId)
    {
        $this->container['compId'] = $compId;
        return $this;
    }

    /**
    * Gets compName
    *  **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCompName()
    {
        return $this->container['compName'];
    }

    /**
    * Sets compName
    *
    * @param string|null $compName **参数解释**： 微服务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCompName($compName)
    {
        $this->container['compName'] = $compName;
        return $this;
    }

    /**
    * Gets cloudId
    *  **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCloudId()
    {
        return $this->container['cloudId'];
    }

    /**
    * Sets cloudId
    *
    * @param string|null $cloudId **参数解释**： 局点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCloudId($cloudId)
    {
        $this->container['cloudId'] = $cloudId;
        return $this;
    }

    /**
    * Gets strategyId
    *  **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStrategyId()
    {
        return $this->container['strategyId'];
    }

    /**
    * Sets strategyId
    *
    * @param string|null $strategyId **参数解释**： 策略ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStrategyId($strategyId)
    {
        $this->container['strategyId'] = $strategyId;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 流水线类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets publishTab
    *  **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPublishTab()
    {
        return $this->container['publishTab'];
    }

    /**
    * Sets publishTab
    *
    * @param string|null $publishTab **参数解释**： 是否发布流水线。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPublishTab($publishTab)
    {
        $this->container['publishTab'] = $publishTab;
        return $this;
    }

    /**
    * Gets platform
    *  **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform **参数解释**： 部署平台。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets compExtendType
    *  **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCompExtendType()
    {
        return $this->container['compExtendType'];
    }

    /**
    * Sets compExtendType
    *
    * @param string|null $compExtendType **参数解释**： 组件类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCompExtendType($compExtendType)
    {
        $this->container['compExtendType'] = $compExtendType;
        return $this;
    }

    /**
    * Gets deployType
    *  **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType **参数解释**： 部署类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
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

