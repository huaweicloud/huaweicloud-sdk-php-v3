<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateDeletableReplicaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateDeletableReplicaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkResult  是否有可供选择的副本组进行删除。
    * availableZone  可选的可用区ID列表
    * replicationList  可选的保留节点列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkResult' => 'bool',
            'availableZone' => 'string',
            'replicationList' => '\HuaweiCloud\SDK\Dcs\V2\Model\ReplicationInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkResult  是否有可供选择的副本组进行删除。
    * availableZone  可选的可用区ID列表
    * replicationList  可选的保留节点列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkResult' => null,
        'availableZone' => null,
        'replicationList' => null
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
    * checkResult  是否有可供选择的副本组进行删除。
    * availableZone  可选的可用区ID列表
    * replicationList  可选的保留节点列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkResult' => 'check_result',
            'availableZone' => 'available_zone',
            'replicationList' => 'replication_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkResult  是否有可供选择的副本组进行删除。
    * availableZone  可选的可用区ID列表
    * replicationList  可选的保留节点列表
    *
    * @var string[]
    */
    protected static $setters = [
            'checkResult' => 'setCheckResult',
            'availableZone' => 'setAvailableZone',
            'replicationList' => 'setReplicationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkResult  是否有可供选择的副本组进行删除。
    * availableZone  可选的可用区ID列表
    * replicationList  可选的保留节点列表
    *
    * @var string[]
    */
    protected static $getters = [
            'checkResult' => 'getCheckResult',
            'availableZone' => 'getAvailableZone',
            'replicationList' => 'getReplicationList'
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
        $this->container['checkResult'] = isset($data['checkResult']) ? $data['checkResult'] : null;
        $this->container['availableZone'] = isset($data['availableZone']) ? $data['availableZone'] : null;
        $this->container['replicationList'] = isset($data['replicationList']) ? $data['replicationList'] : null;
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
    * Gets checkResult
    *  是否有可供选择的副本组进行删除。
    *
    * @return bool|null
    */
    public function getCheckResult()
    {
        return $this->container['checkResult'];
    }

    /**
    * Sets checkResult
    *
    * @param bool|null $checkResult 是否有可供选择的副本组进行删除。
    *
    * @return $this
    */
    public function setCheckResult($checkResult)
    {
        $this->container['checkResult'] = $checkResult;
        return $this;
    }

    /**
    * Gets availableZone
    *  可选的可用区ID列表
    *
    * @return string|null
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string|null $availableZone 可选的可用区ID列表
    *
    * @return $this
    */
    public function setAvailableZone($availableZone)
    {
        $this->container['availableZone'] = $availableZone;
        return $this;
    }

    /**
    * Gets replicationList
    *  可选的保留节点列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ReplicationInfo[]|null
    */
    public function getReplicationList()
    {
        return $this->container['replicationList'];
    }

    /**
    * Sets replicationList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ReplicationInfo[]|null $replicationList 可选的保留节点列表
    *
    * @return $this
    */
    public function setReplicationList($replicationList)
    {
        $this->container['replicationList'] = $replicationList;
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

