<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDeployTaskHistoryByDateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDeployTaskHistoryByDateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * id  任务id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * startDate  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endDate  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'id' => 'string',
            'page' => 'int',
            'size' => 'int',
            'startDate' => 'string',
            'endDate' => 'string',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * id  任务id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * startDate  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endDate  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'id' => null,
        'page' => 'int32',
        'size' => 'int32',
        'startDate' => null,
        'endDate' => null,
        'contentType' => null
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
    * projectId  项目id
    * id  任务id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * startDate  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endDate  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'id' => 'id',
            'page' => 'page',
            'size' => 'size',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * id  任务id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * startDate  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endDate  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'page' => 'setPage',
            'size' => 'setSize',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * id  任务id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * startDate  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endDate  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'page' => 'getPage',
            'size' => 'getSize',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'contentType' => 'getContentType'
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
    const CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8 = 'application/json;charset=utf-8';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8,
            self::CONTENT_TYPE_APPLICATION_JSON,
        ];
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            $allowedValues = $this->getContentTypeAllowableValues();
                if (!is_null($this->container['contentType']) && !in_array($this->container['contentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'contentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  任务id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets page
    *  分页页码， 表示从此页开始查询， page大于等于1
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 分页页码， 表示从此页开始查询， page大于等于1
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页显示的条目数量，size小于等于100
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 每页显示的条目数量，size小于等于100
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets startDate
    *  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return string
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string $startDate 区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return string
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string $endDate 区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

