<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostAppsResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostAppsResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  **参数解释**: app名称 **取值范围**: 字符长度1-128位
    * path  **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    * paths  **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    * rule  **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'path' => 'string',
            'paths' => '\HuaweiCloud\SDK\Hss\V5\Model\VulHostAppsResponseInfoPaths[]',
            'rule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  **参数解释**: app名称 **取值范围**: 字符长度1-128位
    * path  **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    * paths  **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    * rule  **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'path' => null,
        'paths' => null,
        'rule' => null
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
    * appName  **参数解释**: app名称 **取值范围**: 字符长度1-128位
    * path  **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    * paths  **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    * rule  **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'path' => 'path',
            'paths' => 'paths',
            'rule' => 'rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  **参数解释**: app名称 **取值范围**: 字符长度1-128位
    * path  **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    * paths  **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    * rule  **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'path' => 'setPath',
            'paths' => 'setPaths',
            'rule' => 'setRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  **参数解释**: app名称 **取值范围**: 字符长度1-128位
    * path  **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    * paths  **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    * rule  **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'path' => 'getPath',
            'paths' => 'getPaths',
            'rule' => 'getRule'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['paths'] = isset($data['paths']) ? $data['paths'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 512)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rule']) && (mb_strlen($this->container['rule']) > 512)) {
                $invalidProperties[] = "invalid value for 'rule', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['rule']) && (mb_strlen($this->container['rule']) < 1)) {
                $invalidProperties[] = "invalid value for 'rule', the character length must be bigger than or equal to 1.";
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
    * Gets appName
    *  **参数解释**: app名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: app名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 存在漏洞的软件路径，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段（注：该字段即将弃用，请使用paths字段获取软件路径相关信息） **取值范围**: 字符长度1-512位
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets paths
    *  **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulHostAppsResponseInfoPaths[]|null
    */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
    * Sets paths
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulHostAppsResponseInfoPaths[]|null $paths **参数解释**: 存在漏洞的软件路径列表，仅应用漏洞、应急漏洞等存在软件路径的漏洞类型查询时存在该字段 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setPaths($paths)
    {
        $this->container['paths'] = $paths;
        return $this;
    }

    /**
    * Gets rule
    *  **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @return string|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string|null $rule **参数解释**: 软件命中的漏洞匹配规则 **取值范围**: 字符长度1-512位
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
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

