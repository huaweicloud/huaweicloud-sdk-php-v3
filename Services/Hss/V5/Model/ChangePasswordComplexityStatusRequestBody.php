<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangePasswordComplexityStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangePasswordComplexityStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateAll  是否是全量操作。每次最多处理1000个主机。
    * hostIds  主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateAll' => 'bool',
            'hostIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateAll  是否是全量操作。每次最多处理1000个主机。
    * hostIds  主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateAll' => null,
        'hostIds' => null
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
    * operateAll  是否是全量操作。每次最多处理1000个主机。
    * hostIds  主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateAll' => 'operate_all',
            'hostIds' => 'host_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateAll  是否是全量操作。每次最多处理1000个主机。
    * hostIds  主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'operateAll' => 'setOperateAll',
            'hostIds' => 'setHostIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateAll  是否是全量操作。每次最多处理1000个主机。
    * hostIds  主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'operateAll' => 'getOperateAll',
            'hostIds' => 'getHostIds'
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
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
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
    * Gets operateAll
    *  是否是全量操作。每次最多处理1000个主机。
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll 是否是全量操作。每次最多处理1000个主机。
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets hostIds
    *  主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds 主机id列表。operate_all=ture时不处理host_ids参数。
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
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

