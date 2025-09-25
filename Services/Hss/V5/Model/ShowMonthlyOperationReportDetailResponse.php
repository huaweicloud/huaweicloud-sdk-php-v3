<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMonthlyOperationReportDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMonthlyOperationReportDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationSummaryInfo  operationSummaryInfo
    * protectInfo  protectInfo
    * riskHandleInfo  riskHandleInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationSummaryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\OperationSummaryInfo',
            'protectInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectInfo',
            'riskHandleInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationSummaryInfo  operationSummaryInfo
    * protectInfo  protectInfo
    * riskHandleInfo  riskHandleInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationSummaryInfo' => null,
        'protectInfo' => null,
        'riskHandleInfo' => null
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
    * operationSummaryInfo  operationSummaryInfo
    * protectInfo  protectInfo
    * riskHandleInfo  riskHandleInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationSummaryInfo' => 'operation_summary_info',
            'protectInfo' => 'protect_info',
            'riskHandleInfo' => 'risk_handle_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationSummaryInfo  operationSummaryInfo
    * protectInfo  protectInfo
    * riskHandleInfo  riskHandleInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'operationSummaryInfo' => 'setOperationSummaryInfo',
            'protectInfo' => 'setProtectInfo',
            'riskHandleInfo' => 'setRiskHandleInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationSummaryInfo  operationSummaryInfo
    * protectInfo  protectInfo
    * riskHandleInfo  riskHandleInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'operationSummaryInfo' => 'getOperationSummaryInfo',
            'protectInfo' => 'getProtectInfo',
            'riskHandleInfo' => 'getRiskHandleInfo'
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
        $this->container['operationSummaryInfo'] = isset($data['operationSummaryInfo']) ? $data['operationSummaryInfo'] : null;
        $this->container['protectInfo'] = isset($data['protectInfo']) ? $data['protectInfo'] : null;
        $this->container['riskHandleInfo'] = isset($data['riskHandleInfo']) ? $data['riskHandleInfo'] : null;
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
    * Gets operationSummaryInfo
    *  operationSummaryInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OperationSummaryInfo|null
    */
    public function getOperationSummaryInfo()
    {
        return $this->container['operationSummaryInfo'];
    }

    /**
    * Sets operationSummaryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OperationSummaryInfo|null $operationSummaryInfo operationSummaryInfo
    *
    * @return $this
    */
    public function setOperationSummaryInfo($operationSummaryInfo)
    {
        $this->container['operationSummaryInfo'] = $operationSummaryInfo;
        return $this;
    }

    /**
    * Gets protectInfo
    *  protectInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfo|null
    */
    public function getProtectInfo()
    {
        return $this->container['protectInfo'];
    }

    /**
    * Sets protectInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfo|null $protectInfo protectInfo
    *
    * @return $this
    */
    public function setProtectInfo($protectInfo)
    {
        $this->container['protectInfo'] = $protectInfo;
        return $this;
    }

    /**
    * Gets riskHandleInfo
    *  riskHandleInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfo|null
    */
    public function getRiskHandleInfo()
    {
        return $this->container['riskHandleInfo'];
    }

    /**
    * Sets riskHandleInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfo|null $riskHandleInfo riskHandleInfo
    *
    * @return $this
    */
    public function setRiskHandleInfo($riskHandleInfo)
    {
        $this->container['riskHandleInfo'] = $riskHandleInfo;
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

