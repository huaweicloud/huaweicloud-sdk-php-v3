<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatefavoriteResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatefavoriteResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'epsId' => 'string',
            'favoriteResourceId' => 'string',
            'favoriteResourceType' => 'string',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'epsId' => null,
        'favoriteResourceId' => null,
        'favoriteResourceType' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'logStreamId' => null,
        'logStreamName' => null,
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
    * createTime  创建时间
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'epsId' => 'eps_id',
            'favoriteResourceId' => 'favorite_resource_id',
            'favoriteResourceType' => 'favorite_resource_type',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'epsId' => 'setEpsId',
            'favoriteResourceId' => 'setFavoriteResourceId',
            'favoriteResourceType' => 'setFavoriteResourceType',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'epsId' => 'getEpsId',
            'favoriteResourceId' => 'getFavoriteResourceId',
            'favoriteResourceType' => 'getFavoriteResourceType',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['favoriteResourceId'] = isset($data['favoriteResourceId']) ? $data['favoriteResourceId'] : null;
        $this->container['favoriteResourceType'] = isset($data['favoriteResourceType']) ? $data['favoriteResourceType'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
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
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets epsId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目id
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets favoriteResourceId
    *  收藏资源id
    *
    * @return string|null
    */
    public function getFavoriteResourceId()
    {
        return $this->container['favoriteResourceId'];
    }

    /**
    * Sets favoriteResourceId
    *
    * @param string|null $favoriteResourceId 收藏资源id
    *
    * @return $this
    */
    public function setFavoriteResourceId($favoriteResourceId)
    {
        $this->container['favoriteResourceId'] = $favoriteResourceId;
        return $this;
    }

    /**
    * Gets favoriteResourceType
    *  收藏资源类型
    *
    * @return string|null
    */
    public function getFavoriteResourceType()
    {
        return $this->container['favoriteResourceType'];
    }

    /**
    * Sets favoriteResourceType
    *
    * @param string|null $favoriteResourceType 收藏资源类型
    *
    * @return $this
    */
    public function setFavoriteResourceType($favoriteResourceType)
    {
        $this->container['favoriteResourceType'] = $favoriteResourceType;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组id
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
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
    *  日志流id
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
    * @param string|null $logStreamId 日志流id
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
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
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

