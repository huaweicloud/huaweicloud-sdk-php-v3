<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBaselineWhiteListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBaselineWhiteListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * osType  基线检查的操作系统 - Linux - Windows
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * checkRuleName  基线检查中检查项的名称
    * hostIdList  白名单主机id列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'string',
            'osType' => 'string',
            'indexVersion' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'tag' => 'string',
            'checkRuleName' => 'string',
            'hostIdList' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * osType  基线检查的操作系统 - Linux - Windows
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * checkRuleName  基线检查中检查项的名称
    * hostIdList  白名单主机id列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'osType' => null,
        'indexVersion' => null,
        'checkType' => null,
        'standard' => null,
        'tag' => null,
        'checkRuleName' => null,
        'hostIdList' => null,
        'description' => null
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
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * osType  基线检查的操作系统 - Linux - Windows
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * checkRuleName  基线检查中检查项的名称
    * hostIdList  白名单主机id列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'osType' => 'os_type',
            'indexVersion' => 'index_version',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'tag' => 'tag',
            'checkRuleName' => 'check_rule_name',
            'hostIdList' => 'host_id_list',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * osType  基线检查的操作系统 - Linux - Windows
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * checkRuleName  基线检查中检查项的名称
    * hostIdList  白名单主机id列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'osType' => 'setOsType',
            'indexVersion' => 'setIndexVersion',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'tag' => 'setTag',
            'checkRuleName' => 'setCheckRuleName',
            'hostIdList' => 'setHostIdList',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * osType  基线检查的操作系统 - Linux - Windows
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * checkRuleName  基线检查中检查项的名称
    * hostIdList  白名单主机id列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'osType' => 'getOsType',
            'indexVersion' => 'getIndexVersion',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'tag' => 'getTag',
            'checkRuleName' => 'getCheckRuleName',
            'hostIdList' => 'getHostIdList',
            'description' => 'getDescription'
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['indexVersion'] = isset($data['indexVersion']) ? $data['indexVersion'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleType']) && !preg_match("/^(specific_host|all_host)$/", $this->container['ruleType'])) {
                $invalidProperties[] = "invalid value for 'ruleType', must be conform to the pattern /^(specific_host|all_host)$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^(Linux|Windows)$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^(Linux|Windows)$/.";
            }
            if (!is_null($this->container['indexVersion']) && (mb_strlen($this->container['indexVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'indexVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['indexVersion']) && (mb_strlen($this->container['indexVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'indexVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indexVersion']) && !preg_match("/^.*$/", $this->container['indexVersion'])) {
                $invalidProperties[] = "invalid value for 'indexVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 255)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && !preg_match("/^.*$/", $this->container['checkType'])) {
                $invalidProperties[] = "invalid value for 'checkType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && !preg_match("/^.*$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 128)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^.*$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && !preg_match("/^.*$/", $this->container['checkRuleName'])) {
                $invalidProperties[] = "invalid value for 'checkRuleName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
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
    * Gets ruleType
    *  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets osType
    *  基线检查的操作系统 - Linux - Windows
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 基线检查的操作系统 - Linux - Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets indexVersion
    *  基线检查的检查项标识
    *
    * @return string|null
    */
    public function getIndexVersion()
    {
        return $this->container['indexVersion'];
    }

    /**
    * Sets indexVersion
    *
    * @param string|null $indexVersion 基线检查的检查项标识
    *
    * @return $this
    */
    public function setIndexVersion($indexVersion)
    {
        $this->container['indexVersion'] = $indexVersion;
        return $this;
    }

    /**
    * Gets checkType
    *  基线检查的基线名称
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType 基线检查的基线名称
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets standard
    *  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard 标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets tag
    *  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 基线检查中检查项的检查类型 - 访问控制 - 服务配置
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  基线检查中检查项的名称
    *
    * @return string|null
    */
    public function getCheckRuleName()
    {
        return $this->container['checkRuleName'];
    }

    /**
    * Sets checkRuleName
    *
    * @param string|null $checkRuleName 基线检查中检查项的名称
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
        return $this;
    }

    /**
    * Gets hostIdList
    *  白名单主机id列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 白名单主机id列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets description
    *  基线白名单备注
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
    * @param string|null $description 基线白名单备注
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

