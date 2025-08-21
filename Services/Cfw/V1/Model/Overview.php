<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Overview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Overview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessPolicies  accessPolicies
    * assets  assets
    * attackEvent  attackEvent
    * trafficPeak  trafficPeak
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessPolicies' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessPolicy',
            'assets' => '\HuaweiCloud\SDK\Cfw\V1\Model\ChangedVO',
            'attackEvent' => '\HuaweiCloud\SDK\Cfw\V1\Model\AttackEvent',
            'trafficPeak' => '\HuaweiCloud\SDK\Cfw\V1\Model\TrendVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessPolicies  accessPolicies
    * assets  assets
    * attackEvent  attackEvent
    * trafficPeak  trafficPeak
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessPolicies' => null,
        'assets' => null,
        'attackEvent' => null,
        'trafficPeak' => null
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
    * accessPolicies  accessPolicies
    * assets  assets
    * attackEvent  attackEvent
    * trafficPeak  trafficPeak
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessPolicies' => 'access_policies',
            'assets' => 'assets',
            'attackEvent' => 'attack_event',
            'trafficPeak' => 'traffic_peak'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessPolicies  accessPolicies
    * assets  assets
    * attackEvent  attackEvent
    * trafficPeak  trafficPeak
    *
    * @var string[]
    */
    protected static $setters = [
            'accessPolicies' => 'setAccessPolicies',
            'assets' => 'setAssets',
            'attackEvent' => 'setAttackEvent',
            'trafficPeak' => 'setTrafficPeak'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessPolicies  accessPolicies
    * assets  assets
    * attackEvent  attackEvent
    * trafficPeak  trafficPeak
    *
    * @var string[]
    */
    protected static $getters = [
            'accessPolicies' => 'getAccessPolicies',
            'assets' => 'getAssets',
            'attackEvent' => 'getAttackEvent',
            'trafficPeak' => 'getTrafficPeak'
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
        $this->container['accessPolicies'] = isset($data['accessPolicies']) ? $data['accessPolicies'] : null;
        $this->container['assets'] = isset($data['assets']) ? $data['assets'] : null;
        $this->container['attackEvent'] = isset($data['attackEvent']) ? $data['attackEvent'] : null;
        $this->container['trafficPeak'] = isset($data['trafficPeak']) ? $data['trafficPeak'] : null;
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
    * Gets accessPolicies
    *  accessPolicies
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessPolicy|null
    */
    public function getAccessPolicies()
    {
        return $this->container['accessPolicies'];
    }

    /**
    * Sets accessPolicies
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessPolicy|null $accessPolicies accessPolicies
    *
    * @return $this
    */
    public function setAccessPolicies($accessPolicies)
    {
        $this->container['accessPolicies'] = $accessPolicies;
        return $this;
    }

    /**
    * Gets assets
    *  assets
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ChangedVO|null
    */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
    * Sets assets
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ChangedVO|null $assets assets
    *
    * @return $this
    */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;
        return $this;
    }

    /**
    * Gets attackEvent
    *  attackEvent
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AttackEvent|null
    */
    public function getAttackEvent()
    {
        return $this->container['attackEvent'];
    }

    /**
    * Sets attackEvent
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AttackEvent|null $attackEvent attackEvent
    *
    * @return $this
    */
    public function setAttackEvent($attackEvent)
    {
        $this->container['attackEvent'] = $attackEvent;
        return $this;
    }

    /**
    * Gets trafficPeak
    *  trafficPeak
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TrendVO|null
    */
    public function getTrafficPeak()
    {
        return $this->container['trafficPeak'];
    }

    /**
    * Sets trafficPeak
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TrendVO|null $trafficPeak trafficPeak
    *
    * @return $this
    */
    public function setTrafficPeak($trafficPeak)
    {
        $this->container['trafficPeak'] = $trafficPeak;
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

