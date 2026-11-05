<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSupabaseApplicationApiKeysRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSupabaseApplicationApiKeysRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  xLanguage
    * applicationId  applicationId
    * name  name
    * id  id
    * status  status
    * type  type
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
            'applicationId' => 'string',
            'name' => 'string',
            'id' => 'string',
            'status' => 'string',
            'type' => 'string',
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
    * applicationId  applicationId
    * name  name
    * id  id
    * status  status
    * type  type
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
        'applicationId' => null,
        'name' => null,
        'id' => null,
        'status' => null,
        'type' => null,
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
    * applicationId  applicationId
    * name  name
    * id  id
    * status  status
    * type  type
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
            'applicationId' => 'application_id',
            'name' => 'name',
            'id' => 'id',
            'status' => 'status',
            'type' => 'type',
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
    * applicationId  applicationId
    * name  name
    * id  id
    * status  status
    * type  type
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
            'applicationId' => 'setApplicationId',
            'name' => 'setName',
            'id' => 'setId',
            'status' => 'setStatus',
            'type' => 'setType',
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
    * applicationId  applicationId
    * name  name
    * id  id
    * status  status
    * type  type
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
            'applicationId' => 'getApplicationId',
            'name' => 'getName',
            'id' => 'getId',
            'status' => 'getStatus',
            'type' => 'getType',
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
    const STATUS_NORMAL = 'normal';
    const STATUS_CREATING = 'creating';
    const STATUS_CREATEFAIL = 'createfail';
    const STATUS_DELETED = 'deleted';
    const TYPE_PUBLISHABLE = 'publishable';
    const TYPE_SECRET = 'secret';
    const TYPE_ANON = 'anon';
    const TYPE_SERVICE_ROLE = 'service_role';
    const SORT_KEY_NAME = 'name';
    const SORT_KEY_STATUS = 'status';
    const SORT_KEY_TYPE = 'type';
    const SORT_KEY_CREATED_USER = 'created_user';
    const SORT_KEY_UPDATED_USER = 'updated_user';
    const SORT_KEY_CREATED_TIME = 'created_time';
    const SORT_KEY_UPDATED_TIME = 'updated_time';
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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NORMAL,
            self::STATUS_CREATING,
            self::STATUS_CREATEFAIL,
            self::STATUS_DELETED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PUBLISHABLE,
            self::TYPE_SECRET,
            self::TYPE_ANON,
            self::TYPE_SERVICE_ROLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_NAME,
            self::SORT_KEY_STATUS,
            self::SORT_KEY_TYPE,
            self::SORT_KEY_CREATED_USER,
            self::SORT_KEY_UPDATED_USER,
            self::SORT_KEY_CREATED_TIME,
            self::SORT_KEY_UPDATED_TIME,
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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

        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
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
    * Gets applicationId
    *  applicationId
    *
    * @return string
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string $applicationId applicationId
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  status
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
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  type
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
    * @param string|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

