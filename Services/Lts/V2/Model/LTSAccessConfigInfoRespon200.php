<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LTSAccessConfigInfoRespon200 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LTSAccessConfigInfoRespon200';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessConfigId  跨账号日志接入id
    * projectId  项目ID
    * accessConfigName  跨账号日志接入名称
    * accessConfigType  跨账号日志接入类型
    * groupId  日志组ID
    * logGroupName  日志组名称
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * createTime  创建时间
    * agencyLogAccess  agencyLogAccess
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessConfigId' => 'string',
            'projectId' => 'string',
            'accessConfigName' => 'string',
            'accessConfigType' => 'object',
            'groupId' => 'string',
            'logGroupName' => 'string',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'createTime' => 'int',
            'agencyLogAccess' => '\HuaweiCloud\SDK\Lts\V2\Model\PreviewAgencyLogAccessReqBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessConfigId  跨账号日志接入id
    * projectId  项目ID
    * accessConfigName  跨账号日志接入名称
    * accessConfigType  跨账号日志接入类型
    * groupId  日志组ID
    * logGroupName  日志组名称
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * createTime  创建时间
    * agencyLogAccess  agencyLogAccess
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessConfigId' => null,
        'projectId' => null,
        'accessConfigName' => null,
        'accessConfigType' => null,
        'groupId' => null,
        'logGroupName' => null,
        'logStreamId' => null,
        'logStreamName' => null,
        'createTime' => 'int64',
        'agencyLogAccess' => null
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
    * accessConfigId  跨账号日志接入id
    * projectId  项目ID
    * accessConfigName  跨账号日志接入名称
    * accessConfigType  跨账号日志接入类型
    * groupId  日志组ID
    * logGroupName  日志组名称
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * createTime  创建时间
    * agencyLogAccess  agencyLogAccess
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessConfigId' => 'access_config_id',
            'projectId' => 'project_id',
            'accessConfigName' => 'access_config_name',
            'accessConfigType' => 'access_config_type',
            'groupId' => 'group_id',
            'logGroupName' => 'log_group_name',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'createTime' => 'create_time',
            'agencyLogAccess' => 'agency_log_access'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessConfigId  跨账号日志接入id
    * projectId  项目ID
    * accessConfigName  跨账号日志接入名称
    * accessConfigType  跨账号日志接入类型
    * groupId  日志组ID
    * logGroupName  日志组名称
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * createTime  创建时间
    * agencyLogAccess  agencyLogAccess
    *
    * @var string[]
    */
    protected static $setters = [
            'accessConfigId' => 'setAccessConfigId',
            'projectId' => 'setProjectId',
            'accessConfigName' => 'setAccessConfigName',
            'accessConfigType' => 'setAccessConfigType',
            'groupId' => 'setGroupId',
            'logGroupName' => 'setLogGroupName',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'createTime' => 'setCreateTime',
            'agencyLogAccess' => 'setAgencyLogAccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessConfigId  跨账号日志接入id
    * projectId  项目ID
    * accessConfigName  跨账号日志接入名称
    * accessConfigType  跨账号日志接入类型
    * groupId  日志组ID
    * logGroupName  日志组名称
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * createTime  创建时间
    * agencyLogAccess  agencyLogAccess
    *
    * @var string[]
    */
    protected static $getters = [
            'accessConfigId' => 'getAccessConfigId',
            'projectId' => 'getProjectId',
            'accessConfigName' => 'getAccessConfigName',
            'accessConfigType' => 'getAccessConfigType',
            'groupId' => 'getGroupId',
            'logGroupName' => 'getLogGroupName',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'createTime' => 'getCreateTime',
            'agencyLogAccess' => 'getAgencyLogAccess'
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
        $this->container['accessConfigId'] = isset($data['accessConfigId']) ? $data['accessConfigId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['accessConfigName'] = isset($data['accessConfigName']) ? $data['accessConfigName'] : null;
        $this->container['accessConfigType'] = isset($data['accessConfigType']) ? $data['accessConfigType'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['agencyLogAccess'] = isset($data['agencyLogAccess']) ? $data['agencyLogAccess'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets accessConfigId
    *  跨账号日志接入id
    *
    * @return string|null
    */
    public function getAccessConfigId()
    {
        return $this->container['accessConfigId'];
    }

    /**
    * Sets accessConfigId
    *
    * @param string|null $accessConfigId 跨账号日志接入id
    *
    * @return $this
    */
    public function setAccessConfigId($accessConfigId)
    {
        $this->container['accessConfigId'] = $accessConfigId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets accessConfigName
    *  跨账号日志接入名称
    *
    * @return string|null
    */
    public function getAccessConfigName()
    {
        return $this->container['accessConfigName'];
    }

    /**
    * Sets accessConfigName
    *
    * @param string|null $accessConfigName 跨账号日志接入名称
    *
    * @return $this
    */
    public function setAccessConfigName($accessConfigName)
    {
        $this->container['accessConfigName'] = $accessConfigName;
        return $this;
    }

    /**
    * Gets accessConfigType
    *  跨账号日志接入类型
    *
    * @return object|null
    */
    public function getAccessConfigType()
    {
        return $this->container['accessConfigType'];
    }

    /**
    * Sets accessConfigType
    *
    * @param object|null $accessConfigType 跨账号日志接入类型
    *
    * @return $this
    */
    public function setAccessConfigType($accessConfigType)
    {
        $this->container['accessConfigType'] = $accessConfigType;
        return $this;
    }

    /**
    * Gets groupId
    *  日志组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 日志组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets agencyLogAccess
    *  agencyLogAccess
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\PreviewAgencyLogAccessReqBody|null
    */
    public function getAgencyLogAccess()
    {
        return $this->container['agencyLogAccess'];
    }

    /**
    * Sets agencyLogAccess
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\PreviewAgencyLogAccessReqBody|null $agencyLogAccess agencyLogAccess
    *
    * @return $this
    */
    public function setAgencyLogAccess($agencyLogAccess)
    {
        $this->container['agencyLogAccess'] = $agencyLogAccess;
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

