<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputRespStepOutputs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputResp_step_outputs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepRunId  stepRunId
    * outputResult  outputResult
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepRunId' => 'string',
            'outputResult' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OutputRespOutputResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepRunId  stepRunId
    * outputResult  outputResult
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepRunId' => null,
        'outputResult' => null
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
    * stepRunId  stepRunId
    * outputResult  outputResult
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepRunId' => 'step_run_id',
            'outputResult' => 'output_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stepRunId  stepRunId
    * outputResult  outputResult
    *
    * @var string[]
    */
    protected static $setters = [
            'stepRunId' => 'setStepRunId',
            'outputResult' => 'setOutputResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stepRunId  stepRunId
    * outputResult  outputResult
    *
    * @var string[]
    */
    protected static $getters = [
            'stepRunId' => 'getStepRunId',
            'outputResult' => 'getOutputResult'
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
        $this->container['stepRunId'] = isset($data['stepRunId']) ? $data['stepRunId'] : null;
        $this->container['outputResult'] = isset($data['outputResult']) ? $data['outputResult'] : null;
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
    * Gets stepRunId
    *  stepRunId
    *
    * @return string|null
    */
    public function getStepRunId()
    {
        return $this->container['stepRunId'];
    }

    /**
    * Sets stepRunId
    *
    * @param string|null $stepRunId stepRunId
    *
    * @return $this
    */
    public function setStepRunId($stepRunId)
    {
        $this->container['stepRunId'] = $stepRunId;
        return $this;
    }

    /**
    * Gets outputResult
    *  outputResult
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OutputRespOutputResult[]|null
    */
    public function getOutputResult()
    {
        return $this->container['outputResult'];
    }

    /**
    * Sets outputResult
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OutputRespOutputResult[]|null $outputResult outputResult
    *
    * @return $this
    */
    public function setOutputResult($outputResult)
    {
        $this->container['outputResult'] = $outputResult;
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

