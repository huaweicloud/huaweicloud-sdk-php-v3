<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDisasterRecovery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDisasterRecovery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * standbyClusterId  备集群ID
    * drSyncPeriod  同步周期
    * primaryObsBucket  主集群OBS桶
    * standbyObsBucket  备集群obs桶
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'drType' => 'string',
            'primaryClusterId' => 'string',
            'standbyClusterId' => 'string',
            'drSyncPeriod' => 'string',
            'primaryObsBucket' => 'string',
            'standbyObsBucket' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * standbyClusterId  备集群ID
    * drSyncPeriod  同步周期
    * primaryObsBucket  主集群OBS桶
    * standbyObsBucket  备集群obs桶
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'drType' => null,
        'primaryClusterId' => null,
        'standbyClusterId' => null,
        'drSyncPeriod' => null,
        'primaryObsBucket' => null,
        'standbyObsBucket' => null
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
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * standbyClusterId  备集群ID
    * drSyncPeriod  同步周期
    * primaryObsBucket  主集群OBS桶
    * standbyObsBucket  备集群obs桶
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'drType' => 'dr_type',
            'primaryClusterId' => 'primary_cluster_id',
            'standbyClusterId' => 'standby_cluster_id',
            'drSyncPeriod' => 'dr_sync_period',
            'primaryObsBucket' => 'primary_obs_bucket',
            'standbyObsBucket' => 'standby_obs_bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * standbyClusterId  备集群ID
    * drSyncPeriod  同步周期
    * primaryObsBucket  主集群OBS桶
    * standbyObsBucket  备集群obs桶
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'drType' => 'setDrType',
            'primaryClusterId' => 'setPrimaryClusterId',
            'standbyClusterId' => 'setStandbyClusterId',
            'drSyncPeriod' => 'setDrSyncPeriod',
            'primaryObsBucket' => 'setPrimaryObsBucket',
            'standbyObsBucket' => 'setStandbyObsBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * standbyClusterId  备集群ID
    * drSyncPeriod  同步周期
    * primaryObsBucket  主集群OBS桶
    * standbyObsBucket  备集群obs桶
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'drType' => 'getDrType',
            'primaryClusterId' => 'getPrimaryClusterId',
            'standbyClusterId' => 'getStandbyClusterId',
            'drSyncPeriod' => 'getDrSyncPeriod',
            'primaryObsBucket' => 'getPrimaryObsBucket',
            'standbyObsBucket' => 'getStandbyObsBucket'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['drType'] = isset($data['drType']) ? $data['drType'] : null;
        $this->container['primaryClusterId'] = isset($data['primaryClusterId']) ? $data['primaryClusterId'] : null;
        $this->container['standbyClusterId'] = isset($data['standbyClusterId']) ? $data['standbyClusterId'] : null;
        $this->container['drSyncPeriod'] = isset($data['drSyncPeriod']) ? $data['drSyncPeriod'] : null;
        $this->container['primaryObsBucket'] = isset($data['primaryObsBucket']) ? $data['primaryObsBucket'] : null;
        $this->container['standbyObsBucket'] = isset($data['standbyObsBucket']) ? $data['standbyObsBucket'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['drType'] === null) {
            $invalidProperties[] = "'drType' can't be null";
        }
        if ($this->container['primaryClusterId'] === null) {
            $invalidProperties[] = "'primaryClusterId' can't be null";
        }
        if ($this->container['standbyClusterId'] === null) {
            $invalidProperties[] = "'standbyClusterId' can't be null";
        }
        if ($this->container['drSyncPeriod'] === null) {
            $invalidProperties[] = "'drSyncPeriod' can't be null";
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
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets drType
    *  容灾类型
    *
    * @return string
    */
    public function getDrType()
    {
        return $this->container['drType'];
    }

    /**
    * Sets drType
    *
    * @param string $drType 容灾类型
    *
    * @return $this
    */
    public function setDrType($drType)
    {
        $this->container['drType'] = $drType;
        return $this;
    }

    /**
    * Gets primaryClusterId
    *  主集群ID
    *
    * @return string
    */
    public function getPrimaryClusterId()
    {
        return $this->container['primaryClusterId'];
    }

    /**
    * Sets primaryClusterId
    *
    * @param string $primaryClusterId 主集群ID
    *
    * @return $this
    */
    public function setPrimaryClusterId($primaryClusterId)
    {
        $this->container['primaryClusterId'] = $primaryClusterId;
        return $this;
    }

    /**
    * Gets standbyClusterId
    *  备集群ID
    *
    * @return string
    */
    public function getStandbyClusterId()
    {
        return $this->container['standbyClusterId'];
    }

    /**
    * Sets standbyClusterId
    *
    * @param string $standbyClusterId 备集群ID
    *
    * @return $this
    */
    public function setStandbyClusterId($standbyClusterId)
    {
        $this->container['standbyClusterId'] = $standbyClusterId;
        return $this;
    }

    /**
    * Gets drSyncPeriod
    *  同步周期
    *
    * @return string
    */
    public function getDrSyncPeriod()
    {
        return $this->container['drSyncPeriod'];
    }

    /**
    * Sets drSyncPeriod
    *
    * @param string $drSyncPeriod 同步周期
    *
    * @return $this
    */
    public function setDrSyncPeriod($drSyncPeriod)
    {
        $this->container['drSyncPeriod'] = $drSyncPeriod;
        return $this;
    }

    /**
    * Gets primaryObsBucket
    *  主集群OBS桶
    *
    * @return string|null
    */
    public function getPrimaryObsBucket()
    {
        return $this->container['primaryObsBucket'];
    }

    /**
    * Sets primaryObsBucket
    *
    * @param string|null $primaryObsBucket 主集群OBS桶
    *
    * @return $this
    */
    public function setPrimaryObsBucket($primaryObsBucket)
    {
        $this->container['primaryObsBucket'] = $primaryObsBucket;
        return $this;
    }

    /**
    * Gets standbyObsBucket
    *  备集群obs桶
    *
    * @return string|null
    */
    public function getStandbyObsBucket()
    {
        return $this->container['standbyObsBucket'];
    }

    /**
    * Sets standbyObsBucket
    *
    * @param string|null $standbyObsBucket 备集群obs桶
    *
    * @return $this
    */
    public function setStandbyObsBucket($standbyObsBucket)
    {
        $this->container['standbyObsBucket'] = $standbyObsBucket;
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

