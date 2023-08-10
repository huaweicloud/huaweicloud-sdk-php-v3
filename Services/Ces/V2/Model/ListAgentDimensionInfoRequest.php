<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentDimensionInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentDimensionInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * dimName  维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    * dimValue  维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'dimName' => 'string',
            'dimValue' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * dimName  维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    * dimValue  维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'dimName' => null,
        'dimValue' => null,
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
    * instanceId  资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * dimName  维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    * dimValue  维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'dimName' => 'dim_name',
            'dimValue' => 'dim_value',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * dimName  维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    * dimValue  维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'dimName' => 'setDimName',
            'dimValue' => 'setDimValue',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * dimName  维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    * dimValue  维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'dimName' => 'getDimName',
            'dimValue' => 'getDimValue',
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
    const DIM_NAME_MOUNT_POINT = 'mount_point';
    const DIM_NAME_DISK = 'disk';
    const DIM_NAME_PROC = 'proc';
    const DIM_NAME_GPU = 'gpu';
    const DIM_NAME_RAID = 'raid';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimNameAllowableValues()
    {
        return [
            self::DIM_NAME_MOUNT_POINT,
            self::DIM_NAME_DISK,
            self::DIM_NAME_PROC,
            self::DIM_NAME_GPU,
            self::DIM_NAME_RAID,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['dimName'] = isset($data['dimName']) ? $data['dimName'] : null;
        $this->container['dimValue'] = isset($data['dimValue']) ? $data['dimValue'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['dimName'] === null) {
            $invalidProperties[] = "'dimName' can't be null";
        }
            $allowedValues = $this->getDimNameAllowableValues();
                if (!is_null($this->container['dimName']) && !in_array($this->container['dimName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dimValue']) && (mb_strlen($this->container['dimValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'dimValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['dimValue']) && (mb_strlen($this->container['dimValue']) < 32)) {
                $invalidProperties[] = "invalid value for 'dimValue', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
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
    * Gets instanceId
    *  资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
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
    * @param string $instanceId 资源ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets dimName
    *  维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    *
    * @return string
    */
    public function getDimName()
    {
        return $this->container['dimName'];
    }

    /**
    * Sets dimName
    *
    * @param string $dimName 维度名称，枚举类型，类型有：   mount_point：挂载点,   disk：磁盘,   proc：进程,   gpu：显卡,   raid: RAID控制器,
    *
    * @return $this
    */
    public function setDimName($dimName)
    {
        $this->container['dimName'] = $dimName;
        return $this;
    }

    /**
    * Gets dimValue
    *  维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    *
    * @return string|null
    */
    public function getDimValue()
    {
        return $this->container['dimValue'];
    }

    /**
    * Sets dimValue
    *
    * @param string|null $dimValue 维度值，32位字符串，如：2e84018fc8b4484b94e89aae212fe615。
    *
    * @return $this
    */
    public function setDimValue($dimValue)
    {
        $this->container['dimValue'] = $dimValue;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量
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
    * @param int|null $offset 分页偏移量
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
    *  分页大小
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
    * @param int|null $limit 分页大小
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

