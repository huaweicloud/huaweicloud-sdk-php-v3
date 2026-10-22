<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScenarioAnnotationDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScenarioAnnotationDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scenarioType  场景类型（LOGIN/REGISTER/CUSTOM）
    * urlMatch  urlMatch
    * requestInspection  requestInspection
    * responseInspection  responseInspection
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scenarioType' => 'string',
            'urlMatch' => '\HuaweiCloud\SDK\Waf\V1\Model\UrlMatchDTO',
            'requestInspection' => '\HuaweiCloud\SDK\Waf\V1\Model\RequestInspectionDTO',
            'responseInspection' => '\HuaweiCloud\SDK\Waf\V1\Model\ResponseInspectionDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scenarioType  场景类型（LOGIN/REGISTER/CUSTOM）
    * urlMatch  urlMatch
    * requestInspection  requestInspection
    * responseInspection  responseInspection
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scenarioType' => null,
        'urlMatch' => null,
        'requestInspection' => null,
        'responseInspection' => null
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
    * scenarioType  场景类型（LOGIN/REGISTER/CUSTOM）
    * urlMatch  urlMatch
    * requestInspection  requestInspection
    * responseInspection  responseInspection
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scenarioType' => 'scenario_type',
            'urlMatch' => 'url_match',
            'requestInspection' => 'request_inspection',
            'responseInspection' => 'response_inspection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scenarioType  场景类型（LOGIN/REGISTER/CUSTOM）
    * urlMatch  urlMatch
    * requestInspection  requestInspection
    * responseInspection  responseInspection
    *
    * @var string[]
    */
    protected static $setters = [
            'scenarioType' => 'setScenarioType',
            'urlMatch' => 'setUrlMatch',
            'requestInspection' => 'setRequestInspection',
            'responseInspection' => 'setResponseInspection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scenarioType  场景类型（LOGIN/REGISTER/CUSTOM）
    * urlMatch  urlMatch
    * requestInspection  requestInspection
    * responseInspection  responseInspection
    *
    * @var string[]
    */
    protected static $getters = [
            'scenarioType' => 'getScenarioType',
            'urlMatch' => 'getUrlMatch',
            'requestInspection' => 'getRequestInspection',
            'responseInspection' => 'getResponseInspection'
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
    const SCENARIO_TYPE_LOGIN = 'LOGIN';
    const SCENARIO_TYPE_REGISTER = 'REGISTER';
    const SCENARIO_TYPE_CUSTOM = 'CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScenarioTypeAllowableValues()
    {
        return [
            self::SCENARIO_TYPE_LOGIN,
            self::SCENARIO_TYPE_REGISTER,
            self::SCENARIO_TYPE_CUSTOM,
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
        $this->container['scenarioType'] = isset($data['scenarioType']) ? $data['scenarioType'] : null;
        $this->container['urlMatch'] = isset($data['urlMatch']) ? $data['urlMatch'] : null;
        $this->container['requestInspection'] = isset($data['requestInspection']) ? $data['requestInspection'] : null;
        $this->container['responseInspection'] = isset($data['responseInspection']) ? $data['responseInspection'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scenarioType'] === null) {
            $invalidProperties[] = "'scenarioType' can't be null";
        }
            $allowedValues = $this->getScenarioTypeAllowableValues();
                if (!is_null($this->container['scenarioType']) && !in_array($this->container['scenarioType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scenarioType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['urlMatch'] === null) {
            $invalidProperties[] = "'urlMatch' can't be null";
        }
        if ($this->container['requestInspection'] === null) {
            $invalidProperties[] = "'requestInspection' can't be null";
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
    * Gets scenarioType
    *  场景类型（LOGIN/REGISTER/CUSTOM）
    *
    * @return string
    */
    public function getScenarioType()
    {
        return $this->container['scenarioType'];
    }

    /**
    * Sets scenarioType
    *
    * @param string $scenarioType 场景类型（LOGIN/REGISTER/CUSTOM）
    *
    * @return $this
    */
    public function setScenarioType($scenarioType)
    {
        $this->container['scenarioType'] = $scenarioType;
        return $this;
    }

    /**
    * Gets urlMatch
    *  urlMatch
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\UrlMatchDTO
    */
    public function getUrlMatch()
    {
        return $this->container['urlMatch'];
    }

    /**
    * Sets urlMatch
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\UrlMatchDTO $urlMatch urlMatch
    *
    * @return $this
    */
    public function setUrlMatch($urlMatch)
    {
        $this->container['urlMatch'] = $urlMatch;
        return $this;
    }

    /**
    * Gets requestInspection
    *  requestInspection
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\RequestInspectionDTO
    */
    public function getRequestInspection()
    {
        return $this->container['requestInspection'];
    }

    /**
    * Sets requestInspection
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\RequestInspectionDTO $requestInspection requestInspection
    *
    * @return $this
    */
    public function setRequestInspection($requestInspection)
    {
        $this->container['requestInspection'] = $requestInspection;
        return $this;
    }

    /**
    * Gets responseInspection
    *  responseInspection
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ResponseInspectionDTO|null
    */
    public function getResponseInspection()
    {
        return $this->container['responseInspection'];
    }

    /**
    * Sets responseInspection
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ResponseInspectionDTO|null $responseInspection responseInspection
    *
    * @return $this
    */
    public function setResponseInspection($responseInspection)
    {
        $this->container['responseInspection'] = $responseInspection;
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

