<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateRouteSwitchReqVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateRouteSwitchReqVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iamAccount  iamAccount
    * projectId  项目id。
    * instanceId  实例id。
    * taskId  任务id。
    * switchRouteBeginTime  自动切换路由开始时间。
    * switchRouteEndTime  自动切换路由结束时间。
    * isOpenApi  是否openapi。
    * logicDbName  逻辑库名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iamAccount' => '\HuaweiCloud\SDK\Ddm\V1\Model\IamAccount',
            'projectId' => 'string',
            'instanceId' => 'string',
            'taskId' => 'string',
            'switchRouteBeginTime' => 'string',
            'switchRouteEndTime' => 'string',
            'isOpenApi' => 'bool',
            'logicDbName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iamAccount  iamAccount
    * projectId  项目id。
    * instanceId  实例id。
    * taskId  任务id。
    * switchRouteBeginTime  自动切换路由开始时间。
    * switchRouteEndTime  自动切换路由结束时间。
    * isOpenApi  是否openapi。
    * logicDbName  逻辑库名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iamAccount' => null,
        'projectId' => null,
        'instanceId' => null,
        'taskId' => null,
        'switchRouteBeginTime' => null,
        'switchRouteEndTime' => null,
        'isOpenApi' => null,
        'logicDbName' => null
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
    * iamAccount  iamAccount
    * projectId  项目id。
    * instanceId  实例id。
    * taskId  任务id。
    * switchRouteBeginTime  自动切换路由开始时间。
    * switchRouteEndTime  自动切换路由结束时间。
    * isOpenApi  是否openapi。
    * logicDbName  逻辑库名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iamAccount' => 'iam_account',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'taskId' => 'task_id',
            'switchRouteBeginTime' => 'switch_route_begin_time',
            'switchRouteEndTime' => 'switch_route_end_time',
            'isOpenApi' => 'is_open_api',
            'logicDbName' => 'logic_db_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iamAccount  iamAccount
    * projectId  项目id。
    * instanceId  实例id。
    * taskId  任务id。
    * switchRouteBeginTime  自动切换路由开始时间。
    * switchRouteEndTime  自动切换路由结束时间。
    * isOpenApi  是否openapi。
    * logicDbName  逻辑库名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'iamAccount' => 'setIamAccount',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'taskId' => 'setTaskId',
            'switchRouteBeginTime' => 'setSwitchRouteBeginTime',
            'switchRouteEndTime' => 'setSwitchRouteEndTime',
            'isOpenApi' => 'setIsOpenApi',
            'logicDbName' => 'setLogicDbName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iamAccount  iamAccount
    * projectId  项目id。
    * instanceId  实例id。
    * taskId  任务id。
    * switchRouteBeginTime  自动切换路由开始时间。
    * switchRouteEndTime  自动切换路由结束时间。
    * isOpenApi  是否openapi。
    * logicDbName  逻辑库名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'iamAccount' => 'getIamAccount',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'taskId' => 'getTaskId',
            'switchRouteBeginTime' => 'getSwitchRouteBeginTime',
            'switchRouteEndTime' => 'getSwitchRouteEndTime',
            'isOpenApi' => 'getIsOpenApi',
            'logicDbName' => 'getLogicDbName'
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
        $this->container['iamAccount'] = isset($data['iamAccount']) ? $data['iamAccount'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['switchRouteBeginTime'] = isset($data['switchRouteBeginTime']) ? $data['switchRouteBeginTime'] : null;
        $this->container['switchRouteEndTime'] = isset($data['switchRouteEndTime']) ? $data['switchRouteEndTime'] : null;
        $this->container['isOpenApi'] = isset($data['isOpenApi']) ? $data['isOpenApi'] : null;
        $this->container['logicDbName'] = isset($data['logicDbName']) ? $data['logicDbName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['switchRouteBeginTime']) && (mb_strlen($this->container['switchRouteBeginTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'switchRouteBeginTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['switchRouteBeginTime']) && (mb_strlen($this->container['switchRouteBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'switchRouteBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['switchRouteEndTime']) && (mb_strlen($this->container['switchRouteEndTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'switchRouteEndTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['switchRouteEndTime']) && (mb_strlen($this->container['switchRouteEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'switchRouteEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logicDbName']) && (mb_strlen($this->container['logicDbName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'logicDbName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['logicDbName']) && (mb_strlen($this->container['logicDbName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logicDbName', the character length must be bigger than or equal to 1.";
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
    * Gets iamAccount
    *  iamAccount
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\IamAccount|null
    */
    public function getIamAccount()
    {
        return $this->container['iamAccount'];
    }

    /**
    * Sets iamAccount
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\IamAccount|null $iamAccount iamAccount
    *
    * @return $this
    */
    public function setIamAccount($iamAccount)
    {
        $this->container['iamAccount'] = $iamAccount;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id。
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
    * @param string|null $taskId 任务id。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets switchRouteBeginTime
    *  自动切换路由开始时间。
    *
    * @return string|null
    */
    public function getSwitchRouteBeginTime()
    {
        return $this->container['switchRouteBeginTime'];
    }

    /**
    * Sets switchRouteBeginTime
    *
    * @param string|null $switchRouteBeginTime 自动切换路由开始时间。
    *
    * @return $this
    */
    public function setSwitchRouteBeginTime($switchRouteBeginTime)
    {
        $this->container['switchRouteBeginTime'] = $switchRouteBeginTime;
        return $this;
    }

    /**
    * Gets switchRouteEndTime
    *  自动切换路由结束时间。
    *
    * @return string|null
    */
    public function getSwitchRouteEndTime()
    {
        return $this->container['switchRouteEndTime'];
    }

    /**
    * Sets switchRouteEndTime
    *
    * @param string|null $switchRouteEndTime 自动切换路由结束时间。
    *
    * @return $this
    */
    public function setSwitchRouteEndTime($switchRouteEndTime)
    {
        $this->container['switchRouteEndTime'] = $switchRouteEndTime;
        return $this;
    }

    /**
    * Gets isOpenApi
    *  是否openapi。
    *
    * @return bool|null
    */
    public function getIsOpenApi()
    {
        return $this->container['isOpenApi'];
    }

    /**
    * Sets isOpenApi
    *
    * @param bool|null $isOpenApi 是否openapi。
    *
    * @return $this
    */
    public function setIsOpenApi($isOpenApi)
    {
        $this->container['isOpenApi'] = $isOpenApi;
        return $this;
    }

    /**
    * Gets logicDbName
    *  逻辑库名称。
    *
    * @return string|null
    */
    public function getLogicDbName()
    {
        return $this->container['logicDbName'];
    }

    /**
    * Sets logicDbName
    *
    * @param string|null $logicDbName 逻辑库名称。
    *
    * @return $this
    */
    public function setLogicDbName($logicDbName)
    {
        $this->container['logicDbName'] = $logicDbName;
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

