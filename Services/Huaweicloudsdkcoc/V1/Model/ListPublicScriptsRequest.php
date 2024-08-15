<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicScriptsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicScriptsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * nameLike  脚本名（只支持右模糊搜索）
    * name  脚本名（精确搜索）
    * riskLevel  风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    * type  脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'int',
            'nameLike' => 'string',
            'name' => 'string',
            'riskLevel' => 'string',
            'type' => 'string',
            'xLanguage' => 'string',
            'xProjectId' => 'string',
            'xUserProfile' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * nameLike  脚本名（只支持右模糊搜索）
    * name  脚本名（精确搜索）
    * riskLevel  风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    * type  脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => 'int64',
        'nameLike' => null,
        'name' => null,
        'riskLevel' => null,
        'type' => null,
        'xLanguage' => null,
        'xProjectId' => null,
        'xUserProfile' => null
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
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * nameLike  脚本名（只支持右模糊搜索）
    * name  脚本名（精确搜索）
    * riskLevel  风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    * type  脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'nameLike' => 'name_like',
            'name' => 'name',
            'riskLevel' => 'risk_level',
            'type' => 'type',
            'xLanguage' => 'X-Language',
            'xProjectId' => 'x-project-id',
            'xUserProfile' => 'x-user-profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * nameLike  脚本名（只支持右模糊搜索）
    * name  脚本名（精确搜索）
    * riskLevel  风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    * type  脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'nameLike' => 'setNameLike',
            'name' => 'setName',
            'riskLevel' => 'setRiskLevel',
            'type' => 'setType',
            'xLanguage' => 'setXLanguage',
            'xProjectId' => 'setXProjectId',
            'xUserProfile' => 'setXUserProfile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * nameLike  脚本名（只支持右模糊搜索）
    * name  脚本名（精确搜索）
    * riskLevel  风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    * type  脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'nameLike' => 'getNameLike',
            'name' => 'getName',
            'riskLevel' => 'getRiskLevel',
            'type' => 'getType',
            'xLanguage' => 'getXLanguage',
            'xProjectId' => 'getXProjectId',
            'xUserProfile' => 'getXUserProfile'
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
    const RISK_LEVEL_LOW = 'LOW';
    const RISK_LEVEL_MEDIUM = 'MEDIUM';
    const RISK_LEVEL_HIGH = 'HIGH';
    const TYPE_SHELL = 'SHELL';
    const TYPE_PYTHON = 'PYTHON';
    const TYPE_BAT = 'BAT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_LOW,
            self::RISK_LEVEL_MEDIUM,
            self::RISK_LEVEL_HIGH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHELL,
            self::TYPE_PYTHON,
            self::TYPE_BAT,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['xUserProfile'] = isset($data['xUserProfile']) ? $data['xUserProfile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && ($this->container['marker'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'marker', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['marker']) && ($this->container['marker'] < 1)) {
                $invalidProperties[] = "invalid value for 'marker', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameLike']) && (mb_strlen($this->container['nameLike']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameLike', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameLike']) && (mb_strlen($this->container['nameLike']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameLike', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets limit
    *  分页参数：每页返回记录个数限制
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页参数：每页返回记录个数限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数：上一页最后一个记录id
    *
    * @return int|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param int|null $marker 分页参数：上一页最后一个记录id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets nameLike
    *  脚本名（只支持右模糊搜索）
    *
    * @return string|null
    */
    public function getNameLike()
    {
        return $this->container['nameLike'];
    }

    /**
    * Sets nameLike
    *
    * @param string|null $nameLike 脚本名（只支持右模糊搜索）
    *
    * @return $this
    */
    public function setNameLike($nameLike)
    {
        $this->container['nameLike'] = $nameLike;
        return $this;
    }

    /**
    * Gets name
    *  脚本名（精确搜索）
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
    * @param string|null $name 脚本名（精确搜索）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险等级 LOW：低风险 MEDIUM：中风险 HIGH：高风险
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets type
    *  脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
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
    * @param string|null $type 脚本类型 SHELL：shell脚本 PYTHON：python脚本 BAT：bat脚本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets xLanguage
    *  国际化标记，zh-cn表示中文，en-us或不传表示英文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 国际化标记，zh-cn表示中文，en-us或不传表示英文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，一个项目对应一个region
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，一个项目对应一个region
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets xUserProfile
    *  IAM5.0用户信息
    *
    * @return string|null
    */
    public function getXUserProfile()
    {
        return $this->container['xUserProfile'];
    }

    /**
    * Sets xUserProfile
    *
    * @param string|null $xUserProfile IAM5.0用户信息
    *
    * @return $this
    */
    public function setXUserProfile($xUserProfile)
    {
        $this->container['xUserProfile'] = $xUserProfile;
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

