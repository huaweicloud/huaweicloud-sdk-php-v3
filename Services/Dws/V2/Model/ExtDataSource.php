<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtDataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtDataSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id。
    * name  数据源名称。
    * type  类型。
    * connectInfo  数据库。
    * userName  用户名。
    * version  版本。
    * configureStatus  配置状态。
    * status  状态。
    * dataSourceId  数据源id。
    * created  创建时间。
    * updated  更新时间。
    * dataSourceUpdated  数据源更新时间。
    * extendProperties  扩展信息。
    * description  描述。
    * failReason  失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'connectInfo' => 'string',
            'userName' => 'string',
            'version' => 'string',
            'configureStatus' => 'string',
            'status' => 'string',
            'dataSourceId' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'dataSourceUpdated' => 'string',
            'extendProperties' => 'object',
            'description' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id。
    * name  数据源名称。
    * type  类型。
    * connectInfo  数据库。
    * userName  用户名。
    * version  版本。
    * configureStatus  配置状态。
    * status  状态。
    * dataSourceId  数据源id。
    * created  创建时间。
    * updated  更新时间。
    * dataSourceUpdated  数据源更新时间。
    * extendProperties  扩展信息。
    * description  描述。
    * failReason  失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'connectInfo' => null,
        'userName' => null,
        'version' => null,
        'configureStatus' => null,
        'status' => null,
        'dataSourceId' => null,
        'created' => null,
        'updated' => null,
        'dataSourceUpdated' => null,
        'extendProperties' => null,
        'description' => null,
        'failReason' => null
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
    * id  id。
    * name  数据源名称。
    * type  类型。
    * connectInfo  数据库。
    * userName  用户名。
    * version  版本。
    * configureStatus  配置状态。
    * status  状态。
    * dataSourceId  数据源id。
    * created  创建时间。
    * updated  更新时间。
    * dataSourceUpdated  数据源更新时间。
    * extendProperties  扩展信息。
    * description  描述。
    * failReason  失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'connectInfo' => 'connect_info',
            'userName' => 'user_name',
            'version' => 'version',
            'configureStatus' => 'configure_status',
            'status' => 'status',
            'dataSourceId' => 'data_source_id',
            'created' => 'created',
            'updated' => 'updated',
            'dataSourceUpdated' => 'data_source_updated',
            'extendProperties' => 'extend_properties',
            'description' => 'description',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id。
    * name  数据源名称。
    * type  类型。
    * connectInfo  数据库。
    * userName  用户名。
    * version  版本。
    * configureStatus  配置状态。
    * status  状态。
    * dataSourceId  数据源id。
    * created  创建时间。
    * updated  更新时间。
    * dataSourceUpdated  数据源更新时间。
    * extendProperties  扩展信息。
    * description  描述。
    * failReason  失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'connectInfo' => 'setConnectInfo',
            'userName' => 'setUserName',
            'version' => 'setVersion',
            'configureStatus' => 'setConfigureStatus',
            'status' => 'setStatus',
            'dataSourceId' => 'setDataSourceId',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'dataSourceUpdated' => 'setDataSourceUpdated',
            'extendProperties' => 'setExtendProperties',
            'description' => 'setDescription',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id。
    * name  数据源名称。
    * type  类型。
    * connectInfo  数据库。
    * userName  用户名。
    * version  版本。
    * configureStatus  配置状态。
    * status  状态。
    * dataSourceId  数据源id。
    * created  创建时间。
    * updated  更新时间。
    * dataSourceUpdated  数据源更新时间。
    * extendProperties  扩展信息。
    * description  描述。
    * failReason  失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'connectInfo' => 'getConnectInfo',
            'userName' => 'getUserName',
            'version' => 'getVersion',
            'configureStatus' => 'getConfigureStatus',
            'status' => 'getStatus',
            'dataSourceId' => 'getDataSourceId',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'dataSourceUpdated' => 'getDataSourceUpdated',
            'extendProperties' => 'getExtendProperties',
            'description' => 'getDescription',
            'failReason' => 'getFailReason'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['connectInfo'] = isset($data['connectInfo']) ? $data['connectInfo'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['configureStatus'] = isset($data['configureStatus']) ? $data['configureStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dataSourceId'] = isset($data['dataSourceId']) ? $data['dataSourceId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['dataSourceUpdated'] = isset($data['dataSourceUpdated']) ? $data['dataSourceUpdated'] : null;
        $this->container['extendProperties'] = isset($data['extendProperties']) ? $data['extendProperties'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
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
    * Gets id
    *  id。
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
    * @param string|null $id id。
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
    *  数据源名称。
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
    * @param string|null $name 数据源名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets connectInfo
    *  数据库。
    *
    * @return string|null
    */
    public function getConnectInfo()
    {
        return $this->container['connectInfo'];
    }

    /**
    * Sets connectInfo
    *
    * @param string|null $connectInfo 数据库。
    *
    * @return $this
    */
    public function setConnectInfo($connectInfo)
    {
        $this->container['connectInfo'] = $connectInfo;
        return $this;
    }

    /**
    * Gets userName
    *  用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets version
    *  版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets configureStatus
    *  配置状态。
    *
    * @return string|null
    */
    public function getConfigureStatus()
    {
        return $this->container['configureStatus'];
    }

    /**
    * Sets configureStatus
    *
    * @param string|null $configureStatus 配置状态。
    *
    * @return $this
    */
    public function setConfigureStatus($configureStatus)
    {
        $this->container['configureStatus'] = $configureStatus;
        return $this;
    }

    /**
    * Gets status
    *  状态。
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
    * @param string|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dataSourceId
    *  数据源id。
    *
    * @return string|null
    */
    public function getDataSourceId()
    {
        return $this->container['dataSourceId'];
    }

    /**
    * Sets dataSourceId
    *
    * @param string|null $dataSourceId 数据源id。
    *
    * @return $this
    */
    public function setDataSourceId($dataSourceId)
    {
        $this->container['dataSourceId'] = $dataSourceId;
        return $this;
    }

    /**
    * Gets created
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets dataSourceUpdated
    *  数据源更新时间。
    *
    * @return string|null
    */
    public function getDataSourceUpdated()
    {
        return $this->container['dataSourceUpdated'];
    }

    /**
    * Sets dataSourceUpdated
    *
    * @param string|null $dataSourceUpdated 数据源更新时间。
    *
    * @return $this
    */
    public function setDataSourceUpdated($dataSourceUpdated)
    {
        $this->container['dataSourceUpdated'] = $dataSourceUpdated;
        return $this;
    }

    /**
    * Gets extendProperties
    *  扩展信息。
    *
    * @return object|null
    */
    public function getExtendProperties()
    {
        return $this->container['extendProperties'];
    }

    /**
    * Sets extendProperties
    *
    * @param object|null $extendProperties 扩展信息。
    *
    * @return $this
    */
    public function setExtendProperties($extendProperties)
    {
        $this->container['extendProperties'] = $extendProperties;
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
    * Gets failReason
    *  失败原因。
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
    * @param string|null $failReason 失败原因。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

