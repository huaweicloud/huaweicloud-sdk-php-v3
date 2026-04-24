<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSearchFactoryBaselinesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSearchFactoryBaselinesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * ownerName  责任人名称。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    * orderBy  排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    * enable  开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'xProjectId' => 'string',
            'workspace' => 'string',
            'workspaceId' => 'string',
            'name' => 'string',
            'ownerName' => 'string',
            'priority' => 'int',
            'orderBy' => 'string',
            'enable' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * ownerName  责任人名称。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    * orderBy  排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    * enable  开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'xProjectId' => null,
        'workspace' => null,
        'workspaceId' => null,
        'name' => null,
        'ownerName' => null,
        'priority' => 'int32',
        'orderBy' => null,
        'enable' => null,
        'offset' => null,
        'limit' => null
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
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * ownerName  责任人名称。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    * orderBy  排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    * enable  开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'xProjectId' => 'X-Project-Id',
            'workspace' => 'workspace',
            'workspaceId' => 'workspace_id',
            'name' => 'name',
            'ownerName' => 'owner_name',
            'priority' => 'priority',
            'orderBy' => 'order_by',
            'enable' => 'enable',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * ownerName  责任人名称。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    * orderBy  排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    * enable  开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'xProjectId' => 'setXProjectId',
            'workspace' => 'setWorkspace',
            'workspaceId' => 'setWorkspaceId',
            'name' => 'setName',
            'ownerName' => 'setOwnerName',
            'priority' => 'setPriority',
            'orderBy' => 'setOrderBy',
            'enable' => 'setEnable',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * ownerName  责任人名称。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    * orderBy  排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    * enable  开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'xProjectId' => 'getXProjectId',
            'workspace' => 'getWorkspace',
            'workspaceId' => 'getWorkspaceId',
            'name' => 'getName',
            'ownerName' => 'getOwnerName',
            'priority' => 'getPriority',
            'orderBy' => 'getOrderBy',
            'enable' => 'getEnable',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) < 5)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  DataArts Studio实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId DataArts Studio实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets name
    *  基线任务名称。
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
    * @param string|null $name 基线任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人名称。
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人名称。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets priority
    *  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则，取值如下： - priority asc: 按照优先级升序。 - priority desc: 按照优先级降序。 默认不排序。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets enable
    *  开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 开启基线任务。 true: 开启基线任务，系统将会监控基线任务以及其依赖链上游的所有任务。 false: 关闭基线任务，系统不会监控基线任务以及其依赖链上游的所有任务。 默认查询全部。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets offset
    *  分页列表的页数，默认值为1。取值范围大于等于1。
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
    * @param int|null $offset 分页列表的页数，默认值为1。取值范围大于等于1。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
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
    * @param int|null $limit 分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

