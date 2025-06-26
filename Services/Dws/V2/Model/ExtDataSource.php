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
    * id  **参数解释**： 数据源ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 数据源名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * connectInfo  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * version  **参数解释**： 版本。 **取值范围**： 不涉及。
    * configureStatus  **参数解释**： 配置状态。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * dataSourceId  **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * dataSourceUpdated  **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
    * extendProperties  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述。 **取值范围**： 不涉及。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 数据源ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 数据源名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * connectInfo  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * version  **参数解释**： 版本。 **取值范围**： 不涉及。
    * configureStatus  **参数解释**： 配置状态。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * dataSourceId  **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * dataSourceUpdated  **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
    * extendProperties  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述。 **取值范围**： 不涉及。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 数据源ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 数据源名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * connectInfo  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * version  **参数解释**： 版本。 **取值范围**： 不涉及。
    * configureStatus  **参数解释**： 配置状态。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * dataSourceId  **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * dataSourceUpdated  **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
    * extendProperties  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述。 **取值范围**： 不涉及。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 数据源ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 数据源名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * connectInfo  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * version  **参数解释**： 版本。 **取值范围**： 不涉及。
    * configureStatus  **参数解释**： 配置状态。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * dataSourceId  **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * dataSourceUpdated  **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
    * extendProperties  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述。 **取值范围**： 不涉及。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 数据源ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 数据源名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * connectInfo  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * version  **参数解释**： 版本。 **取值范围**： 不涉及。
    * configureStatus  **参数解释**： 配置状态。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * dataSourceId  **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * dataSourceUpdated  **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
    * extendProperties  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述。 **取值范围**： 不涉及。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
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
    *  **参数解释**： 数据源ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 数据源ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 数据源名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 数据源名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 类型。 **取值范围**： 不涉及。
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
    * @param string|null $type **参数解释**： 类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 数据库。 **取值范围**： 不涉及。
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
    * @param string|null $connectInfo **参数解释**： 数据库。 **取值范围**： 不涉及。
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
    *  **参数解释**： 用户名。 **取值范围**： 不涉及。
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
    * @param string|null $userName **参数解释**： 用户名。 **取值范围**： 不涉及。
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
    *  **参数解释**： 版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 版本。 **取值范围**： 不涉及。
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
    *  **参数解释**： 配置状态。 **取值范围**： 不涉及。
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
    * @param string|null $configureStatus **参数解释**： 配置状态。 **取值范围**： 不涉及。
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
    *  **参数解释**： 状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： 不涉及。
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
    *  **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
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
    * @param string|null $dataSourceId **参数解释**： 外部数据源ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
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
    * @param string|null $created **参数解释**： 创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 更新时间。 **取值范围**： 不涉及。
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
    * @param string|null $updated **参数解释**： 更新时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
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
    * @param string|null $dataSourceUpdated **参数解释**： 数据源更新时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
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
    * @param object|null $extendProperties **参数解释**： 扩展信息。 **取值范围**： 不涉及。
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
    *  **参数解释**： 描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 描述。 **取值范围**： 不涉及。
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
    *  **参数解释**： 失败原因。 **取值范围**： 不涉及。
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
    * @param string|null $failReason **参数解释**： 失败原因。 **取值范围**： 不涉及。
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

