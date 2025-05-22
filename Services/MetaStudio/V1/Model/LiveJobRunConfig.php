<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveJobRunConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveJobRunConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allowResourceType  允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    * singleJobInRoom  一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allowResourceType' => 'string',
            'singleJobInRoom' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allowResourceType  允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    * singleJobInRoom  一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allowResourceType' => null,
        'singleJobInRoom' => null
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
    * allowResourceType  允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    * singleJobInRoom  一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allowResourceType' => 'allow_resource_type',
            'singleJobInRoom' => 'single_job_in_room'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allowResourceType  允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    * singleJobInRoom  一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'allowResourceType' => 'setAllowResourceType',
            'singleJobInRoom' => 'setSingleJobInRoom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allowResourceType  允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    * singleJobInRoom  一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'allowResourceType' => 'getAllowResourceType',
            'singleJobInRoom' => 'getSingleJobInRoom'
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
    const ALLOW_RESOURCE_TYPE_PERIOD = 'PERIOD';
    const ALLOW_RESOURCE_TYPE_ONDEMAND = 'ONDEMAND';
    const ALLOW_RESOURCE_TYPE_UNLIMITED = 'UNLIMITED';
    const ALLOW_RESOURCE_TYPE_ONE_TIME = 'ONE_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAllowResourceTypeAllowableValues()
    {
        return [
            self::ALLOW_RESOURCE_TYPE_PERIOD,
            self::ALLOW_RESOURCE_TYPE_ONDEMAND,
            self::ALLOW_RESOURCE_TYPE_UNLIMITED,
            self::ALLOW_RESOURCE_TYPE_ONE_TIME,
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
        $this->container['allowResourceType'] = isset($data['allowResourceType']) ? $data['allowResourceType'] : null;
        $this->container['singleJobInRoom'] = isset($data['singleJobInRoom']) ? $data['singleJobInRoom'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAllowResourceTypeAllowableValues();
                if (!is_null($this->container['allowResourceType']) && !in_array($this->container['allowResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'allowResourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['allowResourceType']) && (mb_strlen($this->container['allowResourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'allowResourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['allowResourceType']) && (mb_strlen($this->container['allowResourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'allowResourceType', the character length must be bigger than or equal to 1.";
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
    * Gets allowResourceType
    *  允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    *
    * @return string|null
    */
    public function getAllowResourceType()
    {
        return $this->container['allowResourceType'];
    }

    /**
    * Sets allowResourceType
    *
    * @param string|null $allowResourceType 允许使用资源类型。 * PERIOD：使用包周期资源 * ONDEMAND：使用按需资源 * UNLIMITED：不限制资源类型 * ONE_TIME：一次性资源
    *
    * @return $this
    */
    public function setAllowResourceType($allowResourceType)
    {
        $this->container['allowResourceType'] = $allowResourceType;
        return $this;
    }

    /**
    * Gets singleJobInRoom
    *  一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @return bool|null
    */
    public function getSingleJobInRoom()
    {
        return $this->container['singleJobInRoom'];
    }

    /**
    * Sets singleJobInRoom
    *
    * @param bool|null $singleJobInRoom 一个直播间是否仅允许一个正在直播的任务。 * true: 限制直播间仅允许一个任务运行。 * false: 不限制直播间任务运行数量。
    *
    * @return $this
    */
    public function setSingleJobInRoom($singleJobInRoom)
    {
        $this->container['singleJobInRoom'] = $singleJobInRoom;
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

