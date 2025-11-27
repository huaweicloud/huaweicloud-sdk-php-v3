<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExportTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExportTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exportTaskId  导出任务唯一id。
    * resourceType  导出源资源类型，支持批量任务导出类型BatchTask。
    * resourceCondition  资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    * exportFormat  导出格式，目前xls格式。
    * status  任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    * exportCount  已导出的资源数量。
    * progress  导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    * createTime  在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * endTime  导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * appType  租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    * appId  应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exportTaskId' => 'string',
            'resourceType' => 'string',
            'resourceCondition' => 'object',
            'exportFormat' => 'string',
            'status' => 'string',
            'exportCount' => 'int',
            'progress' => 'int',
            'createTime' => 'string',
            'endTime' => 'string',
            'appType' => 'string',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exportTaskId  导出任务唯一id。
    * resourceType  导出源资源类型，支持批量任务导出类型BatchTask。
    * resourceCondition  资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    * exportFormat  导出格式，目前xls格式。
    * status  任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    * exportCount  已导出的资源数量。
    * progress  导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    * createTime  在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * endTime  导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * appType  租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    * appId  应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exportTaskId' => null,
        'resourceType' => null,
        'resourceCondition' => null,
        'exportFormat' => null,
        'status' => null,
        'exportCount' => 'int64',
        'progress' => null,
        'createTime' => null,
        'endTime' => null,
        'appType' => null,
        'appId' => null
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
    * exportTaskId  导出任务唯一id。
    * resourceType  导出源资源类型，支持批量任务导出类型BatchTask。
    * resourceCondition  资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    * exportFormat  导出格式，目前xls格式。
    * status  任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    * exportCount  已导出的资源数量。
    * progress  导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    * createTime  在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * endTime  导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * appType  租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    * appId  应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exportTaskId' => 'export_task_id',
            'resourceType' => 'resource_type',
            'resourceCondition' => 'resource_condition',
            'exportFormat' => 'export_format',
            'status' => 'status',
            'exportCount' => 'export_count',
            'progress' => 'progress',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'appType' => 'app_type',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exportTaskId  导出任务唯一id。
    * resourceType  导出源资源类型，支持批量任务导出类型BatchTask。
    * resourceCondition  资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    * exportFormat  导出格式，目前xls格式。
    * status  任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    * exportCount  已导出的资源数量。
    * progress  导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    * createTime  在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * endTime  导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * appType  租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    * appId  应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @var string[]
    */
    protected static $setters = [
            'exportTaskId' => 'setExportTaskId',
            'resourceType' => 'setResourceType',
            'resourceCondition' => 'setResourceCondition',
            'exportFormat' => 'setExportFormat',
            'status' => 'setStatus',
            'exportCount' => 'setExportCount',
            'progress' => 'setProgress',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'appType' => 'setAppType',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exportTaskId  导出任务唯一id。
    * resourceType  导出源资源类型，支持批量任务导出类型BatchTask。
    * resourceCondition  资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    * exportFormat  导出格式，目前xls格式。
    * status  任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    * exportCount  已导出的资源数量。
    * progress  导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    * createTime  在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * endTime  导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    * appType  租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    * appId  应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @var string[]
    */
    protected static $getters = [
            'exportTaskId' => 'getExportTaskId',
            'resourceType' => 'getResourceType',
            'resourceCondition' => 'getResourceCondition',
            'exportFormat' => 'getExportFormat',
            'status' => 'getStatus',
            'exportCount' => 'getExportCount',
            'progress' => 'getProgress',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'appType' => 'getAppType',
            'appId' => 'getAppId'
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
        $this->container['exportTaskId'] = isset($data['exportTaskId']) ? $data['exportTaskId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceCondition'] = isset($data['resourceCondition']) ? $data['resourceCondition'] : null;
        $this->container['exportFormat'] = isset($data['exportFormat']) ? $data['exportFormat'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['exportCount'] = isset($data['exportCount']) ? $data['exportCount'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceType']) && !preg_match("/(BatchTask|Device|DevicePropertyHistory|MessageTraceData)/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /(BatchTask|Device|DevicePropertyHistory|MessageTraceData)/.";
            }
            if (!is_null($this->container['exportFormat']) && !preg_match("/(xls)/", $this->container['exportFormat'])) {
                $invalidProperties[] = "invalid value for 'exportFormat', must be conform to the pattern /(xls)/.";
            }
            if (!is_null($this->container['appType']) && !preg_match("/(GLOBAL|APP)/", $this->container['appType'])) {
                $invalidProperties[] = "invalid value for 'appType', must be conform to the pattern /(GLOBAL|APP)/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
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
    * Gets exportTaskId
    *  导出任务唯一id。
    *
    * @return string|null
    */
    public function getExportTaskId()
    {
        return $this->container['exportTaskId'];
    }

    /**
    * Sets exportTaskId
    *
    * @param string|null $exportTaskId 导出任务唯一id。
    *
    * @return $this
    */
    public function setExportTaskId($exportTaskId)
    {
        $this->container['exportTaskId'] = $exportTaskId;
        return $this;
    }

    /**
    * Gets resourceType
    *  导出源资源类型，支持批量任务导出类型BatchTask。
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
    * @param string|null $resourceType 导出源资源类型，支持批量任务导出类型BatchTask。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceCondition
    *  资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    *
    * @return object|null
    */
    public function getResourceCondition()
    {
        return $this->container['resourceCondition'];
    }

    /**
    * Sets resourceCondition
    *
    * @param object|null $resourceCondition 资源过滤条件，Json格式，里面是(K,V)键值对，当resource_type为BatchTask时填写填写key为task_id，value为BatchTask的task_id(task_id从批量任务接口获得)。
    *
    * @return $this
    */
    public function setResourceCondition($resourceCondition)
    {
        $this->container['resourceCondition'] = $resourceCondition;
        return $this;
    }

    /**
    * Gets exportFormat
    *  导出格式，目前xls格式。
    *
    * @return string|null
    */
    public function getExportFormat()
    {
        return $this->container['exportFormat'];
    }

    /**
    * Sets exportFormat
    *
    * @param string|null $exportFormat 导出格式，目前xls格式。
    *
    * @return $this
    */
    public function setExportFormat($exportFormat)
    {
        $this->container['exportFormat'] = $exportFormat;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务状态，状态分别有：Processing：执行中，Success：成功，Failed：失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets exportCount
    *  已导出的资源数量。
    *
    * @return int|null
    */
    public function getExportCount()
    {
        return $this->container['exportCount'];
    }

    /**
    * Sets exportCount
    *
    * @param int|null $exportCount 已导出的资源数量。
    *
    * @return $this
    */
    public function setExportCount($exportCount)
    {
        $this->container['exportCount'] = $exportCount;
        return $this;
    }

    /**
    * Gets progress
    *  导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 导出任务的执行进度，取值范围为1-100，当100表示进度为100%，任务完成。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets createTime
    *  在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 在物联网平台创建产品的时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
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
    * @param string|null $endTime 导出任务的执行结束时间，格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z'，如2020-08-12T12:12:12.333Z。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets appType
    *  租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 租户规则的生效范围，默认GLOBAL，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为应用级，如果类型为APP，需要携带app_id，如果不带，生效范围为defaultApp。
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定创建的规则归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

