<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsAuthorityConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsAuthorityConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS桶名
    * operation  操作，1-授权；0-取消授权
    * location  查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    * projectId  租户华为云账号projectid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'operation' => 'int',
            'location' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  OBS桶名
    * operation  操作，1-授权；0-取消授权
    * location  查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    * projectId  租户华为云账号projectid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'operation' => null,
        'location' => null,
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
    * bucket  OBS桶名
    * operation  操作，1-授权；0-取消授权
    * location  查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    * projectId  租户华为云账号projectid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'operation' => 'operation',
            'location' => 'location',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  OBS桶名
    * operation  操作，1-授权；0-取消授权
    * location  查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    * projectId  租户华为云账号projectid
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'operation' => 'setOperation',
            'location' => 'setLocation',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  OBS桶名
    * operation  操作，1-授权；0-取消授权
    * location  查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    * projectId  租户华为云账号projectid
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'operation' => 'getOperation',
            'location' => 'getLocation',
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
    const LOCATION_CN_NORTH_4 = 'cn-north-4';
    const LOCATION_CN_NORTH_1 = 'cn-north-1';
    const LOCATION_CN_NORTH_5 = 'cn-north-5';
    const LOCATION_CN_NORTH_6 = 'cn-north-6';
    const LOCATION_CN_SOUTH_1 = 'cn-south-1';
    const LOCATION_CN_EAST_2 = 'cn-east-2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_CN_NORTH_4,
            self::LOCATION_CN_NORTH_1,
            self::LOCATION_CN_NORTH_5,
            self::LOCATION_CN_NORTH_6,
            self::LOCATION_CN_SOUTH_1,
            self::LOCATION_CN_EAST_2,
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
            if ((mb_strlen($this->container['bucket']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
            if (($this->container['operation'] > 1)) {
                $invalidProperties[] = "invalid value for 'operation', must be smaller than or equal to 1.";
            }
            if (($this->container['operation'] < 0)) {
                $invalidProperties[] = "invalid value for 'operation', must be bigger than or equal to 0.";
            }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            $allowedValues = $this->getLocationAllowableValues();
                if (!is_null($this->container['location']) && !in_array($this->container['location'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'location', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['location']) > 16)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['location']) < 4)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    * Gets bucket
    *  OBS桶名
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket OBS桶名
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets operation
    *  操作，1-授权；0-取消授权
    *
    * @return int
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param int $operation 操作，1-授权；0-取消授权
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets location
    *  查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    *
    * @return string
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string $location 查询bucket所在的region - cn-north-4 - cn-north-1 - cn-north-5 - cn-north-6 - cn-south-1 - cn-east-2
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets projectId
    *  租户华为云账号projectid
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
    * @param string|null $projectId 租户华为云账号projectid
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

