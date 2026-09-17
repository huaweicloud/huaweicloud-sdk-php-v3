<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Versions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Versions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * input  **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * stable  **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    * translate  **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * supportVersions  **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'input' => 'object',
            'stable' => 'bool',
            'translate' => 'object',
            'supportVersions' => '\HuaweiCloud\SDK\Cce\V3\Model\SupportVersions[]',
            'creationTimestamp' => '\DateTime',
            'updateTimestamp' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * input  **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * stable  **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    * translate  **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * supportVersions  **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'input' => null,
        'stable' => null,
        'translate' => null,
        'supportVersions' => null,
        'creationTimestamp' => 'date',
        'updateTimestamp' => 'date'
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
    * version  **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * input  **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * stable  **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    * translate  **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * supportVersions  **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'input' => 'input',
            'stable' => 'stable',
            'translate' => 'translate',
            'supportVersions' => 'supportVersions',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * input  **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * stable  **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    * translate  **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * supportVersions  **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'input' => 'setInput',
            'stable' => 'setStable',
            'translate' => 'setTranslate',
            'supportVersions' => 'setSupportVersions',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * input  **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * stable  **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    * translate  **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * supportVersions  **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'input' => 'getInput',
            'stable' => 'getStable',
            'translate' => 'getTranslate',
            'supportVersions' => 'getSupportVersions',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['stable'] = isset($data['stable']) ? $data['stable'] : null;
        $this->container['translate'] = isset($data['translate']) ? $data['translate'] : null;
        $this->container['supportVersions'] = isset($data['supportVersions']) ? $data['supportVersions'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['stable'] === null) {
            $invalidProperties[] = "'stable' can't be null";
        }
        if ($this->container['translate'] === null) {
            $invalidProperties[] = "'translate' can't be null";
        }
        if ($this->container['supportVersions'] === null) {
            $invalidProperties[] = "'supportVersions' can't be null";
        }
        if ($this->container['updateTimestamp'] === null) {
            $invalidProperties[] = "'updateTimestamp' can't be null";
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
    * Gets version
    *  **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version **参数解释**： 插件版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets input
    *  **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return object
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param object $input **参数解释**： 插件安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets stable
    *  **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    *
    * @return bool
    */
    public function getStable()
    {
        return $this->container['stable'];
    }

    /**
    * Sets stable
    *
    * @param bool $stable **参数解释**： 是否为稳定版本。 **约束限制**： 不涉及 **取值范围**： - true：稳定版本 - false：非稳定版本  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStable($stable)
    {
        $this->container['stable'] = $stable;
        return $this;
    }

    /**
    * Gets translate
    *  **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return object
    */
    public function getTranslate()
    {
        return $this->container['translate'];
    }

    /**
    * Sets translate
    *
    * @param object $translate **参数解释**： 供界面使用的翻译信息。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTranslate($translate)
    {
        $this->container['translate'] = $translate;
        return $this;
    }

    /**
    * Gets supportVersions
    *  **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\SupportVersions[]
    */
    public function getSupportVersions()
    {
        return $this->container['supportVersions'];
    }

    /**
    * Sets supportVersions
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\SupportVersions[] $supportVersions **参数解释**： 支持集群版本号。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSupportVersions($supportVersions)
    {
        $this->container['supportVersions'] = $supportVersions;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \DateTime|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param \DateTime|null $creationTimestamp **参数解释**： 创建时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \DateTime
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param \DateTime $updateTimestamp **参数解释**： 更新时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
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

