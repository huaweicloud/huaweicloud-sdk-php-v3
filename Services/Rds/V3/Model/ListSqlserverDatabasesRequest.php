<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlserverDatabasesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlserverDatabasesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言
    * instanceId  实例ID。
    * page  分页页码，从1开始。
    * limit  每页数据条数。取值范围[1, 100]。
    * dbName  数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    * recoverModel  数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'page' => 'int',
            'limit' => 'int',
            'dbName' => 'string',
            'recoverModel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言
    * instanceId  实例ID。
    * page  分页页码，从1开始。
    * limit  每页数据条数。取值范围[1, 100]。
    * dbName  数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    * recoverModel  数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'page' => null,
        'limit' => null,
        'dbName' => null,
        'recoverModel' => null
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
    * xLanguage  语言
    * instanceId  实例ID。
    * page  分页页码，从1开始。
    * limit  每页数据条数。取值范围[1, 100]。
    * dbName  数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    * recoverModel  数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'page' => 'page',
            'limit' => 'limit',
            'dbName' => 'db-name',
            'recoverModel' => 'recover_model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言
    * instanceId  实例ID。
    * page  分页页码，从1开始。
    * limit  每页数据条数。取值范围[1, 100]。
    * dbName  数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    * recoverModel  数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'page' => 'setPage',
            'limit' => 'setLimit',
            'dbName' => 'setDbName',
            'recoverModel' => 'setRecoverModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言
    * instanceId  实例ID。
    * page  分页页码，从1开始。
    * limit  每页数据条数。取值范围[1, 100]。
    * dbName  数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    * recoverModel  数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'page' => 'getPage',
            'limit' => 'getLimit',
            'dbName' => 'getDbName',
            'recoverModel' => 'getRecoverModel'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['recoverModel'] = isset($data['recoverModel']) ? $data['recoverModel'] : null;
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
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    * Gets xLanguage
    *  语言
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
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
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets page
    *  分页页码，从1开始。
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 分页页码，从1开始。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets limit
    *  每页数据条数。取值范围[1, 100]。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页数据条数。取值范围[1, 100]。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名。当指定该参数时，page和limit参数需要传入但不生效。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets recoverModel
    *  数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @return string|null
    */
    public function getRecoverModel()
    {
        return $this->container['recoverModel'];
    }

    /**
    * Sets recoverModel
    *
    * @param string|null $recoverModel 数据库恢复健康模式，取值：FULL  ：完整模式，SIMPLE  ：简单模式，BUlK_LOGGED ：大容量日志恢复模式（该参数仅用于SQL server引擎）
    *
    * @return $this
    */
    public function setRecoverModel($recoverModel)
    {
        $this->container['recoverModel'] = $recoverModel;
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
