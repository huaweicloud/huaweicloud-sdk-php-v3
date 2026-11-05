<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiApplicationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiApplicationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  xLanguage
    * name  按应用名称查询。
    * id  按应用ID查询。
    * type  按应用类型查询。Supabase传supabase。
    * mode  按部署模式查询。
    * status  按状态查询。
    * managedInstanceId  按关联PG实例ID查询。
    * managedInstanceName  按关联PG实例名称查询。
    * enableSsl  按是否开启SSL查询。
    * startCreatedTime  startCreatedTime
    * endCreatedTime  endCreatedTime
    * sortKey  sortKey
    * sortDir  sortDir
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'name' => 'string',
            'id' => 'string',
            'type' => 'string',
            'mode' => 'string',
            'status' => 'string',
            'managedInstanceId' => 'string',
            'managedInstanceName' => 'string',
            'enableSsl' => 'bool',
            'startCreatedTime' => 'string',
            'endCreatedTime' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  xLanguage
    * name  按应用名称查询。
    * id  按应用ID查询。
    * type  按应用类型查询。Supabase传supabase。
    * mode  按部署模式查询。
    * status  按状态查询。
    * managedInstanceId  按关联PG实例ID查询。
    * managedInstanceName  按关联PG实例名称查询。
    * enableSsl  按是否开启SSL查询。
    * startCreatedTime  startCreatedTime
    * endCreatedTime  endCreatedTime
    * sortKey  sortKey
    * sortDir  sortDir
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'name' => null,
        'id' => null,
        'type' => null,
        'mode' => null,
        'status' => null,
        'managedInstanceId' => null,
        'managedInstanceName' => null,
        'enableSsl' => null,
        'startCreatedTime' => null,
        'endCreatedTime' => null,
        'sortKey' => null,
        'sortDir' => null,
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
    * xLanguage  xLanguage
    * name  按应用名称查询。
    * id  按应用ID查询。
    * type  按应用类型查询。Supabase传supabase。
    * mode  按部署模式查询。
    * status  按状态查询。
    * managedInstanceId  按关联PG实例ID查询。
    * managedInstanceName  按关联PG实例名称查询。
    * enableSsl  按是否开启SSL查询。
    * startCreatedTime  startCreatedTime
    * endCreatedTime  endCreatedTime
    * sortKey  sortKey
    * sortDir  sortDir
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'name' => 'name',
            'id' => 'id',
            'type' => 'type',
            'mode' => 'mode',
            'status' => 'status',
            'managedInstanceId' => 'managed_instance_id',
            'managedInstanceName' => 'managed_instance_name',
            'enableSsl' => 'enable_ssl',
            'startCreatedTime' => 'start_created_time',
            'endCreatedTime' => 'end_created_time',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  xLanguage
    * name  按应用名称查询。
    * id  按应用ID查询。
    * type  按应用类型查询。Supabase传supabase。
    * mode  按部署模式查询。
    * status  按状态查询。
    * managedInstanceId  按关联PG实例ID查询。
    * managedInstanceName  按关联PG实例名称查询。
    * enableSsl  按是否开启SSL查询。
    * startCreatedTime  startCreatedTime
    * endCreatedTime  endCreatedTime
    * sortKey  sortKey
    * sortDir  sortDir
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'name' => 'setName',
            'id' => 'setId',
            'type' => 'setType',
            'mode' => 'setMode',
            'status' => 'setStatus',
            'managedInstanceId' => 'setManagedInstanceId',
            'managedInstanceName' => 'setManagedInstanceName',
            'enableSsl' => 'setEnableSsl',
            'startCreatedTime' => 'setStartCreatedTime',
            'endCreatedTime' => 'setEndCreatedTime',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  xLanguage
    * name  按应用名称查询。
    * id  按应用ID查询。
    * type  按应用类型查询。Supabase传supabase。
    * mode  按部署模式查询。
    * status  按状态查询。
    * managedInstanceId  按关联PG实例ID查询。
    * managedInstanceName  按关联PG实例名称查询。
    * enableSsl  按是否开启SSL查询。
    * startCreatedTime  startCreatedTime
    * endCreatedTime  endCreatedTime
    * sortKey  sortKey
    * sortDir  sortDir
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'name' => 'getName',
            'id' => 'getId',
            'type' => 'getType',
            'mode' => 'getMode',
            'status' => 'getStatus',
            'managedInstanceId' => 'getManagedInstanceId',
            'managedInstanceName' => 'getManagedInstanceName',
            'enableSsl' => 'getEnableSsl',
            'startCreatedTime' => 'getStartCreatedTime',
            'endCreatedTime' => 'getEndCreatedTime',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    const SORT_DIR_DESC = 'desc';
    const SORT_DIR_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_DESC,
            self::SORT_DIR_ASC,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['managedInstanceId'] = isset($data['managedInstanceId']) ? $data['managedInstanceId'] : null;
        $this->container['managedInstanceName'] = isset($data['managedInstanceName']) ? $data['managedInstanceName'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['startCreatedTime'] = isset($data['startCreatedTime']) ? $data['startCreatedTime'] : null;
        $this->container['endCreatedTime'] = isset($data['endCreatedTime']) ? $data['endCreatedTime'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets xLanguage
    *  xLanguage
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
    * @param string|null $xLanguage xLanguage
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets name
    *  按应用名称查询。
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
    * @param string|null $name 按应用名称查询。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  按应用ID查询。
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
    * @param string|null $id 按应用ID查询。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  按应用类型查询。Supabase传supabase。
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
    * @param string|null $type 按应用类型查询。Supabase传supabase。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets mode
    *  按部署模式查询。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 按部署模式查询。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets status
    *  按状态查询。
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
    * @param string|null $status 按状态查询。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets managedInstanceId
    *  按关联PG实例ID查询。
    *
    * @return string|null
    */
    public function getManagedInstanceId()
    {
        return $this->container['managedInstanceId'];
    }

    /**
    * Sets managedInstanceId
    *
    * @param string|null $managedInstanceId 按关联PG实例ID查询。
    *
    * @return $this
    */
    public function setManagedInstanceId($managedInstanceId)
    {
        $this->container['managedInstanceId'] = $managedInstanceId;
        return $this;
    }

    /**
    * Gets managedInstanceName
    *  按关联PG实例名称查询。
    *
    * @return string|null
    */
    public function getManagedInstanceName()
    {
        return $this->container['managedInstanceName'];
    }

    /**
    * Sets managedInstanceName
    *
    * @param string|null $managedInstanceName 按关联PG实例名称查询。
    *
    * @return $this
    */
    public function setManagedInstanceName($managedInstanceName)
    {
        $this->container['managedInstanceName'] = $managedInstanceName;
        return $this;
    }

    /**
    * Gets enableSsl
    *  按是否开启SSL查询。
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl 按是否开启SSL查询。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets startCreatedTime
    *  startCreatedTime
    *
    * @return string|null
    */
    public function getStartCreatedTime()
    {
        return $this->container['startCreatedTime'];
    }

    /**
    * Sets startCreatedTime
    *
    * @param string|null $startCreatedTime startCreatedTime
    *
    * @return $this
    */
    public function setStartCreatedTime($startCreatedTime)
    {
        $this->container['startCreatedTime'] = $startCreatedTime;
        return $this;
    }

    /**
    * Gets endCreatedTime
    *  endCreatedTime
    *
    * @return string|null
    */
    public function getEndCreatedTime()
    {
        return $this->container['endCreatedTime'];
    }

    /**
    * Sets endCreatedTime
    *
    * @param string|null $endCreatedTime endCreatedTime
    *
    * @return $this
    */
    public function setEndCreatedTime($endCreatedTime)
    {
        $this->container['endCreatedTime'] = $endCreatedTime;
        return $this;
    }

    /**
    * Gets sortKey
    *  sortKey
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey sortKey
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  sortDir
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir sortDir
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets offset
    *  offset
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
    * @param int|null $offset offset
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
    *  limit
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
    * @param int|null $limit limit
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

