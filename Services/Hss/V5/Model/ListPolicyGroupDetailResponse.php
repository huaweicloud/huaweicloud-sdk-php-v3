<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPolicyGroupDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPolicyGroupDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
    * groupName  **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
    * supportVersion  **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
    * supportOs  **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
    * dataList  **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'supportVersion' => 'string',
            'supportOs' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowPolicyDetailResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
    * groupName  **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
    * supportVersion  **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
    * supportOs  **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
    * dataList  **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'groupId' => null,
        'groupName' => null,
        'supportVersion' => null,
        'supportOs' => null,
        'dataList' => null
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
    * description  **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
    * groupName  **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
    * supportVersion  **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
    * supportOs  **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
    * dataList  **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'supportVersion' => 'support_version',
            'supportOs' => 'support_os',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
    * groupName  **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
    * supportVersion  **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
    * supportOs  **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
    * dataList  **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'supportVersion' => 'setSupportVersion',
            'supportOs' => 'setSupportOs',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
    * groupName  **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
    * supportVersion  **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
    * supportOs  **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
    * dataList  **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'supportVersion' => 'getSupportVersion',
            'supportOs' => 'getSupportOs',
            'dataList' => 'getDataList'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['supportVersion'] = isset($data['supportVersion']) ? $data['supportVersion'] : null;
        $this->container['supportOs'] = isset($data['supportOs']) ? $data['supportOs'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['supportVersion']) && (mb_strlen($this->container['supportVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'supportVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['supportVersion']) && (mb_strlen($this->container['supportVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'supportVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) > 64)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) < 1)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be bigger than or equal to 1.";
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
    * Gets description
    *  **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
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
    * @param string|null $description **参数解释**： 策略组描述 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
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
    * @param string|null $groupId **参数解释**： 策略组ID **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
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
    * @param string|null $groupName **参数解释**： 策略组名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets supportVersion
    *  **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
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
    * @param string|null $supportVersion **参数解释**： 支持的版本 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setSupportVersion($supportVersion)
    {
        $this->container['supportVersion'] = $supportVersion;
        return $this;
    }

    /**
    * Gets supportOs
    *  **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
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
    * @param string|null $supportOs **参数解释**： 支持的操作系统 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setSupportOs($supportOs)
    {
        $this->container['supportOs'] = $supportOs;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowPolicyDetailResponseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowPolicyDetailResponseInfo[]|null $dataList **参数解释**： 策略详情列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

