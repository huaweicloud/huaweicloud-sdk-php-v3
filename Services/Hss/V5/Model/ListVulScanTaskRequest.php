<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVulScanTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVulScanTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * taskId  扫描任务ID
    * minStartTime  扫描任务开始时间的最小值
    * maxStartTime  扫描任务开始时间的最大值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'scanType' => 'string',
            'taskId' => 'string',
            'minStartTime' => 'int',
            'maxStartTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * taskId  扫描任务ID
    * minStartTime  扫描任务开始时间的最小值
    * maxStartTime  扫描任务开始时间的最大值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'scanType' => null,
        'taskId' => null,
        'minStartTime' => 'int64',
        'maxStartTime' => 'int64'
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
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * taskId  扫描任务ID
    * minStartTime  扫描任务开始时间的最小值
    * maxStartTime  扫描任务开始时间的最大值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'scanType' => 'scan_type',
            'taskId' => 'task_id',
            'minStartTime' => 'min_start_time',
            'maxStartTime' => 'max_start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * taskId  扫描任务ID
    * minStartTime  扫描任务开始时间的最小值
    * maxStartTime  扫描任务开始时间的最大值
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'scanType' => 'setScanType',
            'taskId' => 'setTaskId',
            'minStartTime' => 'setMinStartTime',
            'maxStartTime' => 'setMaxStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * taskId  扫描任务ID
    * minStartTime  扫描任务开始时间的最小值
    * maxStartTime  扫描任务开始时间的最大值
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'scanType' => 'getScanType',
            'taskId' => 'getTaskId',
            'minStartTime' => 'getMinStartTime',
            'maxStartTime' => 'getMaxStartTime'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['minStartTime'] = isset($data['minStartTime']) ? $data['minStartTime'] : null;
        $this->container['maxStartTime'] = isset($data['maxStartTime']) ? $data['maxStartTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['minStartTime']) && ($this->container['minStartTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'minStartTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['minStartTime']) && ($this->container['minStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'minStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxStartTime']) && ($this->container['maxStartTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'maxStartTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['maxStartTime']) && ($this->container['maxStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxStartTime', must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets scanType
    *  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType 扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets taskId
    *  扫描任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 扫描任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets minStartTime
    *  扫描任务开始时间的最小值
    *
    * @return int|null
    */
    public function getMinStartTime()
    {
        return $this->container['minStartTime'];
    }

    /**
    * Sets minStartTime
    *
    * @param int|null $minStartTime 扫描任务开始时间的最小值
    *
    * @return $this
    */
    public function setMinStartTime($minStartTime)
    {
        $this->container['minStartTime'] = $minStartTime;
        return $this;
    }

    /**
    * Gets maxStartTime
    *  扫描任务开始时间的最大值
    *
    * @return int|null
    */
    public function getMaxStartTime()
    {
        return $this->container['maxStartTime'];
    }

    /**
    * Sets maxStartTime
    *
    * @param int|null $maxStartTime 扫描任务开始时间的最大值
    *
    * @return $this
    */
    public function setMaxStartTime($maxStartTime)
    {
        $this->container['maxStartTime'] = $maxStartTime;
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

