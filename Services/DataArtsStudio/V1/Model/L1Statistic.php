<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L1Statistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L1Statistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subjectAreaGroupName  主题域分组名称
    * subjectAreaGroupNameEn  主题域分组英文名称
    * subjectAreaGroupGuid  主题域分组的guid
    * ordinal  主题域分组序号
    * subjectAreaCount  主题总数
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    * subjectAreaStatistics  主题统计信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subjectAreaGroupName' => 'string',
            'subjectAreaGroupNameEn' => 'string',
            'subjectAreaGroupGuid' => 'string',
            'ordinal' => 'int',
            'subjectAreaCount' => 'int',
            'businessObjectCount' => 'int',
            'logicEntityCount' => 'int',
            'subjectAreaStatistics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\L2Statistic[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subjectAreaGroupName  主题域分组名称
    * subjectAreaGroupNameEn  主题域分组英文名称
    * subjectAreaGroupGuid  主题域分组的guid
    * ordinal  主题域分组序号
    * subjectAreaCount  主题总数
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    * subjectAreaStatistics  主题统计信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subjectAreaGroupName' => null,
        'subjectAreaGroupNameEn' => null,
        'subjectAreaGroupGuid' => null,
        'ordinal' => null,
        'subjectAreaCount' => null,
        'businessObjectCount' => null,
        'logicEntityCount' => null,
        'subjectAreaStatistics' => null
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
    * subjectAreaGroupName  主题域分组名称
    * subjectAreaGroupNameEn  主题域分组英文名称
    * subjectAreaGroupGuid  主题域分组的guid
    * ordinal  主题域分组序号
    * subjectAreaCount  主题总数
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    * subjectAreaStatistics  主题统计信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subjectAreaGroupName' => 'subject_area_group_name',
            'subjectAreaGroupNameEn' => 'subject_area_group_name_en',
            'subjectAreaGroupGuid' => 'subject_area_group_guid',
            'ordinal' => 'ordinal',
            'subjectAreaCount' => 'subject_area_count',
            'businessObjectCount' => 'business_object_count',
            'logicEntityCount' => 'logic_entity_count',
            'subjectAreaStatistics' => 'subject_area_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subjectAreaGroupName  主题域分组名称
    * subjectAreaGroupNameEn  主题域分组英文名称
    * subjectAreaGroupGuid  主题域分组的guid
    * ordinal  主题域分组序号
    * subjectAreaCount  主题总数
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    * subjectAreaStatistics  主题统计信息
    *
    * @var string[]
    */
    protected static $setters = [
            'subjectAreaGroupName' => 'setSubjectAreaGroupName',
            'subjectAreaGroupNameEn' => 'setSubjectAreaGroupNameEn',
            'subjectAreaGroupGuid' => 'setSubjectAreaGroupGuid',
            'ordinal' => 'setOrdinal',
            'subjectAreaCount' => 'setSubjectAreaCount',
            'businessObjectCount' => 'setBusinessObjectCount',
            'logicEntityCount' => 'setLogicEntityCount',
            'subjectAreaStatistics' => 'setSubjectAreaStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subjectAreaGroupName  主题域分组名称
    * subjectAreaGroupNameEn  主题域分组英文名称
    * subjectAreaGroupGuid  主题域分组的guid
    * ordinal  主题域分组序号
    * subjectAreaCount  主题总数
    * businessObjectCount  业务对象总数
    * logicEntityCount  逻辑实体总数
    * subjectAreaStatistics  主题统计信息
    *
    * @var string[]
    */
    protected static $getters = [
            'subjectAreaGroupName' => 'getSubjectAreaGroupName',
            'subjectAreaGroupNameEn' => 'getSubjectAreaGroupNameEn',
            'subjectAreaGroupGuid' => 'getSubjectAreaGroupGuid',
            'ordinal' => 'getOrdinal',
            'subjectAreaCount' => 'getSubjectAreaCount',
            'businessObjectCount' => 'getBusinessObjectCount',
            'logicEntityCount' => 'getLogicEntityCount',
            'subjectAreaStatistics' => 'getSubjectAreaStatistics'
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
        $this->container['subjectAreaGroupName'] = isset($data['subjectAreaGroupName']) ? $data['subjectAreaGroupName'] : null;
        $this->container['subjectAreaGroupNameEn'] = isset($data['subjectAreaGroupNameEn']) ? $data['subjectAreaGroupNameEn'] : null;
        $this->container['subjectAreaGroupGuid'] = isset($data['subjectAreaGroupGuid']) ? $data['subjectAreaGroupGuid'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['subjectAreaCount'] = isset($data['subjectAreaCount']) ? $data['subjectAreaCount'] : null;
        $this->container['businessObjectCount'] = isset($data['businessObjectCount']) ? $data['businessObjectCount'] : null;
        $this->container['logicEntityCount'] = isset($data['logicEntityCount']) ? $data['logicEntityCount'] : null;
        $this->container['subjectAreaStatistics'] = isset($data['subjectAreaStatistics']) ? $data['subjectAreaStatistics'] : null;
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
    * Gets subjectAreaGroupName
    *  主题域分组名称
    *
    * @return string|null
    */
    public function getSubjectAreaGroupName()
    {
        return $this->container['subjectAreaGroupName'];
    }

    /**
    * Sets subjectAreaGroupName
    *
    * @param string|null $subjectAreaGroupName 主题域分组名称
    *
    * @return $this
    */
    public function setSubjectAreaGroupName($subjectAreaGroupName)
    {
        $this->container['subjectAreaGroupName'] = $subjectAreaGroupName;
        return $this;
    }

    /**
    * Gets subjectAreaGroupNameEn
    *  主题域分组英文名称
    *
    * @return string|null
    */
    public function getSubjectAreaGroupNameEn()
    {
        return $this->container['subjectAreaGroupNameEn'];
    }

    /**
    * Sets subjectAreaGroupNameEn
    *
    * @param string|null $subjectAreaGroupNameEn 主题域分组英文名称
    *
    * @return $this
    */
    public function setSubjectAreaGroupNameEn($subjectAreaGroupNameEn)
    {
        $this->container['subjectAreaGroupNameEn'] = $subjectAreaGroupNameEn;
        return $this;
    }

    /**
    * Gets subjectAreaGroupGuid
    *  主题域分组的guid
    *
    * @return string|null
    */
    public function getSubjectAreaGroupGuid()
    {
        return $this->container['subjectAreaGroupGuid'];
    }

    /**
    * Sets subjectAreaGroupGuid
    *
    * @param string|null $subjectAreaGroupGuid 主题域分组的guid
    *
    * @return $this
    */
    public function setSubjectAreaGroupGuid($subjectAreaGroupGuid)
    {
        $this->container['subjectAreaGroupGuid'] = $subjectAreaGroupGuid;
        return $this;
    }

    /**
    * Gets ordinal
    *  主题域分组序号
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
    * @param int|null $ordinal 主题域分组序号
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets subjectAreaCount
    *  主题总数
    *
    * @return int|null
    */
    public function getSubjectAreaCount()
    {
        return $this->container['subjectAreaCount'];
    }

    /**
    * Sets subjectAreaCount
    *
    * @param int|null $subjectAreaCount 主题总数
    *
    * @return $this
    */
    public function setSubjectAreaCount($subjectAreaCount)
    {
        $this->container['subjectAreaCount'] = $subjectAreaCount;
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
    * Gets subjectAreaStatistics
    *  主题统计信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\L2Statistic[]|null
    */
    public function getSubjectAreaStatistics()
    {
        return $this->container['subjectAreaStatistics'];
    }

    /**
    * Sets subjectAreaStatistics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\L2Statistic[]|null $subjectAreaStatistics 主题统计信息
    *
    * @return $this
    */
    public function setSubjectAreaStatistics($subjectAreaStatistics)
    {
        $this->container['subjectAreaStatistics'] = $subjectAreaStatistics;
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

