<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LayoutUpdateRequestPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LayoutUpdateRequestPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  布局名称
    * description  描述信息
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * layoutJson  布局信息
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'cloudPackId' => 'string',
            'cloudPackName' => 'string',
            'cloudPackVersion' => 'string',
            'isBuiltIn' => 'bool',
            'isTemplate' => 'bool',
            'layoutJson' => 'object',
            'fieldsSum' => 'int',
            'wizardsSum' => 'int',
            'sectionsSum' => 'int',
            'tabsSum' => 'int',
            'boaVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  布局名称
    * description  描述信息
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * layoutJson  布局信息
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'cloudPackId' => null,
        'cloudPackName' => null,
        'cloudPackVersion' => null,
        'isBuiltIn' => null,
        'isTemplate' => null,
        'layoutJson' => null,
        'fieldsSum' => null,
        'wizardsSum' => null,
        'sectionsSum' => null,
        'tabsSum' => null,
        'boaVersion' => null
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
    * name  布局名称
    * description  描述信息
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * layoutJson  布局信息
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'cloudPackId' => 'cloud_pack_id',
            'cloudPackName' => 'cloud_pack_name',
            'cloudPackVersion' => 'cloud_pack_version',
            'isBuiltIn' => 'is_built_in',
            'isTemplate' => 'is_template',
            'layoutJson' => 'layout_json',
            'fieldsSum' => 'fields_sum',
            'wizardsSum' => 'wizards_sum',
            'sectionsSum' => 'sections_sum',
            'tabsSum' => 'tabs_sum',
            'boaVersion' => 'boa_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  布局名称
    * description  描述信息
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * layoutJson  布局信息
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'cloudPackId' => 'setCloudPackId',
            'cloudPackName' => 'setCloudPackName',
            'cloudPackVersion' => 'setCloudPackVersion',
            'isBuiltIn' => 'setIsBuiltIn',
            'isTemplate' => 'setIsTemplate',
            'layoutJson' => 'setLayoutJson',
            'fieldsSum' => 'setFieldsSum',
            'wizardsSum' => 'setWizardsSum',
            'sectionsSum' => 'setSectionsSum',
            'tabsSum' => 'setTabsSum',
            'boaVersion' => 'setBoaVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  布局名称
    * description  描述信息
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * layoutJson  布局信息
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'cloudPackId' => 'getCloudPackId',
            'cloudPackName' => 'getCloudPackName',
            'cloudPackVersion' => 'getCloudPackVersion',
            'isBuiltIn' => 'getIsBuiltIn',
            'isTemplate' => 'getIsTemplate',
            'layoutJson' => 'getLayoutJson',
            'fieldsSum' => 'getFieldsSum',
            'wizardsSum' => 'getWizardsSum',
            'sectionsSum' => 'getSectionsSum',
            'tabsSum' => 'getTabsSum',
            'boaVersion' => 'getBoaVersion'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cloudPackId'] = isset($data['cloudPackId']) ? $data['cloudPackId'] : null;
        $this->container['cloudPackName'] = isset($data['cloudPackName']) ? $data['cloudPackName'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['isTemplate'] = isset($data['isTemplate']) ? $data['isTemplate'] : null;
        $this->container['layoutJson'] = isset($data['layoutJson']) ? $data['layoutJson'] : null;
        $this->container['fieldsSum'] = isset($data['fieldsSum']) ? $data['fieldsSum'] : null;
        $this->container['wizardsSum'] = isset($data['wizardsSum']) ? $data['wizardsSum'] : null;
        $this->container['sectionsSum'] = isset($data['sectionsSum']) ? $data['sectionsSum'] : null;
        $this->container['tabsSum'] = isset($data['tabsSum']) ? $data['tabsSum'] : null;
        $this->container['boaVersion'] = isset($data['boaVersion']) ? $data['boaVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['fieldsSum']) && ($this->container['fieldsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'fieldsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['fieldsSum']) && ($this->container['fieldsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'fieldsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wizardsSum']) && ($this->container['wizardsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'wizardsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['wizardsSum']) && ($this->container['wizardsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'wizardsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sectionsSum']) && ($this->container['sectionsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'sectionsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['sectionsSum']) && ($this->container['sectionsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'sectionsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tabsSum']) && ($this->container['tabsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'tabsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['tabsSum']) && ($this->container['tabsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'tabsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 32.";
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
    * Gets name
    *  布局名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 布局名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cloudPackId
    *  订阅包id
    *
    * @return string|null
    */
    public function getCloudPackId()
    {
        return $this->container['cloudPackId'];
    }

    /**
    * Sets cloudPackId
    *
    * @param string|null $cloudPackId 订阅包id
    *
    * @return $this
    */
    public function setCloudPackId($cloudPackId)
    {
        $this->container['cloudPackId'] = $cloudPackId;
        return $this;
    }

    /**
    * Gets cloudPackName
    *  订阅包名称
    *
    * @return string|null
    */
    public function getCloudPackName()
    {
        return $this->container['cloudPackName'];
    }

    /**
    * Sets cloudPackName
    *
    * @param string|null $cloudPackName 订阅包名称
    *
    * @return $this
    */
    public function setCloudPackName($cloudPackName)
    {
        $this->container['cloudPackName'] = $cloudPackName;
        return $this;
    }

    /**
    * Gets cloudPackVersion
    *  订阅包版本
    *
    * @return string|null
    */
    public function getCloudPackVersion()
    {
        return $this->container['cloudPackVersion'];
    }

    /**
    * Sets cloudPackVersion
    *
    * @param string|null $cloudPackVersion 订阅包版本
    *
    * @return $this
    */
    public function setCloudPackVersion($cloudPackVersion)
    {
        $this->container['cloudPackVersion'] = $cloudPackVersion;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否内置，true内置，false非内置
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否内置，true内置，false非内置
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets isTemplate
    *  是否为模板
    *
    * @return bool|null
    */
    public function getIsTemplate()
    {
        return $this->container['isTemplate'];
    }

    /**
    * Sets isTemplate
    *
    * @param bool|null $isTemplate 是否为模板
    *
    * @return $this
    */
    public function setIsTemplate($isTemplate)
    {
        $this->container['isTemplate'] = $isTemplate;
        return $this;
    }

    /**
    * Gets layoutJson
    *  布局信息
    *
    * @return object|null
    */
    public function getLayoutJson()
    {
        return $this->container['layoutJson'];
    }

    /**
    * Sets layoutJson
    *
    * @param object|null $layoutJson 布局信息
    *
    * @return $this
    */
    public function setLayoutJson($layoutJson)
    {
        $this->container['layoutJson'] = $layoutJson;
        return $this;
    }

    /**
    * Gets fieldsSum
    *  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return int|null
    */
    public function getFieldsSum()
    {
        return $this->container['fieldsSum'];
    }

    /**
    * Sets fieldsSum
    *
    * @param int|null $fieldsSum 字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setFieldsSum($fieldsSum)
    {
        $this->container['fieldsSum'] = $fieldsSum;
        return $this;
    }

    /**
    * Gets wizardsSum
    *  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return int|null
    */
    public function getWizardsSum()
    {
        return $this->container['wizardsSum'];
    }

    /**
    * Sets wizardsSum
    *
    * @param int|null $wizardsSum 页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setWizardsSum($wizardsSum)
    {
        $this->container['wizardsSum'] = $wizardsSum;
        return $this;
    }

    /**
    * Gets sectionsSum
    *  系统指标总数
    *
    * @return int|null
    */
    public function getSectionsSum()
    {
        return $this->container['sectionsSum'];
    }

    /**
    * Sets sectionsSum
    *
    * @param int|null $sectionsSum 系统指标总数
    *
    * @return $this
    */
    public function setSectionsSum($sectionsSum)
    {
        $this->container['sectionsSum'] = $sectionsSum;
        return $this;
    }

    /**
    * Gets tabsSum
    *  自定义指标总数
    *
    * @return int|null
    */
    public function getTabsSum()
    {
        return $this->container['tabsSum'];
    }

    /**
    * Sets tabsSum
    *
    * @param int|null $tabsSum 自定义指标总数
    *
    * @return $this
    */
    public function setTabsSum($tabsSum)
    {
        $this->container['tabsSum'] = $tabsSum;
        return $this;
    }

    /**
    * Gets boaVersion
    *  BOA底座版本
    *
    * @return string|null
    */
    public function getBoaVersion()
    {
        return $this->container['boaVersion'];
    }

    /**
    * Sets boaVersion
    *
    * @param string|null $boaVersion BOA底座版本
    *
    * @return $this
    */
    public function setBoaVersion($boaVersion)
    {
        $this->container['boaVersion'] = $boaVersion;
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

