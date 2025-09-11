<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReportRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReportRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbIds  数据库ID列表，多个用英文逗号分割
    * endDate  结束日期
    * endTime  结束时间
    * startDate  开始日期
    * startTime  开始时间
    * templateId  模板ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbIds' => 'string',
            'endDate' => '\DateTime',
            'endTime' => 'string',
            'startDate' => '\DateTime',
            'startTime' => 'string',
            'templateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbIds  数据库ID列表，多个用英文逗号分割
    * endDate  结束日期
    * endTime  结束时间
    * startDate  开始日期
    * startTime  开始时间
    * templateId  模板ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbIds' => null,
        'endDate' => 'date-time',
        'endTime' => null,
        'startDate' => 'date-time',
        'startTime' => null,
        'templateId' => null
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
    * dbIds  数据库ID列表，多个用英文逗号分割
    * endDate  结束日期
    * endTime  结束时间
    * startDate  开始日期
    * startTime  开始时间
    * templateId  模板ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbIds' => 'db_ids',
            'endDate' => 'end_date',
            'endTime' => 'end_time',
            'startDate' => 'start_date',
            'startTime' => 'start_time',
            'templateId' => 'template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbIds  数据库ID列表，多个用英文逗号分割
    * endDate  结束日期
    * endTime  结束时间
    * startDate  开始日期
    * startTime  开始时间
    * templateId  模板ID
    *
    * @var string[]
    */
    protected static $setters = [
            'dbIds' => 'setDbIds',
            'endDate' => 'setEndDate',
            'endTime' => 'setEndTime',
            'startDate' => 'setStartDate',
            'startTime' => 'setStartTime',
            'templateId' => 'setTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbIds  数据库ID列表，多个用英文逗号分割
    * endDate  结束日期
    * endTime  结束时间
    * startDate  开始日期
    * startTime  开始时间
    * templateId  模板ID
    *
    * @var string[]
    */
    protected static $getters = [
            'dbIds' => 'getDbIds',
            'endDate' => 'getEndDate',
            'endTime' => 'getEndTime',
            'startDate' => 'getStartDate',
            'startTime' => 'getStartTime',
            'templateId' => 'getTemplateId'
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
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
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
    * Gets dbIds
    *  数据库ID列表，多个用英文逗号分割
    *
    * @return string|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string|null $dbIds 数据库ID列表，多个用英文逗号分割
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets endDate
    *  结束日期
    *
    * @return \DateTime|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param \DateTime|null $endDate 结束日期
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets startDate
    *  开始日期
    *
    * @return \DateTime|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param \DateTime|null $startDate 开始日期
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets templateId
    *  模板ID
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
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

