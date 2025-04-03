<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  API名称。
    * createUser  API创建人名称。
    * description  API描述。
    * tags  API标签列表。
    * tableName  API所使用到的数据库表名。
    * publishStatusType  API发布状态。
    * apiSpecificTypeStr  API取数方式。
    * startTime  API创建开始时间。
    * endTime  API创建结束时间。
    * authorizationStatusType  authorizationStatusType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'createUser' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'tableName' => 'string',
            'publishStatusType' => 'string',
            'apiSpecificTypeStr' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'authorizationStatusType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  API名称。
    * createUser  API创建人名称。
    * description  API描述。
    * tags  API标签列表。
    * tableName  API所使用到的数据库表名。
    * publishStatusType  API发布状态。
    * apiSpecificTypeStr  API取数方式。
    * startTime  API创建开始时间。
    * endTime  API创建结束时间。
    * authorizationStatusType  authorizationStatusType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'createUser' => null,
        'description' => null,
        'tags' => null,
        'tableName' => null,
        'publishStatusType' => null,
        'apiSpecificTypeStr' => null,
        'startTime' => null,
        'endTime' => null,
        'authorizationStatusType' => null
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
    * name  API名称。
    * createUser  API创建人名称。
    * description  API描述。
    * tags  API标签列表。
    * tableName  API所使用到的数据库表名。
    * publishStatusType  API发布状态。
    * apiSpecificTypeStr  API取数方式。
    * startTime  API创建开始时间。
    * endTime  API创建结束时间。
    * authorizationStatusType  authorizationStatusType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'createUser' => 'create_user',
            'description' => 'description',
            'tags' => 'tags',
            'tableName' => 'table_name',
            'publishStatusType' => 'publish_status_type',
            'apiSpecificTypeStr' => 'api_specific_type_str',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'authorizationStatusType' => 'authorization_status_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  API名称。
    * createUser  API创建人名称。
    * description  API描述。
    * tags  API标签列表。
    * tableName  API所使用到的数据库表名。
    * publishStatusType  API发布状态。
    * apiSpecificTypeStr  API取数方式。
    * startTime  API创建开始时间。
    * endTime  API创建结束时间。
    * authorizationStatusType  authorizationStatusType
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'createUser' => 'setCreateUser',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'tableName' => 'setTableName',
            'publishStatusType' => 'setPublishStatusType',
            'apiSpecificTypeStr' => 'setApiSpecificTypeStr',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'authorizationStatusType' => 'setAuthorizationStatusType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  API名称。
    * createUser  API创建人名称。
    * description  API描述。
    * tags  API标签列表。
    * tableName  API所使用到的数据库表名。
    * publishStatusType  API发布状态。
    * apiSpecificTypeStr  API取数方式。
    * startTime  API创建开始时间。
    * endTime  API创建结束时间。
    * authorizationStatusType  authorizationStatusType
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'createUser' => 'getCreateUser',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'tableName' => 'getTableName',
            'publishStatusType' => 'getPublishStatusType',
            'apiSpecificTypeStr' => 'getApiSpecificTypeStr',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'authorizationStatusType' => 'getAuthorizationStatusType'
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
    const PUBLISH_STATUS_TYPE_PUBLISHED = 'PUBLISHED';
    const PUBLISH_STATUS_TYPE_NOT_PUBLISHED = 'NOT_PUBLISHED';
    const API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_CONFIGURATION = 'API_SPECIFIC_TYPE_CONFIGURATION';
    const API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_SCRIPT = 'API_SPECIFIC_TYPE_SCRIPT';
    const API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_MYBATIS = 'API_SPECIFIC_TYPE_MYBATIS';
    const API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_GROOVY = 'API_SPECIFIC_TYPE_GROOVY';
    const AUTHORIZATION_STATUS_TYPE_NO_AUTHORIZATION_REQUIRED = 'NO_AUTHORIZATION_REQUIRED';
    const AUTHORIZATION_STATUS_TYPE_UNAUTHORIZED = 'UNAUTHORIZED';
    const AUTHORIZATION_STATUS_TYPE_AUTHORIZED = 'AUTHORIZED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPublishStatusTypeAllowableValues()
    {
        return [
            self::PUBLISH_STATUS_TYPE_PUBLISHED,
            self::PUBLISH_STATUS_TYPE_NOT_PUBLISHED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiSpecificTypeStrAllowableValues()
    {
        return [
            self::API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_CONFIGURATION,
            self::API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_SCRIPT,
            self::API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_MYBATIS,
            self::API_SPECIFIC_TYPE_STR_API_SPECIFIC_TYPE_GROOVY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthorizationStatusTypeAllowableValues()
    {
        return [
            self::AUTHORIZATION_STATUS_TYPE_NO_AUTHORIZATION_REQUIRED,
            self::AUTHORIZATION_STATUS_TYPE_UNAUTHORIZED,
            self::AUTHORIZATION_STATUS_TYPE_AUTHORIZED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['publishStatusType'] = isset($data['publishStatusType']) ? $data['publishStatusType'] : null;
        $this->container['apiSpecificTypeStr'] = isset($data['apiSpecificTypeStr']) ? $data['apiSpecificTypeStr'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['authorizationStatusType'] = isset($data['authorizationStatusType']) ? $data['authorizationStatusType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPublishStatusTypeAllowableValues();
                if (!is_null($this->container['publishStatusType']) && !in_array($this->container['publishStatusType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'publishStatusType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApiSpecificTypeStrAllowableValues();
                if (!is_null($this->container['apiSpecificTypeStr']) && !in_array($this->container['apiSpecificTypeStr'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiSpecificTypeStr', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthorizationStatusTypeAllowableValues();
                if (!is_null($this->container['authorizationStatusType']) && !in_array($this->container['authorizationStatusType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authorizationStatusType', must be one of '%s'",
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
    * Gets name
    *  API名称。
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
    * @param string|null $name API名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createUser
    *  API创建人名称。
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
    * @param string|null $createUser API创建人名称。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets description
    *  API描述。
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
    * @param string|null $description API描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  API标签列表。
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
    * @param string[]|null $tags API标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tableName
    *  API所使用到的数据库表名。
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
    * @param string|null $tableName API所使用到的数据库表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets publishStatusType
    *  API发布状态。
    *
    * @return string|null
    */
    public function getPublishStatusType()
    {
        return $this->container['publishStatusType'];
    }

    /**
    * Sets publishStatusType
    *
    * @param string|null $publishStatusType API发布状态。
    *
    * @return $this
    */
    public function setPublishStatusType($publishStatusType)
    {
        $this->container['publishStatusType'] = $publishStatusType;
        return $this;
    }

    /**
    * Gets apiSpecificTypeStr
    *  API取数方式。
    *
    * @return string|null
    */
    public function getApiSpecificTypeStr()
    {
        return $this->container['apiSpecificTypeStr'];
    }

    /**
    * Sets apiSpecificTypeStr
    *
    * @param string|null $apiSpecificTypeStr API取数方式。
    *
    * @return $this
    */
    public function setApiSpecificTypeStr($apiSpecificTypeStr)
    {
        $this->container['apiSpecificTypeStr'] = $apiSpecificTypeStr;
        return $this;
    }

    /**
    * Gets startTime
    *  API创建开始时间。
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
    * @param string|null $startTime API创建开始时间。
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
    *  API创建结束时间。
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
    * @param string|null $endTime API创建结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets authorizationStatusType
    *  authorizationStatusType
    *
    * @return string|null
    */
    public function getAuthorizationStatusType()
    {
        return $this->container['authorizationStatusType'];
    }

    /**
    * Sets authorizationStatusType
    *
    * @param string|null $authorizationStatusType authorizationStatusType
    *
    * @return $this
    */
    public function setAuthorizationStatusType($authorizationStatusType)
    {
        $this->container['authorizationStatusType'] = $authorizationStatusType;
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

