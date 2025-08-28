<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceEngineDistributionListEngineDistribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceEngineDistributionList_engine_distribution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库类型
    * total  总数
    * instanceInfos  实例信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'total' => 'int',
            'instanceInfos' => '\HuaweiCloud\SDK\Das\V3\Model\InstanceEngineDistributionListInstanceInfos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库类型
    * total  总数
    * instanceInfos  实例信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'total' => 'int32',
        'instanceInfos' => null
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
    * datastoreType  数据库类型
    * total  总数
    * instanceInfos  实例信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'total' => 'total',
            'instanceInfos' => 'instance_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库类型
    * total  总数
    * instanceInfos  实例信息
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'total' => 'setTotal',
            'instanceInfos' => 'setInstanceInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库类型
    * total  总数
    * instanceInfos  实例信息
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'total' => 'getTotal',
            'instanceInfos' => 'getInstanceInfos'
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
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['instanceInfos'] = isset($data['instanceInfos']) ? $data['instanceInfos'] : null;
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
    * Gets datastoreType
    *  数据库类型
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数据库类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets instanceInfos
    *  实例信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InstanceEngineDistributionListInstanceInfos[]|null
    */
    public function getInstanceInfos()
    {
        return $this->container['instanceInfos'];
    }

    /**
    * Sets instanceInfos
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InstanceEngineDistributionListInstanceInfos[]|null $instanceInfos 实例信息
    *
    * @return $this
    */
    public function setInstanceInfos($instanceInfos)
    {
        $this->container['instanceInfos'] = $instanceInfos;
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

