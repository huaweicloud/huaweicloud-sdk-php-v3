<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * version  **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateName  **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateType  **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    * addonTemplateLogo  **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateLabels  **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'version' => 'string',
            'addonTemplateName' => 'string',
            'addonTemplateType' => 'string',
            'addonTemplateLogo' => 'string',
            'addonTemplateLabels' => 'string[]',
            'description' => 'string',
            'values' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * version  **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateName  **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateType  **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    * addonTemplateLogo  **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateLabels  **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'version' => null,
        'addonTemplateName' => null,
        'addonTemplateType' => null,
        'addonTemplateLogo' => null,
        'addonTemplateLabels' => null,
        'description' => null,
        'values' => null
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
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * version  **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateName  **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateType  **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    * addonTemplateLogo  **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateLabels  **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'clusterID',
            'version' => 'version',
            'addonTemplateName' => 'addonTemplateName',
            'addonTemplateType' => 'addonTemplateType',
            'addonTemplateLogo' => 'addonTemplateLogo',
            'addonTemplateLabels' => 'addonTemplateLabels',
            'description' => 'description',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * version  **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateName  **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateType  **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    * addonTemplateLogo  **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateLabels  **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'version' => 'setVersion',
            'addonTemplateName' => 'setAddonTemplateName',
            'addonTemplateType' => 'setAddonTemplateType',
            'addonTemplateLogo' => 'setAddonTemplateLogo',
            'addonTemplateLabels' => 'setAddonTemplateLabels',
            'description' => 'setDescription',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * version  **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateName  **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateType  **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    * addonTemplateLogo  **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addonTemplateLabels  **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'version' => 'getVersion',
            'addonTemplateName' => 'getAddonTemplateName',
            'addonTemplateType' => 'getAddonTemplateType',
            'addonTemplateLogo' => 'getAddonTemplateLogo',
            'addonTemplateLabels' => 'getAddonTemplateLabels',
            'description' => 'getDescription',
            'values' => 'getValues'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
        $this->container['addonTemplateType'] = isset($data['addonTemplateType']) ? $data['addonTemplateType'] : null;
        $this->container['addonTemplateLogo'] = isset($data['addonTemplateLogo']) ? $data['addonTemplateLogo'] : null;
        $this->container['addonTemplateLabels'] = isset($data['addonTemplateLabels']) ? $data['addonTemplateLabels'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['addonTemplateName'] === null) {
            $invalidProperties[] = "'addonTemplateName' can't be null";
        }
        if ($this->container['addonTemplateType'] === null) {
            $invalidProperties[] = "'addonTemplateType' can't be null";
        }
            if (!is_null($this->container['addonTemplateLogo']) && (mb_strlen($this->container['addonTemplateLogo']) > 200)) {
                $invalidProperties[] = "invalid value for 'addonTemplateLogo', the character length must be smaller than or equal to 200.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets clusterId
    *  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string $version **参数解释**： 插件模板版本号，如1.0.0。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets addonTemplateName
    *  **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string $addonTemplateName **参数解释**： 插件模板名称，如coredns。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
        return $this;
    }

    /**
    * Gets addonTemplateType
    *  **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getAddonTemplateType()
    {
        return $this->container['addonTemplateType'];
    }

    /**
    * Sets addonTemplateType
    *
    * @param string $addonTemplateType **参数解释**： 插件模板类型。 **约束限制**： 不涉及 **取值范围**： - helm：表示使用Helm包进行部署的模板类型 - static：表示静态模板类型  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddonTemplateType($addonTemplateType)
    {
        $this->container['addonTemplateType'] = $addonTemplateType;
        return $this;
    }

    /**
    * Gets addonTemplateLogo
    *  **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAddonTemplateLogo()
    {
        return $this->container['addonTemplateLogo'];
    }

    /**
    * Sets addonTemplateLogo
    *
    * @param string|null $addonTemplateLogo **参数解释**： 插件模板logo图片的地址。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddonTemplateLogo($addonTemplateLogo)
    {
        $this->container['addonTemplateLogo'] = $addonTemplateLogo;
        return $this;
    }

    /**
    * Gets addonTemplateLabels
    *  **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getAddonTemplateLabels()
    {
        return $this->container['addonTemplateLabels'];
    }

    /**
    * Sets addonTemplateLabels
    *
    * @param string[]|null $addonTemplateLabels **参数解释**： 插件模板所属类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddonTemplateLabels($addonTemplateLabels)
    {
        $this->container['addonTemplateLabels'] = $addonTemplateLabels;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释**： 插件模板描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return map[string,object]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param map[string,object] $values **参数解释**： 插件模板安装参数（各插件不同），请根据具体插件模板信息填写安装参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

