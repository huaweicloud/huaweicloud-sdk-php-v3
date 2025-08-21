<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportDataMapLineageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportDataMapLineageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputSourceId  上游血缘sourceId。
    * outputSourceId  下游血缘sourceId。
    * lineageConfigs  血缘信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputSourceId' => 'string',
            'outputSourceId' => 'string',
            'lineageConfigs' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SubNodeLineageConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputSourceId  上游血缘sourceId。
    * outputSourceId  下游血缘sourceId。
    * lineageConfigs  血缘信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputSourceId' => null,
        'outputSourceId' => null,
        'lineageConfigs' => null
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
    * inputSourceId  上游血缘sourceId。
    * outputSourceId  下游血缘sourceId。
    * lineageConfigs  血缘信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputSourceId' => 'input_source_id',
            'outputSourceId' => 'output_source_id',
            'lineageConfigs' => 'lineage_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputSourceId  上游血缘sourceId。
    * outputSourceId  下游血缘sourceId。
    * lineageConfigs  血缘信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'inputSourceId' => 'setInputSourceId',
            'outputSourceId' => 'setOutputSourceId',
            'lineageConfigs' => 'setLineageConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputSourceId  上游血缘sourceId。
    * outputSourceId  下游血缘sourceId。
    * lineageConfigs  血缘信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'inputSourceId' => 'getInputSourceId',
            'outputSourceId' => 'getOutputSourceId',
            'lineageConfigs' => 'getLineageConfigs'
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
        $this->container['inputSourceId'] = isset($data['inputSourceId']) ? $data['inputSourceId'] : null;
        $this->container['outputSourceId'] = isset($data['outputSourceId']) ? $data['outputSourceId'] : null;
        $this->container['lineageConfigs'] = isset($data['lineageConfigs']) ? $data['lineageConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inputSourceId'] === null) {
            $invalidProperties[] = "'inputSourceId' can't be null";
        }
            if ((mb_strlen($this->container['inputSourceId']) > 50)) {
                $invalidProperties[] = "invalid value for 'inputSourceId', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['inputSourceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'inputSourceId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['outputSourceId'] === null) {
            $invalidProperties[] = "'outputSourceId' can't be null";
        }
            if ((mb_strlen($this->container['outputSourceId']) > 50)) {
                $invalidProperties[] = "invalid value for 'outputSourceId', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['outputSourceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'outputSourceId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['lineageConfigs'] === null) {
            $invalidProperties[] = "'lineageConfigs' can't be null";
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
    * Gets inputSourceId
    *  上游血缘sourceId。
    *
    * @return string
    */
    public function getInputSourceId()
    {
        return $this->container['inputSourceId'];
    }

    /**
    * Sets inputSourceId
    *
    * @param string $inputSourceId 上游血缘sourceId。
    *
    * @return $this
    */
    public function setInputSourceId($inputSourceId)
    {
        $this->container['inputSourceId'] = $inputSourceId;
        return $this;
    }

    /**
    * Gets outputSourceId
    *  下游血缘sourceId。
    *
    * @return string
    */
    public function getOutputSourceId()
    {
        return $this->container['outputSourceId'];
    }

    /**
    * Sets outputSourceId
    *
    * @param string $outputSourceId 下游血缘sourceId。
    *
    * @return $this
    */
    public function setOutputSourceId($outputSourceId)
    {
        $this->container['outputSourceId'] = $outputSourceId;
        return $this;
    }

    /**
    * Gets lineageConfigs
    *  血缘信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SubNodeLineageConfig[]
    */
    public function getLineageConfigs()
    {
        return $this->container['lineageConfigs'];
    }

    /**
    * Sets lineageConfigs
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SubNodeLineageConfig[] $lineageConfigs 血缘信息。
    *
    * @return $this
    */
    public function setLineageConfigs($lineageConfigs)
    {
        $this->container['lineageConfigs'] = $lineageConfigs;
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

