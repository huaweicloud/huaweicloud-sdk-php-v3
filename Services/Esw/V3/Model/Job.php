<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Job implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Job';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * status  - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
    * beginTime  - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * endTime  - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
    * process  - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * failReason  - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceId  - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceName  - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceType  - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'process' => 'string',
            'failReason' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * status  - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
    * beginTime  - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * endTime  - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
    * process  - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * failReason  - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceId  - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceName  - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceType  - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'process' => null,
        'failReason' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceType' => null,
        'projectId' => null
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
    * id  - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * status  - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
    * beginTime  - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * endTime  - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
    * process  - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * failReason  - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceId  - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceName  - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceType  - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'process' => 'process',
            'failReason' => 'fail_reason',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * status  - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
    * beginTime  - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * endTime  - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
    * process  - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * failReason  - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceId  - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceName  - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceType  - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'process' => 'setProcess',
            'failReason' => 'setFailReason',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * status  - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
    * beginTime  - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * endTime  - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
    * process  - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * failReason  - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceId  - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceName  - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * resourceType  - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'process' => 'getProcess',
            'failReason' => 'getFailReason',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'projectId' => 'getProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    *  - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    * @param string $id - 参数解释：任务的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    *  - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    * @param string $name - 参数解释：当前任务的名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    *  - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
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
    * @param string $status - 参数解释：任务状态。 - 约束限制：不涉及。 - 取值范围：   - RUNNING：运行中   - FAILED：失败   - COMPLETED：已完成 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime - 参数解释：任务开始时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    * @param string|null $endTime - 参数解释：任务结束时间。 - 约束限制：   - UTC时间，格式为yyyy-MM-ddTHH:mm:ss。   - 仅在任务状态为FAILED或者COMPLETED时可见 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets process
    *  - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param string|null $process - 参数解释：任务当前进度，以百分比展示。 - 约束限制：仅在任务状态为RUNNING时可见。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets failReason
    *  - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason - 参数解释：任务的失败原因。 - 约束限制：仅在任务状态为FAILED时显示。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets resourceId
    *  - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId - 参数解释：任务当前关联的资源ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName - 参数解释：任务当前关联的资源名称。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType - 参数解释：任务当前关联的资源类型。 - 约束限制：不涉及。 - 取值范围：   - instance：ESW实例 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets projectId
    *  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    * @param string $projectId - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

