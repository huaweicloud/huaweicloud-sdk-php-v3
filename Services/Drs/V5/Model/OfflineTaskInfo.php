<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OfflineTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OfflineTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    * engineType  数据库引擎。 - sqlserver：RDS for SQL Server引擎
    * errorLog  错误日志。
    * description  描述。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * enterpriseProjectId  企业项目。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'engineType' => 'string',
            'errorLog' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'finishTime' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    * engineType  数据库引擎。 - sqlserver：RDS for SQL Server引擎
    * errorLog  错误日志。
    * description  描述。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * enterpriseProjectId  企业项目。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'engineType' => null,
        'errorLog' => null,
        'description' => null,
        'createTime' => null,
        'finishTime' => null,
        'enterpriseProjectId' => null
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
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    * engineType  数据库引擎。 - sqlserver：RDS for SQL Server引擎
    * errorLog  错误日志。
    * description  描述。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * enterpriseProjectId  企业项目。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'engineType' => 'engine_type',
            'errorLog' => 'error_log',
            'description' => 'description',
            'createTime' => 'create_time',
            'finishTime' => 'finish_time',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    * engineType  数据库引擎。 - sqlserver：RDS for SQL Server引擎
    * errorLog  错误日志。
    * description  描述。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * enterpriseProjectId  企业项目。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'engineType' => 'setEngineType',
            'errorLog' => 'setErrorLog',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'finishTime' => 'setFinishTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    * engineType  数据库引擎。 - sqlserver：RDS for SQL Server引擎
    * errorLog  错误日志。
    * description  描述。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * enterpriseProjectId  企业项目。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'engineType' => 'getEngineType',
            'errorLog' => 'getErrorLog',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'finishTime' => 'getFinishTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const STATUS_TRANSFERRING = 'TRANSFERRING';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_PRECHECK_FAILED = 'PRECHECK FAILED';
    const ENGINE_TYPE_SQLSERVER = 'sqlserver';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_TRANSFERRING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_PRECHECK_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_SQLSERVER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['errorLog'] = isset($data['errorLog']) ? $data['errorLog'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['engineType']) > 128)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['engineType']) < 0)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorLog']) && (mb_strlen($this->container['errorLog']) > 512)) {
                $invalidProperties[] = "invalid value for 'errorLog', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['errorLog']) && (mb_strlen($this->container['errorLog']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorLog', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if ((mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finishTime']) && (mb_strlen($this->container['finishTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'finishTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['finishTime']) && (mb_strlen($this->container['finishTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'finishTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  任务ID。
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
    * @param string $id 任务ID。
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
    *  任务名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 任务状态。 - TRANSFERRING：恢复中 - SUCCESS：成功 - FAILED：失败 - PRECHECK FAILED：预检查失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎。 - sqlserver：RDS for SQL Server引擎
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎。 - sqlserver：RDS for SQL Server引擎
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets errorLog
    *  错误日志。
    *
    * @return string|null
    */
    public function getErrorLog()
    {
        return $this->container['errorLog'];
    }

    /**
    * Sets errorLog
    *
    * @param string|null $errorLog 错误日志。
    *
    * @return $this
    */
    public function setErrorLog($errorLog)
    {
        $this->container['errorLog'] = $errorLog;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  任务完成时间。
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
    * @param string|null $finishTime 任务完成时间。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目。
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
    * @param string|null $enterpriseProjectId 企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

