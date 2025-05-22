<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectIterationsV4Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectIterationsV4Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * updatedTimeInterval  更新迭代的时间(查询的起始时间,查询的结束时间)
    * includeDeleted  是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'updatedTimeInterval' => 'string',
            'includeDeleted' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * updatedTimeInterval  更新迭代的时间(查询的起始时间,查询的结束时间)
    * includeDeleted  是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'updatedTimeInterval' => null,
        'includeDeleted' => null
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
    * projectId  devcloud项目的32位id
    * updatedTimeInterval  更新迭代的时间(查询的起始时间,查询的结束时间)
    * includeDeleted  是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'updatedTimeInterval' => 'updated_time_interval',
            'includeDeleted' => 'include_deleted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  devcloud项目的32位id
    * updatedTimeInterval  更新迭代的时间(查询的起始时间,查询的结束时间)
    * includeDeleted  是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'updatedTimeInterval' => 'setUpdatedTimeInterval',
            'includeDeleted' => 'setIncludeDeleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  devcloud项目的32位id
    * updatedTimeInterval  更新迭代的时间(查询的起始时间,查询的结束时间)
    * includeDeleted  是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'updatedTimeInterval' => 'getUpdatedTimeInterval',
            'includeDeleted' => 'getIncludeDeleted'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updatedTimeInterval'] = isset($data['updatedTimeInterval']) ? $data['updatedTimeInterval'] : null;
        $this->container['includeDeleted'] = isset($data['includeDeleted']) ? $data['includeDeleted'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
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
    * Gets projectId
    *  devcloud项目的32位id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId devcloud项目的32位id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets updatedTimeInterval
    *  更新迭代的时间(查询的起始时间,查询的结束时间)
    *
    * @return string|null
    */
    public function getUpdatedTimeInterval()
    {
        return $this->container['updatedTimeInterval'];
    }

    /**
    * Sets updatedTimeInterval
    *
    * @param string|null $updatedTimeInterval 更新迭代的时间(查询的起始时间,查询的结束时间)
    *
    * @return $this
    */
    public function setUpdatedTimeInterval($updatedTimeInterval)
    {
        $this->container['updatedTimeInterval'] = $updatedTimeInterval;
        return $this;
    }

    /**
    * Gets includeDeleted
    *  是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @return bool|null
    */
    public function getIncludeDeleted()
    {
        return $this->container['includeDeleted'];
    }

    /**
    * Sets includeDeleted
    *
    * @param bool|null $includeDeleted 是否包含被删除的迭代,默认false不包含被删除的迭代
    *
    * @return $this
    */
    public function setIncludeDeleted($includeDeleted)
    {
        $this->container['includeDeleted'] = $includeDeleted;
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

