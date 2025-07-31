<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PwdPolicyInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PwdPolicyInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机id **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 不涉及
    * hostIp  **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 不涉及
    * minLength  **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * uppercaseLetter  **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * lowercaseLetter  **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * number  **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * specialCharacter  **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * minLengthNum  **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    * minUppercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    * minLowercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    * minNumber  **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    * minSpecialCharacter  **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    * updateTime  **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'minLength' => 'bool',
            'uppercaseLetter' => 'bool',
            'lowercaseLetter' => 'bool',
            'number' => 'bool',
            'specialCharacter' => 'bool',
            'minLengthNum' => 'int',
            'minUppercaseLetter' => 'int',
            'minLowercaseLetter' => 'int',
            'minNumber' => 'int',
            'minSpecialCharacter' => 'int',
            'updateTime' => 'int',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机id **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 不涉及
    * hostIp  **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 不涉及
    * minLength  **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * uppercaseLetter  **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * lowercaseLetter  **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * number  **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * specialCharacter  **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * minLengthNum  **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    * minUppercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    * minLowercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    * minNumber  **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    * minSpecialCharacter  **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    * updateTime  **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'privateIp' => null,
        'publicIp' => null,
        'minLength' => null,
        'uppercaseLetter' => null,
        'lowercaseLetter' => null,
        'number' => null,
        'specialCharacter' => null,
        'minLengthNum' => null,
        'minUppercaseLetter' => null,
        'minLowercaseLetter' => null,
        'minNumber' => null,
        'minSpecialCharacter' => null,
        'updateTime' => 'int64',
        'suggestion' => null
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
    * hostId  **参数解释**: 主机id **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 不涉及
    * hostIp  **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 不涉及
    * minLength  **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * uppercaseLetter  **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * lowercaseLetter  **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * number  **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * specialCharacter  **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * minLengthNum  **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    * minUppercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    * minLowercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    * minNumber  **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    * minSpecialCharacter  **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    * updateTime  **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'minLength' => 'min_length',
            'uppercaseLetter' => 'uppercase_letter',
            'lowercaseLetter' => 'lowercase_letter',
            'number' => 'number',
            'specialCharacter' => 'special_character',
            'minLengthNum' => 'min_length_num',
            'minUppercaseLetter' => 'min_uppercase_letter',
            'minLowercaseLetter' => 'min_lowercase_letter',
            'minNumber' => 'min_number',
            'minSpecialCharacter' => 'min_special_character',
            'updateTime' => 'update_time',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 主机id **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 不涉及
    * hostIp  **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 不涉及
    * minLength  **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * uppercaseLetter  **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * lowercaseLetter  **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * number  **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * specialCharacter  **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * minLengthNum  **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    * minUppercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    * minLowercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    * minNumber  **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    * minSpecialCharacter  **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    * updateTime  **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'minLength' => 'setMinLength',
            'uppercaseLetter' => 'setUppercaseLetter',
            'lowercaseLetter' => 'setLowercaseLetter',
            'number' => 'setNumber',
            'specialCharacter' => 'setSpecialCharacter',
            'minLengthNum' => 'setMinLengthNum',
            'minUppercaseLetter' => 'setMinUppercaseLetter',
            'minLowercaseLetter' => 'setMinLowercaseLetter',
            'minNumber' => 'setMinNumber',
            'minSpecialCharacter' => 'setMinSpecialCharacter',
            'updateTime' => 'setUpdateTime',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 主机id **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 不涉及
    * hostIp  **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 不涉及
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 不涉及
    * minLength  **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * uppercaseLetter  **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * lowercaseLetter  **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    * number  **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * specialCharacter  **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    * minLengthNum  **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    * minUppercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    * minLowercaseLetter  **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    * minNumber  **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    * minSpecialCharacter  **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    * updateTime  **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'minLength' => 'getMinLength',
            'uppercaseLetter' => 'getUppercaseLetter',
            'lowercaseLetter' => 'getLowercaseLetter',
            'number' => 'getNumber',
            'specialCharacter' => 'getSpecialCharacter',
            'minLengthNum' => 'getMinLengthNum',
            'minUppercaseLetter' => 'getMinUppercaseLetter',
            'minLowercaseLetter' => 'getMinLowercaseLetter',
            'minNumber' => 'getMinNumber',
            'minSpecialCharacter' => 'getMinSpecialCharacter',
            'updateTime' => 'getUpdateTime',
            'suggestion' => 'getSuggestion'
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
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['uppercaseLetter'] = isset($data['uppercaseLetter']) ? $data['uppercaseLetter'] : null;
        $this->container['lowercaseLetter'] = isset($data['lowercaseLetter']) ? $data['lowercaseLetter'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['specialCharacter'] = isset($data['specialCharacter']) ? $data['specialCharacter'] : null;
        $this->container['minLengthNum'] = isset($data['minLengthNum']) ? $data['minLengthNum'] : null;
        $this->container['minUppercaseLetter'] = isset($data['minUppercaseLetter']) ? $data['minUppercaseLetter'] : null;
        $this->container['minLowercaseLetter'] = isset($data['minLowercaseLetter']) ? $data['minLowercaseLetter'] : null;
        $this->container['minNumber'] = isset($data['minNumber']) ? $data['minNumber'] : null;
        $this->container['minSpecialCharacter'] = isset($data['minSpecialCharacter']) ? $data['minSpecialCharacter'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) > 65534)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) < 0)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 主机id **取值范围**: 不涉及
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
    * @param string|null $hostId **参数解释**: 主机id **取值范围**: 不涉及
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
    *  **参数解释**: 服务器名称 **取值范围**: 不涉及
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 服务器IP（私有IP），为兼容用户使用，不删除此字段 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私有IP **取值范围**: 不涉及
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
    * @param string|null $privateIp **参数解释**: 服务器私有IP **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器公网IP **取值范围**: 不涉及
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
    * @param string|null $publicIp **参数解释**: 服务器公网IP **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets minLength
    *  **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return bool|null
    */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
    * Sets minLength
    *
    * @param bool|null $minLength **参数解释**: 口令最小长度的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return $this
    */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;
        return $this;
    }

    /**
    * Gets uppercaseLetter
    *  **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return bool|null
    */
    public function getUppercaseLetter()
    {
        return $this->container['uppercaseLetter'];
    }

    /**
    * Sets uppercaseLetter
    *
    * @param bool|null $uppercaseLetter **参数解释**: 大写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return $this
    */
    public function setUppercaseLetter($uppercaseLetter)
    {
        $this->container['uppercaseLetter'] = $uppercaseLetter;
        return $this;
    }

    /**
    * Gets lowercaseLetter
    *  **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return bool|null
    */
    public function getLowercaseLetter()
    {
        return $this->container['lowercaseLetter'];
    }

    /**
    * Sets lowercaseLetter
    *
    * @param bool|null $lowercaseLetter **参数解释**: 小写字母的设置是否符合要求 **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return $this
    */
    public function setLowercaseLetter($lowercaseLetter)
    {
        $this->container['lowercaseLetter'] = $lowercaseLetter;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return bool|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param bool|null $number **参数解释**: 数字的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets specialCharacter
    *  **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return bool|null
    */
    public function getSpecialCharacter()
    {
        return $this->container['specialCharacter'];
    }

    /**
    * Sets specialCharacter
    *
    * @param bool|null $specialCharacter **参数解释**: 特殊字符的设置是否符合要求，符合为true，不符合为false **取值范围**: - true：符合要求 - false：不符合要求
    *
    * @return $this
    */
    public function setSpecialCharacter($specialCharacter)
    {
        $this->container['specialCharacter'] = $specialCharacter;
        return $this;
    }

    /**
    * Gets minLengthNum
    *  **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    *
    * @return int|null
    */
    public function getMinLengthNum()
    {
        return $this->container['minLengthNum'];
    }

    /**
    * Sets minLengthNum
    *
    * @param int|null $minLengthNum **参数解释**: 复杂口令策略中定义的口令最小长度 **取值范围**: 8 - 26
    *
    * @return $this
    */
    public function setMinLengthNum($minLengthNum)
    {
        $this->container['minLengthNum'] = $minLengthNum;
        return $this;
    }

    /**
    * Gets minUppercaseLetter
    *  **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    *
    * @return int|null
    */
    public function getMinUppercaseLetter()
    {
        return $this->container['minUppercaseLetter'];
    }

    /**
    * Sets minUppercaseLetter
    *
    * @param int|null $minUppercaseLetter **参数解释**: 复杂口令策略中定义的最少包含的大写字母数 **取值范围**: 0 - 10
    *
    * @return $this
    */
    public function setMinUppercaseLetter($minUppercaseLetter)
    {
        $this->container['minUppercaseLetter'] = $minUppercaseLetter;
        return $this;
    }

    /**
    * Gets minLowercaseLetter
    *  **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    *
    * @return int|null
    */
    public function getMinLowercaseLetter()
    {
        return $this->container['minLowercaseLetter'];
    }

    /**
    * Sets minLowercaseLetter
    *
    * @param int|null $minLowercaseLetter **参数解释**: 复杂口令策略中定义的最少包含的小写字母数 **取值范围**: 0 - 10
    *
    * @return $this
    */
    public function setMinLowercaseLetter($minLowercaseLetter)
    {
        $this->container['minLowercaseLetter'] = $minLowercaseLetter;
        return $this;
    }

    /**
    * Gets minNumber
    *  **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    *
    * @return int|null
    */
    public function getMinNumber()
    {
        return $this->container['minNumber'];
    }

    /**
    * Sets minNumber
    *
    * @param int|null $minNumber **参数解释**: 复杂口令策略中定义的最少包含的数字数 **取值范围**: 0 - 10
    *
    * @return $this
    */
    public function setMinNumber($minNumber)
    {
        $this->container['minNumber'] = $minNumber;
        return $this;
    }

    /**
    * Gets minSpecialCharacter
    *  **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    *
    * @return int|null
    */
    public function getMinSpecialCharacter()
    {
        return $this->container['minSpecialCharacter'];
    }

    /**
    * Sets minSpecialCharacter
    *
    * @param int|null $minSpecialCharacter **参数解释**: 复杂口令策略中定义的最少包含的特殊字母数 **取值范围**: 0 - 10
    *
    * @return $this
    */
    public function setMinSpecialCharacter($minSpecialCharacter)
    {
        $this->container['minSpecialCharacter'] = $minSpecialCharacter;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**: 最近扫描时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

