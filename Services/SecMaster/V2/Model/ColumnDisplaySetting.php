<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnDisplaySetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnDisplaySetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mappingRequired  映射是否必填
    * groupSequenceNumber  组顺序编号
    * intraGroupSequenceNumber  组内顺序编号
    * valueType  值类型
    * valueQualified  合法值
    * displayName  显示名称
    * displayDescription  显示描述
    * groupName  组名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mappingRequired' => 'bool',
            'groupSequenceNumber' => 'int',
            'intraGroupSequenceNumber' => 'int',
            'valueType' => 'string',
            'valueQualified' => 'string',
            'displayName' => 'string',
            'displayDescription' => 'string',
            'groupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mappingRequired  映射是否必填
    * groupSequenceNumber  组顺序编号
    * intraGroupSequenceNumber  组内顺序编号
    * valueType  值类型
    * valueQualified  合法值
    * displayName  显示名称
    * displayDescription  显示描述
    * groupName  组名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mappingRequired' => null,
        'groupSequenceNumber' => 'int32',
        'intraGroupSequenceNumber' => 'int32',
        'valueType' => null,
        'valueQualified' => null,
        'displayName' => null,
        'displayDescription' => null,
        'groupName' => null
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
    * mappingRequired  映射是否必填
    * groupSequenceNumber  组顺序编号
    * intraGroupSequenceNumber  组内顺序编号
    * valueType  值类型
    * valueQualified  合法值
    * displayName  显示名称
    * displayDescription  显示描述
    * groupName  组名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mappingRequired' => 'mapping_required',
            'groupSequenceNumber' => 'group_sequence_number',
            'intraGroupSequenceNumber' => 'intra_group_sequence_number',
            'valueType' => 'value_type',
            'valueQualified' => 'value_qualified',
            'displayName' => 'display_name',
            'displayDescription' => 'display_description',
            'groupName' => 'group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mappingRequired  映射是否必填
    * groupSequenceNumber  组顺序编号
    * intraGroupSequenceNumber  组内顺序编号
    * valueType  值类型
    * valueQualified  合法值
    * displayName  显示名称
    * displayDescription  显示描述
    * groupName  组名
    *
    * @var string[]
    */
    protected static $setters = [
            'mappingRequired' => 'setMappingRequired',
            'groupSequenceNumber' => 'setGroupSequenceNumber',
            'intraGroupSequenceNumber' => 'setIntraGroupSequenceNumber',
            'valueType' => 'setValueType',
            'valueQualified' => 'setValueQualified',
            'displayName' => 'setDisplayName',
            'displayDescription' => 'setDisplayDescription',
            'groupName' => 'setGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mappingRequired  映射是否必填
    * groupSequenceNumber  组顺序编号
    * intraGroupSequenceNumber  组内顺序编号
    * valueType  值类型
    * valueQualified  合法值
    * displayName  显示名称
    * displayDescription  显示描述
    * groupName  组名
    *
    * @var string[]
    */
    protected static $getters = [
            'mappingRequired' => 'getMappingRequired',
            'groupSequenceNumber' => 'getGroupSequenceNumber',
            'intraGroupSequenceNumber' => 'getIntraGroupSequenceNumber',
            'valueType' => 'getValueType',
            'valueQualified' => 'getValueQualified',
            'displayName' => 'getDisplayName',
            'displayDescription' => 'getDisplayDescription',
            'groupName' => 'getGroupName'
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
        $this->container['mappingRequired'] = isset($data['mappingRequired']) ? $data['mappingRequired'] : null;
        $this->container['groupSequenceNumber'] = isset($data['groupSequenceNumber']) ? $data['groupSequenceNumber'] : null;
        $this->container['intraGroupSequenceNumber'] = isset($data['intraGroupSequenceNumber']) ? $data['intraGroupSequenceNumber'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['valueQualified'] = isset($data['valueQualified']) ? $data['valueQualified'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['displayDescription'] = isset($data['displayDescription']) ? $data['displayDescription'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupSequenceNumber']) && ($this->container['groupSequenceNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'groupSequenceNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['groupSequenceNumber']) && ($this->container['groupSequenceNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'groupSequenceNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intraGroupSequenceNumber']) && ($this->container['intraGroupSequenceNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'intraGroupSequenceNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['intraGroupSequenceNumber']) && ($this->container['intraGroupSequenceNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'intraGroupSequenceNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['valueType']) && (mb_strlen($this->container['valueType']) > 256)) {
                $invalidProperties[] = "invalid value for 'valueType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['valueType']) && (mb_strlen($this->container['valueType']) < 1)) {
                $invalidProperties[] = "invalid value for 'valueType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['valueQualified']) && (mb_strlen($this->container['valueQualified']) > 256)) {
                $invalidProperties[] = "invalid value for 'valueQualified', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['valueQualified']) && (mb_strlen($this->container['valueQualified']) < 1)) {
                $invalidProperties[] = "invalid value for 'valueQualified', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 256)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayDescription']) && (mb_strlen($this->container['displayDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'displayDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['displayDescription']) && (mb_strlen($this->container['displayDescription']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayDescription', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
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
    * Gets mappingRequired
    *  映射是否必填
    *
    * @return bool|null
    */
    public function getMappingRequired()
    {
        return $this->container['mappingRequired'];
    }

    /**
    * Sets mappingRequired
    *
    * @param bool|null $mappingRequired 映射是否必填
    *
    * @return $this
    */
    public function setMappingRequired($mappingRequired)
    {
        $this->container['mappingRequired'] = $mappingRequired;
        return $this;
    }

    /**
    * Gets groupSequenceNumber
    *  组顺序编号
    *
    * @return int|null
    */
    public function getGroupSequenceNumber()
    {
        return $this->container['groupSequenceNumber'];
    }

    /**
    * Sets groupSequenceNumber
    *
    * @param int|null $groupSequenceNumber 组顺序编号
    *
    * @return $this
    */
    public function setGroupSequenceNumber($groupSequenceNumber)
    {
        $this->container['groupSequenceNumber'] = $groupSequenceNumber;
        return $this;
    }

    /**
    * Gets intraGroupSequenceNumber
    *  组内顺序编号
    *
    * @return int|null
    */
    public function getIntraGroupSequenceNumber()
    {
        return $this->container['intraGroupSequenceNumber'];
    }

    /**
    * Sets intraGroupSequenceNumber
    *
    * @param int|null $intraGroupSequenceNumber 组内顺序编号
    *
    * @return $this
    */
    public function setIntraGroupSequenceNumber($intraGroupSequenceNumber)
    {
        $this->container['intraGroupSequenceNumber'] = $intraGroupSequenceNumber;
        return $this;
    }

    /**
    * Gets valueType
    *  值类型
    *
    * @return string|null
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string|null $valueType 值类型
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets valueQualified
    *  合法值
    *
    * @return string|null
    */
    public function getValueQualified()
    {
        return $this->container['valueQualified'];
    }

    /**
    * Sets valueQualified
    *
    * @param string|null $valueQualified 合法值
    *
    * @return $this
    */
    public function setValueQualified($valueQualified)
    {
        $this->container['valueQualified'] = $valueQualified;
        return $this;
    }

    /**
    * Gets displayName
    *  显示名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets displayDescription
    *  显示描述
    *
    * @return string|null
    */
    public function getDisplayDescription()
    {
        return $this->container['displayDescription'];
    }

    /**
    * Sets displayDescription
    *
    * @param string|null $displayDescription 显示描述
    *
    * @return $this
    */
    public function setDisplayDescription($displayDescription)
    {
        $this->container['displayDescription'] = $displayDescription;
        return $this;
    }

    /**
    * Gets groupName
    *  组名
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
    * @param string|null $groupName 组名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

