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
    * groupName  策略组名
    * groupId  策略组ID
    * description  描述信息
    * deletable  是否允许删除该策略组
    * hostNum  关联服务器数
    * defaultGroup  是否是默认策略组
    * supportOs  支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
    * supportVersion  支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'groupId' => 'string',
            'description' => 'string',
            'deletable' => 'bool',
            'hostNum' => 'int',
            'defaultGroup' => 'bool',
            'supportOs' => 'string',
            'supportVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  策略组名
    * groupId  策略组ID
    * description  描述信息
    * deletable  是否允许删除该策略组
    * hostNum  关联服务器数
    * defaultGroup  是否是默认策略组
    * supportOs  支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
    * supportVersion  支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'groupId' => null,
        'description' => null,
        'deletable' => null,
        'hostNum' => 'int32',
        'defaultGroup' => null,
        'supportOs' => null,
        'supportVersion' => null
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
    * groupName  策略组名
    * groupId  策略组ID
    * description  描述信息
    * deletable  是否允许删除该策略组
    * hostNum  关联服务器数
    * defaultGroup  是否是默认策略组
    * supportOs  支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
    * supportVersion  支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'description' => 'description',
            'deletable' => 'deletable',
            'hostNum' => 'host_num',
            'defaultGroup' => 'default_group',
            'supportOs' => 'support_os',
            'supportVersion' => 'support_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  策略组名
    * groupId  策略组ID
    * description  描述信息
    * deletable  是否允许删除该策略组
    * hostNum  关联服务器数
    * defaultGroup  是否是默认策略组
    * supportOs  支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
    * supportVersion  支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'description' => 'setDescription',
            'deletable' => 'setDeletable',
            'hostNum' => 'setHostNum',
            'defaultGroup' => 'setDefaultGroup',
            'supportOs' => 'setSupportOs',
            'supportVersion' => 'setSupportVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  策略组名
    * groupId  策略组ID
    * description  描述信息
    * deletable  是否允许删除该策略组
    * hostNum  关联服务器数
    * defaultGroup  是否是默认策略组
    * supportOs  支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
    * supportVersion  支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'description' => 'getDescription',
            'deletable' => 'getDeletable',
            'hostNum' => 'getHostNum',
            'defaultGroup' => 'getDefaultGroup',
            'supportOs' => 'getSupportOs',
            'supportVersion' => 'getSupportVersion'
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
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['defaultGroup'] = isset($data['defaultGroup']) ? $data['defaultGroup'] : null;
        $this->container['supportOs'] = isset($data['supportOs']) ? $data['supportOs'] : null;
        $this->container['supportVersion'] = isset($data['supportVersion']) ? $data['supportVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 32)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
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
    *  策略组名
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
    * @param string|null $groupName 策略组名
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
    *  策略组ID
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
    * @param string|null $groupId 策略组ID
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
    * Gets deletable
    *  是否允许删除该策略组
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
    * @param bool|null $deletable 是否允许删除该策略组
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets hostNum
    *  关联服务器数
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
    * @param int|null $hostNum 关联服务器数
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
    *  是否是默认策略组
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
    * @param bool|null $defaultGroup 是否是默认策略组
    *
    * @return $this
    */
    public function setDefaultGroup($defaultGroup)
    {
        $this->container['defaultGroup'] = $defaultGroup;
        return $this;
    }

    /**
    * Gets supportOs
    *  支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
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
    * @param string|null $supportOs 支持的操作系统，包含如下:   - Linux ：支持Linux系统   - Windows : 支持Windows系统
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
    *  支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
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
    * @param string|null $supportVersion 支持的版本，包含如下:   - hss.version.basic ：基础版策略组   - hss.version.advanced : 专业版策略组   - hss.version.enterprise : 企业版策略组   - hss.version.premium : 旗舰版策略组   - hss.version.wtp : 网页防篡改版策略组   - hss.version.container.enterprise : 容器版策略组
    *
    * @return $this
    */
    public function setSupportVersion($supportVersion)
    {
        $this->container['supportVersion'] = $supportVersion;
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

