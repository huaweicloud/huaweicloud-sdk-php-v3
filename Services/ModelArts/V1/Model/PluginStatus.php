<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    * version  **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
    * reason  **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    * values  **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    * resources  **参数解释**： 插件实例占用的资源量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'version' => 'string',
            'reason' => 'string',
            'values' => 'string',
            'resources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PluginResources[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    * version  **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
    * reason  **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    * values  **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    * resources  **参数解释**： 插件实例占用的资源量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'version' => null,
        'reason' => null,
        'values' => null,
        'resources' => null
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
    * phase  **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    * version  **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
    * reason  **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    * values  **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    * resources  **参数解释**： 插件实例占用的资源量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'version' => 'version',
            'reason' => 'reason',
            'values' => 'values',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    * version  **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
    * reason  **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    * values  **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    * resources  **参数解释**： 插件实例占用的资源量。
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'version' => 'setVersion',
            'reason' => 'setReason',
            'values' => 'setValues',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    * version  **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
    * reason  **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    * values  **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    * resources  **参数解释**： 插件实例占用的资源量。
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'version' => 'getVersion',
            'reason' => 'getReason',
            'values' => 'getValues',
            'resources' => 'getResources'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
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
    * Gets phase
    *  **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase **参数解释**： 插件实例的状态。 **取值范围**：可选值如下： - Pending：安装中，表示插件正在安装中。 - Running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - Updating：升级中，表示插件正在更新中。 - Abnormal：不可用，表示插件状态异常，插件不可使用。可单击状态查看失败原因。 - Deleting：删除中，表示插件正在删除中。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 插件实例的版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**： 插件实例安装失败的详细信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string|null $values **参数解释**： 插件实例的安装参数（各插件不同）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释**： 插件实例占用的资源量。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PluginResources[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PluginResources[]|null $resources **参数解释**： 插件实例占用的资源量。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

