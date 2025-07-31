<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HandleAffectBaselineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HandleAffectBaselineInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释** 主机id **取值范围**   字符长度1-256位
    * hostName  **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    * publicIp  **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    * privateIp  **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    * assetValue  **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    * checkType  **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * tag  **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
    * checkRuleName  **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'assetValue' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'tag' => 'string',
            'checkRuleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释** 主机id **取值范围**   字符长度1-256位
    * hostName  **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    * publicIp  **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    * privateIp  **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    * assetValue  **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    * checkType  **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * tag  **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
    * checkRuleName  **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'assetValue' => null,
        'checkType' => null,
        'standard' => null,
        'tag' => null,
        'checkRuleName' => null
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
    * hostId  **参数解释** 主机id **取值范围**   字符长度1-256位
    * hostName  **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    * publicIp  **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    * privateIp  **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    * assetValue  **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    * checkType  **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * tag  **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
    * checkRuleName  **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'assetValue' => 'asset_value',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'tag' => 'tag',
            'checkRuleName' => 'check_rule_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释** 主机id **取值范围**   字符长度1-256位
    * hostName  **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    * publicIp  **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    * privateIp  **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    * assetValue  **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    * checkType  **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * tag  **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
    * checkRuleName  **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'assetValue' => 'setAssetValue',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'tag' => 'setTag',
            'checkRuleName' => 'setCheckRuleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释** 主机id **取值范围**   字符长度1-256位
    * hostName  **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    * publicIp  **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    * privateIp  **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    * assetValue  **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    * checkType  **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * tag  **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
    * checkRuleName  **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'assetValue' => 'getAssetValue',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'tag' => 'getTag',
            'checkRuleName' => 'getCheckRuleName'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 2048)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^(important|common|test)$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^(important|common|test)$/.";
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
    * Gets hostId
    *  **参数解释** 主机id **取值范围**   字符长度1-256位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释** 主机id **取值范围**   字符长度1-256位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释** 服务器名称 **取值范围**   字符长度1-64位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释** 服务器公网ip **取值范围**   字符长度0-128位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释** 服务器私网ip **取值范围**   字符长度0-2048位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释** 资产重要性，包含如下3种 **取值范围**   - important ：重要资产 - common    ：一般资产 - test      ：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
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
    * @param string|null $checkType **参数解释** 基线检查的基线名称 **取值范围**   字符长度0-255位
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
    *  **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
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
    * @param string|null $standard **参数解释** 标准类型，包含如下3种 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
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
    *  **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
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
    * @param string|null $tag **参数解释** 基线检查中检查项的检查类型 **取值范围**  字符长度0-128位
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
    *  **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
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
    * @param string|null $checkRuleName **参数解释** 基线检查中检查项的名称 **取值范围**  字符长度0-2048位
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
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

