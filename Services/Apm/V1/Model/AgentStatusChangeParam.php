<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentStatusChangeParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentStatusChangeParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceList  探针实例id列表。
    * targetStatus  期望探针改变后的状态，0或1，0表示启用，1表示停用。
    * region  探针所在的区域。
    * envId  探针所属环境的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceList' => 'int[]',
            'targetStatus' => 'int',
            'region' => 'string',
            'envId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceList  探针实例id列表。
    * targetStatus  期望探针改变后的状态，0或1，0表示启用，1表示停用。
    * region  探针所在的区域。
    * envId  探针所属环境的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceList' => 'int64',
        'targetStatus' => 'int32',
        'region' => null,
        'envId' => 'int64'
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
    * instanceList  探针实例id列表。
    * targetStatus  期望探针改变后的状态，0或1，0表示启用，1表示停用。
    * region  探针所在的区域。
    * envId  探针所属环境的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceList' => 'instance_list',
            'targetStatus' => 'target_status',
            'region' => 'region',
            'envId' => 'env_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceList  探针实例id列表。
    * targetStatus  期望探针改变后的状态，0或1，0表示启用，1表示停用。
    * region  探针所在的区域。
    * envId  探针所属环境的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceList' => 'setInstanceList',
            'targetStatus' => 'setTargetStatus',
            'region' => 'setRegion',
            'envId' => 'setEnvId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceList  探针实例id列表。
    * targetStatus  期望探针改变后的状态，0或1，0表示启用，1表示停用。
    * region  探针所在的区域。
    * envId  探针所属环境的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceList' => 'getInstanceList',
            'targetStatus' => 'getTargetStatus',
            'region' => 'getRegion',
            'envId' => 'getEnvId'
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
        $this->container['instanceList'] = isset($data['instanceList']) ? $data['instanceList'] : null;
        $this->container['targetStatus'] = isset($data['targetStatus']) ? $data['targetStatus'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceList'] === null) {
            $invalidProperties[] = "'instanceList' can't be null";
        }
        if ($this->container['targetStatus'] === null) {
            $invalidProperties[] = "'targetStatus' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
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
    * Gets instanceList
    *  探针实例id列表。
    *
    * @return int[]
    */
    public function getInstanceList()
    {
        return $this->container['instanceList'];
    }

    /**
    * Sets instanceList
    *
    * @param int[] $instanceList 探针实例id列表。
    *
    * @return $this
    */
    public function setInstanceList($instanceList)
    {
        $this->container['instanceList'] = $instanceList;
        return $this;
    }

    /**
    * Gets targetStatus
    *  期望探针改变后的状态，0或1，0表示启用，1表示停用。
    *
    * @return int
    */
    public function getTargetStatus()
    {
        return $this->container['targetStatus'];
    }

    /**
    * Sets targetStatus
    *
    * @param int $targetStatus 期望探针改变后的状态，0或1，0表示启用，1表示停用。
    *
    * @return $this
    */
    public function setTargetStatus($targetStatus)
    {
        $this->container['targetStatus'] = $targetStatus;
        return $this;
    }

    /**
    * Gets region
    *  探针所在的区域。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 探针所在的区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets envId
    *  探针所属环境的id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 探针所属环境的id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
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

