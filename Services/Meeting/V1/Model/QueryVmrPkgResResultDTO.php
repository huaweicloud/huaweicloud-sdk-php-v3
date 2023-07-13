<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryVmrPkgResResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryVmrPkgResResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vmrPkgId  云会议室套餐包id。
    * vmrName  云会议室套餐包名称。
    * vmrPkgParties  云会议室套餐方数。
    * vmrPkgCount  该云会议室套餐分配的总数。
    * vmrPkgUsedCount  该套餐对应的云会议室已分配数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vmrPkgId' => 'string',
            'vmrName' => 'string',
            'vmrPkgParties' => 'int',
            'vmrPkgCount' => 'int',
            'vmrPkgUsedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vmrPkgId  云会议室套餐包id。
    * vmrName  云会议室套餐包名称。
    * vmrPkgParties  云会议室套餐方数。
    * vmrPkgCount  该云会议室套餐分配的总数。
    * vmrPkgUsedCount  该套餐对应的云会议室已分配数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vmrPkgId' => null,
        'vmrName' => null,
        'vmrPkgParties' => null,
        'vmrPkgCount' => null,
        'vmrPkgUsedCount' => null
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
    * vmrPkgId  云会议室套餐包id。
    * vmrName  云会议室套餐包名称。
    * vmrPkgParties  云会议室套餐方数。
    * vmrPkgCount  该云会议室套餐分配的总数。
    * vmrPkgUsedCount  该套餐对应的云会议室已分配数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vmrPkgId' => 'vmrPkgId',
            'vmrName' => 'vmrName',
            'vmrPkgParties' => 'vmrPkgParties',
            'vmrPkgCount' => 'vmrPkgCount',
            'vmrPkgUsedCount' => 'vmrPkgUsedCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vmrPkgId  云会议室套餐包id。
    * vmrName  云会议室套餐包名称。
    * vmrPkgParties  云会议室套餐方数。
    * vmrPkgCount  该云会议室套餐分配的总数。
    * vmrPkgUsedCount  该套餐对应的云会议室已分配数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'vmrPkgId' => 'setVmrPkgId',
            'vmrName' => 'setVmrName',
            'vmrPkgParties' => 'setVmrPkgParties',
            'vmrPkgCount' => 'setVmrPkgCount',
            'vmrPkgUsedCount' => 'setVmrPkgUsedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vmrPkgId  云会议室套餐包id。
    * vmrName  云会议室套餐包名称。
    * vmrPkgParties  云会议室套餐方数。
    * vmrPkgCount  该云会议室套餐分配的总数。
    * vmrPkgUsedCount  该套餐对应的云会议室已分配数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'vmrPkgId' => 'getVmrPkgId',
            'vmrName' => 'getVmrName',
            'vmrPkgParties' => 'getVmrPkgParties',
            'vmrPkgCount' => 'getVmrPkgCount',
            'vmrPkgUsedCount' => 'getVmrPkgUsedCount'
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
        $this->container['vmrPkgId'] = isset($data['vmrPkgId']) ? $data['vmrPkgId'] : null;
        $this->container['vmrName'] = isset($data['vmrName']) ? $data['vmrName'] : null;
        $this->container['vmrPkgParties'] = isset($data['vmrPkgParties']) ? $data['vmrPkgParties'] : null;
        $this->container['vmrPkgCount'] = isset($data['vmrPkgCount']) ? $data['vmrPkgCount'] : null;
        $this->container['vmrPkgUsedCount'] = isset($data['vmrPkgUsedCount']) ? $data['vmrPkgUsedCount'] : null;
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
    * Gets vmrPkgId
    *  云会议室套餐包id。
    *
    * @return string|null
    */
    public function getVmrPkgId()
    {
        return $this->container['vmrPkgId'];
    }

    /**
    * Sets vmrPkgId
    *
    * @param string|null $vmrPkgId 云会议室套餐包id。
    *
    * @return $this
    */
    public function setVmrPkgId($vmrPkgId)
    {
        $this->container['vmrPkgId'] = $vmrPkgId;
        return $this;
    }

    /**
    * Gets vmrName
    *  云会议室套餐包名称。
    *
    * @return string|null
    */
    public function getVmrName()
    {
        return $this->container['vmrName'];
    }

    /**
    * Sets vmrName
    *
    * @param string|null $vmrName 云会议室套餐包名称。
    *
    * @return $this
    */
    public function setVmrName($vmrName)
    {
        $this->container['vmrName'] = $vmrName;
        return $this;
    }

    /**
    * Gets vmrPkgParties
    *  云会议室套餐方数。
    *
    * @return int|null
    */
    public function getVmrPkgParties()
    {
        return $this->container['vmrPkgParties'];
    }

    /**
    * Sets vmrPkgParties
    *
    * @param int|null $vmrPkgParties 云会议室套餐方数。
    *
    * @return $this
    */
    public function setVmrPkgParties($vmrPkgParties)
    {
        $this->container['vmrPkgParties'] = $vmrPkgParties;
        return $this;
    }

    /**
    * Gets vmrPkgCount
    *  该云会议室套餐分配的总数。
    *
    * @return int|null
    */
    public function getVmrPkgCount()
    {
        return $this->container['vmrPkgCount'];
    }

    /**
    * Sets vmrPkgCount
    *
    * @param int|null $vmrPkgCount 该云会议室套餐分配的总数。
    *
    * @return $this
    */
    public function setVmrPkgCount($vmrPkgCount)
    {
        $this->container['vmrPkgCount'] = $vmrPkgCount;
        return $this;
    }

    /**
    * Gets vmrPkgUsedCount
    *  该套餐对应的云会议室已分配数量。
    *
    * @return int|null
    */
    public function getVmrPkgUsedCount()
    {
        return $this->container['vmrPkgUsedCount'];
    }

    /**
    * Sets vmrPkgUsedCount
    *
    * @param int|null $vmrPkgUsedCount 该套餐对应的云会议室已分配数量。
    *
    * @return $this
    */
    public function setVmrPkgUsedCount($vmrPkgUsedCount)
    {
        $this->container['vmrPkgUsedCount'] = $vmrPkgUsedCount;
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

