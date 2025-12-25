<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionProductResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionProductResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basic  basic
    * standard  standard
    * professional  professional
    * largeScreen  largeScreen
    * logCollection  logCollection
    * logRetention  logRetention
    * logAnalysis  logAnalysis
    * soar  soar
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basic' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspBasic',
            'standard' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspStandard',
            'professional' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspProfessional',
            'largeScreen' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLargeScreen',
            'logCollection' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogCollection',
            'logRetention' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogRetention',
            'logAnalysis' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogAnalysis',
            'soar' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspSoar'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basic  basic
    * standard  standard
    * professional  professional
    * largeScreen  largeScreen
    * logCollection  logCollection
    * logRetention  logRetention
    * logAnalysis  logAnalysis
    * soar  soar
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basic' => null,
        'standard' => null,
        'professional' => null,
        'largeScreen' => null,
        'logCollection' => null,
        'logRetention' => null,
        'logAnalysis' => null,
        'soar' => null
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
    * basic  basic
    * standard  standard
    * professional  professional
    * largeScreen  largeScreen
    * logCollection  logCollection
    * logRetention  logRetention
    * logAnalysis  logAnalysis
    * soar  soar
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basic' => 'basic',
            'standard' => 'standard',
            'professional' => 'professional',
            'largeScreen' => 'large_screen',
            'logCollection' => 'log_collection',
            'logRetention' => 'log_retention',
            'logAnalysis' => 'log_analysis',
            'soar' => 'soar'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basic  basic
    * standard  standard
    * professional  professional
    * largeScreen  largeScreen
    * logCollection  logCollection
    * logRetention  logRetention
    * logAnalysis  logAnalysis
    * soar  soar
    *
    * @var string[]
    */
    protected static $setters = [
            'basic' => 'setBasic',
            'standard' => 'setStandard',
            'professional' => 'setProfessional',
            'largeScreen' => 'setLargeScreen',
            'logCollection' => 'setLogCollection',
            'logRetention' => 'setLogRetention',
            'logAnalysis' => 'setLogAnalysis',
            'soar' => 'setSoar'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basic  basic
    * standard  standard
    * professional  professional
    * largeScreen  largeScreen
    * logCollection  logCollection
    * logRetention  logRetention
    * logAnalysis  logAnalysis
    * soar  soar
    *
    * @var string[]
    */
    protected static $getters = [
            'basic' => 'getBasic',
            'standard' => 'getStandard',
            'professional' => 'getProfessional',
            'largeScreen' => 'getLargeScreen',
            'logCollection' => 'getLogCollection',
            'logRetention' => 'getLogRetention',
            'logAnalysis' => 'getLogAnalysis',
            'soar' => 'getSoar'
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
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['professional'] = isset($data['professional']) ? $data['professional'] : null;
        $this->container['largeScreen'] = isset($data['largeScreen']) ? $data['largeScreen'] : null;
        $this->container['logCollection'] = isset($data['logCollection']) ? $data['logCollection'] : null;
        $this->container['logRetention'] = isset($data['logRetention']) ? $data['logRetention'] : null;
        $this->container['logAnalysis'] = isset($data['logAnalysis']) ? $data['logAnalysis'] : null;
        $this->container['soar'] = isset($data['soar']) ? $data['soar'] : null;
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
    * Gets basic
    *  basic
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspBasic|null
    */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
    * Sets basic
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspBasic|null $basic basic
    *
    * @return $this
    */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;
        return $this;
    }

    /**
    * Gets standard
    *  standard
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspStandard|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspStandard|null $standard standard
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets professional
    *  professional
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspProfessional|null
    */
    public function getProfessional()
    {
        return $this->container['professional'];
    }

    /**
    * Sets professional
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspProfessional|null $professional professional
    *
    * @return $this
    */
    public function setProfessional($professional)
    {
        $this->container['professional'] = $professional;
        return $this;
    }

    /**
    * Gets largeScreen
    *  largeScreen
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLargeScreen|null
    */
    public function getLargeScreen()
    {
        return $this->container['largeScreen'];
    }

    /**
    * Sets largeScreen
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLargeScreen|null $largeScreen largeScreen
    *
    * @return $this
    */
    public function setLargeScreen($largeScreen)
    {
        $this->container['largeScreen'] = $largeScreen;
        return $this;
    }

    /**
    * Gets logCollection
    *  logCollection
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogCollection|null
    */
    public function getLogCollection()
    {
        return $this->container['logCollection'];
    }

    /**
    * Sets logCollection
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogCollection|null $logCollection logCollection
    *
    * @return $this
    */
    public function setLogCollection($logCollection)
    {
        $this->container['logCollection'] = $logCollection;
        return $this;
    }

    /**
    * Gets logRetention
    *  logRetention
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogRetention|null
    */
    public function getLogRetention()
    {
        return $this->container['logRetention'];
    }

    /**
    * Sets logRetention
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogRetention|null $logRetention logRetention
    *
    * @return $this
    */
    public function setLogRetention($logRetention)
    {
        $this->container['logRetention'] = $logRetention;
        return $this;
    }

    /**
    * Gets logAnalysis
    *  logAnalysis
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogAnalysis|null
    */
    public function getLogAnalysis()
    {
        return $this->container['logAnalysis'];
    }

    /**
    * Sets logAnalysis
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspLogAnalysis|null $logAnalysis logAnalysis
    *
    * @return $this
    */
    public function setLogAnalysis($logAnalysis)
    {
        $this->container['logAnalysis'] = $logAnalysis;
        return $this;
    }

    /**
    * Gets soar
    *  soar
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspSoar|null
    */
    public function getSoar()
    {
        return $this->container['soar'];
    }

    /**
    * Sets soar
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ProductRspSoar|null $soar soar
    *
    * @return $this
    */
    public function setSoar($soar)
    {
        $this->container['soar'] = $soar;
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

