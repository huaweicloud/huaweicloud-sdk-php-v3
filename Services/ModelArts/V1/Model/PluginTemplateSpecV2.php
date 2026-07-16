<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginTemplateSpecV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginTemplateSpecV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * optional  **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    * type  **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    * logoUrl  **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    * description  **参数解释**：插件模板描述。 **取值范围**：不涉及。
    * versions  **参数解释**：插件模板版本的详细信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'optional' => 'bool',
            'type' => 'string',
            'logoUrl' => 'string',
            'description' => 'string',
            'versions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PluginTemplateVersionV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * optional  **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    * type  **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    * logoUrl  **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    * description  **参数解释**：插件模板描述。 **取值范围**：不涉及。
    * versions  **参数解释**：插件模板版本的详细信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'optional' => null,
        'type' => null,
        'logoUrl' => null,
        'description' => null,
        'versions' => null
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
    * optional  **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    * type  **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    * logoUrl  **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    * description  **参数解释**：插件模板描述。 **取值范围**：不涉及。
    * versions  **参数解释**：插件模板版本的详细信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'optional' => 'optional',
            'type' => 'type',
            'logoUrl' => 'logoURL',
            'description' => 'description',
            'versions' => 'versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * optional  **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    * type  **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    * logoUrl  **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    * description  **参数解释**：插件模板描述。 **取值范围**：不涉及。
    * versions  **参数解释**：插件模板版本的详细信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'optional' => 'setOptional',
            'type' => 'setType',
            'logoUrl' => 'setLogoUrl',
            'description' => 'setDescription',
            'versions' => 'setVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * optional  **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    * type  **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    * logoUrl  **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    * description  **参数解释**：插件模板描述。 **取值范围**：不涉及。
    * versions  **参数解释**：插件模板版本的详细信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'optional' => 'getOptional',
            'type' => 'getType',
            'logoUrl' => 'getLogoUrl',
            'description' => 'getDescription',
            'versions' => 'getVersions'
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
    const TYPE_HELM = 'helm';
    const TYPE_CCE_PLUGIN = 'ccePlugin';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HELM,
            self::TYPE_CCE_PLUGIN,
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
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['logoUrl'] = isset($data['logoUrl']) ? $data['logoUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['optional'] === null) {
            $invalidProperties[] = "'optional' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['versions'] === null) {
            $invalidProperties[] = "'versions' can't be null";
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
    * Gets optional
    *  **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    *
    * @return bool
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param bool $optional **参数解释**：是否为必安装插件。 **取值范围**： - true：是 - false：否
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：插件模板类型。 **取值范围**：可选值如下： - helm：helm类型 - ccePlugin：CCE类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets logoUrl
    *  **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
    * Sets logoUrl
    *
    * @param string|null $logoUrl **参数解释**：Logo图片地址。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：插件模板描述。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：插件模板描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets versions
    *  **参数解释**：插件模板版本的详细信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PluginTemplateVersionV2[]
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PluginTemplateVersionV2[] $versions **参数解释**：插件模板版本的详细信息。
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
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

