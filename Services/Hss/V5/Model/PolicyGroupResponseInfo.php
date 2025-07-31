<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyGroupResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyGroupResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    * groupId  **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    * description  **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
    * hostNum  **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    * defaultGroup  **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    * deletable  **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    * supportOs  **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    * supportVersion  **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    * protectMode  **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'groupId' => 'string',
            'description' => 'string',
            'hostNum' => 'int',
            'defaultGroup' => 'bool',
            'deletable' => 'bool',
            'supportOs' => 'string',
            'supportVersion' => 'string',
            'protectMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    * groupId  **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    * description  **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
    * hostNum  **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    * defaultGroup  **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    * deletable  **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    * supportOs  **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    * supportVersion  **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    * protectMode  **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'groupId' => null,
        'description' => null,
        'hostNum' => null,
        'defaultGroup' => null,
        'deletable' => null,
        'supportOs' => null,
        'supportVersion' => null,
        'protectMode' => null
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
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    * groupId  **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    * description  **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
    * hostNum  **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    * defaultGroup  **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    * deletable  **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    * supportOs  **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    * supportVersion  **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    * protectMode  **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'description' => 'description',
            'hostNum' => 'host_num',
            'defaultGroup' => 'default_group',
            'deletable' => 'deletable',
            'supportOs' => 'support_os',
            'supportVersion' => 'support_version',
            'protectMode' => 'protect_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    * groupId  **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    * description  **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
    * hostNum  **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    * defaultGroup  **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    * deletable  **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    * supportOs  **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    * supportVersion  **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    * protectMode  **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'description' => 'setDescription',
            'hostNum' => 'setHostNum',
            'defaultGroup' => 'setDefaultGroup',
            'deletable' => 'setDeletable',
            'supportOs' => 'setSupportOs',
            'supportVersion' => 'setSupportVersion',
            'protectMode' => 'setProtectMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    * groupId  **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    * description  **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
    * hostNum  **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    * defaultGroup  **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    * deletable  **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    * supportOs  **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    * supportVersion  **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    * protectMode  **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'description' => 'getDescription',
            'hostNum' => 'getHostNum',
            'defaultGroup' => 'getDefaultGroup',
            'deletable' => 'getDeletable',
            'supportOs' => 'getSupportOs',
            'supportVersion' => 'getSupportVersion',
            'protectMode' => 'getProtectMode'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['defaultGroup'] = isset($data['defaultGroup']) ? $data['defaultGroup'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['supportOs'] = isset($data['supportOs']) ? $data['supportOs'] : null;
        $this->container['supportVersion'] = isset($data['supportVersion']) ? $data['supportVersion'] : null;
        $this->container['protectMode'] = isset($data['protectMode']) ? $data['protectMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) > 32)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) < 1)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['supportVersion']) && (mb_strlen($this->container['supportVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'supportVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['supportVersion']) && (mb_strlen($this->container['supportVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'supportVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectMode']) && (mb_strlen($this->container['protectMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectMode']) && (mb_strlen($this->container['protectMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectMode', the character length must be bigger than or equal to 1.";
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
    * Gets groupName
    *  **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**: 策略组名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**: 策略组ID **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
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
    * @param string|null $description **参数解释**: 策略组描述 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 关联服务器数 **取值范围**: 取值0-1000000
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets defaultGroup
    *  **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    *
    * @return bool|null
    */
    public function getDefaultGroup()
    {
        return $this->container['defaultGroup'];
    }

    /**
    * Sets defaultGroup
    *
    * @param bool|null $defaultGroup **参数解释**: 是否是默认策略组 **取值范围**: true: 是默认策略组 false: 不是默认策略组
    *
    * @return $this
    */
    public function setDefaultGroup($defaultGroup)
    {
        $this->container['defaultGroup'] = $defaultGroup;
        return $this;
    }

    /**
    * Gets deletable
    *  **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    *
    * @return bool|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param bool|null $deletable **参数解释**: 是否可以删除，只有default_group为false且host_num为1时可以删除 **取值范围**: true: 支持删除 false: 不支持删除
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets supportOs
    *  **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    *
    * @return string|null
    */
    public function getSupportOs()
    {
        return $this->container['supportOs'];
    }

    /**
    * Sets supportOs
    *
    * @param string|null $supportOs **参数解释**: 支持的操作系统 **取值范围**: Linux: 支持Linux操作系统 Windows: 支持Windows操作系统
    *
    * @return $this
    */
    public function setSupportOs($supportOs)
    {
        $this->container['supportOs'] = $supportOs;
        return $this;
    }

    /**
    * Gets supportVersion
    *  **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    *
    * @return string|null
    */
    public function getSupportVersion()
    {
        return $this->container['supportVersion'];
    }

    /**
    * Sets supportVersion
    *
    * @param string|null $supportVersion **参数解释**: 支持的版本 **取值范围**: hss.version.advanced: 专业版 hss.version.enterprise: 企业版 hss.version.premium: 旗舰版 hss.version.wtp: 网页防篡改版 hss.version.container.enterprise: 容器版
    *
    * @return $this
    */
    public function setSupportVersion($supportVersion)
    {
        $this->container['supportVersion'] = $supportVersion;
        return $this;
    }

    /**
    * Gets protectMode
    *  **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @return string|null
    */
    public function getProtectMode()
    {
        return $this->container['protectMode'];
    }

    /**
    * Sets protectMode
    *
    * @param string|null $protectMode **参数解释**: 防护模式 **取值范围**: high_detection: 高检出模式 equalization: 均衡模式
    *
    * @return $this
    */
    public function setProtectMode($protectMode)
    {
        $this->container['protectMode'] = $protectMode;
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

