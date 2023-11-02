<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L2Statistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L2Statistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subjectAreaName  主题名称
    * subjectAreaGuid  主题的guid
    * ordinal  主题序号
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subjectAreaName' => 'string',
            'subjectAreaGuid' => 'string',
            'ordinal' => 'int',
            'businessObjectCount' => 'int',
            'logicEntityCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subjectAreaName  主题名称
    * subjectAreaGuid  主题的guid
    * ordinal  主题序号
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subjectAreaName' => null,
        'subjectAreaGuid' => null,
        'ordinal' => null,
        'businessObjectCount' => null,
        'logicEntityCount' => null
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
    * subjectAreaName  主题名称
    * subjectAreaGuid  主题的guid
    * ordinal  主题序号
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subjectAreaName' => 'subject_area_name',
            'subjectAreaGuid' => 'subject_area_guid',
            'ordinal' => 'ordinal',
            'businessObjectCount' => 'business_object_count',
            'logicEntityCount' => 'logic_entity_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subjectAreaName  主题名称
    * subjectAreaGuid  主题的guid
    * ordinal  主题序号
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    *
    * @var string[]
    */
    protected static $setters = [
            'subjectAreaName' => 'setSubjectAreaName',
            'subjectAreaGuid' => 'setSubjectAreaGuid',
            'ordinal' => 'setOrdinal',
            'businessObjectCount' => 'setBusinessObjectCount',
            'logicEntityCount' => 'setLogicEntityCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subjectAreaName  主题名称
    * subjectAreaGuid  主题的guid
    * ordinal  主题序号
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    *
    * @var string[]
    */
    protected static $getters = [
            'subjectAreaName' => 'getSubjectAreaName',
            'subjectAreaGuid' => 'getSubjectAreaGuid',
            'ordinal' => 'getOrdinal',
            'businessObjectCount' => 'getBusinessObjectCount',
            'logicEntityCount' => 'getLogicEntityCount'
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
        $this->container['subjectAreaName'] = isset($data['subjectAreaName']) ? $data['subjectAreaName'] : null;
        $this->container['subjectAreaGuid'] = isset($data['subjectAreaGuid']) ? $data['subjectAreaGuid'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['businessObjectCount'] = isset($data['businessObjectCount']) ? $data['businessObjectCount'] : null;
        $this->container['logicEntityCount'] = isset($data['logicEntityCount']) ? $data['logicEntityCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets subjectAreaName
    *  主题名称
    *
    * @return string|null
    */
    public function getSubjectAreaName()
    {
        return $this->container['subjectAreaName'];
    }

    /**
    * Sets subjectAreaName
    *
    * @param string|null $subjectAreaName 主题名称
    *
    * @return $this
    */
    public function setSubjectAreaName($subjectAreaName)
    {
        $this->container['subjectAreaName'] = $subjectAreaName;
        return $this;
    }

    /**
    * Gets subjectAreaGuid
    *  主题的guid
    *
    * @return string|null
    */
    public function getSubjectAreaGuid()
    {
        return $this->container['subjectAreaGuid'];
    }

    /**
    * Sets subjectAreaGuid
    *
    * @param string|null $subjectAreaGuid 主题的guid
    *
    * @return $this
    */
    public function setSubjectAreaGuid($subjectAreaGuid)
    {
        $this->container['subjectAreaGuid'] = $subjectAreaGuid;
        return $this;
    }

    /**
    * Gets ordinal
    *  主题序号
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 主题序号
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets businessObjectCount
    *  业务对象总数
    *
    * @return int|null
    */
    public function getBusinessObjectCount()
    {
        return $this->container['businessObjectCount'];
    }

    /**
    * Sets businessObjectCount
    *
    * @param int|null $businessObjectCount 业务对象总数
    *
    * @return $this
    */
    public function setBusinessObjectCount($businessObjectCount)
    {
        $this->container['businessObjectCount'] = $businessObjectCount;
        return $this;
    }

    /**
    * Gets logicEntityCount
    *  逻辑实体总数
    *
    * @return int|null
    */
    public function getLogicEntityCount()
    {
        return $this->container['logicEntityCount'];
    }

    /**
    * Sets logicEntityCount
    *
    * @param int|null $logicEntityCount 逻辑实体总数
    *
    * @return $this
    */
    public function setLogicEntityCount($logicEntityCount)
    {
        $this->container['logicEntityCount'] = $logicEntityCount;
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

