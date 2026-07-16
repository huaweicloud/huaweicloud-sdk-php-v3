<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDrsTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDrsTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetInstanceId  目标实例id
    * targetUserName  目标实例用户账号
    * targetUserPassword  目标实例用户密码
    * sourceUserName  源实例用户账号
    * sourceUserPassword  源实例用户密码
    * enterpriseProjectId  企业项目id
    * drsNodeType  Drs实例规格
    * databaseList  数据库名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetInstanceId' => 'string',
            'targetUserName' => 'string',
            'targetUserPassword' => 'string',
            'sourceUserName' => 'string',
            'sourceUserPassword' => 'string',
            'enterpriseProjectId' => 'string',
            'drsNodeType' => 'string',
            'databaseList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetInstanceId  目标实例id
    * targetUserName  目标实例用户账号
    * targetUserPassword  目标实例用户密码
    * sourceUserName  源实例用户账号
    * sourceUserPassword  源实例用户密码
    * enterpriseProjectId  企业项目id
    * drsNodeType  Drs实例规格
    * databaseList  数据库名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetInstanceId' => null,
        'targetUserName' => null,
        'targetUserPassword' => null,
        'sourceUserName' => null,
        'sourceUserPassword' => null,
        'enterpriseProjectId' => null,
        'drsNodeType' => null,
        'databaseList' => null
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
    * targetInstanceId  目标实例id
    * targetUserName  目标实例用户账号
    * targetUserPassword  目标实例用户密码
    * sourceUserName  源实例用户账号
    * sourceUserPassword  源实例用户密码
    * enterpriseProjectId  企业项目id
    * drsNodeType  Drs实例规格
    * databaseList  数据库名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetInstanceId' => 'target_instance_id',
            'targetUserName' => 'target_user_name',
            'targetUserPassword' => 'target_user_password',
            'sourceUserName' => 'source_user_name',
            'sourceUserPassword' => 'source_user_password',
            'enterpriseProjectId' => 'enterprise_project_id',
            'drsNodeType' => 'drs_node_type',
            'databaseList' => 'database_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetInstanceId  目标实例id
    * targetUserName  目标实例用户账号
    * targetUserPassword  目标实例用户密码
    * sourceUserName  源实例用户账号
    * sourceUserPassword  源实例用户密码
    * enterpriseProjectId  企业项目id
    * drsNodeType  Drs实例规格
    * databaseList  数据库名称
    *
    * @var string[]
    */
    protected static $setters = [
            'targetInstanceId' => 'setTargetInstanceId',
            'targetUserName' => 'setTargetUserName',
            'targetUserPassword' => 'setTargetUserPassword',
            'sourceUserName' => 'setSourceUserName',
            'sourceUserPassword' => 'setSourceUserPassword',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'drsNodeType' => 'setDrsNodeType',
            'databaseList' => 'setDatabaseList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetInstanceId  目标实例id
    * targetUserName  目标实例用户账号
    * targetUserPassword  目标实例用户密码
    * sourceUserName  源实例用户账号
    * sourceUserPassword  源实例用户密码
    * enterpriseProjectId  企业项目id
    * drsNodeType  Drs实例规格
    * databaseList  数据库名称
    *
    * @var string[]
    */
    protected static $getters = [
            'targetInstanceId' => 'getTargetInstanceId',
            'targetUserName' => 'getTargetUserName',
            'targetUserPassword' => 'getTargetUserPassword',
            'sourceUserName' => 'getSourceUserName',
            'sourceUserPassword' => 'getSourceUserPassword',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'drsNodeType' => 'getDrsNodeType',
            'databaseList' => 'getDatabaseList'
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
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['targetUserName'] = isset($data['targetUserName']) ? $data['targetUserName'] : null;
        $this->container['targetUserPassword'] = isset($data['targetUserPassword']) ? $data['targetUserPassword'] : null;
        $this->container['sourceUserName'] = isset($data['sourceUserName']) ? $data['sourceUserName'] : null;
        $this->container['sourceUserPassword'] = isset($data['sourceUserPassword']) ? $data['sourceUserPassword'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['drsNodeType'] = isset($data['drsNodeType']) ? $data['drsNodeType'] : null;
        $this->container['databaseList'] = isset($data['databaseList']) ? $data['databaseList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetInstanceId'] === null) {
            $invalidProperties[] = "'targetInstanceId' can't be null";
        }
        if ($this->container['targetUserName'] === null) {
            $invalidProperties[] = "'targetUserName' can't be null";
        }
        if ($this->container['targetUserPassword'] === null) {
            $invalidProperties[] = "'targetUserPassword' can't be null";
        }
        if ($this->container['sourceUserName'] === null) {
            $invalidProperties[] = "'sourceUserName' can't be null";
        }
        if ($this->container['sourceUserPassword'] === null) {
            $invalidProperties[] = "'sourceUserPassword' can't be null";
        }
        if ($this->container['drsNodeType'] === null) {
            $invalidProperties[] = "'drsNodeType' can't be null";
        }
        if ($this->container['databaseList'] === null) {
            $invalidProperties[] = "'databaseList' can't be null";
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
    * Gets targetInstanceId
    *  目标实例id
    *
    * @return string
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string $targetInstanceId 目标实例id
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets targetUserName
    *  目标实例用户账号
    *
    * @return string
    */
    public function getTargetUserName()
    {
        return $this->container['targetUserName'];
    }

    /**
    * Sets targetUserName
    *
    * @param string $targetUserName 目标实例用户账号
    *
    * @return $this
    */
    public function setTargetUserName($targetUserName)
    {
        $this->container['targetUserName'] = $targetUserName;
        return $this;
    }

    /**
    * Gets targetUserPassword
    *  目标实例用户密码
    *
    * @return string
    */
    public function getTargetUserPassword()
    {
        return $this->container['targetUserPassword'];
    }

    /**
    * Sets targetUserPassword
    *
    * @param string $targetUserPassword 目标实例用户密码
    *
    * @return $this
    */
    public function setTargetUserPassword($targetUserPassword)
    {
        $this->container['targetUserPassword'] = $targetUserPassword;
        return $this;
    }

    /**
    * Gets sourceUserName
    *  源实例用户账号
    *
    * @return string
    */
    public function getSourceUserName()
    {
        return $this->container['sourceUserName'];
    }

    /**
    * Sets sourceUserName
    *
    * @param string $sourceUserName 源实例用户账号
    *
    * @return $this
    */
    public function setSourceUserName($sourceUserName)
    {
        $this->container['sourceUserName'] = $sourceUserName;
        return $this;
    }

    /**
    * Gets sourceUserPassword
    *  源实例用户密码
    *
    * @return string
    */
    public function getSourceUserPassword()
    {
        return $this->container['sourceUserPassword'];
    }

    /**
    * Sets sourceUserPassword
    *
    * @param string $sourceUserPassword 源实例用户密码
    *
    * @return $this
    */
    public function setSourceUserPassword($sourceUserPassword)
    {
        $this->container['sourceUserPassword'] = $sourceUserPassword;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets drsNodeType
    *  Drs实例规格
    *
    * @return string
    */
    public function getDrsNodeType()
    {
        return $this->container['drsNodeType'];
    }

    /**
    * Sets drsNodeType
    *
    * @param string $drsNodeType Drs实例规格
    *
    * @return $this
    */
    public function setDrsNodeType($drsNodeType)
    {
        $this->container['drsNodeType'] = $drsNodeType;
        return $this;
    }

    /**
    * Gets databaseList
    *  数据库名称
    *
    * @return string[]
    */
    public function getDatabaseList()
    {
        return $this->container['databaseList'];
    }

    /**
    * Sets databaseList
    *
    * @param string[] $databaseList 数据库名称
    *
    * @return $this
    */
    public function setDatabaseList($databaseList)
    {
        $this->container['databaseList'] = $databaseList;
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

