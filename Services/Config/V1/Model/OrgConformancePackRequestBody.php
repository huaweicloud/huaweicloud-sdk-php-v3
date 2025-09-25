<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrgConformancePackRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrgConformancePackRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  组织合规规则包名称。
    * excludedAccounts  排除配置合规包的帐号。
    * templateKey  预定义合规规则包模板名称。
    * templateBody  自定义合规规则包内容。
    * templateUri  合规规则包模板OBS地址。
    * varsStructure  合规规则包参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'excludedAccounts' => 'string[]',
            'templateKey' => 'string',
            'templateBody' => 'string',
            'templateUri' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  组织合规规则包名称。
    * excludedAccounts  排除配置合规包的帐号。
    * templateKey  预定义合规规则包模板名称。
    * templateBody  自定义合规规则包内容。
    * templateUri  合规规则包模板OBS地址。
    * varsStructure  合规规则包参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'excludedAccounts' => null,
        'templateKey' => null,
        'templateBody' => null,
        'templateUri' => null,
        'varsStructure' => null
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
    * name  组织合规规则包名称。
    * excludedAccounts  排除配置合规包的帐号。
    * templateKey  预定义合规规则包模板名称。
    * templateBody  自定义合规规则包内容。
    * templateUri  合规规则包模板OBS地址。
    * varsStructure  合规规则包参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'excludedAccounts' => 'excluded_accounts',
            'templateKey' => 'template_key',
            'templateBody' => 'template_body',
            'templateUri' => 'template_uri',
            'varsStructure' => 'vars_structure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  组织合规规则包名称。
    * excludedAccounts  排除配置合规包的帐号。
    * templateKey  预定义合规规则包模板名称。
    * templateBody  自定义合规规则包内容。
    * templateUri  合规规则包模板OBS地址。
    * varsStructure  合规规则包参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'excludedAccounts' => 'setExcludedAccounts',
            'templateKey' => 'setTemplateKey',
            'templateBody' => 'setTemplateBody',
            'templateUri' => 'setTemplateUri',
            'varsStructure' => 'setVarsStructure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  组织合规规则包名称。
    * excludedAccounts  排除配置合规包的帐号。
    * templateKey  预定义合规规则包模板名称。
    * templateBody  自定义合规规则包内容。
    * templateUri  合规规则包模板OBS地址。
    * varsStructure  合规规则包参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'excludedAccounts' => 'getExcludedAccounts',
            'templateKey' => 'getTemplateKey',
            'templateBody' => 'getTemplateBody',
            'templateUri' => 'getTemplateUri',
            'varsStructure' => 'getVarsStructure'
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
        $this->container['excludedAccounts'] = isset($data['excludedAccounts']) ? $data['excludedAccounts'] : null;
        $this->container['templateKey'] = isset($data['templateKey']) ? $data['templateKey'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 252)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 252.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!\\s)[\\u4e00-\\u9fa5\\u00C0-\\u00FFa-zA-Z0-9_\\- ]+(?<!\\s)$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^(?!\\s)[\\u4e00-\\u9fa5\\u00C0-\\u00FFa-zA-Z0-9_\\- ]+(?<!\\s)$/.";
            }
            if (!is_null($this->container['templateKey']) && (mb_strlen($this->container['templateKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['templateKey']) && !preg_match("/^[a-zA-Z0-9_.\\-]{0,128}/", $this->container['templateKey'])) {
                $invalidProperties[] = "invalid value for 'templateKey', must be conform to the pattern /^[a-zA-Z0-9_.\\-]{0,128}/.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) > 1024)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be bigger than or equal to 0.";
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
    *  组织合规规则包名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 组织合规规则包名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets excludedAccounts
    *  排除配置合规包的帐号。
    *
    * @return string[]|null
    */
    public function getExcludedAccounts()
    {
        return $this->container['excludedAccounts'];
    }

    /**
    * Sets excludedAccounts
    *
    * @param string[]|null $excludedAccounts 排除配置合规包的帐号。
    *
    * @return $this
    */
    public function setExcludedAccounts($excludedAccounts)
    {
        $this->container['excludedAccounts'] = $excludedAccounts;
        return $this;
    }

    /**
    * Gets templateKey
    *  预定义合规规则包模板名称。
    *
    * @return string|null
    */
    public function getTemplateKey()
    {
        return $this->container['templateKey'];
    }

    /**
    * Sets templateKey
    *
    * @param string|null $templateKey 预定义合规规则包模板名称。
    *
    * @return $this
    */
    public function setTemplateKey($templateKey)
    {
        $this->container['templateKey'] = $templateKey;
        return $this;
    }

    /**
    * Gets templateBody
    *  自定义合规规则包内容。
    *
    * @return string|null
    */
    public function getTemplateBody()
    {
        return $this->container['templateBody'];
    }

    /**
    * Sets templateBody
    *
    * @param string|null $templateBody 自定义合规规则包内容。
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
        return $this;
    }

    /**
    * Gets templateUri
    *  合规规则包模板OBS地址。
    *
    * @return string|null
    */
    public function getTemplateUri()
    {
        return $this->container['templateUri'];
    }

    /**
    * Sets templateUri
    *
    * @param string|null $templateUri 合规规则包模板OBS地址。
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
        return $this;
    }

    /**
    * Gets varsStructure
    *  合规规则包参数。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]|null
    */
    public function getVarsStructure()
    {
        return $this->container['varsStructure'];
    }

    /**
    * Sets varsStructure
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]|null $varsStructure 合规规则包参数。
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
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

