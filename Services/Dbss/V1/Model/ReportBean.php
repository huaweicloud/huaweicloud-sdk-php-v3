<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbIds  数据库ID
    * dbNames  数据库名称
    * endTime  结束时间
    * finishTime  完成时间
    * format  格式  - pdf：PDF文件  - zip：zip文件
    * id  报表ID
    * name  报表名称
    * percentum  进度
    * startTime  开始时间
    * templateType  报表类型 - PDF：pdf - ZIP：zip
    * type  周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
    * url  地址URL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbIds' => 'string',
            'dbNames' => 'string',
            'endTime' => 'string',
            'finishTime' => 'string',
            'format' => 'string',
            'id' => 'string',
            'name' => 'string',
            'percentum' => 'int',
            'startTime' => 'string',
            'templateType' => 'string',
            'type' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbIds  数据库ID
    * dbNames  数据库名称
    * endTime  结束时间
    * finishTime  完成时间
    * format  格式  - pdf：PDF文件  - zip：zip文件
    * id  报表ID
    * name  报表名称
    * percentum  进度
    * startTime  开始时间
    * templateType  报表类型 - PDF：pdf - ZIP：zip
    * type  周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
    * url  地址URL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbIds' => null,
        'dbNames' => null,
        'endTime' => null,
        'finishTime' => null,
        'format' => null,
        'id' => null,
        'name' => null,
        'percentum' => 'int32',
        'startTime' => null,
        'templateType' => null,
        'type' => null,
        'url' => null
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
    * dbIds  数据库ID
    * dbNames  数据库名称
    * endTime  结束时间
    * finishTime  完成时间
    * format  格式  - pdf：PDF文件  - zip：zip文件
    * id  报表ID
    * name  报表名称
    * percentum  进度
    * startTime  开始时间
    * templateType  报表类型 - PDF：pdf - ZIP：zip
    * type  周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
    * url  地址URL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbIds' => 'db_ids',
            'dbNames' => 'db_names',
            'endTime' => 'end_time',
            'finishTime' => 'finish_time',
            'format' => 'format',
            'id' => 'id',
            'name' => 'name',
            'percentum' => 'percentum',
            'startTime' => 'start_time',
            'templateType' => 'template_type',
            'type' => 'type',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbIds  数据库ID
    * dbNames  数据库名称
    * endTime  结束时间
    * finishTime  完成时间
    * format  格式  - pdf：PDF文件  - zip：zip文件
    * id  报表ID
    * name  报表名称
    * percentum  进度
    * startTime  开始时间
    * templateType  报表类型 - PDF：pdf - ZIP：zip
    * type  周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
    * url  地址URL
    *
    * @var string[]
    */
    protected static $setters = [
            'dbIds' => 'setDbIds',
            'dbNames' => 'setDbNames',
            'endTime' => 'setEndTime',
            'finishTime' => 'setFinishTime',
            'format' => 'setFormat',
            'id' => 'setId',
            'name' => 'setName',
            'percentum' => 'setPercentum',
            'startTime' => 'setStartTime',
            'templateType' => 'setTemplateType',
            'type' => 'setType',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbIds  数据库ID
    * dbNames  数据库名称
    * endTime  结束时间
    * finishTime  完成时间
    * format  格式  - pdf：PDF文件  - zip：zip文件
    * id  报表ID
    * name  报表名称
    * percentum  进度
    * startTime  开始时间
    * templateType  报表类型 - PDF：pdf - ZIP：zip
    * type  周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
    * url  地址URL
    *
    * @var string[]
    */
    protected static $getters = [
            'dbIds' => 'getDbIds',
            'dbNames' => 'getDbNames',
            'endTime' => 'getEndTime',
            'finishTime' => 'getFinishTime',
            'format' => 'getFormat',
            'id' => 'getId',
            'name' => 'getName',
            'percentum' => 'getPercentum',
            'startTime' => 'getStartTime',
            'templateType' => 'getTemplateType',
            'type' => 'getType',
            'url' => 'getUrl'
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
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['percentum'] = isset($data['percentum']) ? $data['percentum'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
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
    *  数据库ID
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
    * @param string|null $dbIds 数据库ID
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets dbNames
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string|null $dbNames 数据库名称
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  完成时间
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 完成时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets format
    *  格式  - pdf：PDF文件  - zip：zip文件
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 格式  - pdf：PDF文件  - zip：zip文件
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets id
    *  报表ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 报表ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  报表名称
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
    * @param string|null $name 报表名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets percentum
    *  进度
    *
    * @return int|null
    */
    public function getPercentum()
    {
        return $this->container['percentum'];
    }

    /**
    * Sets percentum
    *
    * @param int|null $percentum 进度
    *
    * @return $this
    */
    public function setPercentum($percentum)
    {
        $this->container['percentum'] = $percentum;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets templateType
    *  报表类型 - PDF：pdf - ZIP：zip
    *
    * @return string|null
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string|null $templateType 报表类型 - PDF：pdf - ZIP：zip
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets type
    *  周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
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
    * @param string|null $type 周期 - AUDIT_REPORT_DAY：按天 - AUDIT_REPORT_WEEK：按周 - AUDIT_REPORT_MONTH：按月 - AUDIT_REPORT_YEAR：按年 - AUDIT_REPORT_REAL_TIME：立即
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets url
    *  地址URL
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 地址URL
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

