<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApisRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * xReturnPublishMessages  是否返回专享版API的发布信息。
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据。
    * name  根据API名称模糊查询。
    * description  根据API描述信息模糊查询。
    * createUser  根据API创建用户模糊查询。
    * startTime  根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
    * endTime  根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
    * tags  标签。
    * apiType  API类型。
    * publishStatus  API发布状态。
    * tableName  根据API用到的数据库表名模糊查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'dlmType' => 'string',
            'contentType' => 'string',
            'xReturnPublishMessages' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'description' => 'string',
            'createUser' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'tags' => 'string[]',
            'apiType' => 'string',
            'publishStatus' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * xReturnPublishMessages  是否返回专享版API的发布信息。
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据。
    * name  根据API名称模糊查询。
    * description  根据API描述信息模糊查询。
    * createUser  根据API创建用户模糊查询。
    * startTime  根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
    * endTime  根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
    * tags  标签。
    * apiType  API类型。
    * publishStatus  API发布状态。
    * tableName  根据API用到的数据库表名模糊查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'dlmType' => null,
        'contentType' => null,
        'xReturnPublishMessages' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'name' => null,
        'description' => null,
        'createUser' => null,
        'startTime' => null,
        'endTime' => null,
        'tags' => null,
        'apiType' => null,
        'publishStatus' => null,
        'tableName' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * xReturnPublishMessages  是否返回专享版API的发布信息。
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据。
    * name  根据API名称模糊查询。
    * description  根据API描述信息模糊查询。
    * createUser  根据API创建用户模糊查询。
    * startTime  根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
    * endTime  根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
    * tags  标签。
    * apiType  API类型。
    * publishStatus  API发布状态。
    * tableName  根据API用到的数据库表名模糊查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'dlmType' => 'Dlm-Type',
            'contentType' => 'Content-Type',
            'xReturnPublishMessages' => 'x-return-publish-messages',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'description' => 'description',
            'createUser' => 'create_user',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'tags' => 'tags',
            'apiType' => 'api_type',
            'publishStatus' => 'publish_status',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * xReturnPublishMessages  是否返回专享版API的发布信息。
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据。
    * name  根据API名称模糊查询。
    * description  根据API描述信息模糊查询。
    * createUser  根据API创建用户模糊查询。
    * startTime  根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
    * endTime  根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
    * tags  标签。
    * apiType  API类型。
    * publishStatus  API发布状态。
    * tableName  根据API用到的数据库表名模糊查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'dlmType' => 'setDlmType',
            'contentType' => 'setContentType',
            'xReturnPublishMessages' => 'setXReturnPublishMessages',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'description' => 'setDescription',
            'createUser' => 'setCreateUser',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'tags' => 'setTags',
            'apiType' => 'setApiType',
            'publishStatus' => 'setPublishStatus',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * xReturnPublishMessages  是否返回专享版API的发布信息。
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据。
    * name  根据API名称模糊查询。
    * description  根据API描述信息模糊查询。
    * createUser  根据API创建用户模糊查询。
    * startTime  根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
    * endTime  根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
    * tags  标签。
    * apiType  API类型。
    * publishStatus  API发布状态。
    * tableName  根据API用到的数据库表名模糊查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'dlmType' => 'getDlmType',
            'contentType' => 'getContentType',
            'xReturnPublishMessages' => 'getXReturnPublishMessages',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'description' => 'getDescription',
            'createUser' => 'getCreateUser',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'tags' => 'getTags',
            'apiType' => 'getApiType',
            'publishStatus' => 'getPublishStatus',
            'tableName' => 'getTableName'
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
    const DLM_TYPE_SHARED = 'SHARED';
    const DLM_TYPE_EXCLUSIVE = 'EXCLUSIVE';
    const API_TYPE_API_SPECIFIC_TYPE_CONFIGURATION = 'API_SPECIFIC_TYPE_CONFIGURATION';
    const API_TYPE_API_SPECIFIC_TYPE_SCRIPT = 'API_SPECIFIC_TYPE_SCRIPT';
    const API_TYPE_API_SPECIFIC_TYPE_REGISTER = 'API_SPECIFIC_TYPE_REGISTER';
    const API_TYPE_API_SPECIFIC_TYPE_MYBATIS = 'API_SPECIFIC_TYPE_MYBATIS';
    const API_TYPE_API_SPECIFIC_TYPE_GROOVY = 'API_SPECIFIC_TYPE_GROOVY';
    const PUBLISH_STATUS_PUBLISHED = 'PUBLISHED';
    const PUBLISH_STATUS_NOT_PUBLISHED = 'NOT_PUBLISHED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDlmTypeAllowableValues()
    {
        return [
            self::DLM_TYPE_SHARED,
            self::DLM_TYPE_EXCLUSIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiTypeAllowableValues()
    {
        return [
            self::API_TYPE_API_SPECIFIC_TYPE_CONFIGURATION,
            self::API_TYPE_API_SPECIFIC_TYPE_SCRIPT,
            self::API_TYPE_API_SPECIFIC_TYPE_REGISTER,
            self::API_TYPE_API_SPECIFIC_TYPE_MYBATIS,
            self::API_TYPE_API_SPECIFIC_TYPE_GROOVY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPublishStatusAllowableValues()
    {
        return [
            self::PUBLISH_STATUS_PUBLISHED,
            self::PUBLISH_STATUS_NOT_PUBLISHED,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['dlmType'] = isset($data['dlmType']) ? $data['dlmType'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['xReturnPublishMessages'] = isset($data['xReturnPublishMessages']) ? $data['xReturnPublishMessages'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['publishStatus'] = isset($data['publishStatus']) ? $data['publishStatus'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            $allowedValues = $this->getDlmTypeAllowableValues();
                if (!is_null($this->container['dlmType']) && !in_array($this->container['dlmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dlmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            $allowedValues = $this->getApiTypeAllowableValues();
                if (!is_null($this->container['apiType']) && !in_array($this->container['apiType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPublishStatusAllowableValues();
                if (!is_null($this->container['publishStatus']) && !in_array($this->container['publishStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'publishStatus', must be one of '%s'",
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
    * Gets dlmType
    *  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    *
    * @return string|null
    */
    public function getDlmType()
    {
        return $this->container['dlmType'];
    }

    /**
    * Sets dlmType
    *
    * @param string|null $dlmType 数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    *
    * @return $this
    */
    public function setDlmType($dlmType)
    {
        $this->container['dlmType'] = $dlmType;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
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
    * @param string $contentType 消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets xReturnPublishMessages
    *  是否返回专享版API的发布信息。
    *
    * @return string|null
    */
    public function getXReturnPublishMessages()
    {
        return $this->container['xReturnPublishMessages'];
    }

    /**
    * Sets xReturnPublishMessages
    *
    * @param string|null $xReturnPublishMessages 是否返回专享版API的发布信息。
    *
    * @return $this
    */
    public function setXReturnPublishMessages($xReturnPublishMessages)
    {
        $this->container['xReturnPublishMessages'] = $xReturnPublishMessages;
        return $this;
    }

    /**
    * Gets offset
    *  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
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
    * @param int|null $offset 查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
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
    *  查询条数, 即查询Y条数据。
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
    * @param int|null $limit 查询条数, 即查询Y条数据。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  根据API名称模糊查询。
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
    * @param string|null $name 根据API名称模糊查询。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  根据API描述信息模糊查询。
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
    * @param string|null $description 根据API描述信息模糊查询。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createUser
    *  根据API创建用户模糊查询。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 根据API创建用户模糊查询。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets startTime
    *  根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 根据API创建时间过滤，开始时间，如2024-02-24T16:00:00.000Z。
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
    *  根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
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
    * @param string|null $endTime 根据API创建时间过滤，结束时间，如2024-04-05T15:59:59.998Z。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets tags
    *  标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets apiType
    *  API类型。
    *
    * @return string|null
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param string|null $apiType API类型。
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets publishStatus
    *  API发布状态。
    *
    * @return string|null
    */
    public function getPublishStatus()
    {
        return $this->container['publishStatus'];
    }

    /**
    * Sets publishStatus
    *
    * @param string|null $publishStatus API发布状态。
    *
    * @return $this
    */
    public function setPublishStatus($publishStatus)
    {
        $this->container['publishStatus'] = $publishStatus;
        return $this;
    }

    /**
    * Gets tableName
    *  根据API用到的数据库表名模糊查询。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 根据API用到的数据库表名模糊查询。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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

