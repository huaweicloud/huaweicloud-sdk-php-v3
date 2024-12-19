<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchoverTestRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchoverTestRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  倒换测试记录的唯一标识
    * tenantId  租户ID
    * resourceId  倒换测试的资源对象ID
    * resourceType  倒换测试的资源对象类型
    * operation  shutdown, undo_shutdown表示倒换测试操作类型
    * startTime  倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * endTime  倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * operateStatus  倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'operation' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'operateStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  倒换测试记录的唯一标识
    * tenantId  租户ID
    * resourceId  倒换测试的资源对象ID
    * resourceType  倒换测试的资源对象类型
    * operation  shutdown, undo_shutdown表示倒换测试操作类型
    * startTime  倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * endTime  倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * operateStatus  倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'resourceId' => null,
        'resourceType' => null,
        'operation' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'operateStatus' => null
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
    * id  倒换测试记录的唯一标识
    * tenantId  租户ID
    * resourceId  倒换测试的资源对象ID
    * resourceType  倒换测试的资源对象类型
    * operation  shutdown, undo_shutdown表示倒换测试操作类型
    * startTime  倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * endTime  倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * operateStatus  倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'operation' => 'operation',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'operateStatus' => 'operate_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  倒换测试记录的唯一标识
    * tenantId  租户ID
    * resourceId  倒换测试的资源对象ID
    * resourceType  倒换测试的资源对象类型
    * operation  shutdown, undo_shutdown表示倒换测试操作类型
    * startTime  倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * endTime  倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * operateStatus  倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'operation' => 'setOperation',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'operateStatus' => 'setOperateStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  倒换测试记录的唯一标识
    * tenantId  租户ID
    * resourceId  倒换测试的资源对象ID
    * resourceType  倒换测试的资源对象类型
    * operation  shutdown, undo_shutdown表示倒换测试操作类型
    * startTime  倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * endTime  倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * operateStatus  倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'operation' => 'getOperation',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'operateStatus' => 'getOperateStatus'
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
    const RESOURCE_TYPE_VIRTUAL_INTERFACE = 'virtual_interface';
    const OPERATION_SHUTDOWN = 'shutdown';
    const OPERATION_UNDO_SHUTDOWN = 'undo_shutdown';
    const OPERATE_STATUS_STARTING = 'STARTING';
    const OPERATE_STATUS_INPROGRESS = 'INPROGRESS';
    const OPERATE_STATUS_COMPLETE = 'COMPLETE';
    const OPERATE_STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_VIRTUAL_INTERFACE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_SHUTDOWN,
            self::OPERATION_UNDO_SHUTDOWN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateStatusAllowableValues()
    {
        return [
            self::OPERATE_STATUS_STARTING,
            self::OPERATE_STATUS_INPROGRESS,
            self::OPERATE_STATUS_COMPLETE,
            self::OPERATE_STATUS_ERROR,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['operateStatus'] = isset($data['operateStatus']) ? $data['operateStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[a-fA-F0-9]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOperationAllowableValues();
                if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['operation']) && (mb_strlen($this->container['operation']) > 128)) {
                $invalidProperties[] = "invalid value for 'operation', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['operation']) && (mb_strlen($this->container['operation']) < 0)) {
                $invalidProperties[] = "invalid value for 'operation', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOperateStatusAllowableValues();
                if (!is_null($this->container['operateStatus']) && !in_array($this->container['operateStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateStatus', must be one of '%s'",
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
    * Gets id
    *  倒换测试记录的唯一标识
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
    * @param string|null $id 倒换测试记录的唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets resourceId
    *  倒换测试的资源对象ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 倒换测试的资源对象ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  倒换测试的资源对象类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 倒换测试的资源对象类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets operation
    *  shutdown, undo_shutdown表示倒换测试操作类型
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation shutdown, undo_shutdown表示倒换测试操作类型
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets startTime
    *  倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 倒换测试操作的开始时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 倒换测试操作的结束时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets operateStatus
    *  倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @return string|null
    */
    public function getOperateStatus()
    {
        return $this->container['operateStatus'];
    }

    /**
    * Sets operateStatus
    *
    * @param string|null $operateStatus 倒换测试状态记录 STARTING: 初始状态 INPROGRESS: 配置下发中 COMPLETE: 配置下发完成 ERROR: 配置下发失败
    *
    * @return $this
    */
    public function setOperateStatus($operateStatus)
    {
        $this->container['operateStatus'] = $operateStatus;
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

