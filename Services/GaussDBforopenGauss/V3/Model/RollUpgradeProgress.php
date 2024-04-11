<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RollUpgradeProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RollUpgradeProgress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradedDnGroupNumbers  已升级分片数，非独立部署返回null
    * totalDnGroupNumbers  总分片数，非独立部署返回null
    * notFullyUpgradedAz  未完成升级的az，以“,”隔开，独立部署返回null
    * alreadyUpgradedAz  已升级az，以“,”隔开，独立部署返回null
    * azDescriptionMap  az描述键值对Map<String,String>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradedDnGroupNumbers' => 'string',
            'totalDnGroupNumbers' => 'string',
            'notFullyUpgradedAz' => 'string',
            'alreadyUpgradedAz' => 'string',
            'azDescriptionMap' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradedDnGroupNumbers  已升级分片数，非独立部署返回null
    * totalDnGroupNumbers  总分片数，非独立部署返回null
    * notFullyUpgradedAz  未完成升级的az，以“,”隔开，独立部署返回null
    * alreadyUpgradedAz  已升级az，以“,”隔开，独立部署返回null
    * azDescriptionMap  az描述键值对Map<String,String>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradedDnGroupNumbers' => null,
        'totalDnGroupNumbers' => null,
        'notFullyUpgradedAz' => null,
        'alreadyUpgradedAz' => null,
        'azDescriptionMap' => null
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
    * upgradedDnGroupNumbers  已升级分片数，非独立部署返回null
    * totalDnGroupNumbers  总分片数，非独立部署返回null
    * notFullyUpgradedAz  未完成升级的az，以“,”隔开，独立部署返回null
    * alreadyUpgradedAz  已升级az，以“,”隔开，独立部署返回null
    * azDescriptionMap  az描述键值对Map<String,String>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradedDnGroupNumbers' => 'upgraded_dn_group_numbers',
            'totalDnGroupNumbers' => 'total_dn_group_numbers',
            'notFullyUpgradedAz' => 'not_fully_upgraded_az',
            'alreadyUpgradedAz' => 'already_upgraded_az',
            'azDescriptionMap' => 'az_description_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradedDnGroupNumbers  已升级分片数，非独立部署返回null
    * totalDnGroupNumbers  总分片数，非独立部署返回null
    * notFullyUpgradedAz  未完成升级的az，以“,”隔开，独立部署返回null
    * alreadyUpgradedAz  已升级az，以“,”隔开，独立部署返回null
    * azDescriptionMap  az描述键值对Map<String,String>
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradedDnGroupNumbers' => 'setUpgradedDnGroupNumbers',
            'totalDnGroupNumbers' => 'setTotalDnGroupNumbers',
            'notFullyUpgradedAz' => 'setNotFullyUpgradedAz',
            'alreadyUpgradedAz' => 'setAlreadyUpgradedAz',
            'azDescriptionMap' => 'setAzDescriptionMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradedDnGroupNumbers  已升级分片数，非独立部署返回null
    * totalDnGroupNumbers  总分片数，非独立部署返回null
    * notFullyUpgradedAz  未完成升级的az，以“,”隔开，独立部署返回null
    * alreadyUpgradedAz  已升级az，以“,”隔开，独立部署返回null
    * azDescriptionMap  az描述键值对Map<String,String>
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradedDnGroupNumbers' => 'getUpgradedDnGroupNumbers',
            'totalDnGroupNumbers' => 'getTotalDnGroupNumbers',
            'notFullyUpgradedAz' => 'getNotFullyUpgradedAz',
            'alreadyUpgradedAz' => 'getAlreadyUpgradedAz',
            'azDescriptionMap' => 'getAzDescriptionMap'
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
        $this->container['upgradedDnGroupNumbers'] = isset($data['upgradedDnGroupNumbers']) ? $data['upgradedDnGroupNumbers'] : null;
        $this->container['totalDnGroupNumbers'] = isset($data['totalDnGroupNumbers']) ? $data['totalDnGroupNumbers'] : null;
        $this->container['notFullyUpgradedAz'] = isset($data['notFullyUpgradedAz']) ? $data['notFullyUpgradedAz'] : null;
        $this->container['alreadyUpgradedAz'] = isset($data['alreadyUpgradedAz']) ? $data['alreadyUpgradedAz'] : null;
        $this->container['azDescriptionMap'] = isset($data['azDescriptionMap']) ? $data['azDescriptionMap'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['upgradedDnGroupNumbers']) && (mb_strlen($this->container['upgradedDnGroupNumbers']) > 1000)) {
                $invalidProperties[] = "invalid value for 'upgradedDnGroupNumbers', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['upgradedDnGroupNumbers']) && (mb_strlen($this->container['upgradedDnGroupNumbers']) < 0)) {
                $invalidProperties[] = "invalid value for 'upgradedDnGroupNumbers', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalDnGroupNumbers']) && (mb_strlen($this->container['totalDnGroupNumbers']) > 1000)) {
                $invalidProperties[] = "invalid value for 'totalDnGroupNumbers', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['totalDnGroupNumbers']) && (mb_strlen($this->container['totalDnGroupNumbers']) < 0)) {
                $invalidProperties[] = "invalid value for 'totalDnGroupNumbers', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notFullyUpgradedAz']) && (mb_strlen($this->container['notFullyUpgradedAz']) > 1000)) {
                $invalidProperties[] = "invalid value for 'notFullyUpgradedAz', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['notFullyUpgradedAz']) && (mb_strlen($this->container['notFullyUpgradedAz']) < 0)) {
                $invalidProperties[] = "invalid value for 'notFullyUpgradedAz', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alreadyUpgradedAz']) && (mb_strlen($this->container['alreadyUpgradedAz']) > 1000)) {
                $invalidProperties[] = "invalid value for 'alreadyUpgradedAz', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['alreadyUpgradedAz']) && (mb_strlen($this->container['alreadyUpgradedAz']) < 0)) {
                $invalidProperties[] = "invalid value for 'alreadyUpgradedAz', the character length must be bigger than or equal to 0.";
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
    * Gets upgradedDnGroupNumbers
    *  已升级分片数，非独立部署返回null
    *
    * @return string|null
    */
    public function getUpgradedDnGroupNumbers()
    {
        return $this->container['upgradedDnGroupNumbers'];
    }

    /**
    * Sets upgradedDnGroupNumbers
    *
    * @param string|null $upgradedDnGroupNumbers 已升级分片数，非独立部署返回null
    *
    * @return $this
    */
    public function setUpgradedDnGroupNumbers($upgradedDnGroupNumbers)
    {
        $this->container['upgradedDnGroupNumbers'] = $upgradedDnGroupNumbers;
        return $this;
    }

    /**
    * Gets totalDnGroupNumbers
    *  总分片数，非独立部署返回null
    *
    * @return string|null
    */
    public function getTotalDnGroupNumbers()
    {
        return $this->container['totalDnGroupNumbers'];
    }

    /**
    * Sets totalDnGroupNumbers
    *
    * @param string|null $totalDnGroupNumbers 总分片数，非独立部署返回null
    *
    * @return $this
    */
    public function setTotalDnGroupNumbers($totalDnGroupNumbers)
    {
        $this->container['totalDnGroupNumbers'] = $totalDnGroupNumbers;
        return $this;
    }

    /**
    * Gets notFullyUpgradedAz
    *  未完成升级的az，以“,”隔开，独立部署返回null
    *
    * @return string|null
    */
    public function getNotFullyUpgradedAz()
    {
        return $this->container['notFullyUpgradedAz'];
    }

    /**
    * Sets notFullyUpgradedAz
    *
    * @param string|null $notFullyUpgradedAz 未完成升级的az，以“,”隔开，独立部署返回null
    *
    * @return $this
    */
    public function setNotFullyUpgradedAz($notFullyUpgradedAz)
    {
        $this->container['notFullyUpgradedAz'] = $notFullyUpgradedAz;
        return $this;
    }

    /**
    * Gets alreadyUpgradedAz
    *  已升级az，以“,”隔开，独立部署返回null
    *
    * @return string|null
    */
    public function getAlreadyUpgradedAz()
    {
        return $this->container['alreadyUpgradedAz'];
    }

    /**
    * Sets alreadyUpgradedAz
    *
    * @param string|null $alreadyUpgradedAz 已升级az，以“,”隔开，独立部署返回null
    *
    * @return $this
    */
    public function setAlreadyUpgradedAz($alreadyUpgradedAz)
    {
        $this->container['alreadyUpgradedAz'] = $alreadyUpgradedAz;
        return $this;
    }

    /**
    * Gets azDescriptionMap
    *  az描述键值对Map<String,String>
    *
    * @return map[string,string]|null
    */
    public function getAzDescriptionMap()
    {
        return $this->container['azDescriptionMap'];
    }

    /**
    * Sets azDescriptionMap
    *
    * @param map[string,string]|null $azDescriptionMap az描述键值对Map<String,String>
    *
    * @return $this
    */
    public function setAzDescriptionMap($azDescriptionMap)
    {
        $this->container['azDescriptionMap'] = $azDescriptionMap;
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

