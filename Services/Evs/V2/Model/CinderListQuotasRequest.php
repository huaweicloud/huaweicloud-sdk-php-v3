<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CinderListQuotasRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CinderListQuotasRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetProjectId  目标的项目ID。与project_id保持一致即可。
    * usage  是否查询配额详细信息。当前只支持传true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetProjectId' => 'string',
            'usage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetProjectId  目标的项目ID。与project_id保持一致即可。
    * usage  是否查询配额详细信息。当前只支持传true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetProjectId' => null,
        'usage' => null
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
    * targetProjectId  目标的项目ID。与project_id保持一致即可。
    * usage  是否查询配额详细信息。当前只支持传true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetProjectId' => 'target_project_id',
            'usage' => 'usage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetProjectId  目标的项目ID。与project_id保持一致即可。
    * usage  是否查询配额详细信息。当前只支持传true。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetProjectId' => 'setTargetProjectId',
            'usage' => 'setUsage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetProjectId  目标的项目ID。与project_id保持一致即可。
    * usage  是否查询配额详细信息。当前只支持传true。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetProjectId' => 'getTargetProjectId',
            'usage' => 'getUsage'
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
    const USAGE_TRUE = 'True';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUsageAllowableValues()
    {
        return [
            self::USAGE_TRUE,
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
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetProjectId'] === null) {
            $invalidProperties[] = "'targetProjectId' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
            $allowedValues = $this->getUsageAllowableValues();
                if (!is_null($this->container['usage']) && !in_array($this->container['usage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'usage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets targetProjectId
    *  目标的项目ID。与project_id保持一致即可。
    *
    * @return string
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string $targetProjectId 目标的项目ID。与project_id保持一致即可。
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets usage
    *  是否查询配额详细信息。当前只支持传true。
    *
    * @return string
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param string $usage 是否查询配额详细信息。当前只支持传true。
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
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

